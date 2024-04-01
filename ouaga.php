<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO ("mysql:host=$servername;dbname=projet_transport_staf", $username, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT id_acheteur, nom_acheteur, prenom_acheteur, code_qr_acheteur FROM info_acheteur WHERE ville_depart_acheteur = 'KOUDOUGOU' AND heure_depart_acheteur = '14:00' ORDER BY date_achat_ticket_acheteur ASC";
        $result = $conn->query($sql);
        
        echo " KOUDOUGOU - OUAGADOUGOU (14h) <br>";
        echo " --------------------------------------------------------------------- <br> <br>";
        if ($result -> rowCount() > 0) {
            while ($row = $result->fetch()) {
                echo $row["id_acheteur"] . " - " . $row["nom_acheteur"] . " " . $row["prenom_acheteur"] . " =======>>> " . $row["code_qr_acheteur"] . "<br>";
            }
        } else {
            echo "Aucun enregistrement avec ces données";
        }
    }
                
    catch (PDOException $e)

    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>