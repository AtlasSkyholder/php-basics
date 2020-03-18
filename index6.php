<?php

  $num = $_GET["name"];

  if ($num % 2 == 0 || $num % 3 == 0 || $num % 5 == 0) {
    echo $num." is not a prime number";
  } else {
    echo $num." is a prime number";
  }

  echo "<br><br>";

  print_r($_GET);

  echo "<br><br>";

?>

<p>Enter a number to see if it's prime!</p>

<form>

  <input name="name" type="text">

  <input type="submit" value="go!">

</form>