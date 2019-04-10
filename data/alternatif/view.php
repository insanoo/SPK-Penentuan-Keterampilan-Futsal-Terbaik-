
 <div class="content-header">
        <h2 class="content-header-title">ALTERNATIF</h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Alternatif</li>
        </ol>
      </div> <!-- /.content-header -->

   <div class="content-header">
  <a href='?loadPage=alternatif&action=input'><button type='button' class='btn btn-info '>Tambah Data</button></a>
      </div> <!-- /.content-header -->

  
 <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
              Daftar Alternatif
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
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Nama Alternatif</th>
                      <th data-filterable="true" data-sortable="true" width="30%">Deskripsi</th>
                      <th data-filterable="false" class="hidden-xs hidden-sm" width="15%">Aksi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
				  $alternatif=mysql_query("SELECT * FROM talternatif ORDER BY nama_alternatif ASC");
				  $no=1;
				  while($al=mysql_fetch_array($alternatif)){
					  $text=$al['deskripsi'];
					  $deskripsi=substr($text,0,100);
					  echo"
					  <tr>
					  <td>$no</td>
					  <td>$al[nama_alternatif]</td>
					  <td>$deskripsi</td>
					  <td>
					  <a href='?loadPage=alternatif&action=edit&id=$al[id_alternatif]'><button type='button' class='btn btn-success btn-sm'>Edit</button></a>
					    <a href='$loadModule?loadPage=alternatif&action=hapusData&id=$al[id_alternatif]'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>
					  
					  
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
