<?php
$oceny = array(3, 5, 2, 1, 4, 4);
$srednia = array_sum($oceny)/count($oceny);
echo round($srednia,1);
?>

<?php
$oceny = array(1,2,3,4,5);
<<<<<<< HEAD
$wagi = array(8,4,6,2,1);
=======
$wagi = array(9,4,7,2,1);
>>>>>>> konflikt
$sumaWazona = 0;
foreach( $oceny as $klucz => $ocena ){
  $sumaWazona +=  $ocena * $wagi[$klucz];
  $sumaWag += $wagi[$klucz];
}
 
$wynik = $sumaWazona / $sumaWag;
?>