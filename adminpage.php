<?php
require 'cnx.php';
session_start();
if(!isset($_SESSION['id'])){
    header("Location: login.php");
}


?>
<!doctype html>
<html lang="en">
  <head>
  	<title>AdminControle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <style>
    .admins{
        margin: 20px;
        padding: 10px;
        background-color: cadetblue;
        width: 60%;
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
        width: 70%;
        font-family: 'Cinzel', serif;
        border-radius: 10px 100px / 120px;

    }
    .teachers{
        margin: 20px;
        padding: 10px;
        background-color: coral;
        width: 80%;
        font-family: 'Cinzel', serif;
        border-radius: 10px 100px / 120px;

    }
    .dp{
      margin: 20px;
        padding: 10px;
        background-color: rgb(33, 148, 77);;
        width: 90%;
        font-family: 'Cinzel', serif;
        border-radius: 10px 100px / 120px;

    }
    
    .dp h1{
      font-size: 20px;
        font-weight: bold;
    }
    .icon{
      margin-top: 10px!important;
    }
    .show1{
        border:2px solid #168a6d;
        padding: 10px 20px;
    }
    .gere{
      margin-top:50px;
    }
    .btn1{
      margin-top:20px!important;
    }
    body{
      background: #abbaab;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffffff, #abbaab);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffffff, #abbaab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
  </style>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
          <a href="adminpage.php" class="img logo rounded-circle mb-5" style="background-image: url(img/user.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fas fa-passport' style='font-size:18px;color:#f8b739'></i> Mon Profile</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="adminpage.php?action=proshow">voir Profile</a>
                </li>
                <li>
                    <a href="adminpage.php?action=proedit">Modifier profile</a>
                </li>
                
	            </ul>
	          </li>
	          
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fas fa-book' style='font-size:18px;color:#f8b739'></i> Gerer utilisateurs</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="adminpage.php?action=GererEtudiant">Gerer Les etudiants</a>
                </li>
                <li>
                    <a href="adminpage.php?action=Gereprof">Gerer Les professeurs</a>
                </li>
                <li>
                    <a href="adminpage.php?action=GerDP">Gerer Directeur pédagogique</a>
                </li>
              </ul>
	          </li>
	          <li>
              <a href="adminpage.php?action=Absences"><i class='far fa-id-badge' style='font-size:18px;color:#f8b739'></i> Absences</a>
	          </li>
	          <li>
              <a href="adminpage.php?action=inscription"><i class='fas fa-file-signature' style='font-size:18px;color:#f8b739'></i> Inscriptions</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-power-off" style="font-size:18px;color:#f8b739;"></i> Log out</a>
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
                    <a class="nav-link" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminpage.php?action=inscription">Inscriptions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="adminpage.php?action=Absences">Absences</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Hello Welcome </h2>
        <div class="container">
          <div class="row">
            <div  class="col-md-6 text-center">
              <div class="members" style="margin-top: 50px;">
                  <div class="admins">
                      <h1>Admins      <i class="fa fa-address-book" style="font-size:24px"></i></h1>
                      <h3>
                        <?php
                           $pipreq="SELECT * FROM `admins`";
                           $pipsql=mysqli_query($cnx,$pipreq);
                           $pipcount=mysqli_num_rows($pipsql);
   
                           echo $pipcount;
                        ?>
                      </h3>
                  </div>
                  <div class="students">
                      <h1>students    <i class='fas fa-user-graduate' style='font-size:24px'></i></h1>                
                      <h3>
                        <?php 
                        $dipreq="SELECT * FROM `diplome_student`";
                        $dipsql=mysqli_query($cnx,$dipreq);
                        $dipcount=mysqli_num_rows($dipsql);

                        $tipreq="SELECT * FROM `training_student`";
                        $tipsql=mysqli_query($cnx,$tipreq);
                        $tipcount=mysqli_num_rows($tipsql);

                        echo $dipcount + $tipcount;
                        ?>
                      </h3>
                  </div>
                  <div class="teachers">
                      <h1>Teachers    <i style="font-size:24px" class="fa fa-chalkboard-teacher"></i></h1>
                      <h3>
                        <?php
                           $dipreq="SELECT * FROM `professeur`";
                           $dipsql=mysqli_query($cnx,$dipreq);
                           $dipcount=mysqli_num_rows($dipsql);
   
                           echo $dipcount;
                        ?>
                      </h3>
                  </div>
                  <div class="dp">
                      <h1>directeur pédagogique<i style="font-size:24px" class="fa">&#xf19d;</i></h1>
                      <h3>
                        <?php
                           $dipreq="SELECT * FROM `dp`";
                           $dipsql=mysqli_query($cnx,$dipreq);
                           $dipcount=mysqli_num_rows($dipsql);
   
                           echo $dipcount;
                        ?>
                      </h3>
                  </div>
    
              </div>           
            </div>
            <div class="col-md-6">
            <?php
            $x=$_SESSION['id'];
            $editreq1="SELECT * FROM `admins` WHERE id='{$x}'";

            $req=mysqli_query($cnx,$editreq1);

            $count = mysqli_num_rows($req);
            $row= mysqli_fetch_assoc($req);
                $do='';
               if(isset($_GET['action'])){
                $do=$_GET['action'];
               }  
               if($do=='proshow'){
                  ?>
                  <h2 class="mb-4 text-center">Mon Profile :</h2>
                  <div class="show1">
                    <img class="rounded mx-auto d-block "  style="width:100px;border-radius:50%!important;margin-bottom:20px;" src="img/user.png" alt="profilpic"> 
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Fullname :</h3><h3 style="font-size:20px;"><?php echo $row['fullname'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Username :</h3><h3 style="font-size:20px;"><?php echo $row['username'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>email :</h3><h3 style="font-size:20px;"><?php echo $row['email'];?></h3>
                  </div>
                  
                  <?php
               }
               elseif($do =='proedit'){
                
               
                   ?>
                    <h2 class="mb-4">Modifier Profile</h2>
                    <form action="?action=adminupdate" method="POST">
                      <input type="hidden" name="userid" value=<?php echo $row['id'] ?>>
                    <label for="usr">
                     <i class="fa fa-user icon"></i> Fullname:</label>
                      <input type="text" class="form-control" value="<?php echo $row['fullname']; ?>"  name="adminfullname" id="usr"> <br>
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
                    
                   <?php
                   
                   
                   
               }elseif($do =='adminupdate'){
                  if($_SERVER['REQUEST_METHOD']=='POST'){
                    $adminid=$_POST['userid'];
                    $adminfullname=$_POST['adminfullname'];
                    $adminuser=$_POST['adminuser'];
                    $adminpass=$_POST['adminpass'];
                    $adminemail=$_POST['adminemail'];
                    $adminupdate="UPDATE `admins` SET `username` = '{$adminuser}', `password` = SHA1('{$adminpass}'), `email` = '{$adminemail}', `fullname` = '{$adminfullname}' WHERE `id` = '{$adminid}';";

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
               }elseif ($do =='GererEtudiant'){
                 ?>
                 <div class="gere">
                  <h2 class="mb-4">Gerer Etudiant </h2>
                 <button  class="btn btn-danger btn1"><a style="text-decoration: none;color: white;" href="adminpage.php?action=GererEtudiant&doing=TRS">TRAINING Etudiant</a> </button> <br>
                 <button  class="btn btn-info btn1"><a style="text-decoration: none;color: white;" href="adminpage.php?action=GererEtudiant&doing=DIS">DIPLOME Students</a> </button> <br>
                 </div>
                 
                 <?php
                 
               }elseif ($do == 'Gereprof'){
                 ?>
                  <div id="head_bg"><img style="width:450px" src="img/bg_head.png"></div>
                 <?php
               }elseif ($do == 'GerDP'){
                ?>
                 <div id="head_bg"><img style="width:450px;margin-top:30px;" src="img/bg_head.png"></div>
                <?php
              }elseif($do == 'Absences'){
                ?>
                <h1 style="margin-top:50px">Gestion Des Absences :</h1>
                <button  class="btn btn-primary"><a style="text-decoration: none;color: white;" href="adminpage.php?action=Absences&doing=DIS">Diplome Student</a></button>
                <button class="btn btn-info"><a style="text-decoration: none;color: white;" href="adminpage.php?action=Absences&doing=TRS">Training Student</a></button>
                <button class="btn btn-danger"><a style="text-decoration: none;color: white;" href="adminpage.php?action=Absences&doing=PROF">Professeurs</a></button>
                <?php
              }elseif($do == 'inscription'){
                ?>
                <div class="gere">
                 <h2 class="mb-4">Inscription : </h2>
                <button  class="btn btn-danger btn1"><a style="text-decoration: none;color: white;" href="adminpage.php?action=inscription&doing=TRS">TRAINING Inscription</a> </button> <br>
                <button  class="btn btn-info btn1"><a style="text-decoration: none;color: white;" href="adminpage.php?action=inscription&doing=DIS">DIPLOME Inscription</a> </button> <br>
                </div>
                
                <?php
              }elseif(empty($do)){
                ?>            
                <canvas id="canvas" style="border-radius: 50%;padding-top:50px;"  width="400" height="400"
                style="background-color:#333">
                </canvas>

                <script>
                var canvas = document.getElementById("canvas");
                var ctx = canvas.getContext("2d");
                var radius = canvas.height / 2;
                ctx.translate(radius, radius);
                radius = radius * 0.90
                setInterval(drawClock, 1000);

                function drawClock() {
                  drawFace(ctx, radius);
                  drawNumbers(ctx, radius);
                  drawTime(ctx, radius);
                }

                function drawFace(ctx, radius) {
                  var grad;
                  ctx.beginPath();
                  ctx.arc(0, 0, radius, 0, 2*Math.PI);
                  ctx.fillStyle = 'white';
                  ctx.fill();
                  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
                  grad.addColorStop(0, '#333');
                  grad.addColorStop(0.5, 'white');
                  grad.addColorStop(1, '#333');
                  ctx.strokeStyle = grad;
                  ctx.lineWidth = radius*0.1;
                  ctx.stroke();
                  ctx.beginPath();
                  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
                  ctx.fillStyle = '#333';
                  ctx.fill();
                }

                function drawNumbers(ctx, radius) {
                  var ang;
                  var num;
                  ctx.font = radius*0.15 + "px arial";
                  ctx.textBaseline="middle";
                  ctx.textAlign="center";
                  for(num = 1; num < 13; num++){
                    ang = num * Math.PI / 6;
                    ctx.rotate(ang);
                    ctx.translate(0, -radius*0.85);
                    ctx.rotate(-ang);
                    ctx.fillText(num.toString(), 0, 0);
                    ctx.rotate(ang);
                    ctx.translate(0, radius*0.85);
                    ctx.rotate(-ang);
                  }
                }

                function drawTime(ctx, radius){
                    var now = new Date();
                    var hour = now.getHours();
                    var minute = now.getMinutes();
                    var second = now.getSeconds();
                    //hour
                    hour=hour%12;
                    hour=(hour*Math.PI/6)+
                    (minute*Math.PI/(6*60))+
                    (second*Math.PI/(360*60));
                    drawHand(ctx, hour, radius*0.5, radius*0.07);
                    //minute
                    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
                    drawHand(ctx, minute, radius*0.8, radius*0.07);
                    // second
                    second=(second*Math.PI/30);
                    drawHand(ctx, second, radius*0.9, radius*0.02);
                }

                function drawHand(ctx, pos, length, width) {
                    ctx.beginPath();
                    ctx.lineWidth = width;
                    ctx.lineCap = "round";
                    ctx.moveTo(0,0);
                    ctx.rotate(pos);
                    ctx.lineTo(0, -length);
                    ctx.stroke();
                    ctx.rotate(-pos);
                }
                </script>
                <?php
              }
            ?>
            
            </div>
            
          </div>
        </div>
        <div style="margin-top:30px;" class="container-fluid">
          <div class="row">
            <?php
            $amine='';
            if(isset($_GET['doing'])){
              $amine= $_GET['doing'];
            }
            $chakker='';
            if(isset($_GET['x'])){
              $chakker= $_GET['x'];
            }
                if($amine == 'TRS' and $do == 'GererEtudiant'){
                  ?>
                  <!--add modal-->
                  <div  class="modal fade" id="tadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div  class="modal-dialog" role="document">
                      <div style="background-color:#f6e58d;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ajouter Etudiant</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="adminpage.php?action=GererEtudiant&doing=TRS&x=insert" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Nom:</label>
                                      <input type="text" class="form-control " placeholder="Nom" name="tnom" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Prenom:</label>
                                      <input type="text" class="form-control" placeholder="Prenom" name="tprenom" id="usr"> <br>
                                    
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Email:</label>
                                      <input type="email" class="form-control" placeholder="Email" id="usr" name="temail"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> username:</label>
                                      <input type="text" class="form-control" placeholder="username" id="usr" name="tuser"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control" placeholder="password" id="usr" name="tpass"> <br>
                                      
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1"><i class="fa fa-user icon"></i>Niveau</label>
                                        <select class="form-control" name="niveau" onchange="changer()" id="Niveau">
                                        <option >Select Niveau</option>
                                          <?php 
                                            $nreq="SELECT * FROM `niveau`";
                                            $nsql=mysqli_query($cnx,$nreq);
                                            
                                            while($nrow = $nsql->fetch_assoc()){
                                              ?>
                                              <option value="<?php echo $nrow['id_niv'] ?>"><?php echo $nrow['Niveau'] ;?></option>
                                              <?php

                                            }
                                          ?>
                                        </select>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="exampleFormControlSelect1">Filiere</label>
                                          <select class="form-control" name="filiere" id="filiere" onchange="changer()">
                                            <option >Select filliere</option>
                                            <?php 
                                              $req="SELECT * FROM `filieres`";
                                              $sql=mysqli_query($cnx,$req);
                                              
                                              while($mrow = $sql->fetch_assoc()){
                                                ?>
                                                <option value="<?php echo $mrow['id_fil'] ?>"><?php echo $mrow['nom'] ;?></option>
                                                <?php

                                              }
                                            ?>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                    <label for="exampleFormControlSelect1">Matiere</label>
                                        <div id="matiere">
                                          <select class="form-control" name="matiere">
                                          <option>Select matiere</option>
                                    
                                          </select>
                                        </div>                             
                                  </div>
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="save" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                          $chakker='';
                          if(isset($_GET['x'])){
                            $chakker=$_GET['x'];
                          }
                            if($amine == 'TRS' and $do == 'GererEtudiant'and $chakker="insert"){
                              if(isset($_POST['save'])){
                                $tname=$_POST['tnom'];
                                $tprenom=$_POST['tprenom'];
                                $temail=$_POST['temail'];
                                $tuser=$_POST['tuser'];
                                $tpass=$_POST['tpass'];
                                $niveau=$_POST['niveau'];
                                $fillier=$_POST['filiere'];
                                $matiere=$_POST['matiere'];
                                $taddreq="INSERT INTO `training_student` (`id_student`, `nom`, `prenom`, `email`, `username`, `password`, `niveau`, `filliere`, `matiere`) VALUES (NULL, '$tname', '$tprenom', '$temail', '$tuser', '$tpass', '$niveau', '$fillier', '$matiere')";
                                if(mysqli_query($cnx,$taddreq)){
                                  echo '<script>alert("student saved");</script>';
                                }
                              }
                            }
                        ?>
                       
                      </div>
                    </div>
                  </div>
                  <!--end of add modal-->
                  <!--start edit Modal -->
                  <div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#d2dae2;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifier Etudiant</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=GererEtudiant&doing=TRS&x=edit" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Nom:</label>
                                      <input type="hidden" class="form-control " id="id" placeholder="Nom" name="id_student" id="usr"> <br>
                                      <input type="text" class="form-control " id="nom" placeholder="Nom" name="diplomestudentname" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Prenom:</label>
                                      <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="diplomestudentprenom" id="usr"> <br>
                                    
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Email" id="usr" name="diplomestudentemail"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> username:</label>
                                      <input type="text" class="form-control" id="username" placeholder="username" id="usr" name="diplomestudentusername"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control" id="password" placeholder="password" id="usr" name="diplomestudentpassword"> <br>
                                      
                                      
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                         $chakker='';
                         if(isset($_GET['x'])){
                           $chakker=$_GET['x'];
                         }
                        if($amine == 'TRS' and $do == 'GererEtudiant'and $chakker == 'edit'){
                          if(isset($_POST['updatedata'])){
                            $id_student=$_POST['id_student'];
                            $newnom=$_POST['diplomestudentname'];
                            $nweprenom=$_POST['diplomestudentprenom'];
                            $newemail=$_POST['diplomestudentemail'];
                            $newusername=$_POST['diplomestudentusername'];
                            $newpassword=$_POST['diplomestudentpassword'];
                            $dsupdate="UPDATE `training_student` SET `nom` = '$newnom', `prenom` = '$nweprenom', `email` = '$newemail', `username` = '$newusername', `password` = '$newusername' WHERE `training_student`.`id_student` = '$id_student'";

                            $query_run = mysqli_query($cnx,$dsupdate);
                            if($query_run){
                              echo '<script>alert("student edited");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of edit modal-->
                  <!--start delete Modal-->
                  <!-- Modal -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#ff3f34;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete this student</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=GererEtudiant&doing=TRS&x=delete" method="POST">
                            <div class="modal-body">
                                                          
                                      
                                      <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="id_student" id="usr"> <br>
                                          
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">yes</button>
                            </div>
                        </form>
                        <?php
                        if($amine == 'TRS' and $do == 'GererEtudiant'and $chakker == 'delete'){
                          if(isset($_POST['updatedata'])){
                            $studentid=$_POST['id_student'];
                            $deletestudentreq="DELETE FROM `training_student` WHERE `id_student` = '$studentid'";
                            if(mysqli_query($cnx,$deletestudentreq)){
                              echo '<script>alert("student deleted");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of delete Modal-->
                  <?php
                  $tsreq="SELECT * FROM training_student ORDER BY Nom;";
                  $tsresult = $cnx->query($tsreq);
                  ?>
                   <div class="conatiner">
                     <div class="jumbotron">
                       <div class="card">
                       <h2 style="padding:10px;">Training Etudiants</h2>                        
                       </div>
                       <div class="card">
                         <div class="card-body">
                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tadd">
                          Ajouter Etudiant
                        </button>
                         </div>
                      <div class="card">
                       <div class="card-body">
                              <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">email</th>
                                    <th scope="col">username</th>
                                    <th scope="col">password</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">supprimer</th>
                                  </tr>
                                </thead>
                                <?php
                                while($tsrow = $tsresult->fetch_assoc()){
                                  ?>
                                  <tbody>
                                    <tr>
                                      <td scope="row"><?php echo $tsrow['id_student'] ?></td>
                                      <td><?php echo $tsrow['nom'] ?></td>
                                      <td><?php echo $tsrow['prenom'] ?></td>
                                      <td><?php echo $tsrow['email'] ?></td>
                                      <td><?php echo $tsrow['username'] ?></td>
                                      <td><?php echo $tsrow['password'] ?></td>
                                      <td><button type="button" class="btn btn-success editbtn">Modifier</button></td>
                                      <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                                    </tr>
                                  
                                  </tbody>
                                  <?php
                                }
                                ?>
                                
                              </table>
                       </div>
                     </div>
                       </div>
                     </div>
                   </div>
                               
                  <?php

                }elseif($amine == 'DIS' and $do == 'GererEtudiant'){
                 ?>
                 <!-- start addModal -->
                  <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#f6e58d;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ajouter Un Etudiant</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="adminpage.php?action=GererEtudiant&doing=DIS&x=insert" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Nom:</label>
                                      <input type="text" class="form-control " placeholder="Nom" name="diplomestudentname" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Prenom:</label>
                                      <input type="text" class="form-control" placeholder="Prenom" name="diplomestudentprenom" id="usr"> <br>
                                    
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Email:</label>
                                      <input type="email" class="form-control" placeholder="Email" id="usr" name="diplomestudentemail"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> username:</label>
                                      <input type="text" class="form-control" placeholder="username" id="usr" name="diplomestudentusername"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control" placeholder="password" id="usr" name="diplomestudentpassword"> <br>
                                      
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1"><i class="fa fa-user icon"></i>Niveau</label>
                                        <select class="form-control" name="niveau" id="exampleFormControlSelect1">
                                        <option >Select Niveau</option>
                                      <?php 
                                        $nreq="SELECT * FROM `niveau`";
                                        $nsql=mysqli_query($cnx,$nreq);
                                        
                                        while($nrow = $nsql->fetch_assoc()){
                                          ?>
                                          <option value="<?php echo $nrow['id_niv'] ?>"><?php echo $nrow['Niveau'] ;?></option>
                                          <?php

                                        }
                                      ?>  
                                        </select>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="exampleFormControlSelect1">Filiere</label>
                                          <select class="form-control" name="filiere" id="filiere" onchange="changer()">
                                            <option >Select filliere</option>
                                            <?php 
                                              $req="SELECT * FROM `filieres`";
                                              $sql=mysqli_query($cnx,$req);
                                              
                                              while($mrow = $sql->fetch_assoc()){
                                                ?>
                                                <option value="<?php echo $mrow['id_fil'] ?>"><?php echo $mrow['nom'] ;?></option>
                                                <?php

                                              }
                                            ?>
                                          </select>
                                      </div>
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="save" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                            $chakker="";
                            if(isset($_GET['x'])){
                              $chakker=$_GET['x'];
                            }
                            if($amine == 'DIS' and $do == 'GererEtudiant'and $chakker == 'insert'){
                              
                              if(isset($_POST['save'])){
                                $Dstudentname=$_POST['diplomestudentname'];
                                $Dstudentprenom=$_POST['diplomestudentprenom'];
                                $Dstudentemail=$_POST['diplomestudentemail'];
                                $Dstudentuser=$_POST['diplomestudentusername'];
                                $Dstudentpass=$_POST['diplomestudentpassword'];
                                $Dstudentniveau=$_POST['niveau'];
                                $Dstudentfilliere=$_POST['filiere'];
                                $dsinsert="INSERT INTO `diplome_student` (`id_student`, `Nom`, `Prenom`, `Email`, `username`, `Password`, `niveau`, `filliere`) VALUES (NULL, '$Dstudentname', '$Dstudentprenom', ' $Dstudentemail', '$Dstudentuser', '$Dstudentpass', '$Dstudentniveau', '$Dstudentfilliere')";
                                if(mysqli_query($cnx,$dsinsert)){
                                  echo '<script>alert("student saved");</script>';
                                }
                              }
                            }
                        ?>
                      </div>
                    </div>
                  </div>
                  <!--End of add Modal-->
                  <!--start edit Modal-->
                  <div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#d2dae2;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifier Etudiant</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=GererEtudiant&doing=DIS&x=edit" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Nom:</label>
                                      <input type="hidden" class="form-control " id="id" placeholder="Nom" name="id_student" id="usr"> <br>
                                      <input type="text" class="form-control " id="nom" placeholder="Nom" name="diplomestudentname" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Prenom:</label>
                                      <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="diplomestudentprenom" id="usr"> <br>
                                    
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Email" id="usr" name="diplomestudentemail"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> username:</label>
                                      <input type="text" class="form-control" id="username" placeholder="username" id="usr" name="diplomestudentusername"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control" id="password" placeholder="password" id="usr" name="diplomestudentpassword"> <br>
                                      
                                      
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                        if($amine == 'DIS' and $do == 'GererEtudiant'and $chakker == 'edit'){
                          if(isset($_POST['updatedata'])){
                            $id_student=$_POST['id_student'];
                            $newnom=$_POST['diplomestudentname'];
                            $nweprenom=$_POST['diplomestudentprenom'];
                            $newemail=$_POST['diplomestudentemail'];
                            $newusername=$_POST['diplomestudentusername'];
                            $newpassword=$_POST['diplomestudentpassword'];
                            $dsupdate="UPDATE diplome_student SET Nom = '$newnom' , Prenom = '$nweprenom',Email='$newemail' , username='$newusername' , Password='$newpassword' where id_student='$id_student' ";

                            $query_run = mysqli_query($cnx,$dsupdate);
                            if($query_run){
                              echo '<script>alert("student edited");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of edit Modal-->
                  <!--start delete Modal-->
                  <!-- Modal -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#ff3f34;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete this student</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=GererEtudiant&doing=DIS&x=delete" method="POST">
                            <div class="modal-body">
                                                          

                                      <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="id_student" id="usr"> <br>
                                          
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">yes</button>
                            </div>
                        </form>
                        <?php
                        if($amine == 'DIS' and $do == 'GererEtudiant'and $chakker == 'delete'){
                          if(isset($_POST['updatedata'])){
                            $studentid=$_POST['id_student'];
                            $deletestudentreq="DELETE FROM `diplome_student` WHERE `id_student` = '$studentid'";
                            if(mysqli_query($cnx,$deletestudentreq)){
                              echo '<script>alert("student deleted");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of delete Modal-->
                  <?php
                  $dsreq="SELECT * FROM diplome_student ORDER BY Nom;";
                  $dsresult = $cnx->query($dsreq);

                  ?>
                 <div class="container">
                   <div class="jumbotron">
                     <div class="card">
                       <h2 style="padding:10px;">Diplome Etudiants</h2>
                     </div>
                     <div class="card">
                       <div class="card-body">
                         <button  type="button" class="btn btn-info" data-toggle="modal" data-target="#studentaddmodal">Ajouter un Etudiant</button>
                       </div>
                     </div>
                     <div class="card">
                       <div class="card-body">
                       <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">email</th>
                            <th scope="col">username</th>
                            <th scope="col">password</th>
                            <th scope="col">Modifier</th>
                            <th scope="col">supprimer</th>
                          </tr>
                        </thead>
                        <?php
                        while($dsrow = $dsresult->fetch_assoc()){
                          ?>
                          <tbody>
                            <tr>
                              <td scope="row"><?php echo $dsrow['id_student'] ?></td>
                              <td><?php echo $dsrow['Nom'] ?></td>
                              <td><?php echo $dsrow['Prenom'] ?></td>
                              <td><?php echo $dsrow['Email'] ?></td>
                              <td><?php echo $dsrow['username'] ?></td>
                              <td><?php echo $dsrow['Password'] ?></td>
                              <td><button type="button" class="btn btn-success editbtn">Modifier</button></td>
                              <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                            </tr>
                          
                          </tbody>
                          <?php
                        }
                        ?>
                        
                      </table>
                       </div>
                     </div>
                   </div>
                 </div>
                 <?php

                }
                if($do == 'Gereprof'){
                  ?>
                  <!--add modal-->
                  <div class="modal fade" id="tadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#f6e58d;" class="modal-content">
                        <div class="modal-header">
                          <h5  class="modal-title" id="exampleModalLabel">Ajouter Professeur</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="adminpage.php?action=Gereprof&x=insert" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Nom:</label>
                                      <input type="text" class="form-control " placeholder="Nom" name="tnom" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Prenom:</label>
                                      <input type="text" class="form-control" placeholder="Prenom" name="tprenom" id="usr"> <br>
                                    
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Email:</label>
                                      <input type="email" class="form-control" placeholder="Email" id="usr" name="temail"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> username:</label>
                                      <input type="text" class="form-control" placeholder="username" id="usr" name="tuser"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control" placeholder="password" id="usr" name="tpass"> <br>
                                      
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1"><i class="fa fa-user icon"></i>Niveau</label>
                                        <select class="form-control" name="niveau" onchange="changer()" id="Niveau">
                                        <option >Select Niveau</option>
                                          <?php 
                                            $nreq="SELECT * FROM `niveau`";
                                            $nsql=mysqli_query($cnx,$nreq);
                                            
                                            while($nrow = $nsql->fetch_assoc()){
                                              ?>
                                              <option value="<?php echo $nrow['id_niv'] ?>"><?php echo $nrow['Niveau'] ;?></option>
                                              <?php

                                            }
                                          ?>
                                        </select>
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Filiere</label>
                                        <select class="form-control" name="filiere" id="filiere" onchange="changer()">
                                          <option >Select filliere</option>
                                          <?php 
                                            $req="SELECT * FROM `filieres`";
                                            $sql=mysqli_query($cnx,$req);
                                            
                                            while($mrow = $sql->fetch_assoc()){
                                              ?>
                                              <option value="<?php echo $mrow['id_fil'] ?>"><?php echo $mrow['nom'] ;?></option>
                                              <?php

                                            }
                                          ?>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                    <label for="exampleFormControlSelect1">Matiere</label>
                                        <div id="matiere">
                                          <select class="form-control" name="matiere">
                                          <option>Select matiere</option>
                                    
                                          </select>
                                        </div>                             
                                  </div>
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="save" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                          $chakker='';
                          if(isset($_GET['x'])){
                            $chakker=$_GET['x'];
                          }
                            if($do == 'Gereprof'and $chakker="insert"){
                              if(isset($_POST['save'])){
                                $tname=$_POST['tnom'];
                                $tprenom=$_POST['tprenom'];
                                $temail=$_POST['temail'];
                                $tuser=$_POST['tuser'];
                                $tpass=$_POST['tpass'];
                                $niveau=$_POST['niveau'];
                                $fillier=$_POST['filiere'];
                                $matiere=$_POST['matiere'];
                                $taddreq="INSERT INTO `professeur` (`id_prof`, `nom`, `prenom`, `email`, `username`, `password`, `niveau`, `filliere`, `matiere`) VALUES (NULL, '$tname', '$tprenom', '$temail', '$tuser', '$tpass', '$niveau', '$fillier', '$matiere')";
                                if(mysqli_query($cnx,$taddreq)){
                                  echo '<script>alert("Preofesseur saved");</script>';
                                }
                              }
                            }
                        ?>
                       
                      </div>
                    </div>
                  </div>
                  <!--end of add modal-->
                  <!--start edit Modal -->
                  <div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#d2dae2;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifier Etudiant</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=Gereprof&x=edit" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Nom:</label>
                                      <input type="hidden" class="form-control " id="id" placeholder="Nom" name="id_prof" id="usr"> <br>
                                      <input type="text" class="form-control " id="nom" placeholder="Nom" name="diplomestudentname" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Prenom:</label>
                                      <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="diplomestudentprenom" id="usr"> <br>
                                    
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Email" id="usr" name="diplomestudentemail"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> username:</label>
                                      <input type="text" class="form-control" id="username" placeholder="username" id="usr" name="diplomestudentusername"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control" id="password" placeholder="password" id="usr" name="diplomestudentpassword"> <br>
                                      
                                      
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                         $chakker='';
                         if(isset($_GET['x'])){
                           $chakker=$_GET['x'];
                         }
                        if($do == 'Gereprof'and $chakker == 'edit'){
                          if(isset($_POST['updatedata'])){
                            $id_student=$_POST['id_prof'];
                            $newnom=$_POST['diplomestudentname'];
                            $nweprenom=$_POST['diplomestudentprenom'];
                            $newemail=$_POST['diplomestudentemail'];
                            $newusername=$_POST['diplomestudentusername'];
                            $newpassword=$_POST['diplomestudentpassword'];
                            $dsupdate="UPDATE `professeur` SET `nom` = '$newnom', `prenom` = '$nweprenom', `email` = '$newemail', `username` = '$newusername', `password` = '$newusername' WHERE `professeur`.`id_prof` = '$id_student'";

                            $query_run = mysqli_query($cnx,$dsupdate);
                            if($query_run){
                              echo '<script>alert("professeur a ete Modifier");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of edit modal-->
                  <!--start delete Modal-->
                  <!-- Modal -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#ff3f34;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete this student</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=Gereprof&x=delete" method="POST">
                            <div class="modal-body">
                                                          

                                      <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="id_prof" id="usr"> <br>
                                          
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">yes</button>
                            </div>
                        </form>
                        <?php
                        if($do == 'Gereprof'and $chakker == 'delete'){
                          if(isset($_POST['updatedata'])){
                            $studentid=$_POST['id_prof'];
                            $deletestudentreq="DELETE FROM `professeur` WHERE `id_prof` = '$studentid'";
                            if(mysqli_query($cnx,$deletestudentreq)){
                              echo '<script>alert("prof deleted");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of delete Modal-->
                  <?php
                  $tsreq="SELECT * FROM professeur ORDER BY Nom;";
                  $tsresult = $cnx->query($tsreq);
                  ?>
                   <div class="conatiner">
                     <div class="jumbotron">
                       <div class="card">
                       <h2 style="padding:10px;">Professeurs</h2>                        
                       </div>
                       <div class="card">
                         <div class="card-body">
                         <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#tadd">
                          Ajouter professeur
                        </button>
                         </div>
                      <div class="card">
                       <div class="card-body">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">email</th>
                                    <th scope="col">username</th>
                                    <th scope="col">password</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">supprimer</th>
                                  </tr>
                                </thead>
                                <?php
                                while($tsrow = $tsresult->fetch_assoc()){
                                  ?>
                                  <tbody>
                                    <tr>
                                      <td scope="row"><?php echo $tsrow['id_prof'] ?></td>
                                      <td><?php echo $tsrow['nom'] ?></td>
                                      <td><?php echo $tsrow['prenom'] ?></td>
                                      <td><?php echo $tsrow['email'] ?></td>
                                      <td><?php echo $tsrow['username'] ?></td>
                                      <td><?php echo $tsrow['password'] ?></td>
                                      <td><button type="button"  class="btn btn-success editbtn">Modifier</button></td>
                                      <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                                    </tr>
                                  
                                  </tbody>
                                  <?php
                                }
                                ?>
                                
                              </table>
                       </div>
                     </div>
                       </div>
                     </div>
                   </div>
                               
                  <?php
                }elseif($do == 'GerDP'){
                  ?>
                  <!--add modal-->
                  <div class="modal fade" id="tadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#f6e58d;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ajouter Professeur</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="adminpage.php?action=GerDP&x=insert" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Nom:</label>
                                      <input type="text" class="form-control " placeholder="Nom" name="tnom" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Prenom:</label>
                                      <input type="text" class="form-control" placeholder="Prenom" name="tprenom" id="usr"> <br>
                                    
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Email:</label>
                                      <input type="email" class="form-control" placeholder="Email" id="usr" name="temail"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> username:</label>
                                      <input type="text" class="form-control" placeholder="username" id="usr" name="tuser"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control" placeholder="password" id="usr" name="tpass"> <br>
                                      
                                      
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="save" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                          $chakker='';
                          if(isset($_GET['x'])){
                            $chakker=$_GET['x'];
                          }
                            if($do == 'GerDP'and $chakker="insert"){
                              if(isset($_POST['save'])){
                                $tname=$_POST['tnom'];
                                $tprenom=$_POST['tprenom'];
                                $temail=$_POST['temail'];
                                $tuser=$_POST['tuser'];
                                $tpass=$_POST['tpass'];
                                
                                $taddreq="INSERT INTO `dp` (`id_db`, `nom`, `prenom`, `email`, `username`, `password`) VALUES (NULL, '$tname', '$tprenom', '$temail', '$tuser', '$tpass')";
                                if(mysqli_query($cnx,$taddreq)){
                                  echo '<script>alert("Directeur  saved");</script>';
                                }
                              }
                            }
                        ?>
                       
                      </div>
                    </div>
                  </div>
                  <!--end of add modal-->
                  <!--start edit Modal -->
                  <div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#d2dae2;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifier Etudiant</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=GerDP&x=edit" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Nom:</label>
                                      <input type="hidden" class="form-control " id="id" placeholder="Nom" name="id_prof" id="usr"> <br>
                                      <input type="text" class="form-control " id="nom" placeholder="Nom" name="diplomestudentname" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Prenom:</label>
                                      <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="diplomestudentprenom" id="usr"> <br>
                                    
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Email:</label>
                                      <input type="email" class="form-control" id="email" placeholder="Email" id="usr" name="diplomestudentemail"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> username:</label>
                                      <input type="text" class="form-control" id="username" placeholder="username" id="usr" name="diplomestudentusername"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control" id="password" placeholder="password" id="usr" name="diplomestudentpassword"> <br>
                                      
                                      
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                         $chakker='';
                         if(isset($_GET['x'])){
                           $chakker=$_GET['x'];
                         }
                        if($do == 'GerDP'and $chakker == 'edit'){
                          if(isset($_POST['updatedata'])){
                            $id_student=$_POST['id_prof'];
                            $newnom=$_POST['diplomestudentname'];
                            $nweprenom=$_POST['diplomestudentprenom'];
                            $newemail=$_POST['diplomestudentemail'];
                            $newusername=$_POST['diplomestudentusername'];
                            $newpassword=$_POST['diplomestudentpassword'];
                            $dsupdate="UPDATE `dp` SET `nom` = '$newnom', `prenom` = '$nweprenom', `email` = '$newemail', `username` = '$newusername', `password` = '$newusername' WHERE `dp`.`id_db` = '$id_student'";

                            $query_run = mysqli_query($cnx,$dsupdate);
                            if($query_run){
                              echo '<script>alert("directeur a ete Modifier");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of edit modal-->
                  <!--start delete Modal-->
                  <!-- Modal -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#ff3f34;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete DP</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=GerDP&x=delete" method="POST">
                            <div class="modal-body">
                                                          

                                      <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="id_db" id="usr"> <br>
                                          
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">yes</button>
                            </div>
                        </form>
                        <?php
                        if($do == 'GerDP'and $chakker == 'delete'){
                          if(isset($_POST['updatedata'])){
                            $studentid=$_POST['id_db'];
                            $deletestudentreq="DELETE FROM `dp` WHERE `id_db` = '$studentid'";
                            if(mysqli_query($cnx,$deletestudentreq)){
                              echo '<script>alert("dp deleted");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of delete Modal-->
                  <?php
                  $dpsreq="SELECT * FROM dp ORDER BY Nom;";
                  $dpsresult = $cnx->query($dpsreq);
                  ?>
                  <div class="conatiner">
                    <div style="background-color:#03021b;" class="jumbotron">
                      <div class="card">
                      <h2 style="padding:10px;">Directeur Pédagogique</h2>                        
                      </div>
                      <div class="card">
                        <div class="card-body">
                        <button type="button" class="btn btn-info " data-toggle="modal" data-target="#tadd">
                          Ajouter Directeur Pédagogique
                        </button>
                        </div>
                      <div class="card">
                      <div class="card-body">
                              <table class="table">
                                <thead class="table-primary">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">email</th>
                                    <th scope="col">username</th>
                                    <th scope="col">password</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">supprimer</th>
                                  </tr>
                                </thead>
                                <?php
                                while($dpsrow = $dpsresult->fetch_assoc()){
                                  ?>
                                  <tbody>
                                    <tr>
                                      <td  scope="row"><?php echo $dpsrow['id_db'] ?></td>
                                      <td ><?php echo $dpsrow['nom'] ?></td>
                                      <td><?php echo $dpsrow['prenom'] ?></td>
                                      <td><?php echo $dpsrow['email'] ?></td>
                                      <td><?php echo $dpsrow['username'] ?></td>
                                      <td><?php echo $dpsrow['password'] ?></td>
                                      <td><button type="button"  class="btn btn-success editbtn">Modifier</button></td>
                                      <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                                    </tr>
                                  
                                  </tbody>
                                  <?php
                                }
                                ?>
                                
                              </table>
                       </div>
                     </div>
                       </div>
                     </div>
                   </div>
                               
                  <?php
                }elseif($do == 'inscription' and $amine == 'TRS'){
                  ?>
                  
                  <!--start valide Modal -->
                  <div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#d2dae2;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifier Etudiant</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=inscription&doing=TRS&x=edit" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                      <input type="hidden" class="form-control " id="id" placeholder="Nom" name="id_student" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Username:</label>
                                      <input type="text" class="form-control " id="user" placeholder="Nom" name="user" > <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control " placeholder="Nom" name="pass" > <br>
                                      
                                      
                                      
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                         $chakker='';
                         if(isset($_GET['x'])){
                           $chakker=$_GET['x'];
                         }
                        if($amine == 'TRS' and $do == 'inscription' and $chakker == 'edit'){
                          if(isset($_POST['updatedata'])){
                            $id_student=$_POST['id_student'];
                            $username = $_POST['user'];
                            $password = $_POST['pass'];

                            $vreq="SELECT * FROM `training_formation_inscription` where id_inscription = {$id_student}";
                            $vsql = mysqli_query($cnx,$vreq);
                            $vrow = mysqli_fetch_assoc($vsql);
                            $nom = $vrow['nom'];
                            $prenom = $vrow['prenom'];
                            $email = $vrow['email'];
                            $niv = $vrow['niveau'];
                            $fil = $vrow['filliere'];
                            $mat = $vrow['matiere'];

                            $insert="INSERT INTO `training_student` (`id_student`, `nom`, `prenom`, `email`, `username`, `password`, `niveau`, `filliere`, `matiere`) 
                            VALUES (NULL, '{$nom}', '{$prenom}', '{$email}', '{$username}', '{$password}', '{$niv}', '{$fil}', '{$mat}')";
                            if(mysqli_query($cnx,$insert)){
                              $dsupdate="DELETE FROM `training_formation_inscription` WHERE `id_inscription` = {$id_student}";

                              $query_run = mysqli_query($cnx,$dsupdate);
                              if($query_run){
                                echo '<script>alert("student valider");</script>';
                              }
                            }
                            
                            
                            
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of valider modal-->
                  <!--start delete Modal-->
                  <!-- Modal -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#ff3f34;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">voulez vous supprimer cette inscription</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=inscription&doing=TRS&x=delete" method="POST">
                            <div class="modal-body">
                                                          
                                      
                                      <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="id_student" id="usr"> <br>
                                          
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">yes</button>
                            </div>
                        </form>
                        <?php
                        if($amine == 'TRS' and $do == 'inscription' and $chakker == 'delete'){
                          if(isset($_POST['updatedata'])){
                            $studentid=$_POST['id_student'];
                            $deletestudentreq="DELETE FROM `training_formation_inscription` WHERE `id_inscription` = '$studentid'";
                            if(mysqli_query($cnx,$deletestudentreq)){
                              echo '<script>alert("Inscription deleted");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of delete Modal-->
                  <?php
                  $tsreq="SELECT * FROM `training_formation_inscription` ORDER BY nom;";
                  $tsresult = $cnx->query($tsreq);
                  ?>
                   <div class="conatiner">
                     <div class="jumbotron">
                       <div class="card">
                       <h2 style="padding:10px;">Training Etudiants</h2>                        
                       </div>
                      
                         
                      <div class="card">
                       <div class="card-body">
                              <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Niveau</th>
                                    <th scope="col">filliere</th>
                                    <th scope="col">Matiere</th>
                                    <th scope="col">Valider</th>
                                    <th scope="col">supprimer</th>
                                  </tr>
                                </thead>
                                <?php
                                while($tsrow = $tsresult->fetch_assoc()){
                                  ?>
                                  <tbody>
                                    <tr>
                                      <td scope="row"><?php echo $tsrow['id_inscription'] ?></td>
                                      <td><?php echo $tsrow['nom'] ?></td>
                                      <td><?php echo $tsrow['prenom'] ?></td>
                                      <td><?php echo $tsrow['email'] ?></td>
                                      <td><?php echo $tsrow['niveau'] ?></td>
                                      <td><?php echo $tsrow['filliere'] ?></td>
                                      <td><?php echo $tsrow['matiere'] ?></td>
                                      <td><button type="button" class="btn btn-success editbtn">Valider</button></td>
                                      <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                                    </tr>
                                  
                                  </tbody>
                                  <?php
                                }
                                ?>
                                
                              </table>
                       </div>
                     </div>
                       </div>
                     </div>
                   </div>
                               
                  <?php

                }elseif($do == 'inscription' and $amine == 'DIS'){
                  ?>
                  
                  <!--start valide Modal -->
                  <div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#3fdb68;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">valider Inscription</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=inscription&doing=DIS&x=edit" method="POST">
                            <div class="modal-body">
                                                          
                                      <label for="usr">
                                      <input type="hidden" class="form-control " id="id" placeholder="Nom" name="id_student" id="usr"> <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Username:</label>
                                      <input type="text" class="form-control" id="usr" placeholder="Username" name="user" > <br>
                                      <label for="usr">
                                        <i class="fa fa-user icon"></i> Password:</label>
                                      <input type="text" class="form-control " id="usr" placeholder="Password" name="pass" > <br>
                                      
                                      
                                      
                                    
                                                                  
                                  
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">Save</button>
                            </div>
                        </form>
                        <?php
                         $chakker='';
                         if(isset($_GET['x'])){
                           $chakker=$_GET['x'];
                         }
                        if($amine == 'DIS' and $do == 'inscription' and $chakker == 'edit'){
                          if(isset($_POST['updatedata'])){
                            $id_student=$_POST['id_student'];
                            $username = $_POST['user'];
                            $password = $_POST['pass'];

                            $vreq="SELECT * FROM `diplome_formation_inscription` where id_inscription = {$id_student}";
                            $vsql = mysqli_query($cnx,$vreq);
                            $vrow = mysqli_fetch_assoc($vsql);
                            $nom = $vrow['nom'];
                            $prenom = $vrow['prenom'];
                            $email = $vrow['email'];
                            $niv = $vrow['niveau'];
                            $fil = $vrow['filliere'];

                            $insert="INSERT INTO `diplome_student` (`id_student`, `nom`, `prenom`, `email`, `username`, `password`, `niveau`, `filliere`) 
                            VALUES (NULL, '{$nom}', '{$prenom}', '{$email}', '{$username}', '{$password}', '{$niv}', '{$fil}')";
                            if(mysqli_query($cnx,$insert)){
                              $dsupdate="DELETE FROM `diplome_formation_inscription` WHERE `id_inscription` = {$id_student}";

                              $query_run = mysqli_query($cnx,$dsupdate);
                              if($query_run){
                                echo '<script>alert("student valider");</script>';
                              }
                            }
                            
                            
                            
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of valider modal-->
                  <!--start delete Modal-->
                  <!-- Modal -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div style="background-color:#ff3f34;" class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">voulez vous supprimer cette inscription</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <form action="adminpage.php?action=inscription&doing=DIS&x=delete" method="POST">
                            <div class="modal-body">
                                                          
                                      
                                      <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="id_student" id="usr"> <br>
                                          
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button  name="updatedata" class="btn btn-info">yes</button>
                            </div>
                        </form>
                        <?php
                        if($amine == 'DIS' and $do == 'inscription' and $chakker == 'delete'){
                          if(isset($_POST['updatedata'])){
                            $studentid=$_POST['id_student'];
                            $deletestudentreq="DELETE FROM `diplome_formation_inscription` WHERE `id_inscription` = '$studentid'";
                            if(mysqli_query($cnx,$deletestudentreq)){
                              echo '<script>alert("Inscription deleted");</script>';
                            }
                          }
                        }
                        ?>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <!--end of delete Modal-->
                  <?php
                  $tsreq="SELECT * FROM `diplome_formation_inscription` ORDER BY nom;";
                  $tsresult = $cnx->query($tsreq);
                  ?>
                   <div class="conatiner">
                     <div class="jumbotron">
                       <div class="card">
                       <h2 style="padding:10px;">Diplome Inscription</h2>                        
                       </div>
                      
                         
                      <div class="card">
                       <div class="card-body">
                              <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Niveau</th>
                                    <th scope="col">filliere</th>
                                    <th scope="col">Valider</th>
                                    <th scope="col">supprimer</th>
                                  </tr>
                                </thead>
                                <?php
                                while($tsrow = $tsresult->fetch_assoc()){
                                  ?>
                                  <tbody>
                                    <tr>
                                      <td scope="row"><?php echo $tsrow['id_inscription'] ?></td>
                                      <td><?php echo $tsrow['nom'] ?></td>
                                      <td><?php echo $tsrow['prenom'] ?></td>
                                      <td><?php echo $tsrow['email'] ?></td>
                                      <td><?php echo $tsrow['niveau'] ?></td>
                                      <td><?php echo $tsrow['filliere'] ?></td>
                                      <td><button type="button" class="btn btn-success editbtn">Valider</button></td>
                                      <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                                    </tr>
                                  
                                  </tbody>
                                  <?php
                                }
                                ?>
                                
                              </table>
                       </div>
                     </div>
                       </div>
                     </div>
                   </div>
                               
                  <?php
                }elseif($amine == 'TRS' and $do == "Absences"){
                  ?>
                      <!--Add absence-->
                      <div class="modal fade" id="AbsenceT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Gestion d'absences </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="adminpage.php?action=Absences&doing=TRS&y=insert" method="post">
                                  <div class="modal-body">
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Fullname : </label>
                                        <select name="fname" class="form-control" id="exampleFormControlSelect1">
                                          <?php
                                            $tipreq="SELECT * FROM `training_student` ORDER BY nom";
                                            $tipsql=mysqli_query($cnx,$tipreq);
                                            $tipcount=mysqli_num_rows($tipsql);
                                            while($tsrow = $tipsql->fetch_assoc()){
                                              ?>
                                                <option value="<?php  echo $tsrow['id_student'];  ?>"><?php echo $tsrow['nom']." ".$tsrow['prenom'];  ?></option>
                                              <?php
                                            }

                                          ?>
                                          
                                        </select>
                                      </div>
                                      <div class="form-group ">
                                        <label for="example-date-input" class=" col-form-label">Date d'absence</label>
                                        
                                          <input name="date" class="form-control" type="date"  id="example-date-input">
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Nombre d'heurs</label>
                                        <input name="heur" type="Number" class="form-control" id="exampleInputPassword1" placeholder="Nombre d'heurs">
                                      </div>
                                      
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button name="save" class="btn btn-primary">save</button>
                                  </div>
                            </form>
                            <?php

                            $chakker='';
                            if(isset($_GET['y'])){
                              $chakker=$_GET['y'];
                            }
                            if($amine == 'TRS' and $do == "Absences" and $chakker == "insert"){
                              if(isset($_POST['save'])){
                                $fname=$_POST['fname'];
                                $date=$_POST['date'];
                                $heur=$_POST['heur'];
                              
                                $req="INSERT INTO `absence` (`id_abs`, `nbr_h`, `dateabs`, `id_studentd`, `id_studentt`, `id_prof`)VALUES (NULL, '{$heur}', '{$date}', NULL, '$fname', NULL)";
                                if(mysqli_query($cnx,$req)){
                                  echo '<script>alert("Absence  saved");</script>';
                                }
                                
                              }
                            }
                                
                                

                            ?>
                            
                          </div>
                        </div>
                      </div>
                      <!--End of Add absence-->
                      <!--delete absence-->
                      <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div style="background-color:#ff3f34;" class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete Absence</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form action="adminpage.php?action=Absences&doing=TRS&y=delete" method="POST">
                                <div class="modal-body">
                                                              

                                          <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="ts_abs" id="usr"> <br>
                                              
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button  name="updatedata" class="btn btn-info">yes</button>
                                </div>
                            </form>
                            <?php
                            if($amine == 'TRS' and $do == "Absences" and $chakker == "delete"){
                              if(isset($_POST['updatedata'])){
                                $studentid=$_POST['ts_abs'];
                                $deletestudentreq="DELETE FROM `absence` WHERE `absence`.`id_abs` = '$studentid'";
                                if(mysqli_query($cnx,$deletestudentreq)){
                                  echo '<script>alert("absence deleted");</script>';
                                }
                              }
                            }
                            ?>
                            </div>
                            
                          </div>
                        </div>
                    </div>
                      <!--End delete absence-->
                      <?php   
                      $req="SELECT id_abs, training_student.nom ,training_student.prenom,nbr_h,dateabs FROM absence INNER JOIN training_student ON absence.id_studentt=training_student.id_student";
                      $sql = $cnx->query($req);
                      ?>
                      <div class="container-fluid">
                        <div class="jumbotron">
                          <div class="card">
                          <h1>Gestion d'absence du Training student</h1>
                          </div>
                          <div class="card">
                            <div class="card-body">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#AbsenceT">
                              Ajouter Absence
                            </button>
                            </div>
                            <div class="card-body">
                                <table class="table table-dark">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Full name</th>
                                      <th scope="col">Date d'absence</th>
                                      <th scope="col">Nombre des Heures</th>
                                      <th scope="col">#</th>
                                    </tr>
                                  </thead>
                                  <?php
                                while($tsrow = $sql->fetch_assoc()){
                                  ?>
                                  <tbody>
                                    <tr>
                                      <td scope="row"><?php echo $tsrow['id_abs'];  ?></td>
                                      <td><?php echo $tsrow['nom']." ".$tsrow['prenom']; ?></td>
                                      <td><?php  echo $tsrow['dateabs'] ;  ?></td>
                                      <td><?php echo $tsrow['nbr_h'];?></td>
                                      <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                                    </tr>
                                    
                                  </tbody>
                                  <?php
                                }
                                  ?>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>



                  
                  <?php
                }elseif($amine == 'DIS' and $do == "Absences"){
                  ?>
                     <!--Add absence-->
                     <div class="modal fade" id="AbsenceT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Gestion d'absences </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="adminpage.php?action=Absences&doing=DIS&y=insert" method="post">
                                  <div class="modal-body">
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Fullname : </label>
                                        <select name="fname" class="form-control" id="exampleFormControlSelect1">
                                          <?php
                                            $tipreq="SELECT * FROM `diplome_student` ORDER BY Nom";
                                            $tipsql=mysqli_query($cnx,$tipreq);
                                            $tipcount=mysqli_num_rows($tipsql);
                                            while($tsrow = $tipsql->fetch_assoc()){
                                              ?>
                                                <option value="<?php  echo $tsrow['id_student'];  ?>"><?php echo $tsrow['Nom']." ".$tsrow['Prenom'];  ?></option>
                                              <?php
                                            }

                                          ?>
                                          
                                        </select>
                                      </div>
                                      <div class="form-group ">
                                        <label for="example-date-input" class=" col-form-label">Date d'absence</label>
                                        
                                          <input name="date" class="form-control" type="date"  id="example-date-input">
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Nombre d'heurs</label>
                                        <input name="heur" type="Number" class="form-control" id="exampleInputPassword1" placeholder="Nombre d'heurs">
                                      </div>
                                      
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button name="save" class="btn btn-primary">save</button>
                                  </div>
                            </form>
                            <?php

                            $chakker='';
                            if(isset($_GET['y'])){
                              $chakker=$_GET['y'];
                            }
                            if($amine == 'DIS' and $do == "Absences" and $chakker == "insert"){
                              if(isset($_POST['save'])){
                                $fname=$_POST['fname'];
                                $date=$_POST['date'];
                                $heur=$_POST['heur'];
                              
                                $req="INSERT INTO `absence` (`id_abs`, `nbr_h`, `dateabs`, `id_studentd`, `id_studentt`, `id_prof`)VALUES (NULL, '{$heur}', '{$date}', '$fname', NULL, NULL)";
                                if(mysqli_query($cnx,$req)){
                                  echo '<script>alert("Absence  saved");</script>';
                                }
                                
                              }
                            }
                                
                                

                            ?>
                            
                          </div>
                        </div>
                      </div>
                      <!--End of Add absence-->
                      <!--delete absence-->
                      <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div style="background-color:#ff3f34;" class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete Absence</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form action="adminpage.php?action=Absences&doing=DIS&y=delete" method="POST">
                                <div class="modal-body">
                                                              

                                          <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="ts_abs" id="usr"> <br>
                                              
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button  name="updatedata" class="btn btn-info">yes</button>
                                </div>
                            </form>
                            <?php
                            if($amine == 'DIS' and $do == "Absences" and $chakker == "delete"){
                              if(isset($_POST['updatedata'])){
                                $studentid=$_POST['ts_abs'];
                                $deletestudentreq="DELETE FROM `absence` WHERE `absence`.`id_abs` = '$studentid'";
                                if(mysqli_query($cnx,$deletestudentreq)){
                                  echo '<script>alert("absence deleted");</script>';
                                }
                              }
                            }
                            ?>
                            </div>
                            
                          </div>
                        </div>
                    </div>
                      <!--End delete absence-->
                      <?php   
                      $req="SELECT id_abs , diplome_student.Nom , diplome_student.prenom , nbr_h,dateabs FROM absence INNER JOIN diplome_student on absence.id_studentd=diplome_student.id_student";
                      $sql = $cnx->query($req);
                      ?>
                      <div class="container-fluid">
                        <div class="jumbotron">
                          <div class="card">
                          <h1>Gestion d'absence du Diplome student</h1>
                          </div>
                          <div class="card">
                            <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AbsenceT">
                              Ajouter Absence
                            </button>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Full name</th>
                                      <th scope="col">Date d'absence</th>
                                      <th scope="col">Nombre des Heures</th>
                                      <th scope="col">#</th>
                                    </tr>
                                  </thead>
                                  <?php
                                while($tsrow = $sql->fetch_assoc()){
                                  ?>
                                  <tbody>
                                    <tr>
                                      <td scope="row"><?php echo $tsrow['id_abs'];  ?></td>
                                      <td><?php echo $tsrow['Nom']." ".$tsrow['prenom']; ?></td>
                                      <td><?php  echo $tsrow['dateabs'] ;  ?></td>
                                      <td><?php echo $tsrow['nbr_h'];?></td>
                                      <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                                    </tr>
                                    
                                  </tbody>
                                  <?php
                                }
                                  ?>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>

                  <?php
                }elseif($amine == 'PROF' and $do == "Absences"){
                  ?>
                     <!--Add absence-->
                     <div class="modal fade" id="AbsenceT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Gestion d'absences </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="adminpage.php?action=Absences&doing=PROF&y=insert" method="post">
                                  <div class="modal-body">
                                      <div class="form-group">
                                        <label for="exampleFormControlSelect1">Fullname : </label>
                                        <select name="fname" class="form-control" id="exampleFormControlSelect1">
                                          <?php
                                            $tipreq="SELECT * FROM `professeur` ORDER BY nom";
                                            $tipsql=mysqli_query($cnx,$tipreq);
                                            $tipcount=mysqli_num_rows($tipsql);
                                            while($tsrow = $tipsql->fetch_assoc()){
                                              ?>
                                                <option value="<?php  echo $tsrow['id_prof'];  ?>"><?php echo $tsrow['nom']." ".$tsrow['prenom'];  ?></option>
                                              <?php
                                            }

                                          ?>
                                          
                                        </select>
                                      </div>
                                      <div class="form-group ">
                                        <label for="example-date-input" class=" col-form-label">Date d'absence</label>
                                        
                                          <input name="date" class="form-control" type="date"  id="example-date-input">
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Nombre d'heurs</label>
                                        <input name="heur" type="Number" class="form-control" id="exampleInputPassword1" placeholder="Nombre d'heurs">
                                      </div>
                                      
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button name="save" class="btn btn-primary">save</button>
                                  </div>
                            </form>
                            <?php

                            $chakker='';
                            if(isset($_GET['y'])){
                              $chakker=$_GET['y'];
                            }
                            if($amine == 'PROF' and $do == "Absences" and $chakker == "insert"){
                              if(isset($_POST['save'])){
                                $fname=$_POST['fname'];
                                $date=$_POST['date'];
                                $heur=$_POST['heur'];
                              
                                $req="INSERT INTO `absence` (`id_abs`, `nbr_h`, `dateabs`, `id_studentd`, `id_studentt`, `id_prof`)VALUES (NULL, '{$heur}', '{$date}', NULL, NULL, '$fname')";
                                if(mysqli_query($cnx,$req)){
                                  echo '<script>alert("Absence  saved");</script>';
                                }
                                
                              }
                            }
                                
                                

                            ?>
                            
                          </div>
                        </div>
                      </div>
                      <!--End of Add absence-->
                      <!--delete absence-->
                      <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div style="background-color:#ff3f34;" class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete Absence</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <form action="adminpage.php?action=Absences&doing=PROF&y=delete" method="POST">
                                <div class="modal-body">
                                                              

                                          <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="ts_abs" id="usr"> <br>
                                              
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button  name="updatedata" class="btn btn-info">yes</button>
                                </div>
                            </form>
                            <?php
                            if($amine == 'PROF' and $do == "Absences" and $chakker == "delete"){
                              if(isset($_POST['updatedata'])){
                                $studentid=$_POST['ts_abs'];
                                $deletestudentreq="DELETE FROM `absence` WHERE `absence`.`id_abs` = '$studentid'";
                                if(mysqli_query($cnx,$deletestudentreq)){
                                  echo '<script>alert("absence deleted");</script>';
                                }
                              }
                            }
                            ?>
                            </div>
                            
                          </div>
                        </div>
                    </div>
                      <!--End delete absence-->
                      <?php   
                      $req="SELECT id_abs, professeur.nom ,professeur.prenom,nbr_h,dateabs FROM absence INNER JOIN professeur ON absence.id_prof=professeur.id_prof";
                      $sql = $cnx->query($req);
                      ?>
                      <div class="container-fluid">
                        <div style="" class="jumbotron">
                          <div class="card">
                          <h1>Gestion d'absence du Professeur</h1>
                          </div>
                          <div class="card">
                            <div class="card-body">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#AbsenceT">
                              Ajouter Absence
                            </button>
                            </div>
                            <div class="card-body">
                                <table style="background: #007991;  /* fallback for old browsers */
                                    background: -webkit-linear-gradient(to right, #78ffd6, #007991);  /* Chrome 10-25, Safari 5.1-6 */
                                    background: linear-gradient(to right, #78ffd6, #007991); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                    " class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Full name</th>
                                      <th scope="col">Date d'absence</th>
                                      <th scope="col">Nombre des Heures</th>
                                      <th scope="col">#</th>
                                    </tr>
                                  </thead>
                                  <?php
                                while($tsrow = $sql->fetch_assoc()){
                                  ?>
                                  <tbody>
                                    <tr>
                                      <td scope="row"><?php echo $tsrow['id_abs'];  ?></td>
                                      <td><?php echo $tsrow['nom']." ".$tsrow['prenom']; ?></td>
                                      <td><?php  echo $tsrow['dateabs'] ;  ?></td>
                                      <td><?php echo $tsrow['nbr_h'];?></td>
                                      <td><button type="button" class="btn btn-danger deletebtn ">supprimer</button></td>
                                    </tr>
                                    
                                  </tbody>
                                  <?php
                                }
                                  ?>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php
                }
                   
                 
            ?>
            
            
          </div>
        </div>
       
        
       
        
 </div>
      </div>
		</div>
                
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
      
      function display(){
        var amine = document.getElementById("formation").value;
        if(amine == "DI"){
            document.getElementById("tr").style.display = "block";
        }
        else{
            document.getElementById("tr").style.display = "none";

        }
        
      } 
      
    </script>
   <script>
     function changer(){
      var fil = document.getElementById("filiere").value;
      var niv = document.getElementById("Niveau").value;
      
      if(window.XMLHttpRequest){
        var myrep = new XMLHttpRequest();
      }
      else{
        var myrep = new ActiveXObject("Microsoft.XMLHTTP");
      }
      myrep.open("GET","ajax.php?fil="+fil+"&niv="+niv,true);
      myrep.send();
      var d = document.getElementById("matiere");
      myrep.onreadystatechange = function() {
        if (myrep.readyState == 4 && myrep.status == 200) {
          d.innerHTML = myrep.responseText;
        }
        
        
    }
  }
    </script>
     <script>
      $(document).ready(function(){
        $(".deletebtn").on('click',function(){
          $("#deletemodal").modal("show");
          $tr = $(this).closest('tr');
          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();
          console.log(data);
          $('#id_amine').val(data[0]);
          
        })
      });
    </script>
    <script>
      $(document).ready(function(){
        $(".editbtn").on('click',function(){
          $("#studenteditmodal").modal("show");
          $tr = $(this).closest('tr');
          var data = $tr.children("td").map(function(){
            return $(this).text();
          }).get();
          console.log(data);
          $('#id').val(data[0]);
          $('#nom').val(data[1]);
          $('#prenom').val(data[2]);
          $('#email').val(data[3]);
          $('#username').val(data[4]);
          $('#password').val(data[5]);
        })
      });
    </script>
  </body>
</html>