<?php
// Tentukan path yang tepat ke mPDF
$nama_dokumen='Daftar_seleksi_calon_siswa'; //Beri nama file PDF hasil.
define('_MPDF_PATH','report/mpdf57/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', 'A4', 10.5, 'arial'); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
$mpdf = new mPDF();

ob_start();
?>
 
<style>
 	table{margin: auto;}
 	td,th{padding: 5px;text-align: center; width: 150px}
 	h1{text-align: center}
 	th{background-color: #95a5a6; padding: 10px;color: #fff}
 </style>
<h1>Daftar Seleksi Calon Murid</h1>
<table border="0">
	<tr>
		<th>No seleksi</th>
		<th>No daftar</th>
		<th>Jenjang</th>
		<th>Tahun ajaran</th>
		<th>Calon siswa</th>
		<th>Alamat</th>
		<th>Gender</th>
		<th>Nama orang tua</th>
	</tr>
	<?php for($i=1; $i<=10; $i++) {?>
	<tr>
		<td><?php echo $i?></td>
		<td><?php echo $i?></td>
		<td><?php echo $i?></td>
		<td><?php echo $i?></td>
		<td><?php echo $i?></td>
		<td><?php echo $i?></td>
		<td><?php echo $i?></td>
		<td><?php echo $i?></td>
	</tr>
   <?php }?>
   
</table>
 
<?php
 
$mpdf->setFooter('{PAGENO}');
//penulisan output selesai, sekarang menutup mpdf dan generate kedalam format pdf
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>