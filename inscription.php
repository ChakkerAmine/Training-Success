<?php
require 'cnx.php';

?>


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
        min-height:100vh;
        background-image: url("img/bck5.jpg");
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
                        <img src="img/bg_head.png" style="width: 200px;" alt="logo"> <br>
                    </div>
                    
                    
                    <div class="login">
                        <div class="form-group">
                            <form method="POST">                              
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Nom:</label>
                                  <input type="text" class="form-control" placeholder="Nom" name="nom" id="usr"> <br>
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Prenom:</label>
                                  <input type="text" class="form-control" placeholder="Prenom" name="prenom" id="usr"> <br>
                                
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
                                <div id="tr" style="display: none;">

                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">Matiere</label>
                                        <div id="matiere">
                                          <select class="form-control" name="matiere">
                                          <option>Select matiere</option>
                                    
                                          </select>
                                        </div>                             
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
    
</html>
<?php
require('cnx.php');
if (isset($_POST['send'])) {
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $Telephone=$_POST['tele'];
  $formation=$_POST['formation'];
  $niveau=$_POST['niveau'];
  $filiere=$_POST['filiere'];
  $matiere=$_POST['matiere'];

  $Diplome_Inscription="INSERT INTO `diplome_formation_inscription` (`id_inscription`, `nom`, `prenom`, `email`, `telephone`, `niveau`, `filliere`)
   VALUES (NULL, '$nom', '$prenom', '$email', '$Telephone', '$niveau', '$filiere')";
  $Training_Inscription="INSERT INTO `training_formation_inscription` (`id_inscription`, `nom`, `prenom`, `email`, `telephone`, `niveau`, `filliere`, `matiere`) 
  VALUES (NULL, '$nom', '$prenom', '$email', '$Telephone', '$niveau', '$filiere', '$matiere')";
 
 if($formation=="TR"){
   if(mysqli_query($cnx,$Diplome_Inscription)){
    echo '<script>alert("Votre inscription a ete enregistrer");</script>';
   }
 }
 else {
   if($formation=="DI"){
     if(mysqli_query($cnx,$Training_Inscription)){
      echo '<script>alert("Votre inscription a ete enregistrer");</script>';

     }
 }
}
 
  
   
  
}


?>
