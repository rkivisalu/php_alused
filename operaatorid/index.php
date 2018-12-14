<?php
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 14.12.2018
 * Time: 12:13
 */
//matemaatilised ja võrdlusoperaatorid

$arv1 = 42;
$arv2 = 11;
$arv3 = ($arv1 + $arv2);
echo $arv1.' + '.$arv2.' = '. $arv3.'<br>';
echo $arv1.' - '.$arv2.' = '. ($arv1-$arv2.'<br>');
echo $arv1.' * '.$arv2.' = '. ($arv1*$arv2.'<br>');
echo $arv1.' / '.$arv2.' = '. ($arv1/$arv2.'<br>');
echo $arv1.' % '.$arv2.' = '. ($arv1%$arv2.'<br>');
echo '<hr>';
echo $arv1.' == '.$arv2.' on '. ($arv1==$arv2).'<br>';
echo $arv1.' != '.$arv2.' on '. ($arv1!=$arv2).'<br>';
echo $arv1.' <= '.$arv2.' on '. ($arv1<=$arv2).'<br>';
echo $arv1.' >= '.$arv2.' on '. ($arv1>=$arv2).'<br>';
echo $arv1.' < '.$arv2.' on '. ($arv1<$arv2).'<br>';
echo $arv1.' > '.$arv2.' on '. ($arv1>$arv2).'<br>';



