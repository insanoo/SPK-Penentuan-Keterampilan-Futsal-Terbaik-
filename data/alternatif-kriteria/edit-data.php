 <?php
 $SQL=mysql_query("SELECT * FROM talternatif_kriteria WHERE id_alternatif_kriteria='$_GET[id]'");
 $_data=mysql_fetch_array($SQL);
 echo"
 <div class='content-header'>
        <h2 class='content-header-title'>ALTERNATIF KRITERIA</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Master</a></li>
          <li><a href='?loadPage=alternatif-kriteria'>Daftar Alternatif Kriteria</a></li>
          <li class='active'>Edit Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
          Edit Alternatif Kriteria
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='$loadModule?loadPage=alternatif-kriteria&action=ubahData' enctype='multipart/form-data'>
		  <input type='hidden' value='$_data[id_alternatif_kriteria]' name='id'>
            <div class='form-group'>
              <label class='col-md-2'>Nama Alternatif </label>

              <div class='col-md-6'>
                <select id='s2_basic' class='form-control' name='cboAlternatif'>";
				if($_data['id_alternatif']==0)
				{echo"
                <option selected>-- Pilih Nama Alternatif --</option>";
				}
                
				$alternatif=mysql_query("SELECT * FROM talternatif ORDER BY nama_alternatif ASC");
				while($alt=mysql_fetch_array($alternatif)){
					if($_data['id_alternatif']==$alt['id_alternatif']){
						
					echo"<option value='$alt[id_alternatif]' selected>$alt[nama_alternatif]</option>";
					
					
					}else{
						echo"<option value='$alt[id_alternatif]'>$alt[nama_alternatif]</option>";
					
					}
						}
			echo"
                </select>   
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>Nama Kriteria</label>

              <div class='col-md-6'>
                <select id='s2_basic' class='form-control' name='cboKriteria'>";
				if($_data['id_alternatif']==0){
					echo"
                <option selected>-- Pilih Nama Kriteria --</option>";
				}
               
				$kriteria=mysql_query("SELECT * FROM tkriteria ORDER BY nama_kriteria ASC");
				while($kr=mysql_fetch_array($kriteria)){
					if($_data['id_kriteria']==$kr['id_kriteria']){
						echo"
						<option value='$kr[id_kriteria]' selected>$kr[nama_kriteria]</option>
						
						";
						
						}else{
					echo"<option value='$kr[id_kriteria]'>$kr[nama_kriteria]</option>";
						}
					
					}
				echo"
                </select>   
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>Nilai</label>

              <div class='col-md-2'>
                <input type='text' class='form-control'  name='txtNilai' value='$_data[nilai]'>
                 </div>
            </div>


           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=alternatif-kriteria'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Ubah</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
";?>