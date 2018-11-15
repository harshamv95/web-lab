<?php
$a1 = array(
    array(1,4,2),
    array(3,8,2),
    array(9,4,8)
);


$a2 = array(
    array(1,2,9),
    array(3,4,9),
    array(5,6,9)
);

$result = array();

echo"<h1>M1</h1>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$a1[$row][$col];
  }
}
echo"<h1>M2</h1>";
for ($row = 0; $row < 3; $row++) {
	echo "<br>";
  for ($col = 0; $col < 3; $col++) {
    echo " ".$a2[$row][$col];
  }
}
echo"<h1>Result</h1>";

for($i=0; $i<=2; $i++) {
echo "<br>";
    for($j=0; $j<=2; $j++) {
        $result[$i][$j] = $a1[$i][$j] + $a2[$i][$j];
echo " ".$result[$i][$j];

    }
}
?>
