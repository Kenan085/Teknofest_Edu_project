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
  <link rel="stylesheet" href="./css/loading.css" type="text/css">

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

            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <br><br><br><br><br>
    <div id="showWhenQuizAdded">
    <br><br><br>
      <h1 style="color:white; margin-left:30px;">Congratulations you have created quiz.</h1>
      <br><br>
      <h2 id="quiz_id" style="color:white; margin-left:30px;"></h2>
      <br>
      <h2 style="color:white; margin-left:30px;">You can suggest it to your students by telling them quiz code. Don`t forget to test it before...</h2>
      <br>
      <form action="./game.php" method="post">
        <input type="text" style="display:none;" name="idOfSection" id="idOfSection">
        <input type='submit' style="display: inline-block;
    padding: 10px 15px;
    background-color: #00bbf0 !important;
    color: #ffffff;
    border-radius: 0;
    transition: all 0.3s;
    border: none; margin-left:30px;" class='btn1Quiz' value='Start quiz'/>
      </form>  
      </div>

  <!-- end client section -->
  <!-- info section -->

  
  <!-- end info section -->
  <script type="text/javascript">  
                const storedData = sessionStorage.getItem('myData');
              const data = storedData ? JSON.parse(storedData) : null;
              document.getElementById("username").innerHTML=data.username;
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
    
          <?php 

error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $conn = new mysqli('localhost:3306','root','root','feducation');
             
              if ($conn->connect_error) {
                die('Connection failed : ' .$conn->connection_error);
              }else{  
                $countOfQuestions=(int)$_POST['countOfQuestions'];
                $subjectName = (string)$_POST['subjectName'];
                $usernameInInput = (string)$_POST['usernameInInput'];
                $topic = (string)$_POST['topic'];
                $type = (string)$_POST['type'];
                $duration = (string)$_POST['duration'];
                $stmt = $conn->prepare('insert into feducation.section (subjectName,topic,countOfQuestions,duration,type,username) values(?,?,?,?,?,?);');
                $stmt->bind_param("ssisss",$subjectName,$topic,$countOfQuestions,$duration,$type,$usernameInInput);
                if ($stmt->execute()) {
                    $last_id = $conn->insert_id;
                    echo "
                    setTimeout(function() {
                      document.getElementById('quiz_id').innerHTML='Quiz Code = ${last_id}';
                      document.getElementById('idOfSection').value=$last_id;
                  }, 1000);
                    ";
                    
                    for ($i = $countOfQuestions; $i > 0; $i--) {
                        $question = isset($_POST["question$i"]) ? $_POST["question$i"] : '';
                        $optionA = isset($_POST["optionA$i"]) ? $_POST["optionA$i"] : '';
                        $optionB = isset($_POST["optionB$i"]) ? $_POST["optionB$i"] : '';
                        $optionC = isset($_POST["optionC$i"]) ? $_POST["optionC$i"] : '';
                        $optionD = isset($_POST["optionD$i"]) ? $_POST["optionD$i"] : '';
                        $answer = isset($_POST["answer$i"]) ? $_POST["answer$i"] : '';
                        
                        if ($answer == "a") {
                            $answer = $optionA;
                        }
                        if ($answer == "b") {
                            $answer = $optionB;
                        }
                        if ($answer == "c") {
                            $answer = $optionC;
                        }
                        if ($answer == "d") {
                            $answer = $optionD;
                        }
            
                        $stmt = $conn->prepare('insert into feducation.quiz (idquiz, question, option_a, option_b, option_c, option_d, correct_answer) values(?, ?, ?, ?, ?, ?, ?)');
                        $stmt->bind_param("issssss", $last_id, $question, $optionA, $optionB, $optionC, $optionD, $answer);
                        $stmt->execute();
                        $stmt->close();
                    }
                } else {
                    echo "Error: " . $stmt->error;
                }
                $conn->close();
          //       if (array_key_exists('quizContainer', $_POST)) {
          //         $name = $_POST['quizContainer'];
          //         $last_id = $_POST['lastId'];
          //         $stmt = $conn->prepare($name);
          //         $stmt->execute();

          //         echo"
          //         document.getElementById('showWhenQuizAdded').style.display='block';
          //         document.getElementById('hideWhenQuizAdded').style.display='none';
          //         ";
          //         $stmt->close();
          //         $conn->close();
          //     }else{
            // $subjectName = (string)$_POST['subjectName'];
            // $usernameInInput = (string)$_POST['usernameInInput'];
            // $topic = (string)$_POST['topic'];
            // $type = (string)$_POST['type'];
            // $duration = (string)$_POST['duration'];
            // $countOfQuestions = (int)$_POST['countOfQuestions'];
          //   if ($subjectName!=null) {
          //     echo "
          //     document.getElementById('subjectInput').value='$subjectName';
          //     document.getElementById('topicInput').value='$topic';
          //     document.getElementById('numOfQuestionsInput').value='$countOfQuestions';
          //     document.getElementById('durationInput').value='$duration';
          //     document.getElementById('usernameInInput').value='$usernameInInput';
          //     document.getElementById('levelInput').innerHTML='$type';
          //     ";
          //   // $result= mysqli_query($conn,"select username from users where username = '$username'");
          //   // $row=mysqli_fetch_array($result);
          //   $stmt = $conn->prepare('insert into feducation.section (subjectName,topic,countOfQuestions,duration,type,username) values(?,?,?,?,?,?);');
          //   $stmt->bind_param("ssisss",$subjectName,$topic,$countOfQuestions,$duration,$type,$usernameInInput);
          //   $stmt->execute();
          //   $last_id = $conn->insert_id;
          //   echo "
          //   setTimeout(function() {

          //     document.getElementById('last_id').value='$last_id';
          //     const last_id = '$last_id';
                
          //     const datas = {
          //       last_id: last_id
          //     };
              
          //     sessionStorage.setItem('myDatas', JSON.stringify(datas));
              
          // }, 1000);
          
          //   ";
          //   $stmt->close();
          //   $conn->close();}
            // }
            }}
            
            ?>
  </script>
  
</body>

</html>