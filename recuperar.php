<!-- =======================================================
Theme Name: Steam - Hurtworld.
Author: Okana_Studios.
Designed: Okana.
Created: 06_01_2021-09_30_10.
======================================================= -->

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>Registro en Steam</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="assets/Recuperar.css" type="text/css" />

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">

</head>

<body>


<!-- Begin page content -->

<div class="container">
  

  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      <div class="signup-form-container"> 
        
        <!-- form start -->
        <form method="post" role="form" id="register-form" autocomplete="off">
          <div class="form-header">
            <center><h3 class="form-title"><i class="fa fa-user"></i>
            <span class=""></span>  Recuperar</h3></center>
          </div>
          <div class="form-body"> 
            
            <!-- json response will be here -->
            <div id="errorDiv"></div>

            <!-- json response will be here -->
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span> </div>
                <input name="email" id="email" type="text" class="form-control" placeholder="user@snet.cu" maxlength="50">
              </div>
              <span class="help-block" id="error"></span> 
              </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <input name="ip" type="hidden" id="ip" class="form-control" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" maxlength="40">
              <span class="help-block" id="error"></span> 
            </div>
            <div id="consulta"></div>
          <center>
          <div class="form-footer">
            <button type="submit" class="btn btn-primary" id="btn-signup"> <span class="glyphicon glyphicon-log-in"></span> Buscar </button>
          </div></center>
          <section class="text-accent center">
              <div class="spacing-2"></div>
              
              <p>
                ¿No tienes una cuenta? <a href="register.php"> Registrate!</a>
              </p>
              
              <p>
                ¿Recordaste la Cuenta? <a href="index.php"> Inicia Sesión!</a>
              </p>
            </section>
        </form>
        
        
      </div>
            
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->

<script src="assets/jquery-1.12.4-jquery.min.js"></script> 
<script src="assets/jquery.validate.min.js"></script> 
<script src="assets/verificandoemail.js"></script> 
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="assets/js/vendor/popper.min.js"></script> 
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>