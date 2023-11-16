<?php

require '../config.php';

class rendez_vousC
{

    public function listerendezvous()
    {
        $sql = "SELECT * FROM rendez_vous ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleterendezvous($num_ren)
    {
        $sql = "DELETE FROM rendez_vous WHERE num_ren = :num_ren";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':num_ren', $ide);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addrendezvous($rendez_vous)
    {
        $sql = "INSERT INTO rendez_vous 
        VALUES (NULL, :nom_patient,:nom_docteur, :date_ren,:type_ren)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom_patient' => $rendez_vous->getNompatient(),
                'nom_docteur' => $rendez_vous->getNomdocteur(),
                'date_ren' => $rendez_vous->getdateren(),
                'type_ren' => $rendez_vous->gettyperen(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showrendezvous($num_ren)
    {
        $sql = "SELECT * from rendez_vous where num_ren = $num_ren";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $rendez_vous = $query->fetch();
            return $rendez_vous;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updaterendezvous($rendez_vous, $num_ren)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE rendez_vous SET 
                    nom_patient = :nom_patient, 
                    nom_docteur = :nom_docteur, 
                    date_ren = :date_ren, 
                    type_ren = :type_ren
                WHERE num_ren= :num_ren'
            );
            
            $query->execute([
                'idrendez_vous' => $num_ren,
                'nom_patient' => $rendez_vous-> getNompatient(),
                'nom_docteur' => $rendez_vous->getNomdocteur(),
                'date_ren' => $rendez_vous->getdateren(),
                'type_ren' => $rendez_vous->gettyperen(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
