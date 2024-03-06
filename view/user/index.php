<?php 
  session_start();
  include "../../api/hora.php";
class MyDB2 extends SQLite3
  {
    function __construct()
    {
      $this->open("../../db/TINserver.cmserver.db3");
    }
  }
//craendo la connexion
$db2 = new MyDB2();
if(!$db2){
  echo $db2->lastErrorMsg();
}else{
  "Database is Ok".'<br>';
}

//Contando la player que estan conectados
$sql2= 'SELECT player_count from game_server';
$ret2 = $db2->query($sql2);
while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
  $_SESSION['online'] = $row['player_count'];
}

  
  if(!isset($_SESSION['name']) || $_SESSION['name']==""){
    header('location: ../../');
  }
  if(!isset($_SESSION['tiempo'])){
    $_SESSION['tiempo'] = time();
  }elseif (time() - $_SESSION['tiempo'] > 3600){
    session_destroy();
    header('location: ../../');
    
  }
  $_SESSION['tiempo'] = time();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hurtworld - Freedom</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="stylesheet" type="text/css" href="styles.css">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  

  <!-- Google Fonts -->
  

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/amaran.min.css">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  
    <!--<div class="window-notice" id="window-notice">
        <div class="content">
            <div class="content-text" id="close-button"><center><?php echo $saludar . ucfirst($_SESSION['name']) .".<br>". $saludar1?></center>
            </div>
            
        </div>
    </div>-->
  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!--<a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>-->
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#hero">Hurtworld</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero"> Inicio</a></li>
          <li><a href="#about">Reglas</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Galeria</a></li>
          
          <li class="menu-has-children"><a href="#"><?php echo ucfirst($_SESSION['name']) ?></a>
            <ul>
              <li><a href="profiles/">Perfil</a></li>
              <li><a href="#">Baneados</a></li>
              <li><a href="profiles/mods.php">Descargar Mods</a></li>
                
              
              <li><a href="../../api/cerrarSesion.php">Cerrar Sessión</a></li>
              
            </ul>
          </li>
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenidos a Hurtworld.v2</h1>
      <h2>Contamos con uno de los mejores servicios de snet</h2>
      <a href="ts3server://10.88.0.1:9995" class="btn-get-started">Visitar Ts</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Reglas</h2>
            <p>
              Estan son algunas de las reglas más basicas que se llevan mas a nuestro servicio, sin quitarle ninguna credibilidad a las reglas generales de snet.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Utilizar Parche</a></h4>
              <p class="description">Usuario que utilice parche y sea detectado será baneado permanentente del servicio</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Difamación tanto a los user como a los admin</a></h4>
              <p class="description">User que tengan prueba de algún usuario o admin informar al admin del servicio(Okana; Aldo). User que no posea esta prueba y incumpla con lo anteriormente planteado será ban 3 días</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Faltas de Respeto</a></h4>
              <p class="description">La falta de respeto entre entre los mismo usuarios no se permitira bajo ningún concepto. Ban 3 días</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Servidor</h3>
          <p class="section-description"></p>
        </div>
        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $_SESSION['id'] ?></span>
            <p>Registrados</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $_SESSION["online"] ?></span>
            <p>Online</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Plugins</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Mods</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Servicios</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="">Sistema Web</a></h4>
              <p class="description">Sistema de quitar los ban por la web del keymac y el sistema de recuperación de cuentas cuando hallas olvidado la contraseña. Los encargados son los colaboradores </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Autoreinicio del Steam</a></h4>
              <p class="description">El Steam de nuestro server se autoinicia y se cierra cada 30 minutos para eliminar caché y autogestionar la conexión al Servidor del Hurtworld. </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-paper-plane"></i></a></div>
              <h4 class="title"><a href="">Auto_Salva</a></h4>
              <p class="description">El server cuenta con un sistema de autoguardado cada cierto tiempo para evitar que el momento que ocurra una falla energética tener guardado la salva del Hurtworld. </p>
            </div>
          </div>

          
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Descarga el Cliente</h3>
            <p class="cta-text"> Puedes descargar nuestro Cliente-Hurtworld respetando el horario de copia(3:00am -- 10:00am)</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo "../" .$ruta ?>">Descargar</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Galería</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/galeria/1.png" alt="">
              <div class="details">
                <h4>Photo 1</h4>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/galeria/15.jpg" alt="">
              <div class="details">
                <h4>Photo 2</h4>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/galeria/3.jpg" alt="">
              <div class="details">
                <h4>Photo 3</h4>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/galeria/4.jpg" alt="">
              <div class="details">
                <h4>Photo 4</h4>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/galeria/13.jpg" alt="">
              <div class="details">
                <h4>Photo 5</h4>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/galeria/6.jpg" alt="">
              <div class="details">
                <h4>Photo 6</h4>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/galeria/7.jpg" alt="">
              <div class="details">
                <h4>Photo 7</h4>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/galeria/8.jpg" alt="">
              <div class="details">
                <h4>Photo 8</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/galeria/14.jpg" alt="">
              <div class="details">
                <h4>Photo 9</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/galeria/10.jpg" alt="">
              <div class="details">
                <h4>Photo 10</h4>
                
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/galeria/11.jpg" alt="">
              <div class="details">
                <h4>Photo 11</h4>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/galeria/12.jpg" alt="">
              <div class="details">
                <h4>Photo 12</h4>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    

    <!--==========================
      Contact Section
    ============================-->
    

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Okana</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="css/jquery.amaran.js"></script>
  <script>window.jQuery || document.write('<script src="css/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="script.js"></script>
  <script>
      $(function(){
            $('document').ready(function(){
                $.amaran({
                    'theme'     :'user yellow',
                    'content'   :{
                        img:'css/1.png',
                        
                        user:'<?php echo $saludar . ucfirst($_SESSION['name'])?>',
                        message:'<?php echo $saludar1?>'
                    },
                    'position'  :'bottom right',
                    'outEffect' :'slideBottom',
                    'cssanimationIn'    :'swing',
                    'resetTimeout' :true,
                    'closeOnClick' :false,
                    'sticky'        :true,
                    'closeOnClick'  :false,
                    'closeButton'   :true
                });
            });
      });
    </script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
