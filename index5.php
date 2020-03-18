<?php

  $i = 0;

  while ($i <= 10) {

    echo $i."<br>";

    $i++;

  }

  echo "<br><br>";

  $j = 5;

  while ($j <= 50) {

    echo $j."<br>";

    $j = $j +5;

  }

  echo "<br><br>";

  $h = 1;

  while ($h <= 10) {
    
    $k = $h * 5;

    echo $k."<br>";

    $h++;

  }

  echo "<br><br>";

  $arr = array("0", "00", "000", "0000");

  $d = 0;

  while ($d < sizeof($arr)) {

    echo $arr[$d]."<br>";

    $d++;

  }

  echo "<br><br>";

?>