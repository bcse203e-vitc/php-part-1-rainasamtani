<?php
$color = array('white', 'green', 'red');
echo implode(", ", $color) . ",<br><br>";

foreach ($color as $c) {
    echo "• $c<br>";
}
?>
