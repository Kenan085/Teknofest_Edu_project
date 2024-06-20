<?php
  header('Access-Control-Allow-Origin: *');
  $selectedAnswer = $_POST['whichAnswer'];
  $questionId = $_POST['question_id'];
  $conn = new mysqli('localhost:3306', 'root', 'root', 'feducation');
  $query = "SELECT correct_answer FROM feducation.quiz WHERE idOfQuestion = $questionId";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $correctAnswer = $row['correct_answer'];
    if ($selectedAnswer == $correctAnswer) {
      echo "true";
    } else {
      echo "false";
    }
  } else {
    echo "Error: Question ID not found";
  }
  $conn->close();
?>