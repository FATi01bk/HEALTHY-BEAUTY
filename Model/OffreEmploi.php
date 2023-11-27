<?php 
    class OffreEmploi {
        private ?int $id;
        private string $statut;
        private int $cin_c;

        public function __construct(?int $id = NULL, string $statut, int $cin_c) {
            $this->id = $id;
            $this->statut = $statut;
            $this->cin_c = $cin_c;
        }

        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getStatut(): string {
            return $this->statut;
        }

        public function setStatut(string $statut) {
            $this->statut = $statut;
        }

        public function getCin_c(): int {
            return $this->cin_c;
        }

        public function setCin_c(int $cin_c) {
            $this->cin_c = $cin_c;
        }
    }
?>