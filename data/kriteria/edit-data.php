 <?php
 $SQL=mysql_query("SELECT * FROM tkriteria WHERE id_kriteria='$_GET[id]'");
 $_data=mysql_fetch_array($SQL);
 echo"
 <div class='content-header'>
        <h2 class='content-header-title'>kriteria</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Master</a></li>
          <li><a href='?loadPage=kriteria'>Kriteria</a></li>
          <li class='active'>Edit Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
          Edit kriteria
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='$loadModule?loadPage=kriteria&action=ubahData' enctype='multipart/form-data'>
		  <input type='hidden' value='$_data[id_kriteria]' name='id'>
            <div class='form-group'>
              <label class='col-md-2'>Nama kriteria</label>

              <div class='col-md-10'>
                <input type='text' class='form-control'  name='txtKriteria' value='$_data[nama_kriteria]'>
              </div>
            </div>
			  <div class='form-group'>
              <label class='col-md-2'>Kepentingan</label>

              <div class='col-md-2'>
                <input type='text' class='form-control' placeholder='1-5' name='txtKep' value='$_data[kepentingan]'>
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>Cost Benefit</label>";
			  if($_data['costbenefit']=="Cost"){
				  echo"
				   <div class='col-md-2'>
                <input type='radio' value='Cost' name='rbCB' checked>
                Cost
                <input type='radio'  value='Benefit' name='rbCB'>
                Benefit
                
              </div>
				  ";
				  
				  }else{
					  echo"
					   <div class='col-md-2'>
                <input type='radio' value='Cost' name='rbCB'>
                Cost
                <input type='radio'  value='Benefit' name='rbCB' checked>
                Benefit
                
              </div>
					  
					  ";
					  }

             	echo"
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
";?>