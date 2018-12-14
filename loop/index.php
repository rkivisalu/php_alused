<?php
header('Refresh: 2');
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 14.12.2018
 * Time: 13:57
 */
/*
 * for($) jm  = alg; $jm <= lõpp
 * tegevused mis toimuvad nii kaua kuni väärtus ei ole lõppväärtust saavutanud
 */

echo '<h5>ülesanne 4</h5>';
for($arv =1; $arv <= 10; $arv++){
    $varv = '';
    if($arv % 2 == 0) {
        $varv = 'green';
    }
    else {
        $varv= 'red';
    }
    $varv =($arv % 2 == 0) ? 'green' : 'red';
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
}
?>
<style>
    table, tr, td {
        border: solid 1px black;
        border-collapse:collapse;
        width: 150px;
        height: 20px;
    }

</style>
<?php
echo '<h5>Ülesanne 5</h5>';
echo '<table>';
for($rida = 1; $rida <= 5; $rida++){
    echo '<tr>';
    for($veerg = 1; $veerg <= 5; $veerg++) {
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,15));
        }
        echo '<td style="background: ' . $varv . '">';
        echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<hr>';



echo '<table style="border-collapse: collapse">';
// ülemine punane riba
for($arv2 = 0; $arv2 <= 10; $arv2++){
    /* if($arv2 == 0){
         $txt = '&nbsp;';
     } else {
         $txt = $arv2;
     }*/
    $txt = ($arv2 == 0) ? '&nbsp;' : $arv2;
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: blue">';
    echo $txt;
    echo '</th>';
}
// põhitabel
for($arv1 = 1; $arv1 <= 10; $arv1++){
    echo '<tr>'; // rea algus
    // üks punane kast
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightgrey">';
    echo $arv1;
    echo '</th>';
    // korrutustabeli elemendid - korrutamise tulemused
    for($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<td style="width: 20px; text-align: center; border: solid 1px black;">';
        echo $arv1 * $arv2;
        echo '</td>';
    }
    echo '</tr>'; // rea lõpp
}
echo '</table>'; // tabeli lõpp
echo '<hr>';

$summa = 0;
$arv3 = rand(0, 9999);
echo 'arv on '.$arv3.'<br>';
while ($arv3 != 0) {
    $number = $arv3 % 10;
    $arv3 = $arv3 / 10;
    settype($arv3, 'int');
    $summa = $summa + $number;
}
echo 'summa on '.$summa;

echo '<hr>';

$arv4 = rand(100000000, 9999999999);
$kordi = 0;
echo $arv4 . '<br>';
while ($arv4 != 0) {
    $number1 = $arv4 % 10;
    $arv4 = $arv4 / 10;
    settype($arv4, 'int');
    if ($number1 == 5) {
        $kordi++;
    }
}
echo 'nr 5-te esineb arvus '. $kordi . ' korda';
