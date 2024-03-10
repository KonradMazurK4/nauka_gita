<?php
$oceny = array(3, 5, 2, 1, 4, 4);
$srednia = array_sum($oceny)/count($oceny);
echo round($srednia,1);
?>