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
  <link rel="stylesheet" type="text/css" href="./css/mainTable.css" />
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
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="main.html">
            <div>
              <img src="images/favicon.png" width="10%" height="auto;" style="display: inline-block;">
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
                <a class="nav-link"> <i class="fa fa-user" aria-hidden="true"></i>
                <span id="username"></span>
                </a>
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
<div class="container" style="padding: 0px; margin-top:40px; margin-left:100px">
<h1 class="detail-box " style=" display: block;   font-size: 2.8rem;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #ffffff;">Hello , welcome to the teacher panel</h1>
</div><br><br><br>
<section>
  <div class="container">
  <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h2 style="color:white;">
                      Create multiplayer room for your students
                    </h2><br>
                    <p style="color:white;">
                      You can choose quiz by Quiz Code: 
                    </p>
                    <form action="./multiplayer.php" method="POST">
                      <br>
                    <input type="text" style=" padding: 5px;" name="idOfSection" id="" placeholder="Quiz Code">
                    <input style="display: none;" id="username1" type="username" name="username" value="">
                    <br>
                    <input style="  display: inline-block;
                      padding: 10px 35px;
                      background-color: #00bbf0;
                      color: #ffffff;
                      border-radius: 0;
                      -webkit-transition: all 0.3s;
                      transition: all 0.3s;
                      border: none;
                      " type="submit" value="Start">
                    </form>
                    <p style="color:white; font-size:13px">
                      *You can find your and other Quiz Code-s below 
                    </p>
                  </div>
                </div></div>
  </div>
</section>
<br><br>
<div class="container" style="text-align: center;"><h1 style="color:white;text-align:center;   font-size: 3rem;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #ffffff;">Your quizes</h1></div>
    <section class="slider_section">
    <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h2 style="  font-size: 2rem;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #ffffff;">
                      Your Quiz
                    </h2><br>
                    <p>
                      You can create quiz by yourself 
                    </p>
                    <form action="./quizByTeacher.php" method="POST">
                    <input style="display: none;" id="username1" type="username" name="username" value=""><br>
                    <input style="  display: inline-block;
                      padding: 10px 35px;
                      background-color: #00bbf0;
                      color: #ffffff;
                      border-radius: 0;
                      -webkit-transition: all 0.3s;
                      transition: all 0.3s;
                      border: none;
                      " type="submit" value="Start">
                    </form>
                  </div>
                </div><br><br>
                <div class="col-md-6">
                <div class="detail-box">
                    <h2 style="  font-size: 2rem;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #ffffff;">
                      AI Quiz
                    </h2><br>
                    <p>
                      You can generate quiz with the help of ChatGPT
                    </p>
                    <form action="./quiz.php" method="POST">
                    <input style="display: none;" id="username1" type="username" name="username" value=""><br>
                    <input style="  display: inline-block;
                      padding: 10px 35px;
                      background-color: #00bbf0;
                      color: #ffffff;
                      border-radius: 0;
                      -webkit-transition: all 0.3s;
                      transition: all 0.3s;
                      border: none;
                      " type="submit" value="Start">
                    </form>
                  </div>
                </div>
              </div>
            </div>
      <!-- <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Crypto <br>
                      Currency
                    </h1>
                    <p>
                      Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      Crypto <br>
                      Currency
                    </h1>
                    <p>
                      Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div> -->

    </section>
    <section>
            <div class="container" style="text-align: center;"><h1 style="text-align:center;  font-size: 3rem;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #ffffff;">Your quizes</h1></div>
            <br><br>
            <div class="table100 ver3 m-b-110">
            <table data-vertable="ver3">
            <thead>
            <tr class="row1000 head">
            <th class="column100 column1" data-column="column1">Quiz Code</th>
            <th class="column100 column2" data-column="column2">Subject</th>
            <th class="column100 column3" data-column="column3">Topic</th>
            <th class="column100 column4" data-column="column4">Duration</th>
            <th class="column100 column5" data-column="column5">Level</th>
            <th class="column100 column6" data-column="column6">Number of Questions</th>
            <th class="column100 column7" data-column="column7">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php 
          // error_reporting(0);
          $username=$_POST['username'];
          $conn = new mysqli('localhost:3306','root','root','feducation');
            if ($conn->connect_error) {
              die('Connection failed : ' .$conn->connection_error);
            }else{  
              $result = mysqli_query($conn, "SELECT * FROM feducation.section where username='$username'");
              $count=0;
              while ($row=mysqli_fetch_assoc($result)) {
                  echo "
                  <tr class='row1000'>
                  <td class='column100 column1' data-column='column1'>". $row['id'] ."</td>
                  <td class='column100 column2' data-column='column2'>". $row['subjectName'] ."</td>
                  <td class='column100 column3' data-column='column3'>". $row['topic'] ."</td>
                  <td class='column100 column4' data-column='column4'>". $row['duration'] ."</td>
                  <td class='column100 column5' data-column='column5'>". $row['type'] ."</td>
                  <td class='column100 column6' data-column='column6'>". $row['countOfQuestions'] ."</td>
                  <td class='column100 column7' data-column='column7'>
                  <form action='./game.php' method='POST'>
                                            <input style='display: none;' name='idOfSection' value='". $row['id'] ."'/>
                                            <div class='btn-box'>
                                                <input type='submit' class='btn1' value='Start game'/>
                                            </div>
                                            </form>
                  </td>
                  </tr>";
                $count++; 
              }
              echo"            </tbody>
              </table>";
              
          }
          
          ?>

            </div>
            <br><br>

            <div class='btn-box' style="margin-left:20px">
                    <input type='button' onclick="loadMoreQuestions0()" class='btn1' value='Load more quizes'/>
            </div>
            <br><br>
