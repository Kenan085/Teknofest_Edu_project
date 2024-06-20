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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

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
            <ul class="navbar-nav">
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
    <section id="gameAnimations">

    </section>
    <section id="quiz" style=" width:100%; background:white;">
      <div class="container-fluid" style="height: 350px; margin:0px; max-width 100%;">
              <div class="row" style="align-items:center;">
                <div class="col-md-3 "style="text-align:center;">
                    <div class="container" style="margin: auto;align-items:center;">
                    <div style="display:inline ; margin: 5px;"><img src="./images/team-3.jpg"width="25px" alt="Your Health"></div><progress min="0" max="100" id="healthOfGamer" value="100"style="margin: auto;background:green;"></progress>
                    </div><br>
                    <div class="container" stlye="margin: auto;align-items:center;">
                    <div style="display:inline ; margin: 5px;"><img src="./images/team-1.jpg" width="25px" alt="Question's strength"></div><progress min="0" max="100" value="50"style="margin: auto; background:green;"></progress>
                    </div>
                </div>
                
                          <?php 
                    // error_reporting(0);
                    $id=(int)$_POST['idOfSection'];
                    $conn = new mysqli('localhost:3306','root','root','feducation');
                      if ($conn->connect_error) {
                        die('Connection failed : ' .$conn->connection_error);
                      }else{  
                        $result = mysqli_query($conn, "SELECT * FROM feducation.quiz where idquiz='$id' ORDER BY RAND()");
                        $count=0;
                        while ($row=mysqli_fetch_assoc($result)) {
                            echo '
                            <form id="quizForm'.$count.'" class="col-md-9 "style="text-align:center;">
                            <div class="questions col-md-12" style="">
                            <div class="container-fluid"><p style=" text-align:center">'. $row["question"] .'</p></div>
                            <div class="container-fluid" stylr="margin: auto">
                              <div class="row" style=" margin: auto;">
                              <input type="text" name="question_id" style="display:none" value="'. $row["idOfQuestion"] .'"/>
                              <input type="text" name="answera" style="display:none" value="'. $row["option_a"] .'"/>
                              <input type="text" name="answerb" style="display:none" value="'. $row["option_b"] .'"/>
                              <input type="text" name="answerc" style="display:none" value="'. $row["option_c"] .'"/>
                              <input type="text" name="answerd" style="display:none" value="'. $row["option_d"] .'"/>
                              <input type="text" name="whichAnswer" style="display:none" value=""/>
                                <div class="col-md-5" style=" width 100%; margin: auto;">
                                  <input type="button" name="aButton" onclick="nextQuestion('.$count.',`a`)" value="'. $row["option_a"] .'"/>
                                </div><br><br><br><br>
                                <div class="col-md-5" style=" width 100%; margin: auto;">
                                <input type="button" name="bButton" onclick="nextQuestion('.$count.',`b`)" value="'. $row["option_b"] .'"/>
                                </div>
                                <div class="col-md-5 " style=" width 100%; margin: auto;">
                                <input type="button" name="cButton" onclick="nextQuestion('.$count.',`c`)" value="'. $row["option_c"] .'"/>
                                </div><br><br><br><br>
                                <div class="col-md-5" style=" width 100%; margin: auto;">
                                <input type="button" name="dButton" onclick="nextQuestion('.$count.',`d`)" value="'. $row["option_d"] .'"/>
                                </div>
                              </div>
                          
                            </div>
                            </div></form>';
                          $count++; 
                        };
                        
                    }

                    // Close database connection
                    $conn->close();
                    ?>

                
              </div>
      </div>
      
    </section>
    <!-- end header section -->
    <!-- slider section -->

    <!-- end slider section -->
  </div>




  <!-- info section -->

  <!-- end info section -->
            <!-- <script type="text/javascript">
              const storedData = sessionStorage.getItem('myData');
              const data = storedData ? JSON.parse(storedData) : null;
              document.getElementById("username").innerHTML=data.username;


              var node = document.getElementById('olYumru');
              
              var newNode = document.createElement('li');
              newNode.dataset.target="customCarousel1";
              newNode.setAttribute('data-slide-to', 0);
              newNode.setAttribute('class','active');
              node.appendChild(newNode);
              var array = document.getElementsByClassName('carousel-item');
              for (let index = 1; index < array.length; index++) {
                newNode = document.createElement('li');
                newNode.dataset.target="customCarousel1";
                newNode.setAttribute('data-slide-to', index);
                node.appendChild(newNode);
              }
              
 ````````           </script> -->
  <!-- jQery -->
  <script type="text/javascript">  
                const storedData = sessionStorage.getItem('myData');
              const data = storedData ? JSON.parse(storedData) : null;
              document.getElementById("username").innerHTML=data.username;
  </script>
    <script>
        // JavaScript code using Three.js
        // You can include Three.js code directly in the HTML file
        // or in an external JavaScript file loaded with a <script> tag

        // Example: Create a scene, camera, and renderer
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera(45, window.innerWidth / (window.innerHeight/1.5), 0.1, 1000);
        var renderer = new THREE.WebGLRenderer();

        renderer.setSize(window.innerWidth, window.innerHeight/1.8);
        document.getElementById('gameAnimations').appendChild(renderer.domElement);

        var geometry = new THREE.BoxGeometry();
        var material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
        var cube = new THREE.Mesh(geometry, material);
        scene.add(cube);

        camera.position.z = 5;

        var animate = function () {
            requestAnimationFrame(animate);

            cube.rotation.x += 0.01;
            cube.rotation.y += 0.01;

            renderer.render(scene, camera);
        };

        animate();
        window.addEventListener('resize', function () {
    camera.aspect = window.innerWidth / (window.innerHeight/1.5);
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight/1.8);
});
    </script>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">

              var countOfQuestions=1;
              var countOfQuestions1=2;
              var countOfTrueAnswers=0;
              var healthOfGamer = document.getElementById("healthOfGamer");
              document.addEventListener('DOMContentLoaded', function() {
            // Your function to execute after the specific HTML element has loaded
                hidequizes();
              });
              function hidequizes() {
                var array=document.getElementsByClassName('questions');
                for (let index = countOfQuestions; index <  array.length; index++) {
                          var quiz=document.getElementById('quizForm' + index);
                            quiz.style.display="none";
                          }
              }
              function nextQuestion(questionIndex,a) {
                var formData = new FormData(document.getElementById('quizForm' + questionIndex));
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST", "./check_answer.php", true);
                
                xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    if (this.responseText.trim() == "true") {
                      countOfTrueAnswers++;
                      var array=document.getElementsByClassName('questions');
                      var numberOfQuestionsForHideAndShow= array.length;
                        for (let index = 0; index <  numberOfQuestionsForHideAndShow; index++) {
                          if (index==numberOfQuestionsForHideAndShow-1) {
                                  alert(countOfTrueAnswers);
                            }else{
                          var quiz=document.getElementById('quizForm' + index);
                          if (quiz.style.display=='') {
                            quiz.style.display="none";
                            document.getElementById('quizForm' + (index+1)).style.display="";;
                            break;
                          }}}
                        }else {
                          if (this.responseText.trim()=="false") {
                                var array=document.getElementsByClassName('questions');
                          var numberOfQuestionsForHideAndShow= array.length;
                            for (let index = 0; index <  numberOfQuestionsForHideAndShow; index++) {
                              if (index==numberOfQuestionsForHideAndShow-1) {
                                healthOfGamer.value-=(200/numberOfQuestionsForHideAndShow);
                                  alert(countOfTrueAnswers);
                            }else{
                              var quiz=document.getElementById('quizForm' + index);
                              if (quiz.style.display=='') {
                                quiz.style.display="none";
                                healthOfGamer.value-=(200/numberOfQuestionsForHideAndShow);
                                document.getElementById('quizForm' + (index+1)).style.display="";;
                                break;
                              }}}
                          }
                    }
                  }
                };
                        if (a==`a`) {
                          formData.set("whichAnswer",formData.get("answera"));
                        }
                        if (a==`b`) {
                          formData.set("whichAnswer",formData.get("answerb"));
                        }
                        if (a==`c`) {
                          formData.set("whichAnswer",formData.get("answerc"));
                        }
                        if (a==`d`) {
                          formData.set("whichAnswer",formData.get("answerd"));
                        }
                xmlhttp.send(formData);
              }
  </script>
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
  <script type="module" src="https://unpkg.com/@splinetool/viewer@1.0.33/build/spline-viewer.js"></script>
</body>
</html>