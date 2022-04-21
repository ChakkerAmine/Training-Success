<?php
require 'cnx.php';
session_start();
if(!isset($_SESSION['dpusername'])){
    header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Directeur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <style>


.btn.btn-primary:hover, .btn.btn-primary:focus {
    background: #0f922c !important;
    border-color: #1d5b1d !important;
}
.btn.btn-primary {
    background: #1d5b1d;
    border-color: #1d5b1d;
}
    .admins{
        margin: 20px;
        padding: 10px;
        background-color: cadetblue;
        width: 70%;
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
        width: 80%;
        font-family: 'Cinzel', serif;
        border-radius: 10px 100px / 120px;
    }
    .teachers{
        margin: 20px;
        padding: 10px;
        background-color: coral;
        width: 90%;
        font-family: 'Cinzel', serif;
        border-radius: 10px 100px / 120px;
    }
    .icon{
      margin-top: 10px!important;

    }
    #sidebar{
      background: #41295a!important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2F0743, #41295a)!important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2F0743, #41295a)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .navbtn{
      background: #41295a!important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2F0743, #41295a)!important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2F0743, #41295a)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    
    
    .show1{
        border:2px solid #168a6d;
        padding: 10px 20px;
    }
    body{
      background: #abbaab;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffffff, #abbaab);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffffff, #abbaab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .notification {
  color: white;
  text-decoration: none;
  position: relative;
  display: inline-block;
  border-radius: 2px;
  
}



.notification .badge {
    position: absolute;
    top: 7px;
    right: 75px;
    padding: 5px 10px;
    border-radius: 50%;
    background: red;
    color: white;
}
/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background: #41295a!important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2F0743, #41295a)!important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2F0743, #41295a)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  border-radius:4px;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  height: 200px;
}
.suj{
  height:56px!important;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.btn1{
      margin-top:20px!important;
    }
  </style>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
          <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(img/dp.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fas fa-passport' style='font-size:18px;color:#f8b739'></i> Mon Profile</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="dp.php?action=proshow">voir Profile</a>
                </li>
                <li>
                    <a href="dp.php?action=proedit">Modifier profile</a>
                </li>
                
	            </ul>
	          </li>
	          
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fas fa-book' style='font-size:18px;color:#f8b739'></i> Gestion</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">               
                
                <li>
                <a href="dp.php?action=MessageV" class="notification">
                  <span>Message de visiteur</span>
                  <span class="badge">
                  <?php
                    $req="SELECT * FROM `contact_visiteur`";
                    echo mysqli_num_rows(mysqli_query($cnx,$req));

                  ?>
                  </span>
                </a>
                </li>
                <li>
                  <a href="dp.php?action=Module">Gestion du Modules</a>
              </li>
              </ul>
	          </li>
	          <li>
              <a href="dp.php?action=rapport"><i class='far fa-id-badge' style='font-size:18px;color:#f8b739'></i> Envoyer Rapport</a>
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

            <button type="button" id="sidebarCollapse" class="btn btn-primary navbtn">
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
                    <a class="nav-link" href="#">Envoyer Rapport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
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
                      <h1>Directeur pédagogique<i class="fa fa-address-book" style="font-size:24px"></i></h1>
                      <h3>
                      <?php
                       $pipreq="SELECT * FROM `dp`";
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
                      <h1>Teachers    <i style="font-size:24px" class="fa">&#xf19d;</i></h1>
                      <h3>
                      <?php
                           $dipreq="SELECT * FROM `professeur`";
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
               $x= $_SESSION['id_db'];
               $amine='';
               if (isset($_GET['action'])){
                 $amine=$_GET['action'];
               }
               $y='';
               if(isset($_GET['doing'])){
                 $y=$_GET['doing'];
               }
               elseif(empty($amine)){
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
              }elseif($amine == "proshow"){
                $dpreq="SELECT * FROM `dp` WHERE id_db={$x}";


                 $dpsql=mysqli_query($cnx,$dpreq);

                 $dpcount=mysqli_num_rows($dpsql);

                 
                 $dprow=mysqli_fetch_assoc($dpsql);

                 ?>
                  <h2 class="mb-4 text-center">Mon Profile :</h2>
                  <div class="show1">
                    <img class="rounded mx-auto d-block" style="width:100px;border-radius: 50%;margin-bottom:20px;" src="img/dp.png" alt="profilpic"> 
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Nom :</h3><h3 style="font-size:20px;"><?php echo $dprow['nom'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Prenom :</h3><h3 style="font-size:20px;"><?php echo $dprow['prenom'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>email :</h3><h3 style="font-size:20px;"><?php echo $dprow['email'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Username :</h3><h3 style="font-size:20px;"><?php echo $dprow['username'];?></h3>
                  </div>

                 <?php
               }elseif($amine == 'proedit'){
                    $dpreq="SELECT * FROM `dp` WHERE id_db={$x}";


                    $dpsql=mysqli_query($cnx,$dpreq);

                    $dpcount=mysqli_num_rows($dpsql);

                    
                    $dprow=mysqli_fetch_assoc($dpsql);
                    ?>
                    <h2 class="mb-4">Modifier Profile</h2>
                    <form action="?action=dpupdate" method="POST">
                      <input type="hidden" name="userid" value=<?php echo $dprow['id_db'] ?>>
                    <label for="usr">
                    <i class="fa fa-user icon"></i> Nom:</label>
                      <input type="text" class="form-control" value="<?php echo $dprow['nom'] ?>"  name="dpname" id="usr"> <br>
                      <label for="usr">
                    <i class="fa fa-user icon"></i> Prenom:</label>
                      <input type="text" class="form-control" value="<?php echo $dprow['prenom']; ?>"  name="dplname" id="usr"> <br>
                      <label for="usr">
                    <i class="fa fa-user icon"></i> Username:</label>
                      <input type="text" class="form-control" value="<?php echo $dprow['username']; ?>"  name="dpuser" id="usr"> <br>
                      <label for="usr">
                    <i class="fa fa-user icon"></i> New Password:</label>
                      <input type="text" class="form-control"  name="dppass" id="usr" > <br>
                      <label for="usr">
                    <i class="fa fa-user icon"></i> Email:</label>
                      <input type="email" class="form-control" value="<?php echo $dprow['email']; ?>" name="dpemail" id="usr"> <br>
                      <button name="update" class="btn btn-secondary">Enregistrer</button>
                    </form>
                    
                    <?php
                    }elseif($amine == 'dpupdate'){
                      if($_SERVER['REQUEST_METHOD']=='POST'){
                        $dpid=$_POST['userid'];
                        $dpname=$_POST['dpname'];
                        $dplname=$_POST['dplname'];
                        $dpuser=$_POST['dpuser'];
                        $dppass=$_POST['dppass'];
                        $dpemail=$_POST['dpemail'];
                        $dpupdate="UPDATE `dp` SET `nom` = '{$dpname}', `prenom` = '{$dplname}', `email` = '{$dpemail}', `username` = '{$dpuser}', `password` = '$dppass' WHERE `id_db` = '{$dpid}'";
                        if(mysqli_query($cnx,$dpupdate)){
                          ?>
                        <div class="alert alert-success">
                          <strong>Success!</strong> Votre compte a ete modifier
                        </div>
                        <?php
                        }
                      }else{
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
        <div class="container_fluid">
        <?php  
        if($amine == 'MessageV'){
            ?>
            <h1 style="margin-top:50px">Message de Visiteurs :</h1>
            <?php
        }
        ?>
            
            <div class="row">
                <?php
                   if($amine == 'MessageV'){
                    $req="SELECT * FROM `contact_visiteur`";
                    $sql=mysqli_query($cnx,$req);
                    $count=mysqli_num_rows($sql);
                    while($mrow = $sql->fetch_assoc()){
                      ?>
                        <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
                            <div class="toast-header">
                              <svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                <rect fill="#007aff" width="100%" height="100%" /></svg>
                              <strong class="mr-auto"><?php echo $mrow['contact_username']; ?></strong>
                              <small>visiteur</small>
                              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="toast-body">
                              <p><strong>Email : </strong><?php  echo $mrow['contact_email'];  ?></p>
                              <p><strong>Telephone : </strong><?php  echo $mrow['contact_tele'];  ?></p>
                              
                              <p> <strong>Message : </strong> <?php  echo $mrow['contact_sujet'];?></p>

                              <a style="text-decoration:none;color:red" href="dp.php?action=MessageV&doing=<?php echo $mrow['contact_id'];?>">Supprimer</a>
                            </div>
                        </div>
                      <?php
                    }if(isset($_GET['doing'])){
                      $req="DELETE FROM `contact_visiteur` WHERE `contact_id` = '{$_GET['doing']}'";
                      if(mysqli_query($cnx,$req)){
                        echo '<script>window.location.assign("dp.php?action=MessageV")</script>';
                        
                      }
                    }
                   }elseif($amine == 'Module'){
                    ?>
                    <!--add modal-->
                    <div class="modal fade" id="tadd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div style="background-color:#f6e58d;" class="modal-content">
                          <div class="modal-header">
                            <h5  class="modal-title" id="exampleModalLabel">Ajouter Module</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="dp.php?action=Module&x=insert" method="POST">
                              <div class="modal-body">
                                                            
                                        <label for="usr">
                                          <i class="fa fa-user icon"></i> Nom du Module:</label>
                                        <input type="text" class="form-control " placeholder="Nom du Module" name="tnom" id="usr"> <br>
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
                                          <br>
                                        
                                      
                                        <label for="usr">
                                          <i class="fa fa-user icon"></i> la duree du module</label>
                                        <input type="text" class="form-control" placeholder="Duree" id="usr" name="temail"> <br>
                                        
                                      
                                                                    
                                    
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
                              if($amine == 'Module'and $chakker="insert"){
                                if(isset($_POST['save'])){
                                  $mname=$_POST['tnom'];
                                  $mniveau=$_POST['niveau'];
                                  $mfilliere=$_POST['filiere'];
                                  $mduree=$_POST['temail'];
                                  
                                  $taddreq="INSERT INTO `modules` (`id_module`, `nom`, `dure`, `id_fil`, `id_niv`) 
                                                      VALUES (NULL, '{$mname}', '{$mduree}', '{$mfilliere}', '$mniveau');";
                                  if(mysqli_query($cnx,$taddreq)){
                                    echo '<script>alert("Module Ajouter");</script>';
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
                            <h5 class="modal-title" id="exampleModalLabel">Modifier Module</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form action="dp.php?action=Module&x=edit" method="POST">
                              <div class="modal-body">
                                                            
                                        <label for="usr">
                                          <i class="fa fa-user icon"></i> Nom du Module:</label>
                                        <input type="hidden" class="form-control " id="id" placeholder="Nom" name="id_prof" id="usr"> <br>
                                        <input type="text" class="form-control " id="nom" placeholder="Nom" name="diplomestudentname" id="usr"> <br>
                                        <label for="usr">
                                          <i class="fa fa-user icon"></i> la duree:</label>
                                        <input type="text" class="form-control" id="prenom" placeholder="Prenom" name="diplomestudentprenom" id="usr"> <br>
                                      
                                        
                                        
                                      
                                                                    
                                    
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
                          if($amine == 'Module'and $chakker == 'edit'){
                            if(isset($_POST['updatedata'])){
                              $id_student=$_POST['id_prof'];
                              $newnom=$_POST['diplomestudentname'];
                              $newdure=$_POST['diplomestudentprenom'];
                              
                              $dsupdate="UPDATE `modules` SET `nom` = '{$newnom}', `dure` = '{$newdure}' WHERE `modules`.`id_module` = {$id_student};";
  
                              $query_run = mysqli_query($cnx,$dsupdate);
                              if($query_run){
                                echo '<script>alert("Module a ete Modifier");</script>';
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
                            <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete this Module</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <form action="dp.php?action=Module&x=delete" method="POST">
                              <div class="modal-body">
                                                            
  
                                        <input type="hidden" class="form-control " id="id_amine" placeholder="Nom" name="id_prof" id="usr"> <br>
                                            
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button  name="updatedata" class="btn btn-info">yes</button>
                              </div>
                          </form>
                          <?php
                          if($amine == 'Module'and $chakker == 'delete'){
                            if(isset($_POST['updatedata'])){
                              $studentid=$_POST['id_prof'];
                              $deletestudentreq="DELETE FROM `modules` WHERE `id_module` = '$studentid'";
                              if(mysqli_query($cnx,$deletestudentreq)){
                                echo '<script>alert("Module a ete supprimer");</script>';
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
                    $tsreq="SELECT * FROM modules ORDER BY nom;";
                    $tsresult = $cnx->query($tsreq);
                    ?>
                     <div class="conatiner">
                       <div class="jumbotron">
                         <div class="card">
                         <h2 style="padding:10px;">Getsion du Modules</h2>                        
                         </div>
                         <div class="card">
                           <div class="card-body">
                           <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#tadd">
                            Ajouter Module
                          </button>
                           </div>
                        <div class="card">
                         <div class="card-body">
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Nom du Module</th>
                                      <th scope="col">la duree</th>
                                      
                                      <th scope="col">Modifier</th>
                                      <th scope="col">supprimer</th>
                                    </tr>
                                  </thead>
                                  <?php
                                  while($tsrow = $tsresult->fetch_assoc()){
                                    ?>
                                    <tbody>
                                      <tr>
                                        <td scope="row"><?php echo $tsrow['id_module'] ?></td>
                                        <td><?php echo $tsrow['nom'] ?></td>
                                        <td><?php echo $tsrow['dure'] ?></td>
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
                  }elseif($amine == 'rapport'){
                    ?>
                     
                      <button class="open-button" onclick="openForm()"><i class='fas fa-comment' style='font-size:28px;color:white;'></i> &nbsp;&nbsp;&nbsp;         Chat</button>

                      <div class="chat-popup" id="myForm">
                        <form  class="form-container" method="post">
                          <h1>Rapport</h1>
                          <label for="msg"><b>Sujet</b></label>
                          <textarea class="suj" placeholder="Sujet.." name="suj" required></textarea>
                          
                          <label for="msg"><b>Message</b></label>
                          <textarea placeholder="Type message.." name="msg" required></textarea>

                          <button name="envoyer" type="submit" class="btn">Send</button>
                          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                        </form>
                        <?php
                          if(isset($_POST['envoyer'])){
                            $suj = $_POST['suj'];
                            $mssg = $_POST['msg'];
                            $req="INSERT INTO `rapport` (`id_rapport`, `sujet`, `Message`, `id_db`) VALUES (NULL, '{$suj}', '{$mssg}', '{$_SESSION['id_db']}')";
                            if(mysqli_query($cnx,$req)){
                              echo '<script>alert("Votre Rapport a ete envoyer");</script>';
                            }
                          }


                        ?>
                      </div>

                      <script>
                      function openForm() {
                        document.getElementById("myForm").style.display = "block";
                      }

                      function closeForm() {
                        document.getElementById("myForm").style.display = "none";
                      }
                      </script>

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
    <script>
    $('.toast').toast('show');
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
    function find(){

    var nivs = document.getElementById("NiveauTS").value;
    var fils = document.getElementById("filiereTS").value;

    if(window.XMLHttpRequest){
        var myrep = new XMLHttpRequest();
      }
      else{
        var myrep = new ActiveXObject("Microsoft.XMLHTTP");
      }
      myrep.open("GET","ajax.php?filts="+fils+"&nivts="+nivs,true);
      myrep.send();
      var d = document.getElementById("student");
      myrep.onreadystatechange = function() {
        if (myrep.readyState == 4 && myrep.status == 200) {
          d.innerHTML = myrep.responseText;
        }

    }
  }
    </script>
    <script>
    function diplomefind(){

    var nivd = document.getElementById("NiveauTS").value;
    var fild = document.getElementById("filiereTS").value;

    if(window.XMLHttpRequest){
        var myrep = new XMLHttpRequest();
      }
      else{
        var myrep = new ActiveXObject("Microsoft.XMLHTTP");
      }
      myrep.open("GET","ajax.php?filds="+fild+"&nivds="+nivd,true);
      myrep.send();
      var d = document.getElementById("student");
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