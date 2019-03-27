<?php
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 24.01.2019
 * Time: 14:17
 */
if(!isset($_SESSION['user'])){
    echo 'Tere tulemast, '. $_SESSION['user'].'!<br>';
}
else {
    $loginform = htmlFromFile('login');
    echo $loginform;
}
require_once ('fnk.php');
$loginform= htmlFromFile('login');
echo $loginform;