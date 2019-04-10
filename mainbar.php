 <ul class="nav navbar-nav mainbar-nav">
<?php //var_dump($_SESSION);exit; ?>
        <li>
          <a href="?loadPage=dashboard">
            <i class="fa fa-dashboard"></i>
            Dashboard
          </a>
        
        </li>
        <li>
        <?php if ($_SESSION['levelPengguna'] == 'Pelatih') : ?>
            <a href="?loadPage=analisis-satu">
            <i class="fa fa-desktop"></i>
            Perhitungan 
          </a>
        </li>

        <li class="dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
          <i class="fa fa-align-left"></i> 
          Data Master
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li class="dropdown-header">Alternatif</li>

            <li>
              <a href="?loadPage=alternatif">
              <i class="fa fa-location-arrow nav-icon"></i> 
            Daftar Alternatif
              </a>
            </li>

        

            <li class="divider"></li>

            <li class="dropdown-header">Kritera</li>

            <li>
              <a href="?loadPage=kriteria">
              <i class="fa fa-table"></i> 
         Daftar Kriteria
              </a>
            </li>
            
             <li class="dropdown-header">Alternatif Kritera</li>

            <li>
              <a href="?loadPage=alternatif-kriteria">
              <i class="fa fa-table"></i> 
         Daftar Nilai (Alternatif Kriteria)
              </a>
            </li>

            
          </ul>
        </li>
        <?php endif; ?>
        <?php if ($_SESSION['levelPengguna'] == 'Administrator') : ?>
        <li>
          <a href="?loadPage=pengguna">
            <i class="fa fa-user"></i>
           Pengguna
          </a>
        </li>  
        <?php endif; ?>
        
        
        <li class="dropdown ">
        <?php if ($_SESSION['levelPengguna'] == 'Pelatih' || $_SESSION['levelPengguna'] == 'Umum') : ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
          <i class="fa fa-download"></i> 
          Laporan
            <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li>
              <a href="analisis-1-print.php"> 
            LAPORAN DATA HASIL PERHITUNGAN
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="list.php"> 
            LAPORAN DATA SEBELUM DI PROSES
              </a>
            </li>
            <?php endif; ?>