<?php
class rendez_vous
{
    private ?int $num_ren = null;
    private ?string $nom_patient = null;
    private ?string $nom_docteur = null;
    private ?string $date_ren = null;
    private ?string $type_ren = null;

    public function __construct($num = null, $np, $nd, $d, $t)
    {
        $this->num_ren = $num;
        $this->nom_patient = $np;
        $this->nom_docteur = $nd;
        $this->date_ren = $d;
        $this->type_ren = $t;
    }


    public function getnumren()
    {
        return $this->num_ren;
    }

    public function getNompatient()
    {
        return $this->nom_patient;
    }

    public function getNomdocteur()
    {
        return $this->nom_docteur;
    }

    public function getdateren()
    {
        return $this->date_ren;
    }

    public function gettyperen()
    {
        return $this->type_ren;
    }

    public function setnumren($num_ren)
    {
        $this->num_ren = $num_ren;

        return $this;
    }
    
    public function setnompatient($nom_patient)
    {
        $this->nom_patient = $nom_patient;

        return $this;
    }
    
    public function setnomdocteur($nom_docteur)
    {
        $this->nom_docteur = $nom_docteur;

        return $this;
    }
    public function setdateren($date_ren)
    {
        $this->date_ren = $date_ren;

        return $this;
    }
    
    public function settyperen($type_ren)
    {
        $this->type_ren = $type_ren;

        return $this;
    }

}
