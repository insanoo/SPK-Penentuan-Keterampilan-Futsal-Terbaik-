<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../appConfig/conn.php";	
	$loadPage= $_GET['loadPage'];
	$action =$_GET['action'];
	
	if($loadPage=="alternatif-kriteria" AND $action=="simpanData"){
		
	
		$SQL="INSERT INTO talternatif_kriteria (id_alternatif,id_kriteria,nilai)
			  VALUES('$_POST[cboAlternatif]','$_POST[cboKriteria]','$_POST[txtNilai]')";
	mysql_query($SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?loadPage=alternatif-kriteria')
	</script>
	";
	
		
	
	
	}elseif($loadPage=="alternatif-kriteria" AND $action=="hapusData"){
		
	
		mysql_query("DELETE FROM talternatif_kriteria WHERE id_alternatif_kriteria=$_GET[id]")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?loadPage=alternatif-kriteria')
	</script>
	";
		
		
		
	}elseif($loadPage=="alternatif-kriteria" AND $action=="ubahData"){
		 
	$SQL="UPDATE talternatif_kriteria SET id_kriteria='$_POST[cboKriteria]',
										  id_alternatif='$_POST[cboAlternatif]',
										  nilai='$_POST[txtNilai]'
							    
		  WHERE id_alternatif_kriteria='$_POST[id]'";	
	mysql_query($SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?loadPage=alternatif-kriteria')
	</script>
	";
	}
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?q=alternatif-kriteria')
		</script>
		
		";
		}
?>