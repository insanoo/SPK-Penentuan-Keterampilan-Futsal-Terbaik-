 <div class='content-header'>
        <h2 class='content-header-title'>kriteria</h2>
        <ol class='breadcrumb'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Data Master</a></li>
          <li><a href='?loadPage=kriteria'>Kriteria</a></li>
          <li class='active'>Input Data</li>
        </ol>
      </div> <!-- /.content-header -->



<div class='portlet'>
      
        <div class='portlet-header'>
      
          <h3>
            <i class='fa fa-tasks'></i>
           Input Kriteria
          </h3>
      
        </div> <!-- /.portlet-header -->
      
        <div class='portlet-content'>
      
          <form class='form-horizontal' role='form' method='post' action='data/kriteria/proses.php?loadPage=kriteria&action=simpanData' enctype='multipart/form-data'>
            <div class='form-group'>
              <label class='col-md-2'>Nama kriteria</label>

              <div class='col-md-10'>
                <input type='text' class='form-control' placeholder='Nama Kriteria' name='txtKriteria'>
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>Kepentingan</label>

              <div class='col-md-2'>
                <input type='text' class='form-control' placeholder='1-5' name='txtKep'>
              </div>
            </div>
                  <div class='form-group'>
              <label class='col-md-2'>Cost Benefit</label>

              <div class='col-md-2'>
                <input type='radio' value='Cost' name='rbCB'>
                Cost
                <input type='radio'  value='Benefit' name='rbCB'>
                Benefit
                
              </div>
            </div>

           <div class='col-md-8'>
  
      	</div> <!-- /.content-header -->
			<div class='col-md-4'>
            <a href='?loadPage=kriteria'><button type='button' class='btn btn-info '>Kembali</button></a>
   <button type='submit' class='btn btn-success '>Simpan</button>
   <button type='reset' class='btn btn-warning '>Batal</button>
            </div>

          </form>
      
        </div> <!-- /.portlet-content -->
      
      </div> <!-- /.portlet -->
