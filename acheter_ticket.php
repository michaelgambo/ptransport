<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-primary">
        
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo
                <img src="" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="../accueil.php">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="acheter_ticket_form.php">Achat ticket</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Réservation ticket</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Découvertes</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="text" id="livre" onkeyup="livre_recherche()" placeholder="Search">
                    <button class="btn btn-primary" type="button" onclick="livre_recherche()">Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <br><br><br><br>

    <div class="container">
        <?php              
            $nom_acheteur = $_POST['nom_acheteur'];
            $prenom_acheteur = $_POST['prenom_acheteur'];
            $num_cnib_acheteur = $_POST['num_cnib_acheteur'];
            $num_telephone_acheteur = $_POST['num_telephone_acheteur'];
            $ville_depart_acheteur = $_POST['ville_depart_acheteur'];
            $ville_arrive_acheteur = $_POST['ville_arrive_acheteur'];
            $heure_depart_acheteur = $_POST['heure_depart_acheteur'];   

            $servername = "localhost";
            $username = "root";
            $password = "";

            include 'phpqrcode/qrlib.php';
            function generateUniqueCode($length = 4) {
                // Chiffres utilisés pour générer le code
                $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

                // Générez un code unique en sélectionnant des caractères aléatoires
                $code = 'STAFauth';
                for($i = 0; $i < $length; $i++) {
                    $code .= $chars[rand(0, strlen($chars)-1)];
                }

                return $code;
            }

            // Utilisez la fonction pour générer un code unique de 6 chiffres
            $uniqueCode = generateUniqueCode();

            try {
                $conn = new PDO ("mysql:host=$servername;dbname=projet_transport_staf", $username, $password);
                //set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if (isset ($_POST ['nom_acheteur']) && isset ($_POST["prenom_acheteur"]) && isset ($_POST["num_cnib_acheteur"]) && isset ($_POST['num_telephone_acheteur']) && isset ($_POST['ville_depart_acheteur']) && isset ($_POST['ville_arrive_acheteur']) && isset ($_POST['heure_depart_acheteur'])){

                    if ( $_POST ['nom_acheteur'] != " " &&  $_POST["prenom_acheteur"] != " " &&  $_POST["num_cnib_acheteur"] != " " &&  $_POST['num_telephone_acheteur'] != " " &&  $_POST['ville_depart_acheteur'] != " " &&  $_POST['ville_arrive_acheteur'] != " " &&  $_POST['heure_depart_acheteur'] != " "){

                        $sql = "INSERT INTO info_acheteur (nom_acheteur, prenom_acheteur, num_cnib_acheteur, num_telephone_acheteur, ville_depart_acheteur, ville_arrive_acheteur, heure_depart_acheteur, code_qr_acheteur) VALUES ('$nom_acheteur', '$prenom_acheteur', '$num_cnib_acheteur', '$num_telephone_acheteur', '$ville_depart_acheteur', '$ville_arrive_acheteur', '$heure_depart_acheteur', '$uniqueCode')";

                        $conn -> exec ($sql);
                        
                        echo'
                            <div class="alert alert-success">
                                Mr/Mme/Mlle ' . $nom_acheteur . ' ' . $prenom_acheteur . ', <br/> Vous souhaité acheter un ticket chez STAF, pour la destination [' . $ville_depart_acheteur . ' - ' . $ville_arrive_acheteur .'] pour [' . $heure_depart_acheteur . '].' . " Veuillez cliquer sur le lien suivant pour procéder au paiement. <br/> <br/>" .
                            "</div>"
                        ;

                        echo"
                            <br/>
                            <p><a href='paiement.php'>Cliquez ici pour procéder au paiement</a></p>
                        ";                

                    }
                                
                    else{
                        echo "Veuillez renseigner tous les champs SVP !";
                    }
                }               
            }
                        
            catch (PDOException $e){
                //echo $sql . "<br>" . $e->getMessage();
                echo'
                    <div class="alert alert-danger">
                        Desolez ! Vos informations ont déjà étées utilisées pour l\'achat d\'un ticket.
                    </div>
                ';
            }
            $conn = null;
        ?>

        <DOCTYPE html>
        <html>
            <head>
                <title>Sucess</title>
                <meta charset ='utf-8'/>
                <link rel='stylesheet' href='style/reponse.css' />
            </head>
            <body>
                <div id='contain'>
                    <div class='item'>
                        <p>======================</p>   
                    </div>
                </div>
                <p><a href='tableau.php'>Cliquez ici pour voir la liste des inscrits</a></p>
            <body>
        </html>
    </div>
</body>
</html>




