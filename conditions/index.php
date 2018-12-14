<?php
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 14.12.2018
 * Time: 12:33
 */
//tingimused
/*
 * if(tingimus){
 * tegevused mis toimuvad ss kui tingimus kehtib
 * }
 * else {
 * muidu kui tingimus ei kehti
 * }
 *
 */
echo '<h5ülesanne</h5>';
$arv = rand(0, 100);
if ($arv % 2 == 0) {
    echo '<div style="color: green">'.$arv.'</div>';
}
else {
    echo '<div style="color: red">'.$arv.'</div>';
}

echo '<h5ülesanne2</h5>';

$arv2 = rand(0, 100);
if ($arv2 >= 0 and $arv2 <= 25) {
    echo '<div style="color: orange">'.$arv2.'</div>';
}
elseif ($arv2 > 25 and $arv2 <= 50) {
    echo '<div style="color: pink">'.$arv2.'</div>';
}
elseif ($arv2 > 50 and $arv2 <= 75) {
    echo '<div style="color: blue">'.$arv2.'</div>';
}
else {
    echo '<div style="color: red">'.$arv2.'</div>';
}