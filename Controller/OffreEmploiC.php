<?php
    require_once '../../config.php';
    require_once '../../Model/OffreEmploi.php';
    class OffreEmploiC{

        public function listOffres(){
            try {
                $pdo = config::getConnexion();
                $query = "SELECT * FROM offre_demploi";
                $statement = $pdo->query($query);
                $offreEmplois = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $offreEmplois;
            } catch(PDOException $e) {
                echo "Erreur: " . $e->getMessage();
                return null;
            }
        }

        public function listCandidats($cin){
            try {
                $pdo = config::getConnexion();
                $query = 'SELECT * FROM candidats WHERE cin = '.$cin.'';
                $statement = $pdo->query($query);
                $offreEmplois = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $offreEmplois;
            } catch(PDOException $e) {
                echo "Erreur: " . $e->getMessage();
                return null;
            }
        }        
        
        
        public function deleteOffreEmploi(int $id_offre){
            $sql = 'DELETE FROM `offre_demploi` WHERE id_offre = '.$id_offre.'';
            $pdo = config::getConnexion();
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                echo $list->rowCount() ."records deleted successfully";
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function deleteOffreByCin(int $cin){
            $sql = 'DELETE FROM `offre_demploi` WHERE cin_c = '.$cin.'';
            $pdo = config::getConnexion();
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                echo $list->rowCount() ."records deleted successfully";
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function createOffreEmploi($offreEmploi){
            try {
                $pdo = config::getConnexion();
                $sql = 'INSERT INTO `offre_demploi`(`statut`, `cin_c`) VALUES (?, ?)';
                $list = $pdo->prepare($sql);
                $statut = $offreEmploi->getStatut();
                $list->bindParam(1, $statut);
                $cin_c = $offreEmploi->getCin_c();
                $list->bindParam(2, $cin_c);
                $list->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        public function updateOffreEmploi($offreEmploi,$id_offre){
            try{
            $pdo = config::getConnexion();
            $sql = 'UPDATE `offre_demploi` SET `statut`=:statut WHERE id_offre=:id_offre';
            $list = $pdo->prepare($sql);
            $id_offre= $offreEmploi->getId();
            $statut= $offreEmploi->getStatut();
            $list->execute([
                'id_offre' => $id_offre,
                'statut' => $statut,
            ]);
            echo $list->rowCount()."records Updated successfully";
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function findOffreEmploi(int $id_offre){
            $pdo = config::getConnexion();
            $sql = 'SELECT * FROM `offre_demploi` WHERE id_offre = '.$id_offre.'';
            $list = $pdo->prepare($sql);
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                return $list->fetch();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }
        
        
    }
?>