<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    include 'phpqrcode/qrlib.php';

    try {
        $conn = new PDO ("mysql:host=$servername;dbname=projet_transport_staf", $username, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT code_qr_acheteur FROM info_acheteur";
        $result = $conn->query($sql);
        
        if ($result -> rowCount() > 0) {
            while ($row = $result->fetch()) {
                $code_qr_acheteur = $row['code_qr_acheteur'];
                QRcode::png($code_qr_acheteur);
            }
            echo $code_qr_acheteur;
        } else {
            echo "Error";
        }
    }
                
    catch (PDOException $e)

    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>