</section>
    <section>
            <div class="container" style="text-align: center;"><h1 style="text-align:center;   font-size: 3rem;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #ffffff;">All quizes</h1></div>
            <br><br>
            <div class="table100 ver3 m-b-110">
            <table data-vertable="ver3">
            <thead>
            <tr class="row100 head">
            <th class="column100 column1" data-column="column1">Quiz Code</th>
            <th class="column100 column2" data-column="column2">Subject</th>
            <th class="column100 column3" data-column="column3">Topic</th>
            <th class="column100 column4" data-column="column4">Duration</th>
            <th class="column100 column5" data-column="column5">Level</th>
            <th class="column100 column6" data-column="column6">Number of Questions</th>
            <th class="column100 column7" data-column="column7">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php 
          // error_reporting(0);
          $conn = new mysqli('localhost:3306','root','root','feducation');
            if ($conn->connect_error) {
              die('Connection failed : ' .$conn->connection_error);
            }else{  
              $result = mysqli_query($conn, "SELECT * FROM feducation.section ORDER BY RAND()");
          $count=0;
              while ($row=mysqli_fetch_assoc($result)) {
                  echo "
                  <tr class='row100'>
                  <td class='column100 column1' data-column='column1'>". $row['id'] ."</td>
                  <td class='column100 column2' data-column='column2'>". $row['subjectName'] ."</td>
                  <td class='column100 column3' data-column='column3'>". $row['topic'] ."</td>
                  <td class='column100 column4' data-column='column4'>". $row['duration'] ."</td>
                  <td class='column100 column5' data-column='column5'>". $row['type'] ."</td>
                  <td class='column100 column6' data-column='column6'>". $row['countOfQuestions'] ."</td>
                  <td class='column100 column7' data-column='column7'>
                  <form action='./game.php' method='POST'>
                                            <input style='display: none;' name='idOfSection' value='". $row['id'] ."'/>
                                            <div class='btn-box'>
                                                <input type='submit' class='btn1' value='Start game'/>
                                            </div>
                                            </form>
                  </td>
                  </tr>";
                $count++; 
              }
              echo"            </tbody>
              </table>";
              
          }
          
          ?>

            </div>
            <br><br>

            <div class='btn-box' style="margin-left:20px">
                    <input type='button' onclick="loadMoreQuestions()" class='btn1' value='Load more quizes'/>
            </div>


            <br><br>
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
      </div>
    </div>
  </section>

  <!-- end info section -->
  <script type="text/javascript">  
                const storedData = sessionStorage.getItem('myData');
              const data = storedData ? JSON.parse(storedData) : null;
              document.getElementById("username").innerHTML=data.username;
              document.getElementById("username1").value=data.username;
              document.addEventListener('DOMContentLoaded', function() {
            // Your function to execute after the specific HTML element has loaded
                hidequizes();
                hidequizes0();
              });
              var countOfQuestions=15;
              var countOfQuestions1=15;
              function hidequizes() {
                var array=document.getElementsByClassName('row100');
                for (let index = countOfQuestions; index < array.length; index++) {
                  array[index].style.display = "none";
                }
              }
              function loadMoreQuestions() {
                
                var array=document.getElementsByClassName('row100');
                if (15+countOfQuestions>array.length) {
                  countOfQuestions1=array.length;
                }else{
                  countOfQuestions1=15+countOfQuestions;
                }
                for (let index = countOfQuestions; index < countOfQuestions1; index++) {
                  array[index].style.display = '';
                }
                countOfQuestions=countOfQuestions1;
              }
              var countOfQuestions0=15;
              var countOfQuestions10=15;
              function hidequizes0() {
                var array0=document.getElementsByClassName('row1000');
                for (let index = countOfQuestions0; index < array0.length; index++) {
                  array0[index].style.display = "none";
                }
              }
              function loadMoreQuestions0() {
                
                var array0=document.getElementsByClassName('row1000');
                if (15+countOfQuestions0>array0.length) {
                  countOfQuestions10=array0.length;
                }else{
                  countOfQuestions10=15+countOfQuestions0;
                }
                for (let index = countOfQuestions0; index < countOfQuestions10; index++) {
                  array0[index].style.display = '';
                }
                countOfQuestions0=countOfQuestions10;
              }
  </script>
  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>