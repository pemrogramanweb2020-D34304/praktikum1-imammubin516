<?php
$i = 10;
for ($i = 5; $i >= 1; $i--) {
  for ($j = 1; $j <= 1 - $i; $j++) {
    echo " ";
  }
  for ($k = 1; $k < $i; $k++) {
    echo "$k";
  }
  for ($l = $i; $l >= 1; $l--) {
    echo "$l";
  }
  echo "<br>";
}