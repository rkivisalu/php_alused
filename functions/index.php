<?php
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 17.12.2018
 * Time: 14:24
 */
print ('esimene funktsioon mida katsetasime.<br>');
$num = rand(-100, -1);
print ($num.'<br>');
$newnum = abs ($num);
print ($newnum.'<br>');

print '<hr>';

function printBR( $txt ) {
    print("$txt<br>\n");
}
printBR("this is a line!");
printBR("this is aother line!");
printBR("this is a third line!");

print '<hr>';

function addNums ($num1, $num2, $num3) {
    $result = $num1 + $num2 + $num3;
    return $result.'<br>';
}
print addNums(3, 5, 8);

print '<hr>';

function sayHello() {
    print ("hello<br>");
}
$function_holder = "sayHello";
$function_holder();

print '<hr>';

function test() {
    $testVariable = "this is a test variable";
}
print ("test variable: ". $testVariable);

print '<hr>';

$life = 'living';
function meaningOfLife() {
    global $life;
    print "the meaning of Life is  $life <br>";
}
meaningOfLife();

print '<hr>';
//global instruktsiooniga
$kordi = 0;
function veelKord ( $txt, $txt2 ) {
    global $kordi;
    $kordi++;
    print "<h1>$kordi. $txt <br> </h1> $txt2 <br>";
}
veelkord("katse", "tundub et töötab hästi");
veelkord("katse2", "tundub et endiselt töötab hästi");

print "<hr>";

// static instruktsiooniga
function veelKord1 ( $txt, $txt2 ) {
    static $kordi = 0;
    $kordi++;
    print "<h1>$kordi. $txt <br> </h1> $txt2 <br>";
}
veelKord1("katse", "tundub et töötab hästi");
veelkord1("katse2", "tundub et endiselt töötab hästi");

print "<hr>";

function fontWrap ( $txt, $size) {
    
}

