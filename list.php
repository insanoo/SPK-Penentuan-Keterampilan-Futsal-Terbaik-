

<?php

ini_set('memory_limit', '512M');
$host = "localhost";
$username = "root";
$password = "";
$database = "db_spktopsis";

error_reporting(E_ALL ^ E_DEPRECATED);

mysql_connect($host,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
	function tampiltabel($arr)
	{
		echo '<table class="table table-bordered table-highlight">';
		  for ($i=0;$i<count($arr);$i++)
		  {
		  echo '<tr>';
			  for ($j=0;$j<count($arr[$i]);$j++)
			  {
			    echo '<td>'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table>';
	}

	function tampilbaris($arr)
	{
		echo '<table class="table  table-bordered table-highlight">';
		echo '<tr>';
			  for ($i=0;$i<count($arr);$i++)
			  {
			    echo '<td>'.$arr[$i].'</td>';
			  }
		echo "</tr>";
		echo '</table>';
	}

	function tampilkolom($arr)
	{
		echo '<table class="table table-bordered table-highlight">';
	  for ($i=0;$i<count($arr);$i++)
	  {
			echo '<tr>';
			    echo '<td>'.$arr[$i].'</td>';
			echo "</tr>";
	   }
		echo '</table>';
	}
	
	$alternatif = array(); //array("Galaxy", "iPhone", "BB", "Lumia");
	
    $queryalternatif = mysql_query("SELECT * FROM talternatif ORDER BY id_alternatif DESC");
	$i=0;
	while ($dataalternatif = mysql_fetch_array($queryalternatif))
	{
		$alternatif[$i] = $dataalternatif['nama_alternatif'];
		$i++;
	}
	
	$kriteria = array(); //array("Harga", "Kualitas", "Fitur", "Populer", "Purna Jual", "Keawetan");
	
	$costbenefit = array(); //array("cost", "benefit", "benefit", "benefit", "benefit", "benefit");
	
	$kepentingan = array(); //array(4, 5, 4, 3, 3, 2);

	$querykriteria = mysql_query("SELECT * FROM tkriteria ORDER BY id_kriteria");
	$i=0;
	while ($datakriteria = mysql_fetch_array($querykriteria))
	{
		$kriteria[$i] = $datakriteria['nama_kriteria'];
		$costbenefit[$i] = $datakriteria['costbenefit'];
		$kepentingan[$i] = $datakriteria['kepentingan'];
		$i++;
	}
	
	$alternatifkriteria = array();
						 /* array(
							array(3500, 70, 10, 80, 3000, 36),				
							array(4500, 90, 10, 60, 2500, 48),					                           
							array(4000, 80, 9, 90, 2000, 48),												                            
							array(4000, 70, 8, 50, 1500, 60)
						  ); */
	
	$queryalternatif = mysql_query("SELECT * FROM talternatif ORDER BY id_alternatif DESC");
	$i=0;
	while ($dataalternatif = mysql_fetch_array($queryalternatif))
	{
		$querykriteria = mysql_query("SELECT * FROM tkriteria ORDER BY id_kriteria");
		$j=0;
		while ($datakriteria = mysql_fetch_array($querykriteria))
		{
			$queryalternatifkriteria = mysql_query("SELECT * FROM talternatif_kriteria WHERE id_alternatif = '$dataalternatif[id_alternatif]' AND id_kriteria = '$datakriteria[id_kriteria]'");
			$dataalternatifkriteria = mysql_fetch_array($queryalternatifkriteria);
			
			$alternatifkriteria[$i][$j] = $dataalternatifkriteria['nilai'];
			$j++;
		}
		$i++;
	}
		
	$pembagi = array();
	
	for ($i=0;$i<count($kriteria);$i++)
	{
		$pembagi[$i] = 0;
		for ($j=0;$j<count($alternatif);$j++)
		{
			$pembagi[$i] = $pembagi[$i] + ($alternatifkriteria[$j][$i] * $alternatifkriteria[$j][$i]);
		}
		$pembagi[$i] = sqrt($pembagi[$i]);
	}
	
	$normalisasi = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=0;$j<count($kriteria);$j++)
		{
			$normalisasi[$i][$j] = $alternatifkriteria[$i][$j] / $pembagi[$j];
		}
	}

	$terbobot = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=0;$j<count($kriteria);$j++)
		{
			$terbobot[$i][$j] = $normalisasi[$i][$j] * $kepentingan[$j];
		}
	}	
	
	$aplus = array();
	
	for ($i=0;$i<count($kriteria);$i++)
	{
		if ($costbenefit[$i] == 'Cost')
		{
			for ($j=0;$j<count($alternatif);$j++)
			{
				if ($j == 0) 
				{ 
					$aplus[$i] = $terbobot[$j][$i];
				}
				else 
				{
					if ($aplus[$i] > $terbobot[$j][$i])
					{
						$aplus[$i] = $terbobot[$j][$i];
					}
				}
			}
		}
		else 
		{
			for ($j=0;$j<count($alternatif);$j++)
			{
				if ($j == 0) 
				{ 
					$aplus[$i] = $terbobot[$j][$i];
				}
				else 
				{
					if ($aplus[$i] < $terbobot[$j][$i])
					{
						$aplus[$i] = $terbobot[$j][$i];
					}
				}
			}
		}
	}
	
	$amin = array();
	
	for ($i=0;$i<count($kriteria);$i++)
	{
		if ($costbenefit[$i] == 'Cost')
		{
			for ($j=0;$j<count($alternatif);$j++)
			{
				if ($j == 0) 
				{ 
					$amin[$i] = $terbobot[$j][$i];
				}
				else 
				{
					if ($amin[$i] < $terbobot[$j][$i])
					{
						$amin[$i] = $terbobot[$j][$i];
					}
				}
			}
		}
		else 
		{
			for ($j=0;$j<count($alternatif);$j++)
			{
				if ($j == 0) 
				{ 
					$amin[$i] = $terbobot[$j][$i];
				}
				else 
				{
					if ($amin[$i] > $terbobot[$j][$i])
					{
						$amin[$i] = $terbobot[$j][$i];
					}
				}
			}
		}
	}
	
	$dplus = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$dplus[$i] = 0;
		for ($j=0;$j<count($kriteria);$j++)
		{
			$dplus[$i] = $dplus[$i] + (($aplus[$j] - $terbobot[$i][$j]) * ($aplus[$j] - $terbobot[$i][$j]));
		}
		$dplus[$i] = sqrt($dplus[$i]);
	}
	
	$dmin = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$dmin[$i] = 0;
		for ($j=0;$j<count($kriteria);$j++)
		{
			$dmin[$i] = $dmin[$i] + (($terbobot[$i][$j] - $amin[$j]) * ($terbobot[$i][$j] - $amin[$j]));
		}
		$dmin[$i] = sqrt($dmin[$i]);
	}
	
	
	$hasil = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$hasil[$i] = $dmin[$i] / ($dmin[$i] + $dplus[$i]);
	}	
	
	$alternatifrangking = array();
	$hasilrangking = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$hasilrangking[$i] = $hasil[$i];
		$alternatifrangking[$i] = $alternatif[$i];
	}
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=$i;$j<count($alternatif);$j++)
		{
			if ($hasilrangking[$j] > $hasilrangking[$i])
			{
				$tmphasil = $hasilrangking[$i];
				$tmpalternatif = $alternatifrangking[$i];
				$hasilrangking[$i] = $hasilrangking[$j];
				$alternatifrangking[$i] = $alternatifrangking[$j];
				$hasilrangking[$j] = $tmphasil;
				$alternatifrangking[$j] = $tmpalternatif;
			}
		}
	}
