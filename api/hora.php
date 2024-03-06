<!-- =======================================================
Theme Name: Steam - Hurtworld.
Author: Okana_Studios.
Designed: Okana.
Created: 06_01_2021-09_30_10.
======================================================= -->
<?php
//Llamando a la constante
$file=filesize("F:/Fotos/2020_09_29_07_35_IMG_0874.JPG");
//Definiendo la hora(HORAS_MINUTOS)
$hora = date("H:m");

//Condición para saludar y activar las descargas
if ($hora >= "03:00" and $hora <= "10:00" ) {
  $ruta = "../descargar/hurtworld.v2.rar";
  $rutasteam = "../../../descargar/steam.rar";
  $saludar1= "Las descargas de la página estan activadas.";
}else{
  $ruta = "../error/index.php";
  $rutasteam = "../../../error/index.php";
  $saludar1 = "Las descargas de la página esta desactivadas.";
}
//Habilitando la fotos para cambiar según el horario
if ($hora >="18:00" and $hora <= "23:59") {
	$ico="4950 - Hot Tea.png";
}elseif ($hora >= "00:00" and $hora <"06:59") {
  $ico="4950 - Hot Tea.png";
}elseif ($hora >= "07:00" and $hora <"17:59") {
	$ico= "4920 - Sunny.png";
}
//Convirtiendo de kilobytes a megas
$mega= $file / 1024;
$todo= 1000;
$porciento = $mega / $todo * 100;
$files=round($porciento);

//Saludadndo segñun la hora
if ($hora >="12:00" and $hora <= "18:00") {
	$saludar = "Buenas Tardes ";
}elseif ($hora >= "18:00" and $hora = "00:00") {
  $saludar = "Buenas noche ";
}elseif ($hora >= "00:00" and $hora < "11:59") {
  $saludar = "Buenas días ";
}

?>