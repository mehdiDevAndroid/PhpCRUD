<?php
include "../dao/dao-admin.php";

$action = $_GET['action'];
$dao = new DaoAdmin();

switch ($action) {

    case 'login':
        $user = $_POST['user'];
        $password = $_POST['password'];

        $admin = $dao->findAdmin($user, $password);
        if ($admin != null) {
            session_start();
            $_SESSION['admin'] = $admin;
            header('location: ../view/liste_sportif.php');
        } else {
            echo "Failed!";
        }
        break;
    case 'deconnexion':
        session_start();
        session_destroy();
        header('location: ../index.html');
        break;
}
