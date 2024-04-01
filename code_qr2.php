<?php  

    include 'phpqrcode/qrlib.php';

    QRcode::png('Alpha');







    try {
        $conn = new PDO("mysql:host=$servername;dbname=projet_transport_staf", $username, $password);
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        // Ajoutez des contraintes d'unicité sur les colonnes num_cnib_acheteur et num_telephone_acheteur
        $sql = "ALTER TABLE info_acheteur ADD UNIQUE (num_cnib_acheteur, num_telephone_acheteur)";
        $conn->exec($sql);
    
        // Vérifiez si les données existent déjà dans la base de données
        $sql = "SELECT * FROM info_acheteur WHERE num_cnib_acheteur = :num_cnib_acheteur AND num_telephone_acheteur = :num_telephone_acheteur";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':num_cnib_acheteur', $num_cnib_acheteur);
        $stmt->bindParam(':num_telephone_acheteur', $num_telephone_acheteur);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            echo "Ces données existent déjà dans la base de données.";
        } else {
            // Insérez les données dans la base de données
            $sql = "INSERT INTO info_acheteur (nom_acheteur, prenom_acheteur, num_cnib_acheteur, num_telephone_acheteur, ville_depart_acheteur, ville_arrive_acheteur, heure_depart_acheteur, code_qr_acheteur) VALUES (:nom_acheteur, :prenom_acheteur, :num_cnib_acheteur, :num_telephone_acheteur, :ville_depart_acheteur, :ville_arrive_acheteur, :heure_depart_acheteur, :code_qr_acheteur)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nom_acheteur', $nom_acheteur);
            $stmt->bindParam(':prenom_acheteur', $prenom_acheteur);
            $stmt->bindParam(':num_cnib_acheteur', $num_cnib_acheteur);
            $stmt->bindParam(':num_telephone_acheteur', $num_telephone_acheteur);
            $stmt->bindParam(':ville_depart_acheteur', $ville_depart_acheteur);
            $stmt->bindParam(':ville_arrive_acheteur', $ville_arrive_acheteur);
            $stmt->bindParam(':heure_depart_acheteur', $heure_depart_acheteur);
            $stmt->bindParam(':code_qr_acheteur', $uniqueCode);
            $stmt->execute();
    
            echo "Les données ont été insérées avec succès.";
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;

?>