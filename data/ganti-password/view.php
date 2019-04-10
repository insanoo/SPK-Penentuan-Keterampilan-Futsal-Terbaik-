 <div class='content-header'>
        <h2 class='content-header-title'>kriteria</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Pengguna</a></li>
          <li><a href='?loadPage=ganti-password'>Ganti Password</a></li>
          <li class='active'>Ganti Password</li>
        </ol>
      </div> <!-- /.content-header -->

      <?php //var_dump($_SESSION);exit; ?>

<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
           Ganti password
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='data/ganti-password/proses.php?loadPage=ganti-password&action=simpanData' enctype='multipart/form-data'>
            <div class='form-group'>
              <label class='col-md-2'>Password Lama</label>

              <div class='col-md-5'>
                <input type='password' class='form-control' placeholder='Password Lama' name='txtPasswordLama'>
              </div>
            </div>
              <div class='form-group'>
              <label class='col-md-2'>Password Baru</label>

              <div class='col-md-5'>
                <input type='password' class='form-control' placeholder='Password Baru' name='txtPasswordBaru'>
              </div>
            </div>
              <div class='form-group'>
              <label class='col-md-2'>Ulangi Password Baru</label>

              <div class='col-md-5'>
                <input type='password' class='form-control' placeholder='Ulangi Password' name='txtPasswordUlangi'>
              </div>
            </div>
                  

           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=kriteria'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Ubah</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
