<?php
require 'cnx.php';
session_start();
if(!isset($_SESSION['profusername'])){
    header("Location: login.php");
}
$id=$_SESSION['id_prof'];
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
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <style>
    .admins{
        margin: 20px;
        padding: 10px;
        background-color: cadetblue;
        width: 50%;
        font-family: 'Cinzel', serif;

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
    #sidebar{
      background: #870000!important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #190A05, #870000)!important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #190A05, #870000)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    body{
        background: #ADA996!important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996)!important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996)!important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .show1{
        border:2px solid #df0909;
        padding: 10px 20px;
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
    right: 42px;
    padding: 5px 10px;
    border-radius: 50%;
    background: red;
    color: white;
}
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert.success {background-color: #4CAF50;}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
  </style>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(img/prof.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class='fas fa-passport' style='font-size:18px;color:#f8b739'></i> Mon Profile</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="prof.php?action=proshow">voir Profile</a>
                </li>
                <li>
                    <a href="prof.php?action=proedit">Modifier profile</a>
                </li>
                
	            </ul>
	          </li>
	          
	          
	          <li>
            <a href="prof.php?action=dmssg" class="notification">
            
                  <span> <i class='fas fa-book' style='font-size:18px;color:#f8b739'></i>
                   Direction Messages</span>
                  <span class="badge">
                  <?php
                    $req="SELECT * FROM `rapport`";
                    echo mysqli_num_rows(mysqli_query($cnx,$req));

                  ?>
                  </span>
                </a>
              </li>
              <li>
              <a href="prof.php?action=document"><i class='fas fa-book' style='font-size:18px;color:#f8b739'></i> Documents</a>
	          </li>
            <li>
              <a href="prof.php?action=absence"><i class='fas fa-book' style='font-size:18px;color:#f8b739'></i> Mes Absences</a>
	          </li>
	          
            <li>
              <a href="logout.php"><i class="fa fa-power-off" style="font-size:18px;color:#f8b739;"></i>   Log out</a>
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
                    <a class="nav-link" href="prof.php?action=document">Document</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Bonjour professeur !</h2>
        <div class="container">
          <div class="row">
            <div  class="col-md-6 text-center">
              <div class="members" style="margin-top: 50px;">
                  
                  <div class="students">
                      <h1>students   <i class='fas fa-user-graduate' style='font-size:24px'></i></h1>
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
                    $show="SELECT * FROM professeur WHERE id_prof = '{$id}'";
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
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Fullname :</h3><h3 style="font-size:20px;"><?php echo $row['nom'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>Username :</h3><h3 style="font-size:20px;"><?php echo $row['username'];?></h3>
                  <h3 style="color:#168a6d;font-size:20px;"><i class="fa fa-user icon"></i>email :</h3><h3 style="font-size:20px;"><?php echo $row['email'];?></h3>
                  </div>
                  
                  <?php
                    }elseif($do == 'proedit'){
                        ?>
                        <div class="show1">
                        <h2 style="color:#df0909;" class="mb-4 text-center">Modifier Profile</h2>
                        <form action="?action=profupdate" method="POST">
                          <input type="hidden" name="userid" value=<?php echo $row['id_prof'] ?>>
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
                       
                       
                       
                   }elseif($do =='profupdate'){
                      if($_SERVER['REQUEST_METHOD']=='POST'){
                        $adminid=$_POST['userid'];
                        $profnom=$_POST['nom'];
                        $profprenom=$_POST['prenom'];
                        $adminuser=$_POST['adminuser'];
                        $adminpass=$_POST['adminpass'];
                        $adminemail=$_POST['adminemail'];
                         $adminupdate = "UPDATE `professeur` SET `nom` = '{$profnom}', `prenom` = '{$profprenom}', `email` = '{$adminemail}', `username` = '{$adminuser}', `password` = '{$adminpass}' WHERE `id_prof` = {$adminid};";
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
                    }elseif($do == 'document'){
                      ?>
                      <h1 style="padding-bottom:20px" class="text-center">Document </h1>
                      <form method="post"enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Titre du Document</label>
                        <input type="text" class="form-control" name="doctitle" id="exampleFormControlInput1" placeholder="Titre du document">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Document</label>
                        <input type="file" name="document" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                      <button class="btn btn-info" name="submit">Envoyer</button> 
                      </form>
                      <?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                

                          $file_name = $_FILES['document']['name'];
                          $file_type = $_FILES['document']['type'];
                          $file_temp = $_FILES['document']['tmp_name'];
                          $file_size = $_FILES['document']['size'];
                          $allowed_extention = array('pdf');
                          $a=explode('.',$file_name);
                          $file_extention = strtolower(end($a));
                          if(!in_array($file_extention,$allowed_extention)){
                            $errors[] = '<div>File should be pdf </div>' ;
                          }
                          
                          if(empty($errors)){
                            if(isset($_POST['submit'])){
                              $show="SELECT * FROM professeur WHERE id_prof = '{$id}'";
                              $showsql=mysqli_query($cnx,$show);
                              $row = mysqli_fetch_assoc($showsql);
                              $title = $_POST['doctitle'];

                              $req="INSERT INTO `document` (`id_doc`, `titre`, `document`, `filliere`, `niveau`, `matiere`) 
                                        VALUES (NULL, '{$title}', '{$file_name}', '{$row['filliere']}', '{$row['niveau']}','{$row['matiere']}');";
                              if(mysqli_query($cnx,$req)){
                                move_uploaded_file($file_temp,$_SERVER['DOCUMENT_ROOT'].'\training_success\up\\' . $file_name);
                                echo "<script>alert('document Uploaded')</script>";
                              }
                            }
                            
                          }else{
                            foreach($errors as $err){
                              echo $err;
                            }
                          }

                          
                        }
                      ?>
                      <?php
                    }elseif($do == 'dmssg'){
                      ?>
                      <h1>Direction Message :</h1>
                      <?php
                    }

                ?>
            </div>
            
            
          </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php
                  if($do == 'dmssg'){
                    $mssg="SELECT rapport.sujet,rapport.Message,dp.nom,dp.prenom FROM rapport INNER join dp on rapport.id_db = dp.id_db";
                    $sqlmssg=mysqli_query($cnx,$mssg);

                    ?>
                       

                          <?php
                          
                          while($mssgrow = mysqli_fetch_assoc($sqlmssg)){
                            ?>
                            <div class="alert success">
                              <span class="closebtn">&times;</span>  
                              <strong>Par : </strong> <?php echo $mssgrow['nom']." ".$mssgrow['prenom'] ?> <br>
                              <strong>Sujet : </strong> <?php echo $mssgrow['sujet'];?> <br>
                              <strong>Message : </strong> <?php echo $mssgrow['Message'];?> <br>
                            </div>
                            <?php
                          }
                          ?>

                    <?php
                  }elseif($do == 'absence'){
                    $req = "SELECT * FROM absence WHERE id_prof = '{$id}'";
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
                    
                  }
                ?>
            </div>
        </div>
        
       
        
 </div>
      </div>
		</div>
    <script>
// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
  // When someone clicks on a close button
  close[i].onclick = function(){

    // Get the parent of <span class="closebtn"> (<div class="alert">)
    var div = this.parentElement;

    // Set the opacity of div to 0 (transparent)
    div.style.opacity = "0";

    // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>             
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>