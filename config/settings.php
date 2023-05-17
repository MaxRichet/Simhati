<?php

session_start();

if(empty($_SESSION['message']))
	$_SESSION['message'] = [];

define('SQL_HOST', 'localhost');
define('SQL_USER', 'root');
define('SQL_PASS', '');
define('SQL_NAME', 'simhati');

try{
	$sql = new PDO('mysql:dbname='.SQL_NAME.';charset=utf8;host='.SQL_HOST, SQL_USER, SQL_PASS);

}catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}

include('functions.php');

include('core.php');