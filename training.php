<?php
require 'cnx.php';
session_start();
if(!isset($_SESSION['trainingusername'])){
    header("Location: login.php");
}
$id=$_SESSION['id_student_training'];
$do='';
if(isset($_GET['action'])){
 $do=$_GET['action'];
} 
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@900&display=swap" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <style>
    .admins{
        margin: 20px;
        padding: 10px;
        background-color: cadetblue;
        width: 50%;
        font-family: 'Cinzel', serif;
        border-radius: 10px 100px / 120px;


    }
    .admins h1{
        font-size: 20px;
        font-weight: bold;
    }
    .students h1{
        font-size: 20px;
        font-weight: bold;


    }
    .teachers h1{
        font-size: 20px;
        font-weight: bold;


    }
    .students{
        padding: 10px;
        margin: 20px;
        background-color: rgb(15, 146, 44);
        width: 75%;
        font-family: 'Cinzel', serif;
        border-radius: 10px 100px / 120px;
    }
    .teachers{
        margin: 20px;
        padding: 10px;
        background-color: #df0909;
        width: 90%;
        font-family: 'Cinzel', serif;
        border-radius: 10px 100px / 120px;
    }
    .icon{
      margin-top: 10px!important;
    }
    .show1{
        border:2px solid #df0909;
        padding: 10px 20px;
    }
    .pres{
      margin-left:80px
    }
    .pres strong{
      font-size:17px;
    }
    .logo1{
    width: 200px;
    opacity: 0.5;
    margin-right: -197px;
    filter: contrast(180%);
    }
    #sidebar{
        background: #C04848;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #480048, #C04848);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #480048, #C04848); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    }
    .mainbody{
        background: #ADA996!important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996)!important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    body{
      background: #ADA996!important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996)!important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    
    
  </style>
  
 <?php
 if($do == 'Attestation'){
 $show="SELECT training_student.id_student,training_student.nom AS Nom,training_student.prenom,training_student.email,filieres.nom FROM training_student INNER JOIN filieres on training_student.filliere = filieres.id_fil where id_student = '{$id}'" ;
  $showsql=mysqli_query($cnx,$show);
  $row = mysqli_fetch_assoc($showsql);
    ?>
    <body>
      
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 ml-auto text-left">
            <img style="width:200px" src="img/min.png" alt="">
          </div>
          <div class="col-md-6 text-right">
            <img style="width:150px" src="img/bg_head.png" alt="">
          </div>
          
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 style="font-family: 'Grenze Gotisch', cursive;">Attestaion D'inscription</h1>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <strong> Rabat : <?php echo date("jS \of F Y");  ?></strong>
          </div>
        </div>
      </div>
      <div style="margin-top:40px;" class="container-fluid">
        <div class="row">
          <div class="col-md-12 pres">
          
          <strong>le Centre <strong style="color:#2d233b;">TRAINING SUCCESS</strong> certifie Que l'etudiant :   </strong> 
          </div>
        </div>
        <div style="margin-top:50px;margin-left:80px" class="row">
          <div class="col-md-7 info">
            <strong>Nom et Prenom : <strong><?php echo $row['Nom']."  ".$row['prenom']; ?></strong></strong> <br>
            <strong>Email : <strong><?php echo $row['email'] ?></strong></strong> <br>
            <strong>Formation : TRAINING</strong> <br>
          </div>
        </div>
        <div style="margin-top:50px;" class="row">
          <div class="col-md-12 pres">
          <strong> est inscrit au Titre de l'annee <?php echo date("Y");echo"/"; echo date("Y")+1; ?> sous Le Numero <?php echo $row['id_student']  ?> dans la filliere : <?php echo $row['nom']; ?> </strong> <br>
          
          </div>
        </div>
        <div class="row">
        
        <div class="col-md-12 text-center">
            <img  onclick="window.print()" class="logo1"  src="img/bg_head.png" alt="">

            <img  onclick="window.print()" style="width:200px" src="img/sign.png" alt="">
          </div>
        </div>
        <div class="row">
         <div class="col-md-12">
         <strong style="margin-top:20px;"> NB : Il n'est delivre qu'un seul exemplaire de la presente Attestation durant l'annee d'etude</strong> 
         </div>
        </div>
        
      </div>
    </body>
    <?php
 }
 else{
   ?>
    <body class="mainbody">
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(img/diplome.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fas fa-passport' style='font-size:18px;color:#f8b739'></i> Mon Profile</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="training.php?action=proshow">voir Profile</a>
                </li>
                <li>
                    <a href="training.php?action=proedit">Modifier profile</a>
                </li>
                
	            </ul>
	          </li>
	          
	          
	          <li>
              <a href="training.php?action=absence"><i class='fas fa-book' style='font-size:18px;color:#f8b739'></i> Absence</a>
            </li>
	          <li>
              <a href="training.php?action=Attestation"><i class='fas fa-file-signature' style='font-size:18px;color:#f8b739'></i> Attestation</a>
            </li>
            <li>
              <a href="training.php?action=cours"><i class='fas fa-file-signature' style='font-size:18px;color:#f8b739'></i> Mes Cours</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-power-off" style="font-size:18px;color:#f8b739;"></i>   Logout</a>
          </li>
	        </ul>

	        

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="training.php?action=Attestation">Attestation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Bonjour !</h2>
        <div class="container">
          <div class="row">
            <div  class="col-md-6 text-center">
              <div class="members" style="margin-top: 50px;">
              <div class="admins">
                      <h1>Mes Absences<i class="fa fa-address-book" style="font-size:24px"></i></h1>
                      <h3>
                        <?php 
                         $req = "SELECT * FROM absence WHERE id_studentd = '{$id}'";
                         $sql = mysqli_query($cnx,$req);
                         
                         $count = mysqli_num_rows($sql);
                         echo $count;
                        ?>

                      </h3>
                  </div>
                  <div class="students">
                      <h1>Direction Messages    <i class='fas fa-user-graduate' style='font-size:24px'></i></h1>
                      <h3>
                        <?php 
                         $mssg="SELECT rapport.sujet,rapport.Message,dp.nom,dp.prenom FROM rapport INNER join dp on rapport.id_db = dp.id_db";
                         $sqlmssg=mysqli_query($cnx,$mssg);
                         echo mysqli_num_rows($sqlmssg);
                        ?>

                      </h3>
                  </div>
               </div>           
           </div>
           <div  class="col-md-6 ">
           <?php
            $show="SELECT * FROM training_student WHERE id_student = '{$id}'";
            $showsql=mysqli_query($cnx,$show);
            $row = mysqli_fetch_assoc($showsql);
            $do='';
            if(isset($_GET['action'])){
             $do=$_GET['action'];
            } 
            if($do == 'proshow'){
              ?>
              <h2 class="mb-4 text-center">Mon Profile :</h2>
                  <div class="show1">
                    <img class="rounded mx-auto d-block "  style="width:100px;border-radius:50%!important;margin-bottom:20px;" src="img/prof.png" alt="profilpic"> 
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Fullname :</h3><h3 style="font-size:20px;"><?php echo $row['nom']." ".$row['prenom'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Username :</h3><h3 style="font-size:20px;"><?php echo $row['username'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>email :</h3><h3 style="font-size:20px;"><?php echo $row['email'];?></h3>
                  </div>
              <?php
            }elseif($do == 'proedit'){
              ?>
              <div class="show1">
              <h2 style="color:#df0909;" class="mb-4 text-center">Modifier Profile</h2>
              <form action="?action=diplomeupdate" method="POST">
                <input type="hidden" name="userid" value=<?php echo $row['id_student'] ?>>
              <label for="usr">
               <i class="fa fa-user icon"></i> name:</label>
                <input type="text" class="form-control" value="<?php echo $row['nom']; ?>"  name="nom" id="usr"> <br>
                <label for="usr">
               <i class="fa fa-user icon"></i> Prenom:</label>
                <input type="text" class="form-control" value="<?php echo $row['prenom']; ?>"  name="prenom" id="usr"> <br>
                <label for="usr">
               <i class="fa fa-user icon"></i> Username:</label>
                <input type="text" class="form-control" value="<?php echo $row['username']; ?>"  name="adminuser" id="usr"> <br>
                <label for="usr">
               <i class="fa fa-user icon"></i> New Password:</label>
                <input type="text" class="form-control"  name="adminpass" id="usr" > <br>
                <label for="usr">
               <i class="fa fa-user icon"></i> Email:</label>
                <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="adminemail" id="usr"> <br>
                <button name="update" class="btn btn-secondary">Enregistrer</button>
              </form>
              </div>
              
              
             <?php
             }elseif($do =='diplomeupdate'){
              if($_SERVER['REQUEST_METHOD']=='POST'){
                $adminid=$_POST['userid'];
                $profnom=$_POST['nom'];
                $profprenom=$_POST['prenom'];
                $adminuser=$_POST['adminuser'];
                $adminpass=$_POST['adminpass'];
                $adminemail=$_POST['adminemail'];
                 $adminupdate = "UPDATE `training_student` SET `nom` = '{$profnom}', `prenom` = '{$profprenom}', `email` = '{$adminemail}', `username` = '{$adminuser}', `password` = '{$adminpass}' WHERE `id_student` = {$adminid};";
                $req=mysqli_query($cnx,$adminupdate);
                if($req){
                  ?>
                  <div class="alert alert-success">
                    <strong>Success!</strong> Votre compte a ete modifier
                  </div>
                  <?php

                }

              }
              else{
                ?>
                <div class="alert alert-warning">
                <strong>Attention!</strong> : You can't brows this page directly!
                  </div>
                <?php
              }
          }
             




          ?>
           </div>
         </div>
       </div>
       <div class="container-fluid">
          <?php
          if($do == 'absence') {
            ?>
            <h1>Absences : </h1>
            <?php
          }
          ?>
          <div class="row">
            <?php 
            if($do == 'absence'){
              $req = "SELECT * FROM absence WHERE id_studentt = '{$id}'";
              $sql = mysqli_query($cnx,$req);
              
              $count = mysqli_num_rows($sql);
              if($count > 0){
                  ?>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                      <th scope="col">Date d'heurs</th>
                        <th scope="col">Nombre D'heurs</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      while($row = mysqli_fetch_assoc($sql)){
                        ?>
                        <tr>
                        <td><?php echo $row['dateabs'];  ?></td>
                        <td><?php echo $row['nbr_h'];  ?></td>
                        
                      </tr>
                        <?php
                      }
                      ?>
                      
                    </tbody>
                  </table>
                  <?php
              }else{
                ?>
                <h4 style="color:green;"><i class='fas fa-bell' style='font-size:48px;color:green'></i>  Aucun Absence</h4>
                <?php
              }
              
            }elseif($do == 'cours'){
                $show="SELECT * FROM training_student WHERE id_student = '{$id}'";
                $showsql=mysqli_query($cnx,$show);
                $row = mysqli_fetch_assoc($showsql);
                $filliere = $row['filliere'];
                $Niveau = $row['niveau'];
                $matiere = $row['matiere'];
                $doc = "SELECT * FROM document WHERE filliere = '{$filliere}' AND niveau = '{$Niveau}' AND matiere = '{$matiere}'";

                $docsql = mysqli_query($cnx,$doc);
                
                $doccount = mysqli_num_rows($docsql);
                
                if($doccount > 0){
                ?>
                <h1>Mes cours : </h1>
                <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Document</th>
                    </tr>
                </thead>

                <?php 
                    while($docrow = mysqli_fetch_assoc($docsql)){
                        ?>
                        <tbody>
                            <tr>
                            <th scope="row"><?php echo $docrow['id_doc'];  ?></th>
                            <td><?php echo $docrow['titre'];  ?></td>
                            <td>
                            <a href="up\<?php echo $docrow['document'];  ?>">click pour telecharger</a>
                            </td>
                            </tr>
                            
                        </tbody>
                        <?php
                    }
                ?>
                </table>
                <?php
                
                }else{

                }

                


            }
            ?>
          </div>

       </div>
        
</div>
</div>
</body>
   <?php
 }
 ?>
      
		

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>