<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../appConfig/conn.php";	
	$loadPage= $_GET['loadPage'];
	$action =$_GET['action'];
	
	if($loadPage=="kriteria" AND $action=="simpanData"){
		
	
		$SQL="INSERT INTO tkriteria (nama_kriteria,kepentingan,costbenefit)
			  VALUES('$_POST[txtKriteria]','$_POST[txtKep]','$_POST[rbCB]')";
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?loadPage=kriteria')
	</script>
	";
	
		
	
	
	}elseif($loadPage=="kriteria" AND $action=="hapusData"){
		
	
		mysql_query("DELETE FROM tkriteria WHERE id_kriteria=$_GET[id]") or die (mysql_error());
		
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