<?php
$a = array(1, 2, 3, 4, 5);
echo "Original array: ";
print_r($a);
array_splice($a, 3, 0, '$');
echo "<br>After inserting: ";
print_r($a);
?>
