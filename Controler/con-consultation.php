<?php

require '../view/config.php';

class consultationC
{

    public function listeconsultation()
    {
        $sql = "SELECT * FROM consultation ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteconsultation($num)
    {
        $sql = "DELETE FROM consultation WHERE num_tel = :num_tel";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':num_tel', $num);
    
        try {
            $req->execute();
            echo "Rendez-vous deleted successfully";
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addconsultation($consultation)
    {
        $sql = "INSERT INTO consultation 
        VALUES (:num_tel,:nom_docteur,:nom_patient,:age_patient,:date_ren,:temp_ren,:type_ren)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                
                'num_tel' => $consultation->getnumtel(),
                'nom_docteur' => $consultation->getNomdocteur(),
                'nom_patient' => $consultation->getNompatient(),
                'age_patient' => $consultation->getage(),
                'date_ren' => $consultation->getdateren(),
                'temp_ren' => $consultation->gettempren(),
                'type_ren' => $consultation->gettyperen(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showconsultation($num_tel)
    {
        $sql = "SELECT * from consultation where num_tel = $num_tel";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $consultation = $query->fetch();
            return $consultation;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateconsultation($consultation, $num_tel)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE consultation SET 
                    nom_patient = :nom_patient, 
                    nom_docteur = :nom_docteur, 
                    age_patient = :age_patient, 
                    date_ren = :date_ren, 
                    temp_ren = :temp_ren, 
                    type_ren = :type_ren
                WHERE num_tel= :num_tel'
            );
            
            $query->execute([
                'num_tel' => $num_tel,
                'nom_patient' => $consultation-> getNompatient(),
                'nom_docteur' => $consultation-> getNomdocteur(),
                'age_patient' => $consultation->getage(),
                'date_ren' => $consultation->getdateren(),
                'temp_ren' => $consultation->gettempren(),
                'type_ren' => $consultation->gettyperen(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
