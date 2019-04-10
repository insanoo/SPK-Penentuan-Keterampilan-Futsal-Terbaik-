<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../appConfig/conn.php";
	include"../../appConfig/upFile.php";
	
	$loadPage= $_GET['loadPage'];
	$action =$_GET['action'];
	$tglMasuk=date("Ymd");
	
	
	if($loadPage=="pengguna" AND $action=="simpanData"){
		  
		  $addres_file = $_FILES['upPhoto']['tmp_name'];
		  $tipe_file   = $_FILES['upPhoto']['type'];
		  $filename    = $_FILES['upPhoto']['name'];
		  $enkrip	   = md5($filename);
		  $filenameenkrip = $enkrip.$filename;
		  $password=md5($_POST['txtPassword']);
		  
		  $cariData=mysql_query("SELECT * FROM tpengguna WHERE username LIKE '% $_POST[txtUsername] %' OR
		   email LIKE '% $_POST[txtEmail] %'");
		  $data=mysql_fetch_array($cariData);
		  if($data > 0 ){
				echo"
	<script language='javascript'>
	window.alert('Data Sudah Ada, Silahkan Gunakan Username Atau Email Anda Yang Lain..');
	window.location=('../../frame.php?loadPage=pengguna&action=input')
	</script>
	"; 
		  }else{
		  if(empty($addres_file)){
			  			
		$SQL = "INSERT INTO tpengguna (username,password,nmLengkap,
										email,alamat,kontak,levelPengguna,foto)
				VALUES('$_POST[txtUsername]','$password',
					   '$_POST[txtNmLengkap]','$_POST[txtEmail]','$_POST[txtAlamat]',
					   '$_POST[txtKontak]','$_POST[rbLevel]','$_POST[foto]')";
				 
		
				 
		mysql_query($SQL)or die(mysql_error());
		echo"
		<script language='javascript'>
		window.alert('Data Berhasil Disimpan');
		window.location=('../../frame.php?loadPage=pengguna')
		</script>
		";
		  }else{
			  if($tipe_file !="image/jpg" AND $tipe_file != "image/jpeg"){
				  echo"
				  <script language='javascript'>
				  window.alert('Upload Gambar Gagal Pastikan File Bertipe JPEG');
				  window.location=('../../frame.php?loadPage=pengguna')
				  </script>
				  ";
				  }else{
					  
		upPengguna($filenameenkrip);			  
			  			
		$SQL = "INSERT INTO tpengguna (username,password,nmLengkap,
										email,alamat,kontak,levelPengguna,foto)
				VALUES('$_POST[txtUsername]','$password',
					   '$_POST[txtNmLengkap]','$_POST[txtEmail]','$_POST[txtAlamat]',
					   '$_POST[txtKontak]','$_POST[rbLevel]','$filenameenkrip')";
		
		mysql_query($SQL)or die(mysql_error());
		echo"
		<script language='javascript'>
		window.alert('Data Berhasil Disimpan');
		window.location=('../../frame.php?loadPage=pengguna')
		</script>
		";
	
	}
	}
	}
	}elseif($loadPage=="pengguna" AND $action=="hapusData"){
		
	$Query=mysql_query("SELECT foto FROM tpengguna WHERE kdPengguna ='$_GET[id]'");
	$remove= mysql_fetch_array($Query);
	
	if($remove['foto'] !=""){
		mysql_query("DELETE FROM tpengguna WHERE kdPengguna=$_GET[id]")or die (mysql_error());
		unlink("../../gambar/pengguna_img/height/$_GET[fimage]");
		unlink("../../gambar/pengguna_img/medium/medium_$_GET[fimage]");
		unlink("../../gambar/pengguna_img/small/small_$_GET[fimage]");
		}else{
		mysql_query("DELETE FROM tpengguna WHERE kdPengguna=$_GET[id]")or die (mysql_error());
		}
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?loadPage=pengguna')
	</script>
	";
		
		
		
		}elseif($loadPage=="pengguna" AND $action=="ubahData"){
		$selectexistQuery=mysql_query("SELECT * FROM tpengguna WHERE kdPengguna='$_POST[id]'");
		$_existData=mysql_fetch_array($selectexistQuery);
		  $addres_file = $_FILES['upPhoto']['tmp_name'];
		  $tipe_file   = $_FILES['upPhoto']['type'];
		  $filename    = $_FILES['upPhoto']['name'];
		  $enkrip	   = md5($filename);
		  $postFoto = (array_key_exists('foto', $_POST) &&  $_POST['foto'] == '') ? $_POST['foto'] : $_existData['foto'];
		 //var_dump($pos);exit; 
		  $filenameenkrip = $enkrip.$filename;
			if(empty($addres_file)){
				$SQL= "UPDATE tpengguna SET username='$_POST[txtUsername]',
											 nmLengkap='$_POST[txtNmLengkap]',
											 email='$_POST[txtEmail]',
											 kontak='$_POST[txtKontak]',
											 alamat='$_POST[txtAlamat]',
											 levelPengguna='$_POST[rbLevel]',
											 foto='$postFoto'
					  WHERE kdPengguna='$_POST[id]'";
				mysql_query($SQL)or die(mysql_error());
				$_SESSION['nmLengkap'] = $_POST['txtNmLengkap'];
				$_SESSION['username']  = $_POST['txtUsername'];
				$_SESSION['email'] = $_POST['txtEmail'];
				$_SESSION['kontak'] = $_POST['txtKontak'];
				$_SESSION['alamat'] = $_POST['txtAlamat'];
			

				echo"
				<script language='javascript'>
				window.alert('Data Berhasil Diupdate');
				window.location=('../../frame.php?loadPage=pengguna')
				</script>
				";
				}else{
					
				 if($tipe_file !="image/jpg" AND $tipe_file != "image/jpeg"){
				  echo"
				  <script language='javascript'>
				  window.alert('Upload Gambar Gagal Pastikan File Bertipe JPEG');
				  window.location=('../../frame.php?loadPage=pengguna&action=edit&id=$_POST[id]')
				  </script>
				  ";
				  }else{
				upPengguna($filenameenkrip);	  
						$SQL= "UPDATE tpengguna SET username='$_POST[txtUsername]',
											 nmLengkap='$_POST[txtNmLengkap]',
											 email='$_POST[txtEmail]',
											 kontak='$_POST[txtKontak]',
											 alamat='$_POST[txtAlamat]',
											 levelPengguna='$_POST[rbLevel]',
											 foto='$filenameenkrip'
											 
					  WHERE kdPengguna='$_POST[id]'";
				mysql_query($SQL)or die(mysql_error()); 
				echo"
				<script language='javascript'>
				window.alert('Data Berhasil Diupdate');
				window.location=('../../frame.php?loadPage=pengguna')
				</script>
				";
					  }
					
					
					}
			
		}
	
	
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?loadPage=pengguna')
		</script>
		
		";
		}
?>