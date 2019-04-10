
 <div class="content-header">
   <h2 class="content-header-title">Pengguna</h2>
   <ol class="breadcrumb">
     <li><a href="#">Home</a></li>
     <li><a href="#">Data Master</a></li>
     <li class="active">Pengguna</li>
     </ol>
     </div> <!-- /.content-header -->
     
  <?php if ($_SESSION['levelPengguna'] == 'Administrator') : ?>
  <div class="content-header">
      <a href='?loadPage=pengguna&action=input'><button type='button' class='btn btn-info '>Tambah Data</button></a>
  </div> <!-- /.content-header -->
  <div class="row">

      <div class="col-md-12">

          <div class="portlet">

              <div class="portlet-header">

              <h3>
                  <i class="fa fa-table"></i>
              Daftar Pengguna
              </h3>
              
            </div> <!-- /.portlet-header -->
            
            <div class="portlet-content">           
                
              <div class="table-responsive">

                  <table 
                class="table table-striped table-bordered table-hover table-highlight table-checkable" 
                data-provide="datatable" 
                data-display-rows="10"
                data-info="true"
                data-search="true"
                data-length-change="true"
                data-paginate="true"
                >
                  <thead>
                      <tr>
                          
                      <th data-filterable="true" data-sortable="true" data-direction="asc" width="5%">No</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Foto</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true" width="30%">Nama Lengkap</th>
                      <th data-filterable="true" data-sortable="true" >Username</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Email</th>
                        <th data-direction="asc" data-filterable="true" data-sortable="true">Kontak</th>
                        <th data-filterable="false" class="hidden-xs hidden-sm" width="15%">Aksi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
				  $_SQL=mysql_query("SELECT * FROM tpengguna ORDER BY username ASC");
				  $no=1;
				  while($_data=mysql_fetch_array($_SQL)){
				  echo"
          <tr>
					  <td>$no</td>
					  <td>
					  ";
					  if(isset($_data['foto'])){
              echo"<img src='gambar/pengguna_img/small/small_$_data[foto]'>";
						  }else{
							  echo"Tidak Ada Gambar";
							  }
                echo"
					  </td>
					  <td>$_data[nmLengkap]</td>
					  <td>$_data[username]</td>
					  <td>$_data[email]</td>
					  <td>$_data[kontak]</td>
            <td>
					  <a href='?loadPage=pengguna&action=edit&id=$_data[kdPengguna]'><button type='button' class='btn btn-success btn-sm'>Edit</button></a>";
					  if(isset($_data['foto'])){
						  echo"<a href='$loadModule?loadPage=pengguna&action=hapusData&id=$_data[kdPengguna]&fimage=$_data[foto]'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>
              ";
						  }else{
							echo"
							<a href='$loadModule?loadPage=pengguna&action=hapusData&id=$_data[kdPengguna]'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>
					  
							
							";  
            }
            
					  echo"
					  </td>
					  
					  </tr>
					  
					  
					  ";
					  
					 $no++; }
           ?>
                  
                </tbody>
              </table>
              </div> <!-- /.table-responsive -->
              

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        
          
        </div> <!-- /.col -->

      </div> <!-- /.row -->
<?php  endif; ?>
