<?php  
    $nom_acheteur = "";
    $prenom_acheteur = "";
    $num_cnib_acheteur = "";
    $num_telephone_acheteur = "";
    $ville_depart_acheteur = "";
    $ville_arrive_acheteur = "";
    $heure_depart_acheteur = "";
    $uniqueCode = "";

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO ("mysql:host=$servername;dbname=projet_transport_staf", $username, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
                $sql = "INSERT INTO info_acheteur (nom_acheteur, prenom_acheteur, num_cnib_acheteur, num_telephone_acheteur, ville_depart_acheteur, ville_arrive_acheteur, heure_depart_acheteur, code_qr_acheteur) VALUES ('$nom_acheteur', '$prenom_acheteur', '$num_cnib_acheteur', '$num_telephone_acheteur', '$ville_depart_acheteur', '$ville_arrive_acheteur', '$heure_depart_acheteur', '$uniqueCode')";

                $conn -> exec ($sql);
                
                echo'
                    <div class="alert alert-success">
                        Mr/Mme/Mlle ' . $nom_acheteur . ' ' . $prenom_acheteur . ', <br/> Vous avez acheté un ticket chez STAF, pour la destination [' . $ville_depart_acheteur . ' - ' . $ville_arrive_acheteur .'] pour [' . $heure_depart_acheteur . '].' . " Veuillez enregistrer et bien conserver le Code QR ci-dessous, car il servira à vous authentifier avant l'embarcation. <br/> <br/>" .
                    "</div>"
                ;

                echo'
                    <br/>
                    <img src="code_qr_acheteur" class= "border border-black border-3 rounded-5" alt="" style="width: 200px"> <br/>
                ';                
    }
                
    catch (PDOException $e){
        //echo $sql . "<br>" . $e->getMessage();
        echo"désolé ! Une erreur s'est produite";
    }
    $conn = null;

    
?>