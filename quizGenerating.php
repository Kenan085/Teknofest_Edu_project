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
    <br><br><br><br><br>
    <div id="showWhenQuizAdded" style="display:none;">
    <br><br><br>
      <h1 style="color:white; margin-left:30px;">Congratulations AI have generated quiz for you.</h1>
      <br><br>
      <h2 id="quiz_id" style="color:white; margin-left:30px;"></h2>
      <br>
      <h2 style="color:white; margin-left:30px;">You can suggest it to your students by telling them quiz code. Don`t forget to test it before...</h2>
      <br>
      <form action="./game.php" method="post">
        <input type="text" style="display:none;" name="idOfSection" id="idOfSection">
        <input type='submit' style="    display: inline-block;
              padding: 10px 15px;
              background-color: #00bbf0 !important;
              color: #ffffff;
              border-radius: 0;
              transition: all 0.3s;
              border: none; margin-left:30px;" class='btn1Quiz' value='Start quiz'/>
      </form>  
      </div>
<div class="container" id="hideWhenQuizAdded" style="padding: 0px; margin-top:40px; margin-left:100px">
<div class="loadingBox"></div>
<br><br><br><h1 style="color: white;"> Generating...</h1>
</div>


    <div class="container " style="display:none;">
        <div class="detail-box">
        <form action="" method="POST" style="margin-left: 20%;">
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
                <h4 style="color: white;">Please select the number of questions</h4>
                <input type="number" min="1" name="countOfQuestions" id="numOfQuestionsInput">
            </div>
            <br>
            <div >
                <h4 style="color: white;">Please choose the level of questions</h4>
                <select name="type" id="levelInput">
                    <option value="easy" default>Easy</option>
                    <option value="normal">Norlmal</option>
                    <option value="hard">Hard</option>
                </select>
            </div>
            <br>
            <div>
                <h4 style="color: white;">Please select duration</h4>
                <input type="time" name="duration" value="00:05" id="durationInput">
            </div>
            <br>
            <div style="display: none;">
                <input type="text" name="usernameInInput" id="usernameInInput">
            </div>
            <br>

            <div>
            
              <input type="submit" value="generate" id="generate">
            
            </div>
            <form>
        </div>
        <div>
            
        </div>
    <!-- end slider section -->
  </div>
  <!-- end client section -->
  <!-- info section -->
 
<form id="myForm" action="./quizGenerating.php" method="POST">
  <input id="last_id" name="lastId" style="display: none;"  type="text"/>
  <input id="quizContainer" name="quizContainer" style="display: none;" type="submit"/>
</form>
  
  <!-- end info section -->
  <script type="text/javascript">  
                const storedData = sessionStorage.getItem('myData');
              const data = storedData ? JSON.parse(storedData) : null;
              document.getElementById("username").innerHTML=data.username;
              document.getElementById("usernameInInput").value=data.username;
              if (document.getElementById('subjectInput').value=="") {
                const storedDatas = sessionStorage.getItem('myDatas');
                const datas = storedDatas ? JSON.parse(storedDatas) : null;
                document.getElementById('quiz_id').innerHTML='Quiz Code = '+datas.last_id;
                document.getElementById('idOfSection').value=datas.last_id;
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
  <script>
        function repeatableFunction() {
            var quizContainer = document.getElementById("quizContainer").value;
            if (quizContainer!="") {
              clearInterval(intervalId);
              document.getElementById("quizContainer").click();
            }
        }

// Set an interval to call the function every 1 second
var intervalId = setInterval(repeatableFunction, 1000);

// To stop the repetition after a certain time or condition, you can use clearInterval
// For example, to stop after 10 seconds:
setTimeout(function() {

    clearInterval(intervalId); // This will stop the repetition
}, 1000000);

        
    </script>
  <script  type="module" src="./bundle.js"></script>
  <script type="text/javascript">
    
          <?php 


            $conn = new mysqli('localhost:3306','root','root','feducation');
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              
              if ($conn->connect_error) {
                die('Connection failed : ' .$conn->connection_error);
              }else{  
                if (array_key_exists('quizContainer', $_POST)) {
                  $name = $_POST['quizContainer'];
                  $last_id = $_POST['lastId'];
                  $stmt = $conn->prepare($name);
                  $stmt->execute();

                  echo"
                  document.getElementById('showWhenQuizAdded').style.display='block';
                  document.getElementById('hideWhenQuizAdded').style.display='none';
                  ";
                  $stmt->close();
                  $conn->close();
              }else{
            $subjectName = (string)$_POST['subjectName'];
            $usernameInInput = (string)$_POST['usernameInInput'];
            $topic = (string)$_POST['topic'];
            $type = (string)$_POST['type'];
            $duration = (string)$_POST['duration'];
            $countOfQuestions = (int)$_POST['countOfQuestions'];
            if ($subjectName!=null) {
              echo "
              document.getElementById('subjectInput').value='$subjectName';
              document.getElementById('topicInput').value='$topic';
              document.getElementById('numOfQuestionsInput').value='$countOfQuestions';
              document.getElementById('durationInput').value='$duration';
              document.getElementById('usernameInInput').value='$usernameInInput';
              document.getElementById('levelInput').innerHTML='$type';
              ";
            // $result= mysqli_query($conn,"select username from users where username = '$username'");
            // $row=mysqli_fetch_array($result);
            $stmt = $conn->prepare('insert into feducation.section (subjectName,topic,countOfQuestions,duration,type,username) values(?,?,?,?,?,?);');
            $stmt->bind_param("ssisss",$subjectName,$topic,$countOfQuestions,$duration,$type,$usernameInInput);
            $stmt->execute();
            $last_id = $conn->insert_id;
            echo "
            setTimeout(function() {

              document.getElementById('last_id').value='$last_id';
              const last_id = '$last_id';
                
              const datas = {
                last_id: last_id
              };
              
              sessionStorage.setItem('myDatas', JSON.stringify(datas));
              
          }, 1000);
          
            ";
            $stmt->close();
            $conn->close();}
            }
            }
            }
            ?>
  </script>
  
</body>

</html>