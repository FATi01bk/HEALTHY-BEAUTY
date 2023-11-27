<?php
class rendez_vous
{
    private ?int $num_ren = null;
    private ?string $nom_patient = null;
    private ?string $nom_docteur = null;
    private ?string $date_ren = null;
    private ?string $temp_ren = null;
    private ?string $type_ren = null;
    private ?string $tel_ren = null;
    private ?string $des_ren = null;

    public function __construct($num , $np, $nd, $d,$tr, $t, $el, $des)
    {
        $this->num_ren = $num;
        $this->nom_patient = $np;
        $this->nom_docteur = $nd;
        $this->date_ren = $d;
        $this->temp_ren = $tr;
        $this->type_ren = $t;
        $this->tel_ren = $el;
        $this->des_ren = $des;
    }


    public function getnumren()
    {
        return $this->num_ren;
    }

    public function setnumren($num_ren)
    {
        $this->num_ren = $num_ren;

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

    public function getNomdocteur()
    {
        return $this->nom_docteur;
    }
        
    public function setnomdocteur($nom_docteur)
    {
        $this->nom_docteur = $nom_docteur;

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
    public function gettelren()
    {
        return $this->tel_ren;
    }
    public function settelren($tel_ren)
    {
        $this->tel_ren = $tel_ren;

        return $this;
    }
    public function getdesren()
    {
        return $this->des_ren;
    }
    public function setdesren($des_ren)
    {
        $this->des_ren = $des_ren;

        return $this;
    }

}
