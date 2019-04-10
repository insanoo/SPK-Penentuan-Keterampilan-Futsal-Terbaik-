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
 