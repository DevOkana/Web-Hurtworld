<?php
  session_start();
  include "../../../api/hora.php";
  include "connexionmods.php";
  if(!isset($_SESSION['name']) || $_SESSION['name']==""){
    header('location: ../../index.php');
  }
  if(!isset($_SESSION['tiempo'])){
    $_SESSION['tiempo'] = time();
  }elseif (time() - $_SESSION['tiempo'] > 3600) {
    session_destroy();
    header('location: ../../../index.php');
    die;
  }

  $_SESSION['tiempo'] = time();
?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>WorkShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Okana">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <!-- DATA TABLE CSS -->
    <link href="css/table.css" rel="stylesheet">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/admin.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

  	

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="js/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
  			    });
	</script>

    
  </head>
  <body>
  
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
              <li><a href="../index.php"><i class="icon-th icon-white"></i> Home</a></li>
              <li ><a href="index.php"><i class="icon-home icon-white"></i> Perfil</a></li>                            
              
              <li class="active"><a href="#"><i class="icon-user icon-white"></i> WorkShop</a></li>
              <li><a href="#"><i class="icon-home icon-white"></i> Eventos</a></li> 

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

      <!-- CONTENT -->
	
			 <br>
			 <!--SECOND Table -->


		<h4><strong>Descarga los Mods</strong></h4>

		<table class="display" id="dt1">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Estado</th>
            
            <th>Tamaño(MB)</th>
            <th>Descarga(.rar)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="even gradeA">
            <td><?php echo $nombre1 ?></td>
            <td class="center"><?php echo $estado1 ?></td>
            <td class="center"><?php echo $tamaño1 ?></td>
            <td><center><a href="<?php echo $mod1 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="even gradeA">
            <td><?php echo $nombre2 ?></td>
            <td class="center"><?php echo $estado2 ?></td>
            <td class="center"><?php echo $tamaño2 ?></td>
            <td><center><a href="<?php echo $mod2 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="odd gradeA">
            <td><?php echo $nombre3 ?></td>
            <td class="center"><?php echo $estado3 ?></td>
            <td class="center"><?php echo $tamaño3 ?></td>
            <td><center><a href="<?php echo $mod3 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="even gradeA">
            <td><?php echo $nombre4 ?></td>
            <td class="center"><?php echo $estado4 ?></td>
            <td class="center"><?php echo $tamaño4 ?></td>
            <td><center><a href="<?php echo $mod4 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="odd gradeA">
            <td><?php echo $nombre5 ?></td>
            <td class="center"><?php echo $estado5 ?></td>
            <td class="center"><?php echo $tamaño5 ?></td>
            <td><center><a href="<?php echo $mod5 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="even gradeA">
            <td><?php echo $nombre6 ?></td>
            <td class="center"><?php echo $estado6 ?></td>
            <td class="center"><?php echo $tamaño6 ?></td>
            <td><center><a href="<?php echo $mod6 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="gradeA">
            <td><?php echo $nombre7 ?></td>
            <td class="center"><?php echo $estado7 ?></td>
            <td class="center"><?php echo $tamaño7 ?></td>
            <td><center><a href="<?php echo $mod7 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="gradeA">
            <td><?php echo $nombre8 ?></td>
            <td class="center"><?php echo $estado8 ?></td>
            <td class="center"><?php echo $tamaño8 ?></td>
            <td><center><a href="<?php echo $mod8 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="gradeA">
            <td><?php echo $nombre9 ?></td>
            <td class="center"><?php echo $estado9 ?></td>
            <td class="center"><?php echo $tamaño9 ?></td>
           <td><center><a href="<?php echo $mod9 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="gradeA">
            <td><?php echo $nombre10 ?></td>
            <td class="center"><?php echo $estado10 ?></td>
            <td class="center"><?php echo $tamaño10 ?></td>
            <td><center><a href="<?php echo $mod10 ?>"><i class="glyphicon glyphicon-download"></td></a></center>

          </tr>
          <tr class="gradeA">
            <td><?php echo $nombre11 ?></td>
            <td class="center"><?php echo $estado11 ?></td>
            <td class="center"><?php echo $tamaño11 ?></td>
            <td><center><a href="<?php echo $mod11 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="gradeA">
            <td><?php echo $nombre12 ?></td>
            <td class="center"><?php echo $estado12 ?></td>
            <td class="center"><?php echo $tamaño12 ?></td>
            <td><center><a href="<?php echo $mod12 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          <tr class="gradeA">
            <td><?php echo $nombre13 ?></td>
            <td class="center"><?php echo $estado13 ?></td>
            <td class="center"><?php echo $tamaño13 ?></td>
            <td><center><a href="<?php echo $mod13 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>
          
          <tr class="gradeU">
           <td><?php echo $nombre14 ?></td>
            <td class="center"><?php echo $estado14 ?></td>
            <td class="center"><?php echo $tamaño14 ?></td>
            <td><center><a href="<?php echo $mod14 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre15 ?></td>
            <td class="center"><?php echo $estado15 ?></td>
            <td class="center"><?php echo $tamaño15 ?></td>
            <td><center><a href="<?php echo $mod15 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre16 ?></td>
            <td class="center"><?php echo $estado16 ?></td>
            <td class="center"><?php echo $tamaño16 ?></td>
            <td><center><a href="<?php echo $mod16 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre17 ?></td>
            <td class="center"><?php echo $estado17 ?></td>
            <td class="center"><?php echo $tamaño17 ?></td>
            <td><center><a href="<?php echo $mod17 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre18 ?></td>
            <td class="center"><?php echo $estado18 ?></td>
            <td class="center"><?php echo $tamaño18 ?></td>
            <td><center><a href="<?php echo $mod18 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre19 ?></td>
            <td class="center"><?php echo $estado19 ?></td>
            <td class="center"><?php echo $tamaño19 ?></td>
            <td><center><a href="<?php echo $mod19 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre20 ?></td>
            <td class="center"><?php echo $estado20 ?></td>
            <td class="center"><?php echo $tamaño20 ?></td>
            <td><center><a href="<?php echo $mod20 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre21 ?></td>
            <td class="center"><?php echo $estado21 ?></td>
            <td class="center"><?php echo $tamaño21 ?></td>
            <td><center><a href="<?php echo $mod21 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre22 ?></td>
            <td class="center"><?php echo $estado22 ?></td>
            <td class="center"><?php echo $tamaño22 ?></td>
            <td><center><a href="<?php echo $mod22 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre23 ?></td>
            <td class="center"><?php echo $estado23 ?></td>
            <td class="center"><?php echo $tamaño23 ?></td>
            <td><center><a href="<?php echo $mod23 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre24 ?></td>
            <td class="center"><?php echo $estado24 ?></td>
            <td class="center"><?php echo $tamaño24 ?></td>
            <td><center><a href="<?php echo $mod24 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre25 ?></td>
            <td class="center"><?php echo $estado25 ?></td>
            <td class="center"><?php echo $tamaño25 ?></td>
            <td><center><a href="<?php echo $mod25 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre26 ?></td>
            <td class="center"><?php echo $estado26 ?></td>
            <td class="center"><?php echo $tamaño26 ?></td>
            <td><center><a href="<?php echo $mod26 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre27 ?></td>
            <td class="center"><?php echo $estado27 ?></td>
            <td class="center"><?php echo $tamaño27 ?></td>
            <td><center><a href="<?php echo $mod27 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre28 ?></td>
            <td class="center"><?php echo $estado28 ?></td>
            <td class="center"><?php echo $tamaño28 ?></td>
            <td><center><a href="<?php echo $mod28 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre29 ?></td>
            <td class="center"><?php echo $estado29 ?></td>
            <td class="center"><?php echo $tamaño29 ?></td>
            <td><center><a href="<?php echo $mod29 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

          <tr class="gradeU">
           <td><?php echo $nombre30 ?></td>
            <td class="center"><?php echo $estado30 ?></td>
            <td class="center"><?php echo $tamaño30 ?></td>
            <td><center><a href="<?php echo $mod30 ?>"><i class="glyphicon glyphicon-download"></td></a></center>
          </tr>

        </tbody>
      </table><!--/END SECOND TABLE -->
	
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	<br>	

      	<div class="container">
      	    <h4><strong>Descargas</strong></h4>
      		<div class="row">
      			<div class="col-sm-3 col-lg-3">
      				<div id="hosting-table">
						<div class="table_style4"> 
							<div class="column">
								<ul>
				                  	<li><strong>Antihook</strong></li>
									<li class="header_row">
										<h1>KeyMac</h1>
									</li>
									<li>Tamaño 3 MB <a class="tt" href="#"><span class="tooltip"><span class="triangle-obtuse"></span></span></a></li>
									<li>Disponible las 24h</li> 
									
									<li>1 Sola cuenta por user</li>
				                    
				                    <li>Máxima Privacidad</li>
									<li class="footer_row"><a href="<? $keymac?>" class="hosting-button">Descargar</a></li>
								</ul>
							</div><!--/ column-->
						</div><!--/ Table Style-->
					</div><!--/ Hosting Table-->	
      			</div><!-- /span3 -->	
      			<div class="col-sm-3 col-lg-3">
      				<div id="hosting-table">
						<div class="table_style4"> 
							<div class="column">
								<ul>
				                  	<li><strong>Plataforma</strong></li>
									<li class="header_row">
										<h1>Steam</h1>
									</li>
									<li>Tamaño 256 mb <span class="tooltip"><span class="triangle-obtuse"></span></span></a></li>
									<li>Horario de descarga</li> 
									<li>Una Cuenta Máxima<span class="tooltip"><span class="triangle-obtuse">Do your layouts deserve better than Lorem Ipsum?</span></span></a></li> 
									<li>Máxima Privacidad</li>
				                    
									<li class="footer_row"><a href="<?php echo $rutasteam?>" class="hosting-button">Descargar</a></li>
								</ul>
							</div><!--/ column-->
						</div><!--/ Table Style-->
					</div><!--/ Hosting Table-->	
      			</div><!-- /span3 -->	
      			<div class="col-sm-3 col-lg-3">
      				<div id="hosting-table">
						<div class="table_style4"> 
							<div class="column">
								<ul>
				                  	<li><strong>Server</strong></li>
									<li class="header_row">
										<h1>Game</h1>
									</li>
									<li>Tamaño 2.5gb <span class="tooltip"><span class="triangle-obtuse">Contrary to popular belief. It has roots in a classical Latin</span></span></a></li>
									<li>Horario de Descarga</li> 
									<li>Juego del Hurtworld</li> 
									<li>Incluye los mods</li>
				                    
									<li class="footer_row"><a href="<?php echo "../../" . $ruta?>" class="hosting-button">Descargar</a></li>
								</ul>
							</div><!--/ column-->
						</div><!--/ Table Style-->
					</div><!--/ Hosting Table-->	
      			</div><!-- /span3 -->	
      			<div class="col-sm-3 col-lg-3">
      				<div id="hosting-table">
						<div class="table_style4"> 
							<div class="column">
								<ul>
				                  	<li><strong>Cliente</strong></li>
									<li class="header_row">
										<h1>Cliente</h1>
									</li>
									<li>Tamaño 3gb </li>
									<li>Horario de copia</li> 
									<li>Steam y Juego</li> 
									<li>Es abrir y entrar</li>
				                    
									<li class="footer_row"><a href="<?php echo "../../" . $ruta?>" class="hosting-button">Descargar</a></li>
								</ul>
							</div><!--/ column-->
						</div><!--/ Table Style-->
					</div><!--/ Hosting Table-->	
      			</div><!-- /span3 -->	

      		</div><!-- /row -->
      	</div><!-- /container -->
      	<br>
	<!-- FOOTER -->	
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="images/logo.png" alt=""></api/>
      			<p>&copy; Copyright <strong>Okana</strong>. All Rights Reserved
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->

</body></html>