<?php
require 'cnx.php';
session_start();
if(isset($_SESSION['username'])){
    header("Location: adminpage.php");   
}elseif(isset($_SESSION['dpusername'])){
    header("Location: dp.php");
}elseif(isset($_SESSION['profusername'])){
    header("Location: prof.php");
}elseif(isset($_SESSION['diplomeusername'])){
    header("Location: diplome.php");
}
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
        height: 100vh;
        background-image: url("img/bck2.jpg");
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
                    
                    <h2 class="text-center" style="color: black;font-weight: bold;">
                        <i class='fas fa-fingerprint' style='font-size:48px;color:black;'></i></h2>
                    <div class="login">
                        <?php
                                if($_SERVER['REQUEST_METHOD'] =='POST'){
                                    $username=$_POST['user'];
                                    $password=$_POST['pass'];
                                    $spass=sha1($password);

                                    $stmt=  "SELECT * FROM `admins` WHERE username='{$username}' and password ='{$spass}'";
                                    $dstmt="SELECT * FROM `dp`WHERE username='{$username}' and password = '{$password}' ";
                                    $pstmt="SELECT * FROM `professeur`WHERE username='{$username}' and password = '{$password}' ";
                                    $distmt="SELECT * FROM `diplome_student`WHERE username='{$username}' and password = '{$password}' ";
                                    $tistmt="SELECT * FROM `training_student`WHERE username='{$username}' and password = '{$password}' ";
                                    
                                    $req1=mysqli_query($cnx,$stmt);
                                    $req2=mysqli_query($cnx,$dstmt);
                                    $req3=mysqli_query($cnx,$pstmt);
                                    $req4=mysqli_query($cnx,$distmt);
                                    $req5=mysqli_query($cnx,$tistmt);


                                    $count = mysqli_num_rows($req1);
                                    $count2 = mysqli_num_rows($req2);
                                    $count3 = mysqli_num_rows($req3);
                                    $count4 = mysqli_num_rows($req4);
                                    $count5 = mysqli_num_rows($req5);

                                    $row= mysqli_fetch_assoc($req1);
                                    $row2= mysqli_fetch_assoc($req2);
                                    $row3= mysqli_fetch_assoc($req3);
                                    $row4= mysqli_fetch_assoc($req4);
                                    $row5= mysqli_fetch_assoc($req5);
                                    $_SESSION['id']=$row['id'];
                                    $_SESSION['id_db']=$row2['id_db'];
                                    $_SESSION['id_prof'] = $row3['id_prof'];
                                    $_SESSION['id_student'] = $row4['id_student'];
                                    $_SESSION['id_student_training'] = $row5['id_student'];


                                    
                                    $count = mysqli_num_rows($req1);
                                    $count2 = mysqli_num_rows($req2);

                                    
                                    if($count>0){
                                        $_SESSION['username'] = $username;
                                        header("Location: adminpage.php");
                                        exit();
                                    }elseif($count2>0){
                                        $_SESSION['dpusername'] = $username;
                                        header("Location: dp.php");
                                        exit(); 
                                    }elseif($count3>0){
                                        $_SESSION['profusername'] = $username;
                                        header("Location: prof.php");

                                    }elseif($count4>0){
                                        $_SESSION['diplomeusername'] = $username;
                                        header("Location: diplome.php");
                                    }elseif($count5>0){
                                        $_SESSION['trainingusername'] = $username;
                                        header("Location: training.php");
                                    }else{
                                        ?>
                                        <div class="alert alert-warning">
                                        <strong>Attention!</strong> : Le nom d'utilisateur ou mot de passe est incorrect
                                          </div>
                                        <?php
                                      }
                                    

                                    
                                }

                        ?>
                        <div class="form-group">
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                               
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Name:</label>
                                  <input type="text" class="form-control" placeholder="Username" name="user" id="usr"> <br>
                                
                                
                                  <label for="pwd">
                                    <i class="fa fa-key icon"></i> Password:</label>
                                  <input type="password" class="form-control" placeholder="Password" name="pass" id="pwd">
                                  <button class="btn btn-primary" name="send">Login 
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
</html>