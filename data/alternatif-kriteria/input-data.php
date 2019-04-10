 <div class='content-header'>
        <h2 class='content-header-title'>ALTERNATIF KRITERIA</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Master</a></li>
          <li><a href='?loadPage=alternatif-kriteria'>Daftar Alternatif Kriteria</a></li>
          <li class='active'>Input Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
           Input Alternatif Kriteria
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='data/alternatif-kriteria/proses.php?loadPage=alternatif-kriteria&action=simpanData' enctype='multipart/form-data'>
            <div class='form-group'>
              <label class='col-md-2'>Nama Alternatif </label>

              <div class='col-md-6'>
                <select id="s2_basic" class="form-control" name="cboAlternatif">
                <option>-- Pilih Nama Alternatif --</option>
                <?php
				$alternatif=mysql_query("SELECT * FROM talternatif ORDER BY nama_alternatif ASC");
				while($alt=mysql_fetch_array($alternatif)){
					echo"<option value='$alt[id_alternatif]'>$alt[nama_alternatif]</option>";
					
					
					}
				?>
                </select>   
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>Nama Kriteria</label>

              <div class='col-md-6'>
                <select id="s2_basic" class="form-control" name="cboKriteria">
                <option>-- Pilih Nama Kriteria --</option>
                <?php
				$kriteria=mysql_query("SELECT * FROM tkriteria ORDER BY nama_kriteria ASC");
				while($kr=mysql_fetch_array($kriteria)){
					echo"<option value='$kr[id_kriteria]'>$kr[nama_kriteria]</option>";
					
					
					}
				?>
                </select>   
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>Nilai</label>

              <div class='col-md-2'>
                <input type="text" class="form-control"  name="txtNilai">
                 </div>
            </div>

           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=alternatif-kriteria'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Simpan</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
