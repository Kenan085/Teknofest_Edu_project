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
<h1 id="check" class="detail-box " style="color: white; display: block;">Creating quiz</h1>
</div>


    <div class="container ">
        <div class="detail-box">
        <form action="./quizCreating.php" onsubmit="return fillAllNames()" method="POST">
            <br>
            <div >
                <h4 style="color: white;">Please write the subject of your topic</h4>
                <input type="text" name="subjectName" id="subjectInput">
            </div>
            <br>
            <div >
                <h4 style="color: white;">Please write your topic</h4>
                <input type="text" name="topic" id="topicInput">
            </div>
            <br>
            <div >
                <h4 style="color: white;">Please choose the level of questions</h4>
                <select name="type" id="levelInput">
                    <option value="easy" default>Easy</option>
                    <option value="normal">Normal</option>
                    <option value="hard">Hard</option>
                </select>
            </div>
            <br>
            <div>
                <h4 style="color: white;">Please select duration</h4>
                <input type="time" name="duration" value="00:30" id="durationInput">
                <span style="color:grey; opacity: 0.5;">Default is 30 minutes</span>
            </div>
            <br>
            
            <div style="display: none;">

                <input type="text" name="usernameInInput" id="usernameInInput">
            </div>
            <br>
            


              <hr style="background-color:rgb(33, 24, 107); height:3px;">

                  <div id="Questions">
                    <div id="questionDiv1">
                        <div id="question1">
                          <div>
                            <div>
                          <h5 style="color: white;">Question № 1</h5><br>
                          <input type="text" style="max-width: 200px;" name="question1" id="question1" placeholder="Question?">
                            </div>
                          <br>
                          <div>
                          <input type="text" name="optionA1" id="optionA1" class="optionA1" placeholder="Option A">
                          </div>
                          <br>
                          <div>
                          <input type="text" name="optionB1" id="optionB1" class="optionB1" placeholder="Option B">
                          </div>
                          <br>
                          <div>
                          <input type="text" name="optionC1" id="optionC1" class="optionC1" placeholder="Option C">
                          </div>
                          <br>
                          <div>
                          <input type="text" name="optionD1" id="optionD1" class="optionD1" placeholder="Option D">
                          </div>
                          <br>
                          <div>
                            <p style="color: white;">Please choose the correct answer</p>
                            <select name="answer1" id="answer1">
                                <option value="" default>answer</option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                            </select>
                          </div>
                          </div>
                        </div><br>
                        </div>
                    </div>
                <br>
               
                <hr style="background-color:rgba(5,1,75,255); height:3px;">
                <div><p id="fillAlert" style="display:none;color:red;">*Fill All inputs</p></div> <br>
                <div>
                <input type="text" style="display:none;" name="countOfQuestions" id="countOfQuestions">
                          <input style="    display: inline-block;
                padding: 10px 15px;
                background-color: #00bbf0 !important;
                color: #ffffff;
                border-radius: 0;
                transition: all 0.3s;
                border: none; " type="button" value="Add question" onclick="addQuestion()">
                                    <input style="  margin-left: 10px;  display: inline-block;
                padding: 10px 15px;
                background-color: #00bbf0 !important;
                color: #ffffff;
                border-radius: 0;
                transition: all 0.3s;
                border: none; " type="button" onclick="removeQuestion()" value="Remove question">
                        </div>
                        <br>
              <div>
            
            <input style="    display: inline-block;
  padding: 10px 15px;
  background-color: #00bbf0 !important;
  color: #ffffff;
  border-radius: 0;
  transition: all 0.3s;
  border: none; " type="submit" value="Create" id="create">
          
          </div>
          </form>
              </div>
        </div>
        
    <!-- end slider section -->
  </div>

  <section class="slider_section">

  </section>
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
  <p id="last_id" style="display: none;"></p>
  <!-- end info section -->
  <script type="text/javascript">  
                const storedData = sessionStorage.getItem('myData');
              const data = storedData ? JSON.parse(storedData) : null;
              document.getElementById("username").innerHTML=data.username;
              document.getElementById("usernameInInput").value=data.username;
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

  <script type="text/javascript">
    var countOfQuestions = 1;
      function addQuestion() {
        countOfQuestions++;
        document.getElementById('questionDiv'+(countOfQuestions-1).toString()).insertAdjacentHTML("afterend",`<?php echo '<div id="questionDiv' ; ?>`+countOfQuestions+`<?php echo '"><hr style="background-color:rgba(5,1,75,255); height:3px;"><br><div><div><h5 style="color: white;">Question № ' ; ?>`+countOfQuestions+`<?php echo '</h5><br><input type="text" style="max-width: 200px;" id="question' ; ?>`+countOfQuestions+`<?php echo '" name="question' ; ?>`+countOfQuestions+`<?php echo '" placeholder="Question?"></div><br><div><input type="text" name="optionA' ; ?>`+countOfQuestions+`<?php echo '" id="optionA' ; ?>`+countOfQuestions+`<?php echo '" class="optionA1" placeholder="Option A"></div><br><div><input type="text" name="optionB' ; ?>`+countOfQuestions+`<?php echo '" id="optionB' ; ?>`+countOfQuestions+`<?php echo '" class="optionB1" placeholder="Option B"></div><br><div><input type="text" name="optionC' ; ?>`+countOfQuestions+`<?php echo '" id="optionC' ; ?>`+countOfQuestions+`<?php echo '" class="optionC1" placeholder="Option C"></div><br><div><input type="text" name="optionD' ; ?>`+countOfQuestions+`<?php echo '" id="optionD' ; ?>`+countOfQuestions+`<?php echo '" class="optionD1" placeholder="Option D"></div><br><div><p style="color: white;">Please choose the correct answer</p><select name="answer' ; ?>`+countOfQuestions+`<?php echo '" id="answer'; ?>`+countOfQuestions+`<?php echo '"><option value="" default>answer</option><option value="a">A</option><option value="b">B</option><option value="c">C</option><option value="d">D</option></select</div></div></div>'; ?>`)
      }
      function removeQuestion() {
        if (countOfQuestions>=2) {
        document.getElementById("questionDiv"+countOfQuestions.toString()).remove();
        countOfQuestions--;
        }
      }
      function fillAllNames() {
        var checkNumber=countOfQuestions;
        var trueChecker=0;
        for (let index = checkNumber; index > 0; index--) {
          if (document.getElementById("question"+index.toString()).value!="") {
            trueChecker++;
            if (document.getElementById("optionA"+index.toString()).value!="") {
                trueChecker++;
                if (document.getElementById("optionB"+index.toString()).value!="") {
                    trueChecker++;
                    if (document.getElementById("optionC"+index.toString()).value!="") {
                      trueChecker++;
                      if (document.getElementById("optionD"+index.toString()).value!="") {
                      trueChecker++;
                          if (document.getElementById("answer"+index.toString()).innerHTML!="") {
                          trueChecker++;
                            if (document.getElementById("subjectInput").value!="") {
                            trueChecker++;
                              if (document.getElementById("topicInput").value!="") {
                              trueChecker++;
                                  if (document.getElementById("levelInput").innerHTML!="") {
                                    trueChecker++;
                                    if (document.getElementById("durationInput").value!="") {
                                    trueChecker++;
                                    }else{
                                      trueChecker=0;
                                      document.getElementById("fillAlert").style.display="block";
                                    }
                                  }else{
                                    trueChecker=0;
                                    document.getElementById("fillAlert").style.display="block";
                                  }
                              }else{
                                trueChecker=0;
                                document.getElementById("fillAlert").style.display="block";
                              }
                            }else{
                              trueChecker=0;
                              document.getElementById("fillAlert").style.display="block";
                            }
                          }else{
                            trueChecker=0;
                            document.getElementById("fillAlert").style.display="block";
                          }
                      }else{
                        trueChecker=0;
                        document.getElementById("fillAlert").style.display="block";
                      }
                    }else{
                      trueChecker=0;
                      document.getElementById("fillAlert").style.display="block";
                    }
                }else{
                  trueChecker=0;
                  document.getElementById("fillAlert").style.display="block";
                }
            }else{
              trueChecker=0;
              document.getElementById("fillAlert").style.display="block";
            }
          }else{
            trueChecker=0;
            document.getElementById("fillAlert").style.display="block";
          }
        }  
        document.getElementById("countOfQuestions").value=checkNumber;
        if (trueChecker==(10*checkNumber)) {
            return true;
          }else{
            return false;
          }
      }
     
  </script>

</body>

</html>