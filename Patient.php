<?php
class Patient
{
    private ?int $cinPatient = null;
    private ?string $nom = null;
    private ?string $prenom = null;
    private ?string $email = null;

    public function __construct($cin = null, $n, $p, $a)
    {
        $this->cinPatient = $cin;
        $this->nom = $n;
        $this->prenom = $p;
        $this->email = $a;
    }

    public function getCinPatient()
    {
        return $this->cinPatient;
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


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    
}
