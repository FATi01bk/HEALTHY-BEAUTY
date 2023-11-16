<?php

require '../config.php';

class PatientC
{

    public function listPatients()
    {
        $sql = "SELECT * FROM patient";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletePatient($cine)
    {
        $sql = "DELETE FROM patient WHERE cin = :cin";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':cin', $cine);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addPatient($patient)
    {
        $sql = "INSERT INTO patient  
        VALUES (:cin, :nom,:prenom, :email)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'cin' => $patient->getCinPatient(),
                'nom' => $patient->getNom(),
                'prenom' => $patient->getPrenom(),
                'email' => $patient->getEmail(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showPatient($cin)
    {
        $sql = "SELECT * from patient where cin = $cin";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $patient = $query->fetch();
            return $patient;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateJoueur($patient, $cin)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE patient SET 
                    cin = :cin,
                    nom = :nom, 
                    prenom = :prenom, 
                    email = :email
                WHERE cin= :cinPatient'
            );
            
            $query->execute([
                'cinPatient' => $cin,
                'nom' => $patient->getNom(),
                'prenom' => $patient->getPrenom(),
                'email' => $patient->getEmail(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
