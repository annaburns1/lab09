<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $dig = $_POST["dig"];
  $insta = $_POST["insta"];
  $expensive = $_POST["expensive"];
  $day = $_POST["day"];
  $liked = $_POST["liked"];

  $total = 0;

  function check1($x, $y) {
    echo "1. What year was the first digital camera invented? <br> You answered: " . $x . "<br>";
    echo "The correct answer is: 1975 <br>";

    if ($x == "1975") {
      echo "Correct!<br><br>";
      return($y + 20);
    }
    else {
      echo "Incorrect!<br><br>";
    }
  }

  function check2($x, $y) {
    echo "2. About how many photos are uploaded to Instagram each day? <br> You answered: " . $x . "<br>";
    echo "The correct answer is: 100 million <br>";

    if ($x == "100 million") {
      echo "Correct!<br><br>";
      return($y + 20);
    }
    else {
      echo "Incorrect!<br><br>";
    }
  }

  function check3($x, $y) {
    echo "3. The most expensive photo ever sold (on record) sold for: <br> You answered: " . $x . "<br>";
    echo "The correct answer is: $4.3 million<br>";

    if ($x == "$4.3 million") {
      echo "Correct!<br><br>";
      return($y + 20);
    }
    else {
      echo "Incorrect!<br><br>";
    }
  }

  function check4($x, $y) {
    echo "4. What day is world photography day? <br> You answered: " . $x. "<br>";
    echo "The correct answer is: August 19th<br>";

    if ($x == "August 19th") {
      echo "Correct!<br><br>";
      return($y + 20);
    }
    else {
      echo "Incorrect!<br><br>";
    }
  }

  function check5($x, $y) {
    echo "5. The most liked photo on Instagram is a photo of a(n): <br> You answered: " . $x. "<br>";
    echo "The correct answer is: Egg<br>";

    if ($x == "Egg") {
      echo "Correct!<br><br>";
      return($y + 20);
    }
    else {
      echo "Incorrect!<br><br>";
    }
  }



  $total = check1($dig, $total) + check2($insta, $total) + check3($expensive, $total) + check4($day, $total) + check5($liked, $total);


  echo "Your score is " . $total . "/100.";



?>