?>

<?php 
// Tentukan path yang tepat ke mPDF
$nama_dokumen='Daftar_seleksi_calon_siswa'; //Beri nama file PDF hasil.
define('_MPDF_PATH','report/mpdf57/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', 'A4', 10.5, 'arial'); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
    ob_start();


?>


 
<style>
 	table{margin: auto;}
 	td,th{padding: 5px;text-align: center; width: 150px}
 	h1{text-align: center}
 	th{background-color: #95a5a6; padding: 10px;color: #fff}
 </style>
<h1>LAPORAN HASIL PERHITUNGAN KETERAMPILAN FUTSAL </h1><br>
<table border="1">
    <thead>
    <tr>
    	<th>No.</th>
    	<th>Alternatif</th>
    	<th>Dribbling</th>
    	<th>Passing</th>
    	<th>Sprint</th>
    	<th>Shooting</th>
    	<th>Stamina</th>
		<?php //var_dump($alternatifrangking, $alternatifkriteria);exit; ?>
    </tr>
    </thead>
    <?php for ($i=0;$i<count($hasilrangking);$i++) : ?>
		<tbody>
		<tr>
			<td><?= ($i+1) ?></td>
			<td><?= $alternatif[$i] ?></td>
			<?php 
				foreach ($alternatifkriteria[$i] as $key => $value) {
					echo "<td>$value</td>";
				}
			?>
		</tr>
		</tbody>
    <?php endfor; ?>
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