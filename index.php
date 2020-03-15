<?php

$home1 = "Rostov";
$home2 = "Galatasaray";
$home3 = "Olimpik Donetsk";
$home4 = "Glasgow Rangers";

$quoteHome1 = 2.26;
$quoteHome2 = 2.04;
$quoteHome3 = 1.80;
$quoteHome4 = 3.40;

$quoteDraw1 = 3.15;
$quoteDraw2 = 3.55;
$quoteDraw3 = 2.20;
$quoteDraw4 = 3.60;

$quoteAway1 = 2.85;
$quoteAway2 = 3.35;
$quoteAway3 = 2.56;
$quoteAway4 = 2.10;

$away1 = "Lokomotiv Moskou";
$away2 = "Besiktas";
$away3 = "Vorskla Poltava";
$away4 = "Bayer Leverkussen";



?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rexbd.net/html/butlar/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 12:23:29 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="assets/images/logo.png"/>
  <title>Sports bet for fun</title>
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- flat icon css link -->
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- animate css link -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- slick slider css link -->
  <link rel="stylesheet" href="assets/css/slick.css">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="assets/css/lightcase.css">
  <!-- main style css link -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- responsive css file -->
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

  <div class="custom-cursor"></div>
  <!--  header-section start  -->
  <header class="header-section">
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">
              <li class=""><a href="index.php">
                
                


              </a></li>
              <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="login.php">

                    <?php 

                    include 'config.php';
                    $servername = "localhost";
                    $username = "crashbeer_nl_sportbet";
                    $password = "4ZyY6iqsMLpY";
                    $dbname = "crashbeer_nl_sportbet";

                    session_start();

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        echo ("Connection failed: " . $conn->connect_error);
                    }


                    



                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

                      $getuser = $_SESSION["username"];
                    $sql = "SELECT budget FROM users WHERE username='$getuser'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $budget = $row["budget"];
                            echo "$" . $budget . ",00";

                        }
                    } else {
                       
                    }
    
}else {
  echo "login";
}

