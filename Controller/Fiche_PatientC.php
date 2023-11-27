<?php

require '../config.php';

class Fiche_PatientC
{
    public function addFiche($fiche_patient)
    {
        $sql = "INSERT INTO fiche_patient  
        VALUES (:Num_Fich, :CIN, :Nom, :Prenom, :Date_naissance, :Age, :Adresse, :Num_tel, :Date_ajout, :Maladie)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'Num_Fich' => $fiche_patient->getNum_Fich(),
                'CIN' => $fiche_patient->getCin(),
                'Nom' => $fiche_patient->getNom(),
                'Prenom' => $fiche_patient->getPrenom(),
                'Date_naissance' => $fiche_patient->getDate_naissance(),
                'Age' => $fiche_patient->getAge(),
                'Adresse' => $fiche_patient->getAdresse(),
                'Num_tel' => $fiche_patient->getNum_tel(),
                'Date_ajout' => $fiche_patient->getDate_ajout(),
                'Maladie' => $fiche_patient->getMaladie()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function showFiche($Num_Fich)
    {
        $sql = "SELECT * from fiche_patient where Num_Fich = $Num_Fich";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $fiche_patient = $query->fetch();
            return $fiche_patient;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function listFiche()
    {
        $sql = "SELECT * FROM fiche_patient";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteFiche($Num_Fich)
    {
        $sql = "DELETE FROM fiche_patient WHERE Num_Fich = :Num_Fich";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Num_Fich', $Num_Fich);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    // ... (autres méthodes de la classe)

    // Ajoutez la méthode getPatient
    public function getFiche($numFich)
    {
        // Placez ici le code pour récupérer les données du patient à partir de la base de données
        // Assurez-vous de renvoyer les données sous forme de tableau associatif
        // par exemple : return ['Id' => ..., 'Num_Fich' => ..., 'CIN' => ..., /* ... */];

        // Remplacez le code suivant par votre logique de récupération des données
        $dummyData = [
            'Id' => 1,
            'Num_Fich' => $numFich,
            'CIN' => '123456789',
            'Nom' => 'Doe',
            'Prenom' => 'John',
            'Date_naissance' => '1990-01-01',
            'Age' => 30,
            'Adresse' => '123 Main Street',
            'Num_tel' => '123-456-7890',
            'Date_ajout' => '2023-01-01',
            'Maladie' => 'Aucune',
        ];

        return $dummyData;
    }

    // ... (autres méthodes de la classe)



    function updateFiche($fiche_patient, $Num_Fich)
{
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE fiche_patient SET 
                CIN = :CIN,
                Nom = :Nom,
                Prenom = :Prenom, 
                Date_naissance = :Date_naissance, 
                Age = :Age,
                Adresse = :Adresse, 
                Num_tel = :Num_tel,
                Date_ajout = :Date_ajout,
                Maladie = :Maladie
            WHERE Num_Fich= :Num_Fich'
        );
        echo $query->queryString;
        $query->execute([
            'CIN' => $fiche_patient->getCin(),
            'Nom' => $fiche_patient->getNom(),
            'Prenom' => $fiche_patient->getPrenom(),
            'Date_naissance' => $fiche_patient->getDate_naissance(),
            'Age' => $fiche_patient->getAge(),
            'Adresse' => $fiche_patient->getAdresse(),
            'Num_tel' => $fiche_patient->getNum_tel(),
            'Date_ajout' => $fiche_patient->getDate_ajout(),
            'Maladie' => $fiche_patient->getMaladie(),
            'Num_Fich' => $Num_Fich
        ]);

        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
}

