<?php
include "../model/admin.php";

class DaoAdmin
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

    public function findAdmin($user, $password)
    {
        $admin = null;
        $stm = $this->dbh->prepare("SELECT * FROM administrateur where user=? AND password=?");
        $stm->bindValue(1, $user);
        $stm->bindValue(2, $password);

        $stm->execute();

        $result = $stm->fetch(PDO::FETCH_ASSOC);
        if (!empty($result)) {
            $admin = new Admin($result['nom'], $result['prenom'],$result['user'], $result['password']);
        }
        return $admin;
    }
}

?>