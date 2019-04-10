 <?php
 $SQL=mysql_query("SELECT * FROM talternatif WHERE id_alternatif='$_GET[id]'");
 $_data=mysql_fetch_array($SQL);
 echo"
 <div class='content-header'>
        <h2 class='content-header-title'>ALTERNATIF</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Master</a></li>
          <li><a href='?loadPage=alternatif'>Alternatif</a></li>
          <li class='active'>Edit Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
          Edit Alternatif
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='$loadModule?loadPage=alternatif&action=ubahData' enctype='multipart/form-data'>
		  <input type='hidden' value='$_data[id_alternatif]' name='id'>
            <div class='form-group'>
              <label class='col-md-2'>Nama Alternatif</label>

              <div class='col-md-10'>
                <input type='text' class='form-control' placeholder='Full Width' name='txtAlternatif' value='$_data[nama_alternatif]'>
              </div>
            </div>
<div class='form-group'>
                <label class='col-md-2'>Deskripsi</label>
                           <div class='col-md-10'>
                <textarea name='txtDeskripsi' id='textarea-input' cols='10' rows='3' class='form-control'>$_data[deskripsi]</textarea></div>
              </div>
           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=alternatif'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Ubah</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
";?>