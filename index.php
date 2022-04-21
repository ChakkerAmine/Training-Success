<?php 
require 'cnx.php';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114994970-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-114994970-1');
    </script>
    <!--  -->
  <!-- <meta name="robots" content="noindex,nofollow"> -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@kzmhairfucker" />
  <meta property="og:url" content="http://kazuma-kurata.com/" />
  <meta property="og:title" content="Kazuma Kurata - Hair Creator / Hair Developer" />
  <meta property="og:description" content="Salon RyuのHair Creator / Hair Developer 倉田一摩。2018年7月からはロンドン・ヴィダルサスーンアカデミーにて師事。シュワルツコフ・ジェネレーションネクスト最年少候補者" />
  <meta property="og:image" content="http://kazuma-kurata.com/img/ogimg.png" />
  <meta name="description" content="Salon RyuのHair Creator / Hair Developer 倉田一摩。2018年7月からはロンドン・ヴィダルサスーンアカデミーにて師事。シュワルツコフ・ジェネレーションネクスト最年少候補者">
  <title>TRAINING SUCCESS / THE BEST SCHOOL FOR YOU</title>
  <!-- Bootstrap -->
  <link rel="shortcut icon" href="img/favicon.ico" />
  <!-- <link href="css/normalize.css" rel="stylesheet"> -->
  <link href="css/style_pc.css" rel="stylesheet" media="all">
  <!-- <link href="css/style_tablet.css" rel="stylesheet"> -->
  <link href="css/style_sp.css" rel="stylesheet" media="screen and (max-width: 599px)">
  <link href="css/jquery.fullpage.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
  
  <!--[if IE]>
  <link href="css/ie.css" rel="stylesheet" />
  <![endif]-->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.fullpage.min.js"></script>
  <script src="js/jquery.drawsvg.min.js"></script>
  <script src="js/top.js"></script>
  <script src="js/centerlogo.js"></script>
  <script src="js/loader.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/matchMedia.js"></script>
  <script src="js/render-svg.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyCGeMDigSIP1WoEtD1ebA2dD2motvn-1to"></script>
  <!-- <script src="js/gmap.js"></script> -->
</head>
<body class="menu_passive">
  <noscript><p>このページではjavascriptを使用しています。</p></noscript>
  <header>
    <nav>
      <div id="btn_menu" class="menu"><a href="javascript:void(0)"><span>（</span>Formation<span>）</span></a></div>
      <div id="btn_bio" class="menu"><a href="javascript:void(0)"><span>（</span>ABOUT<span>）</span></a></div>
      <div id="btn_access" class="menu"><a href="javascript:void(0)"><span>（</span>Contact<span>）</span></a></div>
      <div id="btn_contact" class="menu"><a href="javascript:void(0)"><span>（</span>bio<span>）</span></a></div>
    </nav>
  </header>
  <div id="sns">
    <ul>
      <li><a href="login.php" target="_blank"><i class='fas fa-user-lock' style='font-size:30px;color:#624f3f'></i></a></li>

      <li><a href="inscription.php" target="_blank"><i class='far fa-file-alt' style='font-size:30px;color:gray;'></i></a></li>
      
    </ul>
  </div>
<div id="menu_all">
  <!--  -->
    <div id="bio_cont">
      <div class="mask">
        <div class="mask1"></div>
        <div class="mask2"></div>
        <div class="mask3">
          <div class="mask_cont">
            <h3 class="mask_top mask_inline"><span style="color: goldenrod;" class="fadein_item">TRAINING SUCCESS</span></h3>
            <div class="mask_bottom fadein_item">
              <h1 class="mask_big mask_inline">2000-2020</h1>
              <h2 class="mask_small mask_bottom mask_inline">Informatique/Design</h2>
            </div>
            <p><span class="fadein_item">Le centre de formation « Training Success » est une entreprise à but lucratif, ayant pour activité principal la création et l’assurance de formations académiques et professionnelles.</span>
              <span class="fadein_item">Le centre exerce et développe ses services et ses missions au sein du même local, dirigé par un directeur pédagogique, un responsable de formation académique, responsable de formation professionnelle et deux services secrétariats.</span>
              <span class="fadein_item">Crée depuis juin 2018 par <span style="color: goldenrod;">M. Cherkaoui Saad</span> , propriétaire et directeur général du centre, </span>
              
              
            </p>
            </div>
        </div>
      </div>
    </div>
    <!--  -->
    <div id="menu_cont">
      <div class="mask">
        <div class="mask1"></div>
        <div class="mask2"></div>
        <div class="mask3">
          <div class="mask_cont">
            <span class="fadein_item"><span class="mask_bottom mask_tit">Formation</span></span>
            <?php 
            $req = "SELECT * FROM `filieres`";
            $sql = mysqli_query($cnx,$req);
            while($row = mysqli_fetch_assoc($sql)){
              ?>
            <span class="fadein_item"><?php echo $row['nom']; ?> <a class="mask_tit" style="text-decoration: none;color: goldenrod;" href="formation.php?filliere=<?php echo $row['id_fil'] ?>">More info</a></span>
              <?php
            }
            ?>
            
            
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <div id="access_cont">
      <div class="mask">
        <div class="mask1"></div>
        <div class="mask2"><div id="office_map"></div></div>
        <div class="mask3">
        <div class="mask_cont">
            <span class="fadein_item" style="font-size: 20px;">RABAT</span>
            <span class="fadein_item"><br class="pc">RABAT-AGDAL</span>
            <span class="fadein_item"><span class="mask_tit">TEL</span><a href="tel:+818011953829">+212639666765</span></a>
            <span class="fadein_item" style="margin-bottom:0px;"><span class="mask_tit">temps de travail</span><br>
            08:00〜12:00<br>
            12:30〜23:00<br>
            <br>
            <br>
            <br>
            <span class="fadein_item" style="margin-bottom:0px;"><span class="mask_tit"><a style="text-decoration:none;padding: 20px;color: white;" href="contact.php">Envoyer Un message</a></span><br>
        
          
          </div>
        </div>
      </div>
    </div>
    
    <!--  -->
    <div id="contact_cont">
      <div class="mask">
        <div class="mask1"></div>
        <div class="mask2"></div>
        <div class="mask3">
          <div class="mask_cont">
            <span class="fadein_item">TRAINING SUCCESS</span>
            <span class="fadein_item">Check our activity in Instagram :<a class="mask_link" href="https://www.instagram.com/aminechakkerofficiel/" target="_blank">Instagram</a> welcome</span>
            <span class="fadein_item">Check our page in facebook :<a class="mask_link" href="https://www.instagram.com/k.kazuma_genuine00/" target="_blank">Facebook</a> ...</span>
            <br>
            <span class="fadein_item">
              <span class="mask_tit">TEL</span><a href="tel:0639666765">0639666765</a>
            </span>
            <br>
            <span class="cr">COPYRIGHT © AMINE CHAKKER ALL RIGHTS RESERVED.</span>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
