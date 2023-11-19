<?php

require '../config.php';

class Fiche_PatientC
{
    public function addPatient($Fiche_Patient)
    {
        $sql = "INSERT INTO Fiche_Patient  
        VALUES (NULL, :Cin, :nom,:prenom, :date_naissance,:age, :adresse, :num_tel, :date_ajout, :maladie, :num_hisfiche)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $joueur->getNom(),
                'prenom' => $joueur->getPrenom(),
                'email' => $joueur->getEmail(),
                'tel' => $joueur->getTel(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function listPatient()
    {
        $sql = "SELECT * FROM Fiche_Patient";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletePatient($Cinp)
    {
        $sql = "DELETE FROM Fiche_Patient WHERE id = :Cin";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Cin', $Cinp);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }






















}