<?php
class consultation
{   
    private ?int $num_tel = null; 
    private ?string $nom_patient = null;
    private ?string $nom_docteur = null; 
    private ?int $age_patient = null;
    private ?string $date_ren = null;
    private ?string $temp_ren = null;
    private ?string $type_ren = null;


    public function __construct($num , $a, $np, $numf, $d, $tr, $t)
    {
        $this->num_tel = $num;
        $this->nom_docteur = $numf;
        $this->age_patient = $a;
        $this->nom_patient = $np;
        $this->date_ren = $d;
        $this->temp_ren = $tr;
        $this->type_ren = $t;

    }


    public function getnumtel()
    {
        return $this->num_tel;
    }

    public function setnumtel($num_tel)
    {
        $this->num_tel = $num_tel;

        return $this;
    }
    
    
    
    public function getNompatient()
    {
        return $this->nom_patient;
    }

    public function setnompatient($nom_patient)
    {
        $this->nom_patient = $nom_patient;

        return $this;
    }

    public function getage()
    {
        return $this->age_patient;
    }
        
    public function setage($age_patient)
    {
        $this->age_patient = $age_patient;

        return $this;
    } 


    public function getdateren()
    {
        return $this->date_ren;
    }

    public function setdateren($date_ren)
    {
        $this->date_ren = $date_ren;

        return $this;
    }
    public function gettempren()
    {
        return $this->temp_ren;
    }

    public function settempren($temp_ren)
    {
        $this->temp_ren = $temp_ren;

        return $this;
    }
    public function gettyperen()
    {
        return $this->type_ren;
    }

    public function settyperen($type_ren)
    {
        $this->type_ren = $type_ren;

        return $this;
    }

    public function getNomdocteur()
    {
        return $this->nom_docteur;
    }
    public function setnomdocteur($nom_docteur)
    {
        $this->nom_docteur = $nom_docteur;

        return $this;
    }

}
