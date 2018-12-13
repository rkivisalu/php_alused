<?php
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 13.12.2018
 * Time: 13:08
 */
// $muutuja_nimi= väärtus

$taisarv = 3;
$reaalarv = 3.3;
$string='kolm';
$booleanTrue = true;
$booleanFalse = false;

echo $taisarv.' see on kolm<br>';
echo $reaalarv.' see on kolm koma kolm<br>';
echo $string.' on kolm<br>';
//echo $booleanTrue
//echo $booleanFalse

if ($booleanTrue == true) {
    print ('true on true<br>');
}
else {
    print('ei ole tõsi');
}

if ($booleanFalse == false) {
    print ('false on false<br>');
}
else {
    print('false on true');
}