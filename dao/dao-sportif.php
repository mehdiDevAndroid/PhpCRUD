<?php
include "../model/sportif.php";

class DaoSportif
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

    public function save(Sportif $sportif)
    {
        $stm = $this->dbh->prepare("INSERT INTO sportif VALUES (0,?, ?, ?, ?, ?)");
        $stm->bindValue(1, $sportif->getNom());
        $stm->bindValue(2, $sportif->getPrenom());
        $stm->bindValue(3, $sportif->getDateNaissance());
        $stm->bindValue(4, $sportif->getSport());
        $stm->bindValue(5, $sportif->getNumLicence());

        $stm->execute();
    }

    public function update(Sportif $sportif)
    {
        $stm = $this->dbh->prepare("Update sportif set nom=?, prenom=?, dateNaissance=?, sport=?, numLicence=? where id=?");
        $stm->bindValue(1, $sportif->getNom());
        $stm->bindValue(2, $sportif->getPrenom());
        $stm->bindValue(3, $sportif->getDateNaissance());
        $stm->bindValue(4, $sportif->getSport());
        $stm->bindValue(5, $sportif->getNumLicence());
        $stm->bindValue(6, $sportif->getId());

        $stm->execute();
    }

    public function delete($id)
    {
        $stm = $this->dbh->prepare("delete from sportif  where id=?");
        $stm->bindValue(1, $id);
 

        $stm->execute();
    }

    public function findAll()
    {
        $stm = $this->dbh->prepare("SELECT * FROM sportif");
        
        $stm->execute();
        $result = $stm->fetchAll();
       
        return $result;
    }

    public function findSportif($id){
        $sportif = null;
        $stm = $this->dbh->prepare("SELECT * FROM sportif where id=?");
        $stm->bindValue(1, $id);
        

        $stm->execute();

        $result = $stm->fetch(PDO::FETCH_ASSOC);
        if (!empty($result)) {
            $sportif = new Sportif($result['id'], $result['nom'], $result['prenom'],$result['dateNaissance'], $result['sport'], $result['numLicence']);
        }
        return $sportif;
    }
}

?>