</div>




  <main id="fullpage">
    
    <section id="main" role="main" class="section">
      <div id="mainVisual">
        <div class="scene">
          <div id="loader"></div>
          <div class="layer is-front" data-depth="1.00">
            <h1 id="name-svg01">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 678 329" style="enable-background:new 0 0 678 329;" xml:space="preserve">

                <mask id="masking01" maskUnits="objectBoundingBox">
                  <path class="st0" d="M24.8,20c-4,1-5.5,3-7,8.5s-7.5,55-9,73.5s-6,103.5-6,103.5v22l-2.5-178l102-47c0,0-7,22.5-12.5,34
                    s-33,55.5-44,67.5S8.2,134.6,8.2,139c8.8,1,10.2,1.3,13.5,2.3s7.7,2.2,15.8,7.3c8.2,5.2,20,13.8,26.8,18.8c6.8,5,11.2,9.5,18.7,9.5
                    s15.3-9.2,16.5-10.5s16.2-8.3,16.2-8.3s0-4.2-3.2-2.8c-3.2,1.3-7.8,4.3-9.5,7.2s-2.5,5-0.3,4.7c2.2-0.3,6.7-3.5,8.8-4.7
                    s13.7-11.3,13.7-11.3l-2.2,5.3l-0.2,8.5c0,0-1,2.3,2.3,3c3.3,0.7,10.3-3.7,12-5c1.7-1.3,6.7-5.8,10.8-5.3s7.8,3,8.2,7.3
                    c0.3,4.3,0.7,15.3-1.2,19.2c-1.8,3.8-6.2,10.8-6.2,10.8s2.4-3.8,7.6-3.5c5.2,0.3,7.7-0.8,10.2,7s5.5,16.7,4.7,27.7
                    c-0.8,11-0.7,18.3-3.8,36.7c-3.2,18.3-6.5,24.5-9.5,31s-6.3,15.7-10.3,20.8c-4,5.2-7,11.2-10,12.3s-7.7,1-9.2-3.7
                    c-1.5-4.7-3.2-15.7-2.3-24.7c0.8-9,4.2-28.5,7.2-37.2c3-8.7,12.5-34.7,17.7-43s15.5-23.2,19.5-28.3c4-5.2,14.3-16.3,19.5-19.8
                    s12-10,13.3-10.3c-1.8,5.1-3.5,6.8-3.2,11c0.3,4.2,1.7,5.7,4.3,6s8.7-3,13-6.3c4.3-3.3,16.5-15.5,16.5-15.5v8.8c0,0-0.8,5.3,2.8,7
                    c3.7,1.7,6.5,1.3,10.3-0.7c3.8-2,13.7-9.2,13.7-9.2s-2.5,5-2.5,8.7c0,3.7-1.2,6,0.3,7.2s5.2-2.2,8.7-6s12.2-14.2,15.8-13.7
                    c3.7,0.5,4,3.2,3.8,6c-0.2,2.8-1.2,12.2-1.2,12.2s6.7-9.7,8.3-12c1.7-2.3,4.8-4,7.5-3.2c2.7,0.8,5,5,6.5,7.7s3,5.2,6,4
                    s10.5-6.9,10.5-6.9l15.3-6.7c0,0-0.2-3.8-3-2.8s-7.2,1.8-8.2,5s-4,4.2-2.5,5.8c1.5,1.7,8.2-3.2,8.2-3.2L349,151c0,0-2,3.3-2,7
                    s-1.7,7,0.3,8.2c2,1.2,6,1,7.3,0.5c1.3-0.5,6.8-4.2,6.8-4.2L369.8,18c0,0,16.8,2.2,16,1.8c-0.8-0.3-3.7-1.8-4.7,1.5
                    s-5.3,20.7-6.5,27.8c-1.2,7.2-4.8,44.3-4.8,44.3l-3,39.3l-2.5,39.5l-1.8,39l-0.7,17.5L362.7,64l99.7-62.8c0,0-2,13.3-5,19.2
                    S445,47.2,439.5,55.5s-10.7,18.8-21.7,32.2s-24,31.3-31.2,37c-7.2,5.7-16,12.8-18.5,14c4.3,1.2,13.8,1.7,20.8,5.5
                    c7,3.8,11.2,6,19.5,11.8s18.3,14.7,24.8,17.8c6.5,3.2,12.8,3.3,15.7,2.2s12.7-11.2,14.2-14.5c-1,5.8-2.5,10.8-0.8,12.3
                    c1.7,1.5,3,2.2,5,0.7s6.2-6.7,7.8-9.5c1.7-2.8,5.7-10.5,5.7-10.5s-2,9.5-1.3,15.5s0.7,8.8,3.2,9.7c2.5,0.8,11-3.7,14.8-8.3
                    c3.8-4.7,13.5-14.2,15.8-18c2.3-3.8,6.7-9,6.8-11c0.2-2-0.2-4.3-1.3-3c-1.2,1.3-1.3,2.8-1.3,3.7s1.5,4.7,2,7s-0.2,9.8-0.3,15
                    c-0.2,5.2-2.2,11.5-0.3,14.2c1.8,2.7,2.5,4.2,6.3,3.8c3.8-0.3,11-3.3,14.3-6.8s13.8-13.2,13.8-13.2l19.3-12.3c0,0-0.3-3-4-1.7
                    c-3.7,1.3-8.2,2-9.3,4.7c-1.2,2.7-3,3.8-3,4.8s-1.2,5.1,0.2,5.9s3.2,0.8,5.3-0.9c2.2-1.7,20.2-17.7,20.2-17.7s-2.5,7.2-2.5,12.3
                    c0,5.2-1.3,9.5,0.3,12.3c1.7,2.8,1.3,5,4,4.8c2.7-0.2,9-1.8,11.8-7c2.8-5.2,16.3-25.3,16.3-25.3l19.7-38.5l13.3-34
                    c0,0,2.7-11.7,1.8-14c-0.8-2.3-2.3-1.2-2.8,0.3s-5.2,12.5-7,20.5s-9.2,41.3-9.2,41.3s-5.5,29.2-6.3,38.5c-0.8,9.3-2.5,35-2.5,43
                    s1.5,17.8,1.5,17.8l17-61.2l11-7.3l6.2,7.7c0,0-4.2-2-6.5-0.3c-2.3,1.7-6.5,5.8-6.5,7.6s0.7,3.9,2.7,2.4s10-6.8,10.3-7
                    c0.3-0.2,9-8.8,9-8.8s-2.5,4.8-2.5,8s0.2,7.7,2.5,8.5c2.3,0.8,8.8,0.2,12.7-5c3.8-5.2-94.8-67-94.8-67s11.7,2,17.5,1.8
                    c5.8-0.2,30.8-1.3,30.8-1.3l26-1.8l11.8,0.5l-2.5,1.3L552.5,238.8l-9.8,8l11.3-6.7l7.3,6h2l-12.2-2.5l3.2-0.7l-6.2,2.7l8,0.2
                    l0.2,4.5l-7-2l5-0.5l-5.7,3l5.8,0.2l-6-4.2c0,0-0.5,5.9-1.4,7c-0.8,1.1-3.2,3.6-3.2,3.6l4.9-3.2l0,5l0.6-4.9l7.8,0l-0.1,4l-7.8-0.1
                    l21.9-15.8l0.5,14l-2-14.2l17.6-0.2l-0.8,13.4l-14.2-6.6L586,248l-7.2-5.1l0.4,11.4l-6.4,0.8h11.8l21.6-6.9l19-0.8l17.5-9.9v2.2
                    l-8.9,1.1l18-0.5L635,243c0,0-0.9,9-3.5,12.4s4.9-11.1,4.9-11.1l6.2,0.1l-2.7-1.4l0.1,5.6l-0.8-3.3l-3.5,3.4l5.3-3.2l1.2,1.2l2-3.2
                    l7,0.1l-4.2-1.4l0.2,6l-1-3.8l-2.4,3l4.1-3l4.9,4.2l-6.8,0.7l-8.2,1.5l-1.3,1.8l13.5-0.5l-14.4,3.4l16.6-1l-8.6-4.2l0.2,8.9l-1,0.6
                    l-2.3-1.9" stroke="#fff" stroke-width="25" stroke-miterlimit="4" fill="none" stroke-linecap="round"/>
                </mask>
              </svg>
            </h1>
          </div>
          <div class="layer is-front" data-depth="1.00">
            <h2 id="name-svg02">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 785 154" style="enable-background:new 0 0 785 154;" xml:space="preserve">
               
                <mask id="masking02" maskUnits="objectBoundingBox">
                  <path class="st0" d="M23.2,8.2c0,0-0.8,21.8-1.2,28.5s-0.5,21.5-2.8,31.8s-5.2,26-7.5,30.2s-5,9-7.3,8.5s-4-3.2-3.2-8.5
                    S4.9,83.5,9.9,77s9.7-13.2,18-20.2s22-16.8,27.5-26.2s8.5-13,9-18.8c0.5-5.8,0.5-10.5-2-10c-2.5,0.5-3.5,2-4,5.8s-0.5,2-1.8,12.5
                    s-2.8,22.3-4.5,34.5s-3.2,33-3.8,45.2s0.2,25.8,0.5,26.8s3-1.8,3-1.8l14.2-45c0,0-2-2.8-3.5-1.2c-1.5,1.5-5.5,2.2-5,4s3,1.2,5.8-0.8
                    c2.7-2,6-4.8,6-4.8v7.5l6.2-1.8c0,0-1.5,6.2,0,7.8s5.5-1.8,6.2-3s10.2-19.8,10.2-19.8s-0.2,2,0,4.5s1.8,4.5,1.8,8s-1.2,12-1.2,15
                    s-0.5,4.5,1.2,5s6.5-6.2,6.5-6.2l5.5-11.5l-27-7.8L76.4,77l85.3-75.3l24,13.8l-10,12c0,0-5.8,3.5-6.2,9.2c3.2-9.5,4.5-13.8,4.5-17.5
                    s1.8-8-3.8-9s-10.5-1.8-15.8,5.8s-8.2,10.8-12.2,21s-8,14.9-8.8,27.2s0.2,25.3,5,31.3s7.5,10,13.8,9.2s17.2-5.2,21.2-12.2
                    s6.8-12.2,6.8-12.2l1.2,3.5l2.5,2.2c0,0-2.2,3-1.2,6.5s-0.2,5.8,3,5.2s19.2-15,19.2-15s3.2-1.5,5.2-3s-0.5-3.8-2-2.8
                    s-5.2,6.5-4.5,10s-1.5,7.2,3.8,6.2S220.9,83,220.9,83l10.8-7.2c0,0-3.8-1.5-6.5,1.2s-5,5.1-2.5,6s4.9-1.4,6-2.4s7-7.1,7-7.1l-1.2,5
                    l0.6,7.4c0,0,0.9,3.4,3.1,2.8s9.6-9.6,13.9-17.4c4.2-7.8,13.4-26.9,15-31.8s3.8-13.4,2.5-13.2s-1-0.9-2.9,5.2s-5.4,20-7.1,29.5
                    s-3.9,24.5-4.1,31.9s0.5,17.9,0.5,17.9l10.5-29c0,0-2.9,5.4-0.4,7.5s6.2,1.1,6.6-1s2.6-7.5,1.1-8.6s-1.6-3.9-3-2.6s-3.6,2.4-1.2,2.4
                    s8.2,0.2,10.6-1.1S290.8,70,291,68s-1.1-4.1-1.2-2.9s-0.2,4.1,1.3,5.2c1.5,1.1,2.8,0.2,2.7,4s-1.6,8.1-2.2,12.9s-2.9,10.5-0.5,11.4
                    s4.9-0.1,6.2-2s9.5-12.9,10.5-14.6s-0.6-3.9,0.6-4s1.9-0.1,1.9-0.1l-2.5,10.8l1.4-0.2l-26.2-62l-28.2-6.2l-18.1,23.2l-0.5,4.2
                    l44.4-0.6l103.8-12.8l-25,60.1L435,8.2l-0.9,30.6l-3.2,29.9l-5.8,26c0,0-5.6,13.6-9.2,12.5s-3.2-10.6-2.1-13.6s5.8-15.5,11-21.5
                    s12.4-12.9,18.4-18.5s19-16.6,23.9-23.9s8.2-11.9,9-16.4s0.6-12.1-2-12.1s-1.8,0-2.6,3.5s-2,8.5-3.2,14.8s-2.5,17-3.4,24.5
                    s-2.4,29.8-3.4,43s-1,28.6-0.9,32.8s-0.9,7.6,0.4,7.8s2.5-2.8,2.5-2.8l14.8-45.1c0,0-0.5-2-2.2-1.5s-4.8,2.6-4.8,3.8
                    s-0.8,2.2,0.2,2.2s11.1-7.9,11.1-7.9s-2.8,6.5-0.9,7.8s7.2-1.2,7.2-1.2s-1.9,6.9,0,7.9s11-10.5,11.9-13.6s3.4-9.1,3.4-9.1
                    s-1.6,2.8-0.8,5s2.4,0.5,2.1,5.8s0.2,10.1-0.6,14.1s-2,6.5-0.2,7.2s1.2,1.8,3.4-0.2s9.3-14,9.9-17S488.4,77,488.4,77l1.9-2.6
                    l72.6-72.1l-7.2,54l-5.2,44c0,0-0.6,3.8-1.4,1.8s-1.6-9.2-0.8-17s3.6-25,5.8-31.4s6.8-20.2,12-30.2s11.8-20.6,16.4-21.1
                    s7.5,1.4,9.1,5S599.3,26,599,35s0.4,20-2.6,29.4s-5.8,18.5-9.1,22.9s-8.5,12.5-11.9,10s-1.8-4.1,1-7.1s7.7-6.7,10.6-7.1
                    c2.9-0.4,9.8-0.6,12.6-0.9s6.9,0.2,6.9,0.2s4.1-2.5,2.6-4.1s-3.1-1.4-4.2,0s-3,4.2-3,7.5s-1.4,5.9,1,6.9s9.6-1.5,10.8-3.1
                    s6.2-8,6.2-8v8.6l2.1,5.2L634.2,78c0,0,2.2,4.4,4.2,4.5s11,1.2,12.5-0.2s4.1-4.5,4.2-6.5s-1.1-3.4-2.2-1.6s-2.8,4.2-3.1,5.9
                    s-1.9,6-0.6,6.8s4.2,1.2,8.5-2.1s10.6-8.2,15.4-16.2s11.4-21.9,13.8-30.5s5.8-19.8,4.8-25.5s-2.5-6.2-5.6-2.8s-7,8-11,19.5
                    s-7.4,29.9-8.6,37.6s-1.6,13-2,23s-0.1,18.1,0,20.9s1.2,4.9,1.2,4.9L672,78l5.9-1l1,5c0,0-2.2-2.4-3.4-1s-2.6,2-2.5,4.4
                    s-0.9,4.9,1.2,4.8s3.6-0.8,4.2-2.6s0.8-4,0.8-4l1.9-1.1l8.6-0.1c0,0,1.2,15.2,0.1,21.1s-0.1,14.2-3.1,23.1s-5.5,19.8-10.9,23.6
                    s-6.8,3.1-8.5,0s-1.6-8.2-0.1-15.8s5.8-22,10-28.4s8.8-15.5,18.1-20.2s16.5-6.6,23.6-5.8s10,2.9,9.8,7.4s-2,8.6-7.1,10.9
                    s-12.4,5.1-15.1,3.8s-5.6-1.6-4.4-5.6s3.2-5.4,7.1-7.6s14.2-6.6,20.2-6.6s12.8-0.1,12.8-0.1s3-1,4-3.1s2-4,0.6-3.9s-2.2,0-3.2,2
                    s-2.2,4.5-1.9,7s2.2,3.2,4.1,2.8s10.8-8.5,12.5-11.4s3.2-4.5,3.6-8c0.8,3,2,4.6,2,4.6s1.1-0.5,1.4,2.9s0.9,5.9,0,12.8
                    s-2.2,10.4,0.5,11.1c2.7,0.8,16.5-9.2,18.4-16.1" stroke="#fff" stroke-width="25" stroke-miterlimit="4" fill="none" stroke-linecap="round"/>
                </mask>
              </svg>
            </h2>
          </div>
          <div class="layer" data-depth="0.50">
            <div id="head_bg"><img src="img/bg_head.png"></div>
          </div>
          <div class="layer" data-depth="0.90">
            <div id="arrow"><img src="img/arrow.png"></div>
          </div>
        </div>
        <div id="badge">
          <div id="awwwards" class="nominee white right">
            <a href="http://www.awwwards.com" target="_blank">Awwwards</a>
          </div>
          <a href="http://www.cssdesignawards.com/" target="_blank">
            <div id="cssda-badge">
                <svg version="1.1" id="cssda-badge-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                    <path d="M32.6,43.6c-0.3,0-0.5,0.1-0.7,0.4c-0.2,0.2-0.3,0.6-0.3,1c0,0.9,0.3,1.3,1,1.3c0.2,0,0.4,0,0.6-0.1
                      c0.2-0.1,0.4-0.1,0.6-0.2v1.1c-0.4,0.2-0.8,0.3-1.3,0.3c-0.7,0-1.2-0.2-1.6-0.6c-0.4-0.4-0.6-1-0.6-1.8c0-0.5,0.1-0.9,0.3-1.3
                      c0.2-0.4,0.4-0.6,0.8-0.8c0.3-0.2,0.7-0.3,1.2-0.3c0.5,0,1,0.1,1.4,0.3l-0.4,1c-0.2-0.1-0.3-0.1-0.5-0.2
                      C33,43.6,32.8,43.6,32.6,43.6z"/>
                    <path d="M40,45.8c0,0.3-0.1,0.5-0.2,0.8c-0.1,0.2-0.4,0.4-0.6,0.5c-0.3,0.1-0.6,0.2-1,0.2c-0.3,0-0.6,0-0.8-0.1s-0.4-0.1-0.7-0.2
                      v-1.1c0.2,0.1,0.5,0.2,0.8,0.3s0.5,0.1,0.7,0.1c0.2,0,0.3,0,0.4-0.1c0.1-0.1,0.1-0.1,0.1-0.3c0-0.1,0-0.1-0.1-0.2
                      c0,0-0.1-0.1-0.2-0.1c-0.1,0-0.3-0.1-0.6-0.3c-0.3-0.1-0.5-0.3-0.7-0.4c-0.2-0.1-0.3-0.3-0.3-0.4c-0.1-0.2-0.1-0.4-0.1-0.6
                      c0-0.4,0.2-0.8,0.5-1c0.3-0.2,0.7-0.4,1.3-0.4c0.5,0,1,0.1,1.5,0.3l-0.4,1c-0.4-0.2-0.8-0.3-1.1-0.3c-0.2,0-0.3,0-0.4,0.1
                      C38,43.7,38,43.8,38,43.8c0,0.1,0,0.2,0.1,0.2c0.1,0.1,0.4,0.2,0.8,0.4c0.4,0.2,0.7,0.4,0.8,0.6C39.9,45.3,40,45.5,40,45.8z"/>
                    <path d="M45.9,45.8c0,0.3-0.1,0.5-0.2,0.8c-0.1,0.2-0.4,0.4-0.6,0.5c-0.3,0.1-0.6,0.2-1,0.2c-0.3,0-0.6,0-0.8-0.1
                      s-0.4-0.1-0.7-0.2v-1.1c0.2,0.1,0.5,0.2,0.8,0.3s0.5,0.1,0.7,0.1c0.2,0,0.3,0,0.4-0.1c0.1-0.1,0.1-0.1,0.1-0.3
                      c0-0.1,0-0.1-0.1-0.2c0,0-0.1-0.1-0.2-0.1c-0.1,0-0.3-0.1-0.6-0.3c-0.3-0.1-0.5-0.3-0.7-0.4c-0.2-0.1-0.3-0.3-0.3-0.4
                      c-0.1-0.2-0.1-0.4-0.1-0.6c0-0.4,0.2-0.8,0.5-1c0.3-0.2,0.7-0.4,1.3-0.4c0.5,0,1,0.1,1.5,0.3l-0.4,1c-0.4-0.2-0.8-0.3-1.1-0.3
                      c-0.2,0-0.3,0-0.4,0.1c-0.1,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.2,0.1,0.2c0.1,0.1,0.4,0.2,0.8,0.4c0.4,0.2,0.7,0.4,0.8,0.6
                      C45.9,45.3,45.9,45.5,45.9,45.8z"/>
                    <path d="M52.8,44.8c0,0.8-0.2,1.4-0.6,1.8c-0.4,0.4-1,0.6-1.8,0.6h-1.5v-4.7h1.6c0.8,0,1.3,0.2,1.7,0.6S52.8,44.1,52.8,44.8z
                       M51.5,44.9c0-0.4-0.1-0.7-0.3-1c-0.2-0.2-0.4-0.3-0.8-0.3h-0.4v2.6h0.3c0.4,0,0.7-0.1,0.8-0.3C51.4,45.7,51.5,45.3,51.5,44.9z"/>
                    <path d="M58.7,47.3l-0.2-0.9h-1.5l-0.2,0.9h-1.4l1.5-4.7h1.7l1.5,4.7H58.7z M58.2,45.4L58,44.6c0-0.2-0.1-0.4-0.2-0.7
                      c-0.1-0.3-0.1-0.5-0.1-0.6c0,0.1-0.1,0.3-0.1,0.5c-0.1,0.2-0.2,0.7-0.4,1.5H58.2z"/>
                    <polygon points="65.8,39.9 65.8,39.2 51.2,39.2 46.4,34.4 41.7,39.2 39,39.2 49,29.2 38.5,29.2 28.4,39.2 24.6,39.2 24.6,39.9  "/>
                    <polygon points="24.6,49.9 24.6,50.6 39.1,50.6 43.8,55.3 48.6,50.6 51.2,50.6 41.2,60.6 51.7,60.6 57,55.4 61.7,50.6 65.8,50.6
                    65.8,49.9"/>
                </svg>
                <div class="cssda-badge-content">
                  <svg version="1.1" id="cssda-badge-title" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                <path d="M14.3,50.4c0.5-0.1,0.9,0,1.2,0.2c0.3,0.3,0.6,0.7,0.7,1.3c0.1,0.5,0.1,1,0,1.5l-1,0.2c0.1-0.4,0.1-0.7,0.1-1
                    c0-0.3,0-0.5-0.1-0.7c-0.1-0.2-0.1-0.4-0.3-0.5c-0.1-0.1-0.3-0.1-0.4-0.1c-0.1,0-0.2,0.1-0.2,0.1s-0.1,0.2-0.2,0.3
                    c0,0.1-0.1,0.4-0.2,0.7c-0.1,0.3-0.2,0.6-0.3,0.8s-0.2,0.3-0.4,0.5c-0.2,0.1-0.4,0.2-0.6,0.3c-0.5,0.1-0.8,0-1.2-0.2
                    c-0.3-0.2-0.6-0.6-0.7-1.2c-0.1-0.3-0.1-0.5-0.1-0.8c0-0.3,0-0.5,0.1-0.8l0.9,0.2c0,0.3-0.1,0.5-0.1,0.7c0,0.2,0,0.4,0.1,0.5
                    c0,0.2,0.1,0.4,0.3,0.4c0.1,0.1,0.3,0.1,0.4,0.1c0.1,0,0.2-0.1,0.2-0.1s0.1-0.1,0.2-0.3c0-0.1,0.1-0.4,0.2-0.8
                    c0.1-0.5,0.3-0.9,0.5-1.1S14,50.5,14.3,50.4z"/>
                <path d="M11.7,44.4c0.6,0,1,0.1,1.3,0.5c0.3,0.3,0.5,0.8,0.5,1.5l0,0.5l1.9-0.1l0,1.1l-5.2,0.2l-0.1-1.7c0-0.6,0.1-1.1,0.4-1.5
                    S11.1,44.5,11.7,44.4z M12.6,46.9l0-0.4c0-0.3-0.1-0.6-0.2-0.8c-0.1-0.2-0.3-0.2-0.6-0.2c-0.3,0-0.4,0.1-0.6,0.2
                    c-0.1,0.1-0.2,0.4-0.2,0.7l0,0.5L12.6,46.9z"/>
                <path d="M15.9,39.1l-0.4,3l-5.2-0.8l0.4-3l0.9,0.1l-0.3,1.9l1.1,0.2l0.3-1.8l0.9,0.1l-0.3,1.8l1.3,0.2l0.3-1.9L15.9,39.1z"/>
                <path d="M13.1,33.2c-0.1,0.4-0.1,0.8,0.1,1.1c0.2,0.3,0.6,0.6,1.1,0.8c1.1,0.4,1.8,0.2,2.1-0.7c0.1-0.3,0.2-0.8,0.2-1.4l0.9,0.3
                    c0,0.5,0,0.9-0.2,1.4C17,35.5,16.6,36,16,36.2c-0.6,0.2-1.3,0.2-2.1-0.1c-0.5-0.2-0.9-0.4-1.3-0.8s-0.5-0.7-0.6-1.1s0-0.9,0.1-1.3
                    c0.2-0.5,0.5-0.9,0.9-1.3l0.7,0.6c-0.2,0.2-0.3,0.3-0.4,0.5S13.1,33.1,13.1,33.2z"/>
                <path d="M18.7,31.3l-4.6-2.5l0.5-1l4.6,2.5L18.7,31.3z"/>
                <path d="M22.6,25.6l-1.2-0.5l-1.2,1.5l0.7,1.1l-0.7,0.9l-3-4.7l0.8-1.1l5.3,1.8L22.6,25.6z M20.5,24.8c-1.1-0.4-1.7-0.7-1.9-0.7
                    c-0.1-0.1-0.3-0.1-0.3-0.1c0.2,0.3,0.6,0.9,1.4,1.9L20.5,24.8z"/>
                <path d="M24.8,23.4l-3.4-4l0.8-0.7L25,22l1.6-1.4l0.6,0.7L24.8,23.4z"/>
                <path d="M35.2,14.3c0.3,0.8,0.3,1.5,0,2.1c-0.3,0.6-0.9,1.1-1.7,1.4l-1.4,0.5l-1.9-4.9l1.5-0.6c0.8-0.3,1.5-0.3,2.1-0.1
                    C34.5,13,34.9,13.5,35.2,14.3z M34.1,14.7c-0.4-1-1.1-1.4-2-1l-0.6,0.2l1.2,3.2l0.4-0.2C34.3,16.5,34.6,15.8,34.1,14.7z"/>
                <path d="M41.4,15.7l-3,0.5L37.6,11l3-0.5l0.2,0.9l-1.9,0.3l0.2,1.1l1.7-0.3l0.2,0.9l-1.7,0.3l0.2,1.3l1.9-0.3L41.4,15.7z"/>
                <path d="M46.9,14.1c0,0.5-0.2,0.8-0.5,1.1s-0.8,0.4-1.4,0.4c-0.6,0-1.1-0.1-1.5-0.3l0-1c0.4,0.2,0.6,0.3,0.9,0.3
                    c0.2,0.1,0.5,0.1,0.7,0.1c0.2,0,0.4,0,0.6-0.1c0.1-0.1,0.2-0.2,0.2-0.4c0-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.1-0.2-0.2-0.2
                    c-0.1-0.1-0.3-0.2-0.7-0.4c-0.3-0.2-0.6-0.3-0.7-0.4c-0.2-0.1-0.3-0.3-0.4-0.5c-0.1-0.2-0.1-0.4-0.1-0.6c0-0.5,0.2-0.8,0.5-1.1
                    c0.3-0.3,0.8-0.4,1.3-0.4c0.3,0,0.5,0,0.8,0.1s0.5,0.2,0.8,0.3l-0.4,0.9c-0.3-0.1-0.5-0.2-0.7-0.3c-0.2,0-0.4-0.1-0.5-0.1
                    c-0.2,0-0.4,0-0.5,0.1c-0.1,0.1-0.2,0.2-0.2,0.4c0,0.1,0,0.2,0.1,0.3c0,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.3,0.2,0.7,0.4
                    c0.5,0.2,0.8,0.5,1,0.7S46.9,13.8,46.9,14.1z"/>
                <path d="M49.1,15.9l0.8-5.2l1.1,0.2L50.2,16L49.1,15.9z"/>
                <path d="M55.6,14.4l2,0.7l-0.9,2.6c-0.4,0-0.7,0-1-0.1c-0.3-0.1-0.6-0.1-0.9-0.2c-0.7-0.3-1.2-0.7-1.5-1.3
                    c-0.2-0.6-0.2-1.3,0.1-2.1c0.3-0.8,0.7-1.3,1.3-1.6c0.6-0.3,1.3-0.3,2.1,0c0.5,0.2,1,0.5,1.4,0.8l-0.6,0.7c-0.3-0.3-0.6-0.5-1-0.7
                    c-0.5-0.2-0.9-0.1-1.2,0.1c-0.4,0.2-0.7,0.6-0.8,1.1c-0.2,0.5-0.2,1-0.1,1.3c0.1,0.4,0.4,0.6,0.8,0.8c0.2,0.1,0.4,0.1,0.7,0.2
                    l0.4-1l-0.9-0.3L55.6,14.4z"/>
                <path d="M62.7,21.4l-1.2-0.8l0.2-4.6l0,0c-0.3,0.6-0.6,1-0.8,1.3l-1.3,2.1l-0.8-0.5l2.8-4.4l1.2,0.8l-0.2,4.5l0,0
                    c0.3-0.6,0.6-1,0.7-1.2l1.3-2.1l0.8,0.5L62.7,21.4z"/>
                <path d="M69.7,29l-0.8-1l0.9-2.4l-0.6-0.2l-1.5,1.1l-0.7-0.9l4.2-3.2l0.7,0.9l-1.9,1.5l0.8,0l2.3,0l0.8,1l-3,0L69.7,29z"/>
                <path d="M77.2,32.3l-3.1,1.4c-0.4,0.2-0.7,0.2-1,0.2c-0.3,0-0.6-0.2-0.9-0.4c-0.3-0.2-0.5-0.5-0.7-1c-0.3-0.6-0.4-1.2-0.2-1.6
                    c0.2-0.5,0.5-0.9,1-1.1l3.1-1.4l0.5,1l-2.9,1.4c-0.4,0.2-0.6,0.4-0.7,0.6c-0.1,0.2-0.1,0.5,0.1,0.8c0.2,0.3,0.4,0.5,0.6,0.6
                    c0.2,0.1,0.5,0,0.9-0.2l2.9-1.4L77.2,32.3z"/>
                <path d="M76.7,40.5c-0.8,0.2-1.5,0.1-2.1-0.3s-0.9-1-1.1-1.9l-0.3-1.5l5.1-1.1l0.3,1.6c0.2,0.8,0.1,1.5-0.2,2.1
                    C78.1,40,77.5,40.4,76.7,40.5z M76.5,39.4c1.1-0.2,1.5-0.8,1.3-1.8L77.7,37l-3.3,0.7l0.1,0.5C74.7,39.3,75.4,39.7,76.5,39.4z"/>
                <path d="M76.9,48.2c-0.9,0-1.5-0.2-2-0.7s-0.7-1.1-0.7-1.9s0.3-1.4,0.7-1.8c0.5-0.4,1.1-0.6,2-0.6c0.9,0,1.5,0.2,2,0.7
                    c0.5,0.4,0.7,1.1,0.7,1.9c0,0.8-0.3,1.4-0.7,1.8C78.4,48,77.7,48.2,76.9,48.2z M76.9,44.4c-0.6,0-1,0.1-1.3,0.3s-0.5,0.5-0.5,1
                    c0,0.9,0.6,1.3,1.7,1.4c1.2,0,1.8-0.4,1.8-1.3c0-0.4-0.1-0.8-0.4-1C78,44.5,77.5,44.4,76.9,44.4z"/>
                <path d="M74.6,53.8c-0.5-0.1-0.8-0.4-1-0.8s-0.2-0.9-0.1-1.5c0.1-0.5,0.3-1,0.6-1.4l1,0.2c-0.2,0.3-0.4,0.6-0.5,0.8
                    c-0.1,0.2-0.2,0.4-0.2,0.6c-0.1,0.2-0.1,0.4,0,0.6c0.1,0.1,0.2,0.2,0.4,0.3c0.1,0,0.2,0,0.3,0c0.1,0,0.2-0.1,0.3-0.2
                    c0.1-0.1,0.3-0.3,0.5-0.6c0.2-0.3,0.4-0.5,0.6-0.6c0.2-0.1,0.4-0.2,0.6-0.3c0.2-0.1,0.4,0,0.7,0c0.5,0.1,0.8,0.3,1,0.7
                    s0.2,0.8,0.1,1.4c-0.1,0.3-0.2,0.5-0.3,0.7c-0.1,0.2-0.3,0.5-0.4,0.7L77.2,54c0.2-0.2,0.3-0.5,0.4-0.6c0.1-0.2,0.1-0.3,0.2-0.5
                    c0-0.2,0-0.4,0-0.5c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1,0-0.2,0-0.3,0s-0.2,0.1-0.3,0.2s-0.3,0.3-0.5,0.6c-0.3,0.4-0.6,0.7-0.9,0.8
                    C75.2,53.8,74.9,53.8,74.6,53.8z"/>
                  </svg>
                  <svg version="1.1" id="cssda-badge-award" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                     <path d="M23.4,72l0.6-1.3l-1.5-1.4l-1.2,0.7l-1-0.9l5.3-2.9l1.1,1l-2.3,5.6L23.4,72z M24.4,69.8c0.5-1.2,0.8-1.8,0.9-2
                        c0.1-0.2,0.1-0.3,0.2-0.4c-0.3,0.2-1,0.6-2.2,1.3L24.4,69.8z"/>
                     <path d="M32,77.2l-1.2-0.6l0.6-3c0-0.1,0.1-0.3,0.2-0.7c0.1-0.3,0.2-0.5,0.2-0.7c-0.1,0.1-0.2,0.3-0.4,0.6c-0.2,0.2-0.3,0.4-0.4,0.5
                        l-2,2.3l-1.2-0.6l1.2-5.7l1.1,0.5L29.3,73c-0.1,0.6-0.3,1.1-0.4,1.5c0.1-0.1,0.2-0.3,0.4-0.6s0.3-0.4,0.5-0.6l2.2-2.5l1,0.5
                        l-0.7,3.2c0,0.1-0.1,0.4-0.2,0.6c-0.1,0.3-0.2,0.5-0.2,0.7c0.1-0.2,0.3-0.4,0.4-0.6c0.2-0.2,0.3-0.4,0.5-0.6l2-2.4l1.1,0.5L32,77.2z
                        "/>
                     <path d="M39.9,79.3l-0.1-1.4l-2-0.4L37,78.8l-1.3-0.2l3-5.2l1.4,0.3l0.9,6L39.9,79.3z M39.6,76.9c-0.1-1.3-0.2-2-0.2-2.2
                        c0-0.2,0-0.3,0-0.4c-0.1,0.3-0.5,1.1-1.2,2.3L39.6,76.9z"/>
                     <path d="M45.4,77.5l0.1,2.2l-1.2,0l-0.2-5.7l1.6-0.1c0.8,0,1.3,0.1,1.7,0.4c0.4,0.3,0.6,0.7,0.6,1.3c0,0.3-0.1,0.6-0.2,0.9
                        c-0.2,0.3-0.4,0.5-0.8,0.6c0.9,1.2,1.5,2,1.8,2.4l-1.3,0.1L46,77.5L45.4,77.5z M45.4,76.5l0.4,0c0.4,0,0.7-0.1,0.8-0.2
                        c0.2-0.1,0.3-0.3,0.2-0.6c0-0.3-0.1-0.5-0.3-0.6S46,75,45.7,75l-0.4,0L45.4,76.5z"/>
                     <path d="M55.7,75c0.3,0.9,0.2,1.7-0.2,2.3c-0.4,0.6-1,1.1-2,1.3L51.9,79l-1.5-5.5l1.7-0.5c0.9-0.3,1.6-0.2,2.3,0.1
                        C55,73.5,55.4,74.1,55.7,75z M54.5,75.3c-0.3-1.2-1-1.6-2-1.3l-0.6,0.2l1,3.6l0.5-0.1C54.4,77.3,54.8,76.5,54.5,75.3z"/>
                     <path d="M62.6,74.7l-2.9,1.6l-2.7-5l2.9-1.6l0.5,0.9l-1.8,1l0.6,1.1l1.7-0.9l0.5,0.9l-1.7,0.9l0.7,1.3l1.8-1L62.6,74.7z"/>
                     <path d="M67.1,67.5c0.6,0.7,0.9,1.4,0.8,2.1c-0.1,0.7-0.5,1.4-1.2,2.1l-1.2,1.1l-3.7-4.3l1.3-1.2c0.7-0.6,1.4-0.9,2.1-0.9
                        C65.9,66.5,66.6,66.8,67.1,67.5z M66.2,68.3c-0.8-0.9-1.6-1-2.4-0.3l-0.5,0.4l2.4,2.8l0.4-0.3C67,70.1,67,69.3,66.2,68.3z"/>
                  </svg>
                </div>
              </div>
            </a>


        </div>
        <div id="background-hack01" class="layer is-front" data-depth="1.00"></div>
      </div>
    </section>

    <!--  -->

    <section id="gallery01" class="section">
      <div id="gallery_left01">
        <div class="mask">
          <div class="mask1"></div>
          <div class="mask2"></div>
          <div class="mask3">
            <div class="mask_cont">
              <p style="color: goldenrod;font-size: 20px;">Le centre « Training Success» souhaite gérer ses activités à travers un portail web, nous décrivons les services en :</p>
                <p class="credit">
                  •	La gestion de formations classées selon deux catégories : Training et Diplôme<br><br>
                  •	Les formations de types training, sont des cours proposés par le centre, visant à former l’intéressé dans un groupe collectif ou individuel, et à la fin une attestation lui est délivré, généralement ce type de formation ont une durée moins de 6 mois. <br><br>
                  •	Les formations de type Diplôment, sont des cours de plus d’un an dont on note : <br><br>
                  o	Diplôme de technicien spécialisée ( bac+2)  : 2 ans <br><br>
                  o	Diplôme de licence professionnelle ( bac+3) : 1 an <br><br>
                  o	Diplôme d’ingénierie / Master (bac+5) :  2 ans <br>
                  <br>
                  •	Les formations de Training concernent un seul module par formation, ainsi que l’attestation délivrée concerne un seul module. <br> <br>
                  •	Les formations de diplômes comportent plusieurs modules organisées selon le niveau et la filière choisit (Informatique / Design)
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  -->




