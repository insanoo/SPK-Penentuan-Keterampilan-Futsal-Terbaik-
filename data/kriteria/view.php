
 <div class="content-header">
        <h2 class="content-header-title">KRITERIA</h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Kriteria</li>
        </ol>
      </div> <!-- /.content-header -->

   <div class="content-header">
  <a href='?loadPage=kriteria&action=input'><button type='button' class='btn btn-info '>Tambah Data</button></a>
      </div> <!-- /.content-header -->

  
 <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
               Daftar Kriteria
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
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Nama Kriteria</th>
                      <th data-filterable="true" data-sortable="true" width="30%">Kepentingan</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Cost Benefit</th>
                      <th data-filterable="false" class="hidden-xs hidden-sm" width="15%">Aksi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
				  $kriteria=mysql_query("SELECT * FROM tkriteria ORDER BY nama_kriteria ASC");
				  $no=1;
				  while($kr=mysql_fetch_array($kriteria)){
					 
					  echo"
					  <tr>
					  <td>$no</td>
					  <td>$kr[nama_kriteria]</td>
					  <td>$kr[kepentingan]</td>
					  <td>$kr[costbenefit]</td>
					  <td>
					  <a href='?loadPage=kriteria&action=edit&id=$kr[id_kriteria]'><button type='button' class='btn btn-success btn-sm'>Edit</button></a>
					    <a href='$loadModule?loadPage=kriteria&action=hapusData&id=$kr[id_kriteria]'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>
					  
					  
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
