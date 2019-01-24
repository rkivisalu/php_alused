<?php
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 24.01.2019
 * Time: 13:00
 */
function connect_db($host, $dbuser, $dbpass, $dbname){
    $conn = mysqli_connect($$host, $dbuser, $dbpass, $dbname);
    if (!$conn){
        echo'unable to connect to mySQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }
    return $conn;
}