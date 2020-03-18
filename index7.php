<?php

  $nameArr = array("fred", "john", "steven");

  $name = $_POST["name"];
  
  $state = false;

  for ($i = 0; $i < sizeof($nameArr); $i++) {
    if ($nameArr[$i] == $name) {
      $state = true;
    }
  }

  if ($state == true) {
    echo "Hello $name !";
  } else {
    echo "Sorry, I don't know you.";
  }

  echo "<br><br>";
  print_r($_POST);

?>

<p>Please enter a whole number.</p>

<form method="post">
  
  <input name="name" type="text">

  <input type="submit" value="Go!">

<form>