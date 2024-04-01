<?php
$servername = "localhost";
$username = "root";
$password = "";

session_start();

//connexion à la base de données
try {
    $conn = new PDO ("mysql:host=$servername;dbname=projet_transport_staf", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}   
catch(Exception $e){
    die('Ereur : '. $e->getMessage());
}

$req = $conn->query('SELECT * FROM info_acheteur');

?>


<DOCTYPE html>
<html>
    <head>
        <title>Sucess</title>
        <meta charset ='utf-8'/>
        <link rel='stylesheet' href='style/reponse.css' />
    </head>
    <body>
        <h1> List of register !</h1>
        <div id='contain'>
            <table border=1>
                <tr>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>NCNIB</th>
                    <th>NTEL</th>
                    <th>VD</th>
                    <th>VA</th>
                    <th>HD</th>
                    <th>QR</th>
                </tr>
            <?php 
                while($data = $req->fetch()) {
            ?> 
                <tr>
                    <td><?php echo $data['nom_acheteur'] ; ?></td>
                    <td><?php echo $data['prenom_acheteur'] ; ?></td>
                    <td><?php echo $data['num_cnib_acheteur'] ; ?></td>
                    <td><?php echo $data['num_telephone_acheteur'] ; ?></td>
                    <td><?php echo $data['ville_depart_acheteur'] ; ?></td>
                    <td><?php echo $data['ville_arrive_acheteur'] ; ?></td>
                    <td><?php echo $data['heure_depart_acheteur'] ; ?></td>
                    <td><?php echo $data['code_qr_acheteur'] ; ?></td>
                </tr>
            <?php
                }
                $req->closeCursor();
            ?>
            </table>
        </div>
    <body>
</html>
