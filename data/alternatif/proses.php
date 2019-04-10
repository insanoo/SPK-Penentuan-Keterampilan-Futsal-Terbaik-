<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../appConfig/conn.php";	
	$loadPage= $_GET['loadPage'];
	$action =$_GET['action'];
	
	if($loadPage=="alternatif" AND $action=="simpanData"){
		
	
		$SQL="INSERT INTO talternatif (nama_alternatif,deskripsi)
			  VALUES('$_POST[txtAlternatif]','$_POST[txtDeskripsi]')";
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?loadPage=alternatif')
	</script>
	";
	
		
	
	
	}elseif($loadPage=="alternatif" AND $action=="hapusData"){
		
	
		mysql_query("DELETE FROM talternatif WHERE id_alternatif=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?loadPage=alternatif')
	</script>
	";
		
		
		
	}elseif($loadPage=="alternatif" AND $action=="ubahData"){
		 
	$SQL="UPDATE talternatif SET nama_alternatif='$_POST[txtAlternatif]',
							   deskripsi='$_POST[txtDeskripsi]'
							    
		  WHERE id_alternatif='$_POST[id]'";	
	mysql_query($SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?loadPage=alternatif')
	</script>
	";
	}
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?q=alternatif')
		</script>
		
		";
		}
?>