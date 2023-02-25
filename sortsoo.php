<?php
$names=array("Soorya","Ramesh","Sooraj","Oreo","Eddy");
echo"<b>Normal array:</b>";
print_r($names);
echo "<b><br><br>Ascending order:</b>";
asort($names);
print_r($names);
echo"<b><br><br>Descending order:</b>";
arsort($names);
print_r($names);
?>