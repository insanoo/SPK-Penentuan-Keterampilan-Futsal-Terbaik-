<?php
include "appConfig/conn.php";
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username 	= antiinjection($_POST['txtUsername']);
$pass     	= antiinjection(md5($_POST['txtPassword']));

$waktu = time()+25200;
$expired=60;

//var_dump($pass);exit;
$query=mysql_query("SELECT * FROM tpengguna WHERE username='$username' AND password = '$pass' ");
$in=mysql_num_rows($query);
$r=mysql_fetch_array($query);

if ($in > 0){
  session_start();
  
  $_SESSION['kdPengguna']      	  = $r['kdPengguna'];
  $_SESSION['username']    		  = $r['username'];
  $_SESSION['password']      	  = $r['password'];
  $_SESSION['nmLengkap']  		  = $r['nmLengkap'];
    $_SESSION['alamat']  		  = $r['alamat'];
  $_SESSION['foto']      		  = $r['foto'];
    $_SESSION['kontak']      	  = $r['kontak'];
	 $_SESSION['email']      	  = $r['email'];
  $_SESSION['levelPengguna'] 	  = $r['levelPengguna'];
	  
  
  $_SESSION['timeout']		= $waktu+$expired;
  $waktulog= time();												
										
  header('location:frame.php?loadPage=dashboard');
}
else{
    echo "<script type='text/javascript'>
	window.alert('Username Atau Password Anda Salah'); 
	window.location =('index.php')</script>";
}
?>
