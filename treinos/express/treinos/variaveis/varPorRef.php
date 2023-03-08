<?php

$x = 10;

$y =& $x;

$y= 5;

echo $y;
echo '<br>';
echo $x;

?>