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
echo'<pre>';
print_r($iktconn);