?>
</a></li>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- banner-section start -->
  <section class="banner-section">
    <div class="banner-image-part">
      <div class="thumb-one"><img src="assets/images/elements/man-1.png" alt="banner-image"></div>
      <div class="thumb-two"><img src="assets/images/elements/man-2.png" alt="banner-image"></div>
      <div class="thumb-three"><img src="assets/images/elements/man-3.png" alt="banner-image"></div>
      <div class="thumb-four"><img src="assets/images/elements/coin.png" alt="banner-image"></div>
    </div>
    <div class="banner-content-area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="banner-content text-center">
              <h1 class="banner-title wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">Welkom bij TOTO for fun</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-4">
  </section>
  <!-- banner-section end -->

  <!-- play-section start -->
  <section class="play-section section-padding section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">Programma</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="online-play-tab-part">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="play-table-part">
                  <div class="play-table">
                    <table>
                      <thead>
                        <tr>
                          <th class="team-name">name of the team</th>
                          <th class="goal"></th>
                          <th class="choice-team">Choose your team</th>
                          <th class="choice-team">Bet</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="team-name-part">
                              <i class="fa fa-futbol-o"></i>
                              <div class="content">
                                <span class="name">
                                <?php

                                echo $home1;

                                ?>
                                

                              </span>
                                <span class="name">                                <?php

                                echo $away1;

                                ?></span>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="score">
                              <span class="first-team-score"></span>
                              <span class="second-team-score"></span>
                            </div>
                          </td>
                          <td>
                            <form action="bet.php" method="post">
                            <div class="choice-team-part">
                              <div class="single-item">
                                <input type="radio" name= "set" value="home">                              <?php

                                echo $home1;

                                ?>
                                <p><?php

                                echo $quoteHome1;

                                ?><i class="fa fa-angle-down"></i></p>
                              </div>
                              <div class="single-item">
                                <input type="radio" checked="checked" name= "set" value="draw">Draw
                                <p>                                <?php

                                echo $quoteDraw1;

                                ?><i class="fa fa-angle-up"></i></p>
                              </div>
                              <div class="single-item">
                                <input type = "radio" name="set" value="away">                                <?php

                                echo $away1;

                                ?></input>
                                <p><?php

                                echo $quoteAway1;

                                ?><i class="fa fa-angle-up"></i></p>
                              </div>
                            </div>
                          </td>
                         
                          <td>
                          Inleg: <input min="1" type="number" checked="checked" name="inlay" id="input1"><br>
                          <input type="submit" value="submit" id="submit1">
                          </form>
                        </td>
                          <td>
                            
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="team-name-part">
                              <i class="fa fa-futbol-o"></i>
                              <div class="content">
                                <span class="name"><?php

                                echo $home2;

                                ?></span>
                                <span class="name"><?php

                                echo $away2;

                                ?></span>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="score">
                              <span class="first-team-score"></span>
                              <span class="second-team-score"></span>
                            </div>
                          </td>
                          <td>
                            <form action="bet2.php" method="post">
                            <div class="choice-team-part">
                              <div class="single-item">
                                <input type="radio" name= "set" value="home"><?php

                                echo $home2;

                                ?>
                                <p><?php

                                echo $quoteHome2;

                                ?><i class="fa fa-angle-down"></i></p>
                              </div>
                              <div class="single-item">
                                <input type="radio" name= "set" value="draw">Draw
                                <p><?php

                                echo $quoteDraw2;

                                ?><i class="fa fa-angle-up"></i></p>
                              </div>
                              <div class="single-item">
                                <input type="radio" name= "set" value="away"><?php

                                echo $away2;

                                ?>
                                <p><?php

                                echo $quoteAway2;

                                ?><i class="fa fa-angle-up"></i></p>
                              </div>
                            </div>
                          </td>
                                                                              <td>
                          Inleg: <input min="1" type="number" checked="checked" id="input2" name="inlay"><br>
                          <input type="submit" id="submit2" value="submit">
                        </form>
                        </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="team-name-part">
                              <i class="fa fa-futbol-o"></i>
                              <div class="content">
                                <span class="name"><?php

                                echo $home3;

                                ?></span>
                                <span class="name"><?php

                                echo $away3;

                                ?></span>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="score">
                              <span class="first-team-score"></span>
                              <span class="second-team-score"></span>
                            </div>
                          </td>
                          <td>
                            <form action="bet3.php" method="post">
                            <div class="choice-team-part">
                              <div class="single-item">
                                <input type="radio" name= "set" value="home"><?php

                                echo $home3;

                                ?>
                                <p><?php

                                echo $quoteHome3;

                                ?><i class="fa fa-angle-down"></i></p>
                              </div>
                              <div class="single-item">
                                <input type="radio" name= "set" value="draw">Draw
                                <p><?php

                                echo $quoteDraw3;

                                ?><i class="fa fa-angle-up"></i></p>
                              </div>
                              <div class="single-item">
                                <input type="radio" name= "set" value="away"><?php

                                echo $away3;

                                ?>
                               <p><?php

                                echo $quoteAway3;

                                ?><i class="fa fa-angle-up"></i></p>
                              </div>
                            </div>
                          </td>
                                                                              <td>
                          Inleg: <input min="1" id="input3" type="number" checked="checked" name="inlay"><br>
                          <input type="submit" id="submit3" value="submit">
                        </form>
                        </tr>
                        <tr>
                          <td>
                            <div class="team-name-part">
                              <i class="fa fa-futbol-o"></i>
                              <div class="content">
                                <span class="name"><?php

                                echo $home4;

                                ?></span>
                                <span class="name"><?php

                                echo $away4;

                                ?></span>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="score">
                              <span class="first-team-score"></span>
                              <span class="second-team-score"></span>
                            </div>
                          </td>
                          <td>
                            <form action="bet4.php" method="post">
                            <div class="choice-team-part">
                              <div class="single-item">
                                <input type="radio" name= "set" value="home"><?php

                                echo $home4;

                                ?>
                                <p><?php

                                echo $quoteHome4;

                                ?><i class="fa fa-angle-down"></i></p>
                              </div>
                              <div class="single-item">
                                <input type="radio" name= "set" value="draw">Draw
                                <p><?php

                                echo $quoteDraw4;

                                ?><i class="fa fa-angle-up"></i></p>
                              </div>
                              <div class="single-item">
                                <input type="radio" name= "set" value="away"><?php

                                echo $away4;

                                ?>
                                <p><?php

                                echo $quoteAway4;

                                ?><i class="fa fa-angle-up"></i></p>
                              </div>
                            </div>
                          </td>
                                                    <td>
                          Inleg: <input min="1" type="number" id="input4" checked="checked" name="inlay"><br>
                          <input type="submit" id="submit4" value="submit">
                        </form>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- online-play-tab-part end -->
        </div>
      </div>
    </div>
  </section>
  <!-- play-section end -->

  <h1 style="text-align: center"> 
    Stand tussen spelers
  </h1>

  <table>
    <tr>
      <td>
        <?php

          for($i=0; $i < 100; $i++){
                    $mysql = "SELECT * FROM users WHERE id='$i'";

                    $result = $conn->query($mysql);

                    if ($result->num_rows >= 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          $username = $row['username'];
                          echo $username . "<br>";

                        }
                    } else {
                       
                    }
}




        ?>
      </td>
      <td>
        <?php



          for($i=0; $i < 100; $i++){
                    $mysql = "SELECT * FROM users WHERE id='$i'";

                    $result = $conn->query($mysql);

                    if ($result->num_rows >= 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          $budget = $row['budget'];
                          echo "$" . $budget . ",00" . "<br>";

                        }
                    } else {
                       
                    }
}




        ?>
      </td>
    </tr>
  </table>

  <h1 style="text-align:center">
    Mijn bets
  </h1>

