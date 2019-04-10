<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../appConfig/conn.php";	
	$loadPage= $_GET['loadPage'];
	$action =$_GET['action'];
	
	if($loadPage=="ganti-password" AND $action=="simpanData"){
		
	$passLama=md5($_POST['txtPasswordLama']);
	$passBaru=$_POST['txtPasswordBaru'];
	$passUlangi=$_POST['txtPasswordUlangi'];
	
	$passSession=md5($_SESSION['password']);
	
	if($passLama != $_SESSION['password']){
		echo"
	<script language='javascript'>
	window.alert('Password Lama Tidak Cocok');
	window.location=('../../frame.php?loadPage=ganti-password')
	</script>
	";
		}elseif($passBaru != $passUlangi){
				echo"
	<script language='javascript'>
	window.alert('Password Baru Tidak Cocok');
	window.location=('../../frame.php?loadPage=ganti-password')
	</script>
	";
			
			}else{
		$pass=md5($_POST['txtPasswordBaru']);		
		$SQL="UPDATE tpengguna SET password ='$pass' WHERE kdPengguna='$_SESSION[kdPengguna]'";
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?loadPage=dashboard')
	</script>
	";
			}
		
	
	
	}elseif($loadPage=="kriteria" AND $action=="hapusData"){
		
	
		mysql_query("DELETE FROM tkriteria WHERE id_kriteria=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?loadPage=kriteria')
	</script>
	";
		
		
		
	}elseif($loadPage=="kriteria" AND $action=="ubahData"){
		 
	$SQL="UPDATE tkriteria SET nama_kriteria='$_POST[txtKriteria]',
							   kepentingan='$_POST[txtKep]',
							   costbenefit='$_POST[rbCB]'
							    
		  WHERE id_kriteria='$_POST[id]'";	
	mysql_query($SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?loadPage=kriteria')
	</script>
	";
	}
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?q=kriteria')
		</script>
		
		";
		}
?>