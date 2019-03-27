<?php
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 24.01.2019
 * Time: 14:35
 */
//andmed vormi poolt
require_once '.../db/conf.php';
require_once '.../db/db_fnk.php';
$username = $_GET['uname'];
$password = $_GET['upass'];
//echo $username;
//echo $password;
$ikt = connect_db(DBHOST,DBUSER,DBPASS,DBNAME);


$sql ='SELECT * from user WHERE username='.$username.'AND password = '.md5($password). '"';

$users = getdata($sql, $ikt);

if($users !== false) {
    session_start();
    $_SESSION['user']= $users [0]['username'];
    header('Location: .../index.php');
}


