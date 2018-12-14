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
echo '<hr>';
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

//switch (kontroll)
//case:vastus
//tegevused mis case-i puhul toimuvad
//break;
//default;
//kõik tegevused mis toimivad kui muu ei sovi
//break;
?>
<html>
<style>
    div {
        width: 100px;
        height: 100px;
        border-radius: 50px;
        border: solid 2px black;
    }
</style>
</html>

<?php
echo '<hr>';
echo '<h5ülesanne3</h5>';
$aktiivne='punane';
switch ($aktiivne) {
    case 'punane';
    echo '<div style="background: red;"></div>';
    echo '<div></div>';
    echo '<div></div>';
}
switch ($aktiivne) {
    case 'kollane';
    echo '<div></div>';
    echo '<div style="background: yellow;"></div>';
    echo '<div></div>';
}
switch ($aktiivne) {
    case 'roheline';
    echo '<div></div>';
    echo '<div></div>';
    echo '<div style="background: green;"></div>';
}
?>