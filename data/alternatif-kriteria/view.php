
 <div class="content-header">
        <h2 class="content-header-title">Nilai</h2>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Nilai</li>
        </ol>
      </div> <!-- /.content-header -->

   <div class="content-header">
  <a href='?loadPage=alternatif-kriteria&action=input'><button type='button' class='btn btn-info '>Tambah Data</button></a>
      </div> <!-- /.content-header -->

  
 <div class="row">

        <div class="col-md-12">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-table"></i>
               Daftar Alternatif Kriteria
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
                      <th data-filterable="true" data-sortable="true" width="30%">Nama Kriteria</th>
                      <th data-direction="asc" data-filterable="true" data-sortable="true">Nilai</th>
                      <th data-filterable="false" class="hidden-xs hidden-sm" width="15%">Aksi</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <?php
				  $kriteria=mysql_query("SELECT * FROM talternatif_kriteria,tkriteria,talternatif
				  						WHERE talternatif_kriteria.id_alternatif=talternatif.id_alternatif AND
										talternatif_kriteria.id_kriteria=tkriteria.id_kriteria ORDER BY talternatif.nama_alternatif ASC");
				  $no=1;
				  while($kr=mysql_fetch_array($kriteria)){
					  $nilai= idr_f($kr['nilai']);
					 
					  echo"
					  <tr>
					  <td>$no</td>
					  <td>$kr[nama_alternatif]</td>
					  <td>$kr[nama_kriteria]</td>
					  <td>$nilai</td>
					  <td>
					  <a href='?loadPage=alternatif-kriteria&action=edit&id=$kr[id_alternatif_kriteria]'><button type='button' class='btn btn-success btn-sm'>Edit</button></a>
					    <a href='$loadModule?loadPage=alternatif-kriteria&action=hapusData&id=$kr[id_alternatif_kriteria]'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>
					  
					  
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
