<?php

    
    $answer1 = $_POST["answer1"];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $answer5 = $_POST['answer5'];

    $totalCorrect = 0;
    if ($answer1 == "Paris") { $totalCorrect++; }
    if ($answer2 == "Louisiana") { $totalCorrect++; }
    if ($answer3 == "2") { $totalCorrect++; }
    if ($answer4 == "1") { $totalCorrect++; }
    if ($answer5 == "Asia") { $totalCorrect++; }
    $final_result = $totalCorrect*20;
    
    echo "<p>Question 1: What is the capital of France?<br>";
    echo "You answered: ".$answer1."<br>Correct answer: Paris";

    echo "<p>Question 2: Which US state's way of life and culture is described as Cajun?<br>";
    echo "You answered: ".$answer2."<br>Correct answer: Louisiana";
    echo "<p>Question 3: 1 + 1 = ?<br>";
    echo "You answered: ".$answer3."<br>Correct answer: 2";
    echo "<p>Queston 4: 1*1 = ?<br>";
    echo "You answered: ".$answer4."<br>Correct answer: 1";
    echo "<p>Question 5: What is the largest continent?<br>";
    echo "You answered: ".$answer5."<br>Correct answer: Asia";
  
    echo "<div id='results'>Your total score: $final_result %</div>";

    
?>


            