<table>
  <tr>
    <td>
              <?php
                                        $username = $_SESSION['username'];
                    $mysql = "SELECT * FROM users WHERE username='$username'";

                    $result = $conn->query($mysql);

                    if ($result->num_rows >= 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          $inlay = $row['inlay'];
                          $match1 = $row['match1'];
                          echo "inleg pot 1 = $" . $inlay . ",00" . "<br> team = " . $match1 . "<br>";

                          $inlay2 = $row['inlay2'];
                          $match2 = $row['match2'];
                          echo "inleg pot 2 = $" . $inlay2 . ",00" . "<br> team = " . $match2 . "<br>";


                          $inlay3 = $row['inlay3'];
                          $match3 = $row['match3'];
                          echo "inleg pot 3 = $" . $inlay3 . ",00" . "<br> team = " . $match3 . "<br>";


                          $inlay4 = $row['inlay4'];
                          $match4 = $row['match4'];
                          echo "inleg pot 4 = $" . $inlay4 . ",00" . "<br> team = " . $match4 . "<br>";

                        }
                    } else {
                       
                    }


$conn->close();

        ?>
    </td>
  </tr>
</table>

  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- main jquery library js file -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js file -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- slick slider js file -->
  <script src="assets/js/slick.min.js"></script>
  <!-- lightcase js file -->
  <script src="assets/js/lightcase.js"></script>
  <!-- wow js file -->
  <script src="assets/js/wow.min.js"></script>
  <!-- tweenmax js file -->
  <script src='assets/js/TweenMax.min.js'></script>
  <!-- main js file -->
  <script src="assets/js/main.js"></script>

  <script>
    var time = new Date();
    var hours = time.getHours();
    var minutes = time.getMinutes();
        if( (hours>=17) || (hours<10) ){

            document.getElementById("input2").style.visibility = "hidden";
            document.getElementById("submit2").style.visibility = "hidden";

            document.getElementById("input1").style.visibility = "hidden";
            document.getElementById("submit1").style.visibility = "hidden";

        }
		
        if( (hours>=17) || (hours<10) ){

            document.getElementById("input3").style.visibility = "hidden";
            document.getElementById("submit3").style.visibility = "hidden";


        }
		
        if( (hours>=0) || (hours<21) ){

            document.getElementById("input4").style.visibility = "hidden";
            document.getElementById("submit4").style.visibility = "hidden";


        }
  </script>
</body>

<!-- Mirrored from rexbd.net/html/butlar/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Feb 2020 12:25:58 GMT -->
</html>