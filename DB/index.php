<?php
/**
 * Created by PhpStorm.
 * User: raul-markus.kivisalu
 * Date: 24.01.2019
 * Time: 12:10
 */

require_once 'conf.php';
require_once('db_fnk.php');
$iktconn = connect_db(DBHOST, DBUSER,DBPASS, DBNAME);
//echo'<pre>';
//print_r($iktconn);

//insert

$sql = 'UPDATE user SET last_name="ebatavaline" where user_id=1';

//select

$sql = 'select * from user';
$result = getdata($sql, $iktconn);

echo '<pre>';
print_r($result);
echo 'tere '. $result[0]['first_name'].' '. $result[0]['last_name'];
echo '<br>';
$sql = 'select now()';
$aeg = getdata($sql, $iktconn);
echo'<pre>';
print_r($aeg);
echo'</pre>';
echo $aeg[0]['now()'].'<br>';