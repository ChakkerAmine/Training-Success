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
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@531&display=swap" rel="stylesheet">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Formation</title>
</head>
<style>
    body{
        background-color:black;
    }
    #home{
        height:100vh;
    }
    .bck{
        height: auto;
        min-height:100vh;
        background-image: url("img/1.jpg");
        background-position: right;
        background-size: cover;
    }
</style>
<body>
    <?php 
    if(isset($_GET['filliere'])){
        $amine = $_GET['filliere'];
    }
    
    
    $req = "SELECT * FROM `filieres` where id_fil = '{$amine}' ";
    $sql = mysqli_query($cnx,$req);
    $row = mysqli_fetch_assoc($sql);

    ?>
   <!-- Document -->
   <div id="home">
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-4 bck">

               </div>
               <div class="col-md-8">
                    <h1 style="color:#ce9e63;font-family: 'Grenze Gotisch', cursive;" class="text-center">Formation </h1>
                    <h1 style="color:gray;font-family: 'Grenze Gotisch', cursive;margin-top:40px;">Formation : <?php echo $row['nom'];  ?></h1>
                    <h2 style="color:gray;font-family: 'Grenze Gotisch', cursive;margin-top:40px;">Bac +2 (Technicien Spécialisé) :  </h3>
                    <?php
                        $req1 = "SELECT * FROM modules where id_fil = '{$amine}' and id_niv = 1";
                        $sql1 = mysqli_query($cnx,$req1);
                        while($row1 = mysqli_fetch_assoc($sql1)){
                            ?>
                            <li style="color:#ce9e63"><?php echo $row1['nom'];  ?></li>

                            <?php
                        }
                    ?>
                    <h2 style="color:gray;font-family: 'Grenze Gotisch', cursive;margin-top:40px;">Bac +3 (licence professionnelle) :  </h3>
                    <?php
                        $req1 = "SELECT * FROM modules where id_fil = '{$amine}' and id_niv = 2";
                        $sql1 = mysqli_query($cnx,$req1);
                        while($row1 = mysqli_fetch_assoc($sql1)){
                            ?>
                            <li style="color:#ce9e63"><?php echo $row1['nom'];  ?></li>

                            <?php
                        }
                    ?>
                    <h2 style="color:gray;font-family: 'Grenze Gotisch', cursive;margin-top:40px;">Bac +4 (Master 1er Annee):  </h3>
                    <?php
                        $req1 = "SELECT * FROM modules where id_fil = '{$amine}' and id_niv = 3";
                        $sql1 = mysqli_query($cnx,$req1);
                        while($row1 = mysqli_fetch_assoc($sql1)){
                            ?>
                            <li style="color:#ce9e63"><?php echo $row1['nom'];  ?></li>

                            <?php
                        }
                    ?>
                    <h2 style="color:gray;font-family: 'Grenze Gotisch', cursive;margin-top:40px;">Bac +5 (ingenieur) :  </h3>
                    <?php
                        $req1 = "SELECT * FROM modules where id_fil = '{$amine}' and id_niv = 4";
                        $sql1 = mysqli_query($cnx,$req1);
                        while($row1 = mysqli_fetch_assoc($sql1)){
                            ?>
                            <li style="color:#ce9e63"><?php echo $row1['nom'];  ?></li>

                            <?php
                        }
                    ?>

                
               </div>

           </div>
       </div>
   </div>
   <!-- Document -->


</body>
</html>