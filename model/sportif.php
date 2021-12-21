<?php

class Sportif
{
    private $id, $nom, $prenom, $dateNaissance, $sport, $numLicence;

  
    public function __construct($id, $nom, $prenom, $dateNaissance, $sport, $numLicence)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->sport = $sport;
        $this->numLicence = $numLicence;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    public function getSport()
    {
        return $this->sport;
    }

   
    public function setSport($sport)
    {
        $this->sport = $sport;
    }

    
    public function getVisibilite()
    {
        return $this->sport;
    }

    
    public function setVisibilite($visibilite)
    {
        $this->visibilite = $visibilite;
    }

    
    public function getNumLicence()
    {
        return $this->numLicence;
    }

    
    public function setNumLicence($numLicence)
    {
        $this->numLicence = $numLicence;
    }

}
?>