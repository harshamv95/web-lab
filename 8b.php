<?php
$trans = array(
    array(1,4,2),
    array(3,8,2),
    array(9,4,8)
);
echo "<h2> Matrix </h2>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$row][$col];
  }
}
echo "<h2> Transpose of the given Matrix is</h2>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";  
  for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$col][$row];
  }
  
}
?>
