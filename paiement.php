<?php
    $nom_acheteur = "";
    $prenom_acheteur = "";
    $num_cnib_acheteur = "";
    $num_telephone_acheteur = "";
    $ville_depart_acheteur = "";
    $ville_arrive_acheteur = "";
    $heure_depart_acheteur = "";    

    $servername = "localhost";
    $username = "root";
    $password = "";

    /*Commenter ses deux lines si vous êtes en production
    error_reporting(E_ALL);
    ini_set('display_errors', 1);*/

    // required libs
    require_once __DIR__ . '/src/cinetpay.php';
    include('marchand.php');
    include('commande.php');

    $id_transaction;
    $amount = '100';
    $currency = 'XOF';
    $customer_name = "Mon nom";
    $customer_surname = "Mon nom";
    $description = 'Achat et reservation de tickets';
    $notify_url;
    $return_url;
    $channels;
    $invoice_data;

    // La class gère la table "Commande"( A titre d'exemple)
    $commande = new Commande();
    try {
        if(isset($_POST['valider']))
        {
            $customer_name = $_POST['customer_name'];
            $customer_surname = $_POST['customer_surname'];
            $description = $_POST['description'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
        }
        else{
            echo "Veuillez passer par le formulaire";
        }
        //transaction id
        $id_transaction = date("YmdHis"); // or $id_transaction = Cinetpay::generateTransId()

        //Veuillez entrer votre apiKey
        $apikey = $marchand["apikey"];
        //Veuillez entrer votre siteId
        $site_id = $marchand["site_id"];

        //notify url
        $notify_url = $commande->getCurrentUrl().'cinetpay-sdk-php/notify/notify.php';
        //return url
        $return_url = $commande->getCurrentUrl().'cinetpay-sdk-php/return/return.php';
        $channels = "ALL";
        
        /*information supplémentaire que vous voulez afficher
        sur la facture de CinetPay(Supporte trois variables 
        que vous nommez à votre convenance)*/
        $invoice_data = array(
            "Data 1" => "",
            "Data 2" => "",
            "Data 3" => ""
        );

        //
        $formData = array(
            "transaction_id"=> $id_transaction,
            "amount"=> $amount,
            "currency"=> $currency,
            "customer_surname"=> $customer_name,
            "customer_name"=> $customer_surname,
            "description"=> $description,
            "notify_url" => $notify_url,
            "return_url" => $return_url,
            "channels" => $channels,
            "invoice_data" => $invoice_data,
            //pour afficher le paiement par carte de credit
            "customer_email" => "", //l'email du client
            "customer_phone_number" => "", //Le numéro de téléphone du client
            "customer_address" => "", //l'adresse du client
            "customer_city" => "", // ville du client
            "customer_country" => "",//Le pays du client, la valeur à envoyer est le code ISO du pays (code à deux chiffre) ex : CI, BF, US, CA, FR
            "customer_state" => "", //L’état dans de la quel se trouve le client. Cette valeur est obligatoire si le client se trouve au États Unis d’Amérique (US) ou au Canada (CA)
            "customer_zip_code" => "" //Le code postal du client 
        );
        // enregistrer la transaction dans votre base de donnée
        /*  $commande->create(); */

        $CinetPay = new CinetPay($site_id, $apikey , $VerifySsl=false);//$VerifySsl=true <=> Pour activerr la verification ssl sur curl 
        $result = $CinetPay->generatePaymentLink($formData);

        if ($result["code"] == '201')
        {
            $url = $result["data"]["payment_url"];

            // ajouter le token à la transaction enregistré
            /* $commande->update(); */
            //redirection vers l'url de paiement
            header('Location:'.$url);

        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

