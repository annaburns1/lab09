<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function mult($x, $y) {
  $z = $x * $y;
  return $z;
}

function loop($y) {
  echo "<table>";
  for ($x = 1; $x <= $y; $x++) {
    echo "<th> $x </th>";
  }
  for ($x = 1; $x <= $y; $x++) {
    echo "<tr><th>$x</th>";
    for($z = 1; $z <= $y; $z++) {
      echo "<td>" . mult($x, $z) . "</td>";
    }
    echo " </tr>";
  }
  echo "</table>";
}


echo loop(10)

?>
