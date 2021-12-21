<?php
include "../model/ranking.php";

session_start();

$action = $_GET['action'];
$dao = new DaoRanking();

switch ($action) {

    case 'insert':
        
        $date = $_POST['$date'];
        $classement = $_POST['$classement'];
        $description = $_POST['$description'];
        $sportif = $_POST['$sportif'];
    

        if (isset($date, $classement, $description, $sportif)) {
            $ranking = new Ranking(0, $date, $classement, $description, $sportif);
            $dao->save($ranking);
            header('location: ../view/ranking.php');
        }
    break;
}
?>