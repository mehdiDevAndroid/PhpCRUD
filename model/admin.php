<?php

class Admin
{
    private $nom, $prenom, $user, $password;

  
    public function __construct($nom, $prenom, $user, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->user = $user;
        $this->password = $password;
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
    
    

    
    public function getPassword()
    {
        return $this->password;
    }

    public function getUser()
    {
        return $this->user;
    }

    
    public function setUser($user)
    {
        $this->user = $user;
    }

    
    public function setPassword($password)
    {
        $this->password = $password;
    }

  
   
}
?>