<?php

$family = array("Rob", "Kirsten", "Tommy", "Ralphie");

foreach ($family as $key => $value) {

  $family[$key] = $value." Percival";

  echo "Array item ".$key." is ".$value."<br>";

}

echo "<br><br>";

for ($d = 0; $d < sizeof($family); $d++) {

  echo $family[$d]."<br>";

}

echo "<br><br>";

for ($i = 0; $i <= 10; $i++) {

  echo $i."<br>";

}

echo "<br><br>";

for ($j = 2; $j <= 30; $j = $j +2) {

  echo $j."<br>";

}

echo "<br><br>";

for ($h = 10; $h >= 0; $h--) {

  echo $h."<br>";

}
?>