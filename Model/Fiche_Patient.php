<?php
class fiche_patient
{
    private ?int $Num_Fich = null;
    private ?int $CIN = null;
    private ?string $Nom = null;
    private ?string $Prenom = null;
    private ?string $Date_naissance = null;
    private ?string $Age = null;
    private ?string $Adresse = null;
    private ?int $Num_tel = null;
    private ?string $Date_ajout = null;
    private ?string $Maladie = null;
    

    public function __construct($num, $C, $n, $p, $dn, $ag, $adr, $t, $daj, $m)
    {
        $this->Num_Fich = $num;
        $this->CIN = $C;
        $this->Nom = $n;
        $this->Prenom = $p;
        $this->Date_naissance = $dn;
        $this->Age = $ag;
        $this->Adresse = $adr;
        $this->Num_tel = $t;
        $this->Date_ajout = $daj;
        $this->Maladie = $m;
        
    }


    public function getNum_Fich()
    {
        return $this->Num_Fich;
    }
    

    public function getCin()
    {
        return $this->CIN;
    }


    public function setCin($CIN)
    {
        $this->CIN = $CIN;

        return $this;
    }

    public function getNom()
    {
        return $this->Nom;
    }


    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->Prenom;
    }


    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDate_naissance()
    {
        return $this->Date_naissance;
    }


    public function setDate_naissance($Date_naissance)
    {
        $this->Date_naissance = $Date_naissance;

        return $this;
    }


    public function getAge()
    {
        return $this->Age;
    }


    public function setAge($Age)
    {
        $this->Age = $Age;

        return $this;
    }

    public function getAdresse()
    {
        return $this->Adresse;
    }


    public function setAdresse($Adresse)
    {
        $this->Adresse = $Adresse;

        return $this;
    }


    public function getNum_tel()
    {
        return $this->Num_tel;
    }


    public function setNum_tel($Num_tel)
    {
        $this->Num_tel = $Num_tel;

        return $this;
    }


    public function getDate_ajout()
    {
        return $this->Date_ajout;
    }


    public function setDate_ajout($Date_ajout)
    {
        $this->Date_ajout = $Date_ajout;

        return $this;
    }

    public function getMaladie()
    {
        return $this->Maladie;
    }


    public function setMaladie($Maladie)
    {
        $this->Maladie = $Maladie;

        return $this;
    }
    
}
?>