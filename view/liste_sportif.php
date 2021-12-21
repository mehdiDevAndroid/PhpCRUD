<?php
include "../model/admin.php";
include "../dao/dao-sportif.php";


$dao = new DaoSportif();

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
		
		<title>Home</title>

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

    <div id="container" class="container main-container">
		<div class="row">
			<div class="col-md-12 ">
				<div >

					<a href="ajouter_sportif.php" class="btn btn-primary btn-sm mb-3" >Ajouter sportif</a>
					
				</div>
				<div class="table-responsive">
				<table id="myTable" class="table table-bordered table-striped rounded " style="width: 100%">
					<thead>
                    <tr>
                   		<th >Nom</th>
                        <th >Prénom</th>
                        <th >Date de naissance</th>
                        <th >Sport</th>
                        <th >Numéro de licence</th>
                        <th> </th>
                    </tr>
					</thead>
                    <tbody>
                        <?php 
                            $result = $dao->findAll();
                            foreach ($result as $row){
                        
                                    echo "<tr >";
                                    echo     "<td >".$row['nom']."</td>";
                                    echo     "  <td >".$row['prenom']."</td>";
                                    echo     "  <td >".$row['dateNaissance']."</td>";
                                    echo     "  <td >".$row['sport']."</td>";
                                    echo     "  <td >".$row['numLicence']."</td>";					     
                                        				     
                                    echo     "  <td>";
                                         echo  "<a href=\"modifier_sportif.php?id=".$row['id']."\" class=\"btn btn-success btn-sm rounded-0\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Modifier\"><i class=\"fa fa-edit\"></i></a>";
                                         echo "<a href=\"../controller/sportif-controller.php?action=delete&id=".$row['id']."\" title=\"Supprimer\" id=\"deleteButton\" class=\"btn btn-danger btn-sm rounded-0\"><i class=\"fa fa-trash\"></i></a>";
                                     echo     "</td>";
                                    echo "</tr>";
                            }
                        ?>
					</tbody>
                </table>
                </div>
				
			</div>
			
		</div>
	</div>
    
</body>
</html>