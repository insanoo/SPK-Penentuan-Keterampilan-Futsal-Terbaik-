 <?php
 $SQL=mysql_query("SELECT * FROM tpengguna WHERE kdPengguna='$_GET[id]'");
 $_data=mysql_fetch_array($SQL);

 echo"
 <div class='content-header'>
        <h2 class='content-header-title'>PENGGUNA</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Pengguna</a></li>
          <li><a href='?loadPage=pengguna'>Pengguna</a></li>
          <li class='active'>Edit Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
          Edit Pengguna
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='$loadModule?loadPage=pengguna&action=ubahData' enctype='multipart/form-data'>
		  <input type='hidden' value='$_data[kdPengguna]' name='id'>
             <div class='form-group'>
              <label class='col-md-2'>Nama Lengkap</label>

              <div class='col-md-10'>
                <input type='text' class='form-control' placeholder='Nama Lengkap' name='txtNmLengkap' value='$_data[nmLengkap]'>
              </div>
            </div>
             <div class='form-group'>
              <label class='col-md-2'>Username</label>

              <div class='col-md-4'>
                <input type='text' class='form-control' placeholder='Username' name='txtUsername' value='$_data[username]'>
              </div>
            </div>
            
             <div class='form-group'>
              <label class='col-md-2'>Email</label>

              <div class='col-md-10'>
                <input type='email' class='form-control' placeholder='email@example.com' name='txtEmail' value='$_data[email]'>
              </div>
            </div>
             <div class='form-group'>
              <label class='col-md-2'>Kontak</label>

              <div class='col-md-4'>
                <input type='text' class='form-control' placeholder='08xx-xxxx-xxx' name='txtKontak' value='$_data[kontak]'>
              </div>
            </div>
             <div class='form-group'>
              <label class='col-md-2'>Alamat</label>

              <div class='col-md-10'>
                <input type='text' class='form-control' placeholder='Jl.Example' name='txtAlamat' value='$_data[alamat]'>
              </div>
            </div>
			<div class='form-group'>
              <label class='col-md-2'>Foto Lama</label>

              <div class='col-md-4'>";
			  if(isset($_data['foto'])){
				  echo"<img src='gambar/pengguna_img/small/small_$_data[foto]'>";
				  }else{
					  echo"Tidak Ada Gambar";
				  }
				  echo"
               
              </div>
            </div>
			<div class='form-group'>
              <label class='col-md-2'>Upload Foto Baru</label>

              <div class='col-md-4'>
                <input type='file' name='upPhoto'>
              </div>
            </div>
             <div class='form-group'>
              <label class='col-md-2'>Level Pengguna</label>

              <div class='col-md-4'>";
			  if($_data['levelPengguna']=="Administrator"){
				  echo"
				   <input type='radio' value='Administrator' name='rbLevel' checked>
                Administrator
                <input type='radio' value='Umum' name='rbLevel'>
                Umum
                <input type='radio' value='Pelatih' name='rbLevel'>
                Pelatih
				  "; 
				 }elseif($_data['levelPengguna']=="Umum"){
					 echo"
					 <input type='radio' value='Administrator' name='rbLevel'>
                Administrator
                <input type='radio' value='Umum' name='rbLevel' checked>
                Umum
                <input type='radio' value='Pelatih' name='rbLevel'>
                Pelatih
					 
					 ";
				}else{
          echo"
          <input type='radio' value='Administrator' name='rbLevel'>
               Administrator
               <input type='radio' value='Umum' name='rbLevel' >
               Umum
               <input type='radio' value='Pelatih' name='rbLevel' checked>
               Pelatih
          
          ";
       }
                echo"
              </div>
            </div>
               
           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=pengguna'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Ubah</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
";?>