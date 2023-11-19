<?php
class Fiche_Patient
{
    private ?int $num_Fich = null;
    private ?int $Cin = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?date_format $date_naissance = null;
    private ?int $age = null;
    private ?string $adresse = null;
    private ?string $num_tel = null;
    private ?date_add $date_ajout = null;
    private ?string $maladie = null;
    private ?int $num_hisfiche = null;


    public function __construct($num_Fich = null, $C, $n, $p, $dn, $ag, $adr, $tel, $daj, $m, $numh)
    {
        $this->num_Fich = $num;
        $this->Cin = $C;
        $this->nom = $n;
        $this->prenom = $p;
        $this->date_naissance = $dn;
        $this->age = $ag;
        $this->adresse = $adr;
        $this->num_tel = $tel;
        $this->date_ajout = $daj;
        $this->maladie = $m;
        $this->num_hisfiche = $numh;
    }


    public function getNum_Fich()
    {
        return $this->num_Fich;
    }

    public function getCin()
    {
        return $this->Cin;
    }


    public function setCin($Cin)
    {
        $this->nom = $Cin;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDate_naissance()
    {
        return $this->date_naissance;
    }


    public function setDate_naissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }


    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }


    public function getNum_tel()
    {
        return $this->num_tel;
    }


    public function setNum_tel($num_tel)
    {
        $this->num_tel = $num_tel;

        return $this;
    }


    public function getDate_ajout()
    {
        return $this->date_ajout;
    }


    public function setDate_ajout($date_ajout)
    {
        $this->date_ajout = $date_ajout;

        return $this;
    }

    public function getMaladie()
    {
        return $this->maladie;
    }


    public function setMaladie($maladie)
    {
        $this->maladie = $maladie;

        return $this;
    }

    public function getNum_hisfiche()
    {
        return $this->num_tel;
    }

    public function setNum_hisfiche($num_hisfiche)
    {
        $this->num_hisfiche = $num_hisfiche;

        return $this;
    }
    
}
?>