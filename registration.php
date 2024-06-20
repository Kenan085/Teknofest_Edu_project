<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> CosmicQuizZone </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body style="background-color: rgb(33, 24, 107);">

  <div class="hero_area">

    <div class="hero_bg_box">
        <div class="bg_img_box">
          <img src="images/hero-bg.png">
        </div>
      </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="main.html">
            <div>
              <img src="images/favicon.png"/ width="10%" height="auto;" style="display: inline-block;">
              <span>CosmicQuizZone</span> 
            </div>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="main.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.html">Why Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.html">Team</a>
              </li>
              <li><div style="border: 1px solid white; width: 100%; height: 100%;"></div></li>
              <li class="nav-item">
                <a class="nav-link" href="./login.php">Login</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row" style="display: block;">
                <div class="col-md-6" style="margin: auto;">
                  <div class="detail-box"style="margin: auto;">
                    <form action="#" onsubmit="return checkPassword()" method="POST" style="margin-left: 20%;">
                    <h1 style="margin: auto;">
                      Welcome!
                    </h1>
                    
                    <br><br>
                        <div><input type="text" id="username" placeholder="Username" name="username"></div>
                    <br>
                        <div><input type="password" id="password1" placeholder="Password" name = "password" width="30%"></div>
                    <br>
                        <div><input type="password" id="password2" placeholder="Repeate password" width="30%"><div id="passwordsMatch" style="display: none;"><br><span style="color: red;">*Your passwords do not match</span></div>
                        <div id="minPassLength" style="display: none;"><br><span style="color: red;">*Your passwords should have at least 8 symbols</span></div>
                        <div id="minUsernameLength" style="display: none;"><br><span style="color: red;">*Your username should have at least 4 symbols</span></div>
                        <div id="checkWhether" style="display: none;"><br><span style="color: red;">*Your should mention whether you are student or teahcer</span></div>
                        <div id="checkUser" style="display: none;"><br><span style="color: red;">*This user already exists, Please change username</span></div>
                    </div>
                    <br>
                    
                    <div>
                        <h5 style="color: white;">Who are you?</h5>
                        <label>
                          <input id="checkbox1" type="checkbox" class="radio" value="2" name="check" /><span style="color: white;">Student</span></label>
                        <label style="margin-left: 20px;">
                          <input id="checkbox2" type="checkbox" style="color: white;" class="radio" value="1" name="check" /><span style="color: white;">Teacher</span></label>
                      </div>
                    <br>
                    <div class="btn-box" style="margin: auto;">
                      <input type="submit" value="Start" class="btn1" style="width: 30%;">
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- end client section -->


  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call  +994999999999
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
<span>bhos@bhos.edu.az</span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div><div>
            <p>
            &copy; All Rights Reserved By BHOS
            </p>
    </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="main.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="service.html">
                Services
              </a>
              <a class="" href="why.html">
                Why Us
              </a>
              <a class="" href="team.html">
                Team
              </a>
            </div>
            
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
        <div class="container">
          
            <p>
              &copy; <span id="displayYear"></span> All Rights Reserved By BHOS
            </p>
          </div>
      </div>
    </div>
  </section>
  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="./js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="./js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>
<script type="text/javascript" src="./js/registration.js"></script>
<?php 
            error_reporting(0);
            $conn = new mysqli('localhost:3306','root','root','feducation');
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              
              if ($conn->connect_error) {
                die('Connection failed : ' .$conn->connection_error);
              }else{  
            $username = (string)$_POST['username'];
            $password = (string)$_POST['password'];
            $status = (int)$_POST['check'];
            $result= mysqli_query($conn,"select username from users where username = '$username'");
            $row=mysqli_fetch_array($result);

              if ($row[0]=="$username") {
                echo "<script type='text/javascript'>
                document.getElementById('checkUser').style='display: block;';
                </script>";
                $conn->close();
              }else{
                echo "<script type='text/javascript'>
                document.getElementById('checkUser').style='display: none;';
                </script>";
              $stmt = $conn->prepare('insert into feducation.users (username,password,status) values(?,?,?);');
              $stmt->bind_param("ssi",$username,$password,$status);
              $stmt->execute();
              $stmt->close();
              $conn->close();
              echo "<script type='text/javascript'>
              document.location.href = './login.php';
              </script>";
              }
            }
            }else {
              echo "<script type='text/javascript'>
              document.getElementById('checkUser').style='display: none;';
              </script>";
            }
            ?>
</html>