</main>




    <script src="js/jquery.parallax.js"></script>
    <script type="text/javascript">
      $('.scene').parallax({
        calibrateX: false,
        calibrateY: true,
        invertX: false,
        invertY: true,
        limitX: false,
        limitY: 10,
        scalarX: 2,
        scalarY: 8,
        frictionX: 0.2,
        frictionY: 0.8
      });
    </script>

   <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(35.6689266,139.7075445), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "featureType": "administrative",
    "stylers": [
      {
        "color": "#575758"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "labels",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#624f3f"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.attraction",
    "stylers": [
      {
        "color": "#1f1f1f"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "stylers": [
      {
        "color": "#1f1f1f"
      }
    ]
  },
  {
    "featureType": "poi.government",
    "stylers": [
      {
        "color": "#1f1f1f"
      }
    ]
  },
  {
    "featureType": "poi.medical",
    "stylers": [
      {
        "color": "#1f1f1f"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#181818"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1b1b1b"
      }
    ]
  },
  {
    "featureType": "poi.place_of_worship",
    "stylers": [
      {
        "color": "#1f1f1f"
      }
    ]
  },
  {
    "featureType": "poi.school",
    "stylers": [
      {
        "color": "#1f1f1f"
      }
    ]
  },
  {
    "featureType": "poi.sports_complex",
    "stylers": [
      {
        "color": "#1f1f1f"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#2c2c2c"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8a8a8a"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#373737"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3c3c3c"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#4e4e4e"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#000000"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3d3d3d"
      }
    ]
  }
]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('office_map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                // IMG
                var markerImg = {
                        url: 'img/map_pin.png'
                      };
                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(35.6663193,139.7089150),
                    map: map,
                    icon: markerImg,
                    title: 'GENUINE'
                });
            }
        </script>
  </body>
</html>
