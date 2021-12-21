<?php
include "../dao/dao-sportif.php";

$action = $_GET['action'];
$dao = new DaoSportif();

switch ($action) {
    case 'insert':
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaissance = $_POST['dateNaissance'];
        $sport = $_POST['sport'];
        $numLicence = $_POST['numLicence'];

        if (isset($nom, $prenom, $dateNaissance, $sport, $numLicence)) {
            $sportif = new Sportif(0, $nom, $prenom, $dateNaissance, $sport, $numLicence);
            $dao->save($sportif);
            header('location: ../view/liste_sportif.php');
        }
        break;
    case 'update':

        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaissance = $_POST['dateNaissance'];
        $sport = $_POST['sport'];
        $numLicence = $_POST['numLicence'];

        if (isset($nom, $prenom, $dateNaissance, $sport, $numLicence)) {
            $sportif = new Sportif($id, $nom, $prenom, $dateNaissance, $sport, $numLicence);
            $dao->update($sportif);
            header('location: ../view/liste_sportif.php');
        }
        break;
    case 'delete':

        $id = $_GET['id'];
       
        if (isset($id)) {
            $dao->delete($id);
            header('location: ../view/liste_sportif.php');
        }
        break;

}
