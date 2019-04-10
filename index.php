<!DOCTYPE html>
<html class="no-js">
<head>
  <title> Login Dashboard</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="./css/font-awesome.min.css">
  <link rel="stylesheet" href="./js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- App CSS -->
  <link rel="stylesheet" href="./css/target-admin.css">
  <link rel="stylesheet" href="./css/custom.css">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body class="account-bg">

<div class="account-wrapper">

    <div class="account-body">

      <h3 class="account-body-title">Selamat Datang di Halaman Login</h3>

      <div class="account-logo">
    <img src="./img/logo1.png" alt="Target Admin">
  </div>

      <h5 class="account-body-subtitle">Silahkan Masukan Username dan Password Anda.</h5>

      <form class="form account-form" method="POST" action="cek-login.php">

        <div class="form-group">
          <label for="login-username" class="placeholder-hidden">Username</label>
          <input type="text" class="form-control" id="login-username" name="txtUsername" placeholder="Username" tabindex="1">

        </div> <!-- /.form-group -->

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">Password</label>
          <input type="password" class="form-control" id="login-password" name="txtPassword" placeholder="Password" tabindex="2">
        </div> <!-- /.form-group -->

        <div class="form-group clearfix">
          <div class="pull-left">         
            <label class="checkbox-inline">
            <input type="checkbox" class="" value="" tabindex="3">Ingatkan Saya
            </label>
          </div>

        </div> <!-- /.form-group -->

        <div class="form-group">
          <button style="background-color :#338bc9; border-color:#000"  type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
           Masuk &nbsp; <i class="fa fa-play-circle"></i></div> <!-- /.form-group -->

      </form>


    </div> <!-- /.account-body -->

    <div class="account-footer">
    <center>
    <div class="account-logo">
    <img src="./img/logo3.png">
    <h5>  &copy; Always FA 2018</h5>
    </div></center>
    
    </div> <!-- /.account-footer -->

  </div> <!-- /.account-wrapper -->

  <script src="./js/libs/jquery-1.10.1.min.js"></script>
  <script src="./js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="./js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="./js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="./js/target-admin.js"></script>
  
  <!-- Plugin JS -->
  <script src="./js/target-account.js"></script>

  


  

</body>
</html>
