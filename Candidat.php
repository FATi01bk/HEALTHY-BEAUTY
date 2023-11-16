<?php
    class candidat{
        private int $cin;
        private string $nom;
        private string $prenom;
        private string $email;
        private string $adresse;
        private string $specialite;
        private $cv;

        public function __construct (int $cin = NULL, string $nom, string $prenom, string $email, string $adresse, string $specialite, $cv){
            $this->cin = $cin;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->adresse = $adresse;
            $this->specialite = $specialite;
            $this->cv = $cv;
        }
        public function getCin(){
            return $this->cin;
        } 
        public function setCin(int $cin){
            $this->cin=$cin;
        }
        public function getNom(){
            return $this->nom;
        } 
        public function setNom(string $nom){
            $this->nom=$nom;
        }
        public function getPrenom(){
            return $this->prenom;
        } 
        public function setPrenom(string $prenom){
            $this->prenom=$prenom;
        }
        public function getEmail(){
            return $this->email;
        } 
        public function setEmail(string $email){
            $this->email=$email;
        }
        public function getAdresse(){
            return $this->adresse;
        } 
        public function setAdresse(string $adresse){
            $this->adresse=$adresse;
        }
        public function getSpecialite(){
            return $this->specialite;
        } 
        public function setSpecialite(string $specialite){
            $this->specialite=$specialite;
        }
        public function getCv(){
            return $this->cv;
        }
        public function setCv($cv){
            $this->cv = $cv;
        }
    }
?>