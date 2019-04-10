<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "db_spktopsis";
error_reporting(E_ALL ^ E_DEPRECATED);

$_SESSION['CONN_HOST'] = $host;
$_SESSION['CONN_USERNAME'] = $username;
$_SESSION['CONN_PASSWORD'] = $password;
$_SESSION['CONN_DATABASE'] = $database;

mysql_connect($host,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
