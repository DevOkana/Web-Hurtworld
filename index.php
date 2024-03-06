<!-- =======================================================
Theme Name: Steam - Hurtworld.
Author: Okana_Studios.
Designed: Okana.
Created: 06_01_2021-09_30_10.
======================================================= -->


<?php
  session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login en Steam</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/amaran.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles5.css">
        <script src="js/script.js"></script>
  </head>

  <body>

    <!-- Formulario Login -->
    <br><br><br><br><br><br><br>
    <center>
    <div class="container">
      <div class="center">
        <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
             <h3 class="panel-title">
                  Iniciar Sesión
                </h3>
          </div>
          <!-- Estructura del formulario -->
          <div class="panel-body">
          <fieldset>

            <h2 class="center">Login</h2>
            <div class="spacing-1"></div>
            <!-- Caja de texto para usuario -->
            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="user" placeholder="Ingresa tu usuario" required>
            </div>
            <br>
            <input type="hidden" name="_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
            <!-- Div espaciador -->
            <div class="spacing-2"></div>

            <!-- Caja de texto para la clave-->
            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu usuario" required>
            </div>
<br>
            <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
<br>            <!-- Fin load -->

            <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <button type="button" class="btn btn-primary btn-block" name="button" id="login" >Iniciar sesion</button>
              </div>
            </div>

            <section class="text-accent center">
              <div class="spacing-2"></div>
              
              <p>
                ¿No tienes una cuenta? <a href="register.php"> Registrate!</a>
              </p>
              
              <p>
                ¿Olviaste tu cuenta? <a href="recuperar.php"> Recuperala!</a>
              </p>
            </section>

          </fieldset>
        </div>
      </div>
    </div>
    </center>

    <!-- / Final Formulario login -->

    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/jquery.amaran.js"></script>
    <script>
      $(function(){
        $('document').ready(function(){
          setTimeout(function(){
            $.amaran({
                    'title' : 'Hola User',
                    'message'   :'Utilice su cuenta de Steam.',
                    'position'  :'top right'
                });
            },3000);
          
          setTimeout(function(){
          $.amaran({
                    'message'   :'En caso de no tenerla, Registrate!.',
                    'position'  :'top right'
                });
            },5000);

          setTimeout(function(){
          $.amaran({
                    'message'   :'Saludos.',
                    'position'  :'top right'
                });
            },8000);
          
          
      
        $.amaran({
                    'message'   :'Hola User.',
                    'position'  :'top right'
                });
      });
      });
    </script>
  </body>
</html>
