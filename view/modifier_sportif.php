<?php
include "../model/admin.php";
include "../dao/dao-sportif.php";


$dao = new DaoSportif();
$sportif = $dao->findSportif($_GET['id']);

session_start();
if(isset($_SESSION['admin'])){
    $admin = $_SESSION['admin'];
} else {
    header('location: ../index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crete Round" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

        <link rel="stylesheet" type="text/css" media="all" href="../css/style.css" />


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="liste_sportif.php">Ranking</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
                <ul class="nav navbar-nav nav-pills">
                    <li  class="nav-item" >
                        <a class="nav-link" href="liste_sportif.php" >Sportif</a>
                    </li>
                    <li  class="nav-item" >
                        <a class="nav-link" href="liste_ranking.php" >Ranking</a>
                    </li>
                    
                    <li  class="nav-item" >
                        <a class="nav-link" href='../controller/admin-controller.php?action=deconnexion' title="Déconnexion"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div  id="container" class="container">
        <div class="row">  
            <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">                
                        
                        
                        <div class="card rounded shadow shadow-sm cardlogin">
                            <div class="card-header">
                                <h4 class="mb-0"> Modifier sportif</h4>
                            </div>
                            <div class="card-body">
                                <form  method="POST" action="../controller/sportif-controller.php?action=update" class="form" role="form"  id="formLogin" novalidate="" >
                                    <input type="text"  name="id" id="id"  value="<?php echo $_GET['id'];?>" class="form-control form-control-lg rounded"  required="" hidden>
                                    <div class="form-group">
                                        <label >Nom</label>
                                        <input type="text" name="nom" id="nom" value="<?php echo $sportif->getNom();?>" class="form-control form-control-lg rounded"  required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Prénom</label>
                                        <input type="text" id="text" name="prenom" value="<?php echo $sportif->getPrenom();?>" class="form-control form-control-lg rounded" required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Date de naissance</label>
                                        <input type="date" name="dateNaissance" value="<?php echo $sportif->getDateNaissance();?>" id="dateNaissance" class="form-control form-control-lg rounded"  required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Sport</label>
                                        <input type="text" id="sport" name="sport"  value="<?php echo $sportif->getSport();?>" class="form-control form-control-lg rounded" required="">
                                    </div>
                                    <div class="form-group">
                                        <label >Numéro de licence</label>
                                        <input type="number" id="numLicence" name="numLicence" value="<?php echo $sportif->getNumLicence();?>" class="form-control form-control-lg rounded" required="">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Modifier</button>
                                </form>
                            </div>
                            
                        </div>
                        
                    </div>
    
                </div>
    
            </div>
        </div>
        
    </div>
</body>
    
</body>
</html>