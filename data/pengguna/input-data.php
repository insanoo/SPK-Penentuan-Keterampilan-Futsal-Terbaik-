 <div class="content-header">
        <h2 class="content-header-title">PENGGUNA</h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Data Pengguna</a></li>
          <li><a href="?loadPage=pengguna">Pengguna</a></li>
          <li class="active">Input Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class="portlet">
      
        <div class="portlet-header">
      
          <h3>
            <i class="fa fa-tasks"></i>
           Input Pengguna
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class="portlet-content">
      
          <form class="form-horizontal" role="form" method="post" action="data/pengguna/proses.php?loadPage=pengguna&action=simpanData" enctype="multipart/form-data">
            <div class="form-group">
              <label class="col-md-2">Nama Lengkap</label>

              <div class="col-md-10">
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="txtNmLengkap">
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-2">Username</label>

              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Username" name="txtUsername">
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-2">Password</label>

              <div class="col-md-4">
                <input type="password" class="form-control" placeholder="Password" name="txtPassword">
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-2">Email</label>

              <div class="col-md-10">
                <input type="email" class="form-control" placeholder="email@example.com" name="txtEmail">
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-2">Kontak</label>

              <div class="col-md-4">
                <input type="text" class="form-control" placeholder="08xx-xxxx-xxx" name="txtKontak">
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-2">Alamat</label>

              <div class="col-md-10">
                <input type="text" class="form-control" placeholder="Jl.Example" name="txtAlamat">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Foto</label>

              <div class="col-md-4">
                <input type="file" name="upPhoto">
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-2">Level Pengguna</label>

              <div class="col-md-4">
                <input type="radio" value="Administrator" name='rbLevel'>
                Administrator
                <input type="radio" value="Umum" name='rbLevel'>
                Umum
                <input type="radio" value="Pelatih" name='rbLevel'>
                Pelatih
              </div>
            </div>
               

           <div class="col-md-8">
  
      	</div> <!-- /.content-header -->
			<div class="col-md-4">
            <a href='?loadPage=pengguna'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Simpan</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
