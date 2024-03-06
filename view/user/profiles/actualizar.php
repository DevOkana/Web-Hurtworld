<?php
  session_start();
  
  

  if(!isset($_SESSION['name']) || $_SESSION['name']==""){
    header('location: ../../../index.php');
  }
  if(!isset($_SESSION['tiempo'])){
    $_SESSION['tiempo'] = time();
  }elseif (time() - $_SESSION['tiempo'] > 3600) {
    session_destroy();
    header('location: ../../../index.php');
    die;
  }
  if ($_SESSION['name']=="invitado") {
    header('location: ../../../acceso.php');
  }
  $_SESSION['tiempo'] = time();

?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Actualizar Contraseña</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert.css">
    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <style type="text/css">
      body {
        padding-top: 30px;
      }

      pbfooter {
        position:relative;
      }
    </style>
    <!-- Jquery Validate Script -->
    <script type="text/javascript" src="js/jquery.validate.js"></script>

    <!-- Jquery Validate Script - Validation Fields -->
    <script type="text/javascript" src="js/functions.js">
    
    
    </script>

</head>

<style>

    .pbfooter {
        position:relative;
    }

</style>

  <body style="background:url('../img/hero-bg1.jpg');
                      width:100%;
                      height:100%;
                      background-size:100% 100%;
                      background-repeat:no-repeat;
                        margin:0px;
  border:0px;
  padding:0px;
    overflow:auto;">
           
    <!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li><a href="../index.php"><i class="icon-home icon-white"></i> Home</a></li>   
              <li class="active"><a href="index.php"><i class="icon-home icon-white"></i> Perfil</a></li>   
                
              <li><a href="mods.php"><i class="icon-home icon-white"></i> WorkShop</a></li> 
              

                                       
              
              
              


            </ul>
            <li><center><a style="float: right;
                  width: 200px;
                  border: 3px;
                  padding: 10px;" 
      href="../../../api/cerrarSesion.php">Cerrar Sesión</a></li>  </center>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
        <div class="row">
      <div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
        <div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px;">
          <img src="images/face80x80.jpg" alt="" class="img-circle">
          <h1 style="color: white"><b><i><?php echo ucfirst($_SESSION['name']) ?></h1></i></b>
          <br>
          <center style="color: white"><i><h4>Cambia tu contraseña</h4></center></i>
          <br>
          <form class="cmxform" id="signupForm" method="get" action="" >
            <fieldset>
              <p>
                <input id="oldpassword" name="oldpassword" type="password" placeholder="Password Actual"><br>
                <input id="newpassword" name="newpassword" type="password" placeholder="Nuevo Password"><br>
                <input id="newpassword2" name="newpassword2" type="password" placeholder="Verifica el Password"><br>
              </p>
                <input class="submit btn-success btn btn-large" type="submit" value="Actualizar">
            </fieldset>
          </form>
        </div>

      </div>


        </div>
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
  
</body></html>