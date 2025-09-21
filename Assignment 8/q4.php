<?php
$x = array(1, 2, 3, 4, 5);
print_r($x);
unset($x[2]);  
$x = array_values($x);
echo "<br>";
print_r($x);
?>
