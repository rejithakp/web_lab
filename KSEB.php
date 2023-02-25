<html>
<body>

<h1><center>Electricity Bill</center></h1>
<form method="post" action="#">
<center>
  Name: <input type="text" name="name"><br><br>
  Consumer Number: <input type="text" name="cnum"><br><br>
  Units Consumed : <input type="number" name="units"><br><br>
 
  <input type="Submit">
</center>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);  
function calculate_bill($units) {
    $unit_first = 4;
    $unit_sec = 5;
    $unit_third = 6;

    if($units <= 100) {
        $bill = $units * $unit_first;
    }
    else if($units > 100 && $units <= 200) {
        $temp = 100 * $unit_first;
        $rem_unit = $units - 100;
        $bill = $temp + ($rem_unit * $unit_sec);
    }
    else {
        $temp = (100 * 4) + (100 * $unit_sec) + (100 * $unit_third);
        $rem_unit = $units - 200;
        $bill = $temp + $rem_unit ;
    }
    return number_format((float)$bill, 2, '.', '');
}


  echo "<center>-------------------------------------------------------------------------</center>";
  echo "<h3><center>Kerala State Electricity Board (KSEB)</center></h3>";
  echo "<br>";
  echo "<center>Consumer name : ".$name."</center><br>";
  echo "<center>Consumer number : ".$cnum."</center><br>";
  echo "<center>Units Consumed : ".$units."</center><br>";
  $result = calculate_bill($units);
  echo "<h4><center>Total : ₹ ".$result."</center></h4><br>";
  echo "<center>-------------------------------------------------------------------------</center>";


}

?>

</body>
</html>

