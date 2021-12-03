<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  $userName = $_POST["userEmail"];
  $password = $_POST["userPass"];
  $numGran = $_POST["numGran"];
  $numHon = $_POST["numHon"];
  $numGold = $_POST["numGold"];
  $totalGran = 3 * $numGran;
  $totalHon = 4 * $numHon;
  $totalGold = 2 * $numGold;
  $shipping = $_POST["ship"];
  $total = $totalGran+$totalHon+$totalGold+$shipping;

  function ship($x) {
    echo "<tr><th>Shipping</th>";
    if ($x == 0) {
      echo "<td>7-Day</td><td></td><td>$0.00</td>";
    }
    elseif ($x == 5) {
      echo "<td>Three Day</td><td></td><td>$5.00</td>";
    }
    elseif ($x == 50) {
      echo "<td>Overnight</td><td></td><td>$50.00</td>";
    }

  }

  echo "Welcome " . $userName . "!<br>Your password is: " . $password;

  echo "<table><th>    </th><th>Quantity</th><th>Cost Per Item</th><th>SubTotal</th>";
  echo "<tr><th>Granny Smith</th><td>$numGran</td><td>$3.00</td><td>$totalGran</td>";
  echo "<tr><th>Honeycrisp</th><td>$numHon</td><td>$4.00</td><td>$totalHon</td>";
  echo "<tr><th>Golden Delicious</th><td>$numGold</td><td>$2.00</td><td>$totalGold</td>";
  ship($shipping);
  echo "<tr><th>TOTAL COST</th><td></td><td></td><td>$total</td>";

?>
