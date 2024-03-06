<?php
  session_start();
  include "../../../api/hora.php";
  include "../../../api/server.php";
  include "../../../api/email.php";
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

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hurtworld_Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="refresh" content="3600">
    <link href="img/favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    
    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-style.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href='css/bootstrap-tour.min.css' rel='stylesheet'>
    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/lineandbars.js"></script>
	<script src="js/clock.js"></script>
    
	<script type="text/javascript" src="js/dash-charts.js"></script>
	<script type="text/javascript" src="js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script src="js/bootstrap-tour.min.js"></script>
	<script type="text/javascript" src="js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script src="js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/admin.js"></script>
    <script type="text/javascript" src="js/operaciones.js"></script>
    
    <style type="text/css">

      body {
        padding-top: 60px;
      }
    </style>

	

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>  
<style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>  
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
            <li><a href="../index.php"><i class="icon-home icon-white"></i> Home</a></li>   
              <li class="active"><a href="index.php"><i class="icon-home icon-white"></i> Perfil</a></li>   
              <li><a href="mods.php"><i class="icon-home icon-white"></i> WorkShop</a></li> 
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

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>User Profile</dtitle>
	      		<hr>
				<div class="thumbnail">
					<img src="images/<?php echo $ico ?>" alt="" class="img-circle">
				</div><!-- /thumbnail -->
				<h1><?php echo ucfirst($_SESSION['name']) ?></h1>
				<h3><?php echo $_SESSION['steamid'] ?></h3>
				<h3><?php echo $email ?></h3>
				<br>
					<div class="info-user">
						
						<a href=""><span id="correo" aria-hidden="true" class="li_mail fs1"></span></a>
						<a href="actualizar.php"><span aria-hidden="true" id="aki"class="li_key fs1" title="Tooltip"></span></a>

					</div>
				</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>Datos de la Cuenta:</dtitle>
		  		<hr>
		  		<center>
		  		<b><p style="font-size: 25px">Creada</b></p>
		  		</center>
	        	<center>
	        	<b><p style="font-size: 15px">Fecha: </b><?php echo $_SESSION['creada'] ?></p>
	        	<b><p style="font-size: 15px">Hora: </b><?php echo $_SESSION['hora'] ?></p>
	        	<hr>
	        	<center>
		  		<b><p style="font-size: 25px">Último Login</b></p>
		  		</center>
	        	<center>
	        	<b><p style="font-size: 15px">Fecha: </b><?php echo $_SESSION['lastfecha'] ?></p>
	        	<b><p style="font-size: 15px">Hora: </b><?php echo $_SESSION['lasthora'] ?></p>
	        	
	        	</center>
			</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>User Registrados</dtitle>
		  		<hr>
	        	<div id="space"></div>
	        	<h2><?php echo $_SESSION['id'] ?></h2>
	        	
			</div>
        </div>
        
        <div class="col-sm-3 col-lg-3">

      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle>Navegador</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock style="font-size:150%;"><?php echo $_SESSION['navegador'] ?></digiclock>
		      		</div>
			</div>

      <!-- SERVER UPTIME -->
			<div class="half-unit">
	      		<dtitle>Dirección IP</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><img src="images/up.png" alt=""> <bold><?php echo $_SERVER['REMOTE_ADDR'] ?></bold></p>
				</div>
			</div>

        </div>
      </div><!-- /row -->
      
      
	  

	<!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
      	<div class="col-sm-3 col-lg-3">
	  
	  <!-- BARS CHART - lineandbars.js file -->     
      		<div class="half-unit">
	      		<div class="dash-unit">
	      		<dtitle>Tamaño del Mapa</dtitle>
	      		<hr>
				<div class="info-user">
					<span aria-hidden="true" class="li_megaphone fs2"></span>
				</div>
				<br>
		 		<div id="jstwitter" class="clearfix">
					<ul id="twitter_update_list"></ul>
				</div>
				<h2><?php echo $files ?> %</h2>
				<div class="progress">
				        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="" aria-valuemax="1000" style="width:<?php echo $files ?>%;"><span class="sr-only"><?php echo $files ?>% Complete</span>
					        
				        </div>
				     </div>
				<!-- To show your tweets replace "wrapbootstrap", in the line above, with your user. 
				<div class="text">
				<p><grey> <?php //echo "Sistema operativo: ".$info["os"];echo "<br>";echo "Navegador: ".$info["browser"]; echo "<br>"; echo "Versión: ".$info["version"];?></grey></p>
				<center><p><img src="images/up-small.png" alt=""> 3:00am | <img src="images/down-small.png" alt=""> 10:00am</p></center>
				
				</div>-->
			</div>
      		</div>

	  <!-- TO DO LIST -->     
      		
      	</div>

      	<div class="col-sm-3 col-lg-3">

	  <!-- LIVE VISITORS BLOCK -->   
	  <?php include "connexionmods.php" ?>  
      		<div class="dash-unit">
	      		<dtitle>Mods <?php //echo $hi ?></dtitle>
	      		<hr>
					<div class="accordion" id="accordion2">
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre1 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre2 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre3 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre4 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre5 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre6 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre7 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre8 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="">
		                        <?php echo $nombre9 ?>
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								                
								</div>
		                    </div>
		                </div>
		
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
		                        <?php echo $nombre10 ?>
		                        </a>
		                    </div>
		                    
		                </div>
		            </div><!--/accordion -->
				</div>
      		
	  <!-- PAGE VIEWS BLOCK -->     
      		
      	</div>

      	<div class="col-sm-3 col-lg-3">
	  <!-- TOTAL SUBSCRIBERS BLOCK -->     
      		
      		
	  <!-- FOLLOWERS BLOCK -->     
      		
	      	<div class="half-unit">
	      		<dtitle>Descargar-Hurworld</dtitle>
	      		<hr>
		            <div class="cont">
		                <a href="<?php echo "../../" .$ruta ?>" role="button" class="btnnew" data-toggle="modal">Hurtworld.v2</a>
		            </div>
				</div>
			<div class="half-unit">
				<dtitle>Plataforma</dtitle>
	      		<hr>
		            <div class="cont">
		                <h3><?php echo $_SESSION['os'] ?></h3>
		            </div>
				</div>
      	</div>

	  <!-- LATEST NEWS BLOCK -->     
      	<div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Update #162</dtitle>
	      		<hr>
				<div class="info-user">
					<span aria-hidden="true" class="li_news fs2"></span>
				</div>
				<br>
      			<div class="text">
      				<p><b>21/01/2020:</b><br>* - Paredes base no después de reaparición o conexión.<br>* - Los nombres de los jugadores se intercambian/ no son visible.<br>
      				* - Apilamiento de las paredes mas cerca de lo previsto.</p>
      				<p><grey>Último Update: 1 año</grey></p>
      			</div>
      		</div>
      	</div>
      </div><!-- /row -->
      
	  <!-- FOURTH ROW OF BLOCKS -->     
	
	
	</div><!--/row -->     
      
 	  <!-- FOURTH ROW OF BLOCKS -->     
		<div class="row">

 	  <!-- ACCORDION BLOCK -->     
			
			
			<div class="col-sm-3 col-lg-3">

 	  		<!-- LAST USER BLOCK -->     
				
				
 	  		<!-- MODAL BLOCK -->     

			</div>
			<!-- Modal -->
			  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">Modal title</h4>
			        </div>
			        <div class="modal-body">
			          ...
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="button" class="btn btn-primary">Save changes</button>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
 	  		<!-- FAST CONTACT BLOCK -->     
			
			</div>

 	  		<!-- INFORMATION BLOCK -->     
			<div class="col-sm-3 col-lg-3">
				
			</div>

		</div><!--/row -->
     
      
      
	</div> <!-- /container -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="images/logo.png" alt=""></p>
      			<p>Created for: Hurtworld - Designed by: Okana - Copyright 2021</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
          
</body></html>
