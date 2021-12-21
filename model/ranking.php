<?php

class Ranking
{
    private $id, $date, $classement, $description, $sportif;
  
    public function __construct($id, $date, $classement, $description, $sportif)
    {
        $this->id = $id;
        $this->date = $date;
        $this->classement = $classement;
        $this->description = $description;
        $this->sportif = $sportif;
    }

    public function getId()
    {
        return $this->id;
    }

    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }

    
    public function setDate($date)
    {
        $this->date = $date;
    }
    

    public function getClassement()
    {
        return $this->classement;
    }

    
    public function setClassement($classement)
    {
        $this->classement = $classement;
    }


    public function getDescription()
    {
        return $this->description;
    }

    
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getSportif()
    {
        return $this->sportif;
    }

    
    public function setSportif($sportif)
    {
        $this->sportif = $sportif;
    }


}

?>