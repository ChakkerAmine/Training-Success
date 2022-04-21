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
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: white;
    }
    .bck{
        height: 100vh;
        background-image: url("img/bck3.jpg");
        background-position: right;
        background-size: cover;
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
    .para{
        font-family: 'Abel', sans-serif;
        margin-top:10px;

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
                                    <i class="fa fa-user icon"></i>Full Name:</label>
                                  <input type="text" class="form-control" placeholder="Username" name="name" id="usr"> <br>
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Email:</label>
                                  <input type="email" class="form-control" placeholder="Email" id="usr" name="email"> <br>
                                  <label for="usr">
                                    <i class="fa fa-user icon"></i> Telephone:</label>
                                  <input type="number" class="form-control" placeholder="Telephone" id="usr" name="tele"> <br>                             
                                  <label for="pwd">
                                    <i class="fa fa-key icon"></i> Sujet:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter your Message :" name="suj" rows="3"></textarea>
                                  <button class="btn btn-primary" name="send">Send
                                    <i class='fas fa-door-open'></i></i></button>
                                    <button class="btn btn-primary home-btn"><a style="text-decoration: none;" href="index.php">Home </a> 
                                        <i class='fas fa-door-closed'></i></i></button>                                   
                              </form>
                              <?php
                                    require 'cnx.php';
                                    if (isset($_POST['send'])) {
                                    $name=$_POST['name'];
                                    $email=$_POST['email'];
                                    $tele=$_POST['tele'];
                                    $suj=$_POST['suj'];

                                    $req1="INSERT INTO `contact_visiteur`(`contact_id`, `contact_username`, `contact_email`, `contact_tele`, `contact_sujet`) 
                                                                    VALUES (NULL,'$name','$email','$tele','$suj')";
                                    if(mysqli_query($cnx,$req1)){
                                        ?>
                                        <div style="margin-top:40px;" class="alert alert-success">
                                        <strong>Success!</strong> Votre Message a ete Envoyer. Merci de nous contact 
                                        </div>
                                        <?php
                                            }

                                    }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>