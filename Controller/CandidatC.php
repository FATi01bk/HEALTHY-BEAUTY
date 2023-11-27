<?php
    require_once '../../config.php';
    require_once '../../Model/candidat.php';
    class candidatC{
        
        public function listcandidats(){
            if(isset($_GET['search']) AND !empty($_GET['search'])){
                $cin = $_GET['search'];
                try {
                    $pdo = config::getConnexion();
                    $sql = 'SELECT * FROM candidats WHERE cin LIKE "%'.$cin.'%" ORDER BY nom ASC';
                    $statement = $pdo->query($sql);
                    $candidats = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $candidats;
                } catch(PDOException $e) {
                    echo "Erreur: " . $e->getMessage();
                    return null;
                }
            }
            else{
                try {
                    $pdo = config::getConnexion();
                    $sql = "SELECT * FROM candidats";
                    $statement = $pdo->query($sql);
                    $candidats = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $candidats;
                } catch(PDOException $e) {
                    echo "Erreur: " . $e->getMessage();
                    return null;
                }
            }
        }

        public function listcandidatsByCin($cin){
            try {
                $pdo = config::getConnexion();
                $sql = 'SELECT * FROM candidats WHERE cin = '.$cin.'';
                $statement = $pdo->query($sql);
                $candidats = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $candidats;
            } catch(PDOException $e) {
                echo "Erreur: " . $e->getMessage();
                return null;
            }
        }
        
        
        
        public function delete(int $cin){
            $pdo = config::getConnexion();
            $sql = 'DELETE FROM `candidats` WHERE cin = '.$cin.'';
            try{
                $list = $pdo->prepare($sql);
                $list->execute();
                echo $list->rowCount() ."records deleted successfully";
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function createcandidat($candidat){
            try {
                $pdo = config::getConnexion();
                $sql = 'INSERT INTO `candidats`(`cin`, `nom`, `prenom`, `email`, `adresse`, `specialite`, `cv`) VALUES (?, ?, ?, ?, ?, ?, ?)';
                $list = $pdo->prepare($sql);
                $cin = $candidat->getCin();
                $list->bindParam(1, $cin);
                $nom = $candidat->getNom();
                $list->bindParam(2, $nom);
                $prenom = $candidat->getPrenom();
                $list->bindParam(3, $prenom);
                $email = $candidat->getEmail();
                $list->bindParam(4, $email);
                $adresse = $candidat->getAdresse();
                $list->bindParam(5, $adresse);
                $specialite = $candidat->getSpecialite();
                $list->bindParam(6, $specialite);
                $cv = $candidat->getCv();
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($cv["name"]);
                if (move_uploaded_file($cv["tmp_name"], $target_file)) {
                    $list->bindParam(7, $target_file);
                    $list->execute();
                } else {
                    echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        public function updatecandidat($candidat,$cin){
            try{
            $pdo = config::getConnexion();
            $sql = 'UPDATE `candidats` SET `cin`=:cin ,`nom`=:nom ,`prenom`=:prenom,`email`= :email,`adresse`=:adresse,`specialite`=:specialite,`cv`= :cv WHERE cin=:cin';
            $list = $pdo->prepare($sql);
            $cin= $candidat->getCin();
            $nom= $candidat->getNom();
            $prenom=$candidat->getPrenom();
            $email=$candidat->getEmail();
            $adresse=$candidat->getAdresse();
            $specialite = $candidat->getSpecialite();
            $cv = $candidat->getCv();
            $list->execute([
                'cin' => $cin,
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'adresse' => $adresse,
                'specialite' => $specialite,
                'cv' => $cv
            ]);
            echo $list->rowCount()."records Updated successfully";
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }

        public function findCandidat(int $cin){
            $pdo = config::getConnexion();
            $sql = 'SELECT * FROM `candidats` WHERE cin = '.$cin.'';
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