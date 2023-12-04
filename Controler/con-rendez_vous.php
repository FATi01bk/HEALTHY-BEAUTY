<?php

require '../view/config.php';

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

    function deleterendezvous($num)
    {
        $sql = "DELETE FROM rendez_vous WHERE num_ren = :num_ren";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':num_ren', $num);
    
        try {
            $req->execute();
            echo "Rendez-vous deleted successfully";
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addrendezvous($rendez_vous)
    {
        $sql = "INSERT INTO rendez_vous 
        VALUES (:num_ren,:nom_patient,:nom_docteur,:date_ren,:temp_ren,:type_ren,:tel_ren,:des_ren)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'num_ren' => $rendez_vous->getnumren(),
                'nom_patient' => $rendez_vous->getNompatient(),
                'nom_docteur' => $rendez_vous->getNomdocteur(),
                'date_ren' => $rendez_vous->getdateren(),
                'temp_ren' => $rendez_vous->gettempren(),
                'type_ren' => $rendez_vous->gettyperen(),
                'tel_ren' => $rendez_vous->gettelren(),
                'des_ren' => $rendez_vous->getdesren(),
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
                    temp_ren = :temp_ren, 
                    type_ren = :type_ren,
                    tel_ren = :tel_ren,
                    des_ren = :des_ren
                WHERE num_ren= :num_ren'
            );
            
            $query->execute([
                'num_ren' => $num_ren,
                'nom_patient' => $rendez_vous-> getNompatient(),
                'nom_docteur' => $rendez_vous->getNomdocteur(),
                'date_ren' => $rendez_vous->getdateren(),
                'temp_ren' => $rendez_vous->gettempren(),
                'type_ren' => $rendez_vous->gettyperen(),
                'tel_ren' => $rendez_vous->gettelren(),
                'des_ren' => $rendez_vous->getdesren(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function chernom($nom) {
        $sql =" SELECT * FROM rendez_vous where num Like nom_patient";
        $sdo =config::getConnexion();
        $list =$pdo->prepare($sql);
        $list->execute(['nom' => "%nom%"]);
        $result = $list->fetchAll();
        return $result;
    }
}
