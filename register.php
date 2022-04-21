<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
    <title>Login</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;       
        font-family: 'Abel', sans-serif;
    }
    .bck{
        height: auto;
        background-image: url("img/bck4.jpg");
        background-position: right;
        background-size: cover;
    }
    .login{
        margin-top: 20px;
    }
    .btn-primary{
        border-radius: 1.5rem;
        border: none;
        width: 120px;
        background: rgb(102, 89, 102);
        font-weight: 600;
        color: black;
        margin-top: 20px;
        padding: 10px;
    }
    .btn-primary:hover{
        background: black;
        color: white!important;
    }
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: white;
    }
    @media only screen and (max-width: 600px){
        .bck{
            display: none;
        }
    }
</style>
<body>
    <div id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 bck ">
                   
                </div>
                <div class="col-md-4 login ">
                    <div class="logo text-center">
                        <img src="img/bg_head.png" style="width: 300px;" alt="logo"> <br>
                    </div>
                    
                    
                    <div class="login">
                        <div class="form-group">
                            <form method="POST">
                               
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Nom:</label>
                                  <input type="text" class="form-control" placeholder="Nom" name="Nom" id="usr"> <br>
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Prenom:</label>
                                  <input type="text" class="form-control" placeholder="Prenom" name="Prenom" id="usr"> <br>
                                
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Email:</label>
                                  <input type="email" class="form-control" placeholder="Email" id="usr" name="email"> <br>
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Telephone:</label>
                                  <input type="number" class="form-control" placeholder="Telephone" id="usr" name="tele"> <br>

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1"><i class="fa fa-user icon"></i>Formation</label>
                                    <select class="form-control" name="formation" id="formation" onchange="display()" >
                                      <option>formation</option>
                                      <option value="TR">DIPLOME</option>
                                      <option value="DI">TRAINING</option>                                     
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1"><i class="fa fa-user icon"></i>Niveau</label>
                                    <select class="form-control" name="niveau" id="exampleFormControlSelect1">
                                      <option>bac +2</option>
                                      <option>bac +3</option>
                                      <option>bac +4</option>  
                                      <option>bac +5</option>  
                                    </select>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Filiere</label>
                                    <select class="form-control" name="filiere" id="filiere" onchange=chakker()>
                                      <option value="DEV">Developement Informatique</option>
                                      <option value="RES">Reseau Informatique</option>
                                      <option value="DES">Design</option>
                                    </select>
                                  </div>
                                <div id="tr" style="display: none;">

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Matiere</label>
                                    <select class="form-control" name="matiere" id="matiere">
                                      <option value="">Select matiere</option>
                                  <!--Dvelopement Informatique Matiere-->
                                      <option   id="DEV1">Developement Web</option>
                                      <option  id="DEV2">Developement Application Mobile</option>
                                      <option  id="DEV3">Developement Application Desktop</option>
                                  <!--Reseaux Informatique Matiere-->
                                  <option style="display: none;" id="RES1">Cyber Security</option>
                                   <option style="display: none;" id="RES2">Routing and switching</option>
                                   <option style="display: none;" id="RES3">Windows Server</option>  
                                   <option style="display: none;" id="RES4">Linux(kali linux...)</option>
                                  <!--Design matiere-->
                                  <option style="display: none;"  id="DES1">Game Design</option>
                                  <option style="display: none;" id="DES2">Web Design</option>
                                  <option style="display: none;" id="DES3">Suite adobe(photoshop,ilustrator,xd..)</option>
                                    </select>
                                  </div>
                                 
                                </div>
                                  <button class="btn btn-primary" name="send">Envoyer
                                    <i class='fas fa-door-open'></i></i></button>
                                    <button class="btn btn-primary home-btn"><a style="text-decoration: none;" href="index.php">Home </a> 
                                        <i class='fas fa-door-closed'></i></i></button>                                  
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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
      function chakker(){
        var a = document.getElementById("filiere").value;
        if(a=="DEV"){
          document.getElementById("DEV1").style.display="block";
          document.getElementById("DEV2").style.display="block";
          document.getElementById("DEV3").style.display="block";
          document.getElementById("RES1").style.display="none";
          document.getElementById("RES2").style.display="none";
          document.getElementById("RES3").style.display="none";
          document.getElementById("RES4").style.display="none";
          document.getElementById("DES1").style.display="none";
          document.getElementById("DES2").style.display="none";
          document.getElementById("DES3").style.display="none";
        }
        else if(a=="RES"){
          document.getElementById("DEV1").style.display="none";
          document.getElementById("DEV2").style.display="none";
          document.getElementById("DEV3").style.display="none";
          document.getElementById("RES1").style.display="block";
          document.getElementById("RES2").style.display="block";
          document.getElementById("RES3").style.display="block";
          document.getElementById("RES4").style.display="block";
          document.getElementById("DES1").style.display="none";
          document.getElementById("DES2").style.display="none";
          document.getElementById("DES3").style.display="none";
        }
        else{
          document.getElementById("DEV1").style.display="none";
          document.getElementById("DEV2").style.display="none";
          document.getElementById("DEV3").style.display="none";
          document.getElementById("RES1").style.display="none";
          document.getElementById("RES2").style.display="none";
          document.getElementById("RES3").style.display="none";
          document.getElementById("RES4").style.display="none";
          document.getElementById("DES1").style.display="block";
          document.getElementById("DES2").style.display="block";
          document.getElementById("DES3").style.display="block";
        }
      }
    </script>
</html>
<?php
require('cnx.php');
if (isset($_POST['send'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $Telephone=$_POST['tele'];
  $formation=$_POST['formation'];
  $niveau=$_POST['niveau'];
  $filiere=$_POST['filiere'];
  $matiere=$_POST['matiere'];
  
  $req1="INSERT INTO `formation_training_inscription`(`id`, `nom`, `email`, `tele`, `niveau`, `filliere`, `matiere`) 
  VALUES (NULL,'$name','$email','$Telephone','$niveau','$filiere','$matiere')";

  $req2="INSERT INTO `formation_diplome_inscription`(`id`, `nom`, `email`, `telephone`, `niveau`, `filliere`) 
VALUES (NULL,'$name','$email','$Telephone','$niveau','$filiere')";

 
 if($formation=="TR"){
   mysqli_query($cnx,$req2);
 }
 else {
   if($formation=="DI"){
   mysqli_query($cnx,$req1);
 }
}
 
  
   
  
}


?>