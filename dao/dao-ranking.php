<?php
include "../model/ranking.php";

class DaoRanking
{

    private $dbh;

   
    public function __construct()
    {
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=ranking_db', "root", "");
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public function save(Ranking $ranking)
    {

        $stm = $this->dbh->prepare("INSERT INTO ranking  VALUES (?, ?, ?, ?)");

        $stm->bindValue(1, $ranking->getDate());
        $stm->bindValue(2, $ranking->getClassement());
        $stm->bindValue(1, $ranking->getDescription());
        $stm->bindValue(2, $ranking->getSportif().getId());
        
       
        $stm->execute();
    }
    
     public function findAll()
    {
        $stm = $this->dbh->prepare("SELECT * FROM ranking ORDER BY date");
        
        $stm->execute();
        $result = $stm->fetchAll();
       
        return $result;
    }
}

?>