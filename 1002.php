<?php

$n = 3.14159;
$radio = readline();

$area = $n * (pow($radio, 2));

echo "A=" . number_format($area, 4, '.','') ;
echo "\n";

?>