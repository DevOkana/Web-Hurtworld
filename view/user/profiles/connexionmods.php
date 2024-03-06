<!-- =======================================================
Theme Name: Steam - Hurtworld.
Author: Okana_Studios.
Designed: Okana.
Created: 06_01_2021-09_30_10.
======================================================= -->
<?php

//Ubicación de cada mods 
$mod1="descargas/1276198688.win64.rar";
$mod2="descargas/1276930902.win64.rar";
$mod3="descargas/1278569249.win64.rar";
$mod4="descargas/1318123401.win64.rar";
$mod5="descargas/1329816079.win64.rar";
$mod6="descargas/1345956015.win64.rar";
$mod7="descargas/1359475680.win64.rar";
$mod8="descargas/1386192907.win64.rar";
$mod9="descargas/1440908342.win64.rar";
$mod10="descargas/1442711448.win64.rar";
$mod11="descargas/1507100141.win64.rar";
$mod12="descargas/1622022270.win64.rar";
$mod13="descargas/1644749749.win64.rar";
$mod14="descargas/1662769464.win64.rar";
$mod15="descargas/1662789873.win64.rar";
$mod16="descargas/1675018044.win64.rar";
$mod17="descargas/1686150536.win64.rar";
$mod18="descargas/1707893532.win64.rar";
$mod19="descargas/1725880138.win64.rar";
$mod20="descargas/1738772053.win64.rar";
$mod21="descargas/1802491764.win64.rar";
$mod22="descargas/1834256023.win64.rar";
$mod23="descargas/1855694146.win64.rar";
$mod24="descargas/1858828079.win64.rar";
$mod25="descargas/1883491194.win64.rar";
$mod26="descargas/2015422570.win64.rar";
$mod27="descargas/2200505698.win64.rar";
$mod28="descargas/2200505698.win64.rar";
$mod29="descargas/2206789896.win64.rar";
$mod30="descargas/2206789896.win64.rar";

//Verificando si existe los mods anteriores
$existemod1 = is_file($mod1);
$existemod2 = file_exists($mod2);
$existemod3 = file_exists($mod3);
$existemod4 = file_exists($mod4);
$existemod4 = file_exists($mod4);
$existemod5 = file_exists($mod5);
$existemod6 = file_exists($mod6);
$existemod7 = file_exists($mod7);
$existemod8 = file_exists($mod8);
$existemod9 = file_exists($mod9);
$existemod10 = file_exists($mod10);
$existemod11 = file_exists($mod11);
$existemod12 = file_exists($mod12);
$existemod13 = file_exists($mod13);
$existemod14 = file_exists($mod14);
$existemod15 = file_exists($mod15);
$existemod16 = file_exists($mod16);
$existemod17 = file_exists($mod17);
$existemod18 = file_exists($mod18);
$existemod19 = file_exists($mod19);
$existemod20 = file_exists($mod20);
$existemod21 = file_exists($mod21);
$existemod22 = file_exists($mod22);
$existemod23 = file_exists($mod23);
$existemod24 = file_exists($mod24);
$existemod25 = file_exists($mod25);
$existemod26 = file_exists($mod26);
$existemod27 = file_exists($mod27);
$existemod28 = file_exists($mod28);
$existemod29 = file_exists($mod29);
$existemod30 = file_exists($mod30);
//echo $mod10;
//echo $existemod10;


/*
CONDICIONES PARA LOS MODS
*/
if ($existemod1 == 1) {
	$estado1 = "Activo";
	
	$tamaño1= round(filesize($mod1)/1024/1024);
	$nombre1= pathinfo($mod1, PATHINFO_FILENAME);
	
}else{
	$estado1 = "Desactivado";
	$tamaño1= "NULL";
	$nombre1= "NULL";
}

if ($existemod2 == 1) {
	$estado2 = "Activo";
	$tamaño2= round(filesize($mod2)/1024/1024);
	$nombre2= pathinfo($mod2, PATHINFO_FILENAME);
}else{
	$estado2 = "Desactivado";
	$tamaño2= "NULL";
	$nombre2= "NULL";
}

if ($existemod3 == 1) {
	$estado3 = "Activo";
	$tamaño3= round(filesize($mod3)/1024/1024);
	$nombre3= pathinfo($mod3, PATHINFO_FILENAME);
}else{
	$estado3 = "Desactivado";
	$tamaño3= "NULL";
	$nombre3= "NULL";
}

if ($existemod4 == 1) {
	$estado4 = "Activo";
	$tamaño4= round(filesize($mod4)/1024/1024);
	$nombre4= pathinfo($mod4, PATHINFO_FILENAME);
}else{
	$estado4 = "Desactivado";
	$tamaño4= "NULL";
	$nombre4= "NULL";
}

if ($existemod5 == 1) {
	$estado5 = "Activo";
	$tamaño5= round(filesize($mod5)/1024/1024);
	$nombre5= pathinfo($mod5, PATHINFO_FILENAME);
}else{
	$estado5 = "Desactivado";
	$tamaño5= "NULL";
	$nombre5= "NULL";

}

if ($existemod6 == 1) {
	$estado6 = "Activo";
	$tamaño6= round(filesize($mod6)/1024/1024);
	$nombre6= pathinfo($mod6, PATHINFO_FILENAME);
}else{
	$estado6 = "Desactivado";
	$tamaño6= "NULL";
	$nombre6= "NULL";
}

if ($existemod7 == 1) {
	$estado7 = "Activo";
	$tamaño7= round(filesize($mod7)/1024/1024);
	$nombre7= pathinfo($mod7, PATHINFO_FILENAME);
}else{
	$estado7 = "Desactivado";
	$tamaño7= "NULL";
	$nombre7= "NULL";
}

if ($existemod8 == 1) {
	$estado8 = "Activo";
	$tamaño8= round(filesize($mod8)/1024/1024);
	$nombre8= pathinfo($mod8, PATHINFO_FILENAME);
}else{
	$estado8 = "Desactivado";
	$tamaño8= "NULL";
	$nombre8= "NULL";
}

if ($existemod9 == 1) {
	$estado9 = "Activo";
	$tamaño9= round(filesize($mod9)/1024/1024);
	$nombre9= pathinfo($mod9, PATHINFO_FILENAME);
}else{
	$estado9 = "Desactivado";
	$tamaño9= "NULL";
	$nombre9= "NULL";
}


if ($existemod10 == 1) {
	$estado10 = "Activo";
	$tamaño10= round(filesize($mod10)/1024/1024);
	$nombre10= pathinfo($mod10, PATHINFO_FILENAME);
}else{
	$estado10 = "Desactivado";
	$tamaño10= "NULL";
	$nombre10= "NULL";
}

if ($existemod11 == 1) {
	$estado11 = "Activo";
	$tamaño11= round(filesize($mod11)/1024/1024);
	$nombre11= pathinfo($mod11, PATHINFO_FILENAME);
}else{
	$estado11 = "Desactivado";
	$tamaño11= "NULL";
	$nombre11= "NULL";
}

if ($existemod12 == 1) {
	$estado12 = "Activo";
	$tamaño12= round(filesize($mod12)/1024/1024);
	$nombre12= pathinfo($mod12, PATHINFO_FILENAME);
}else{
	$estado12 = "Desactivado";
	$tamaño12= "NULL";
	$nombre12= "NULL";
}

if ($existemod13 == 1) {
	$estado13 = "Activo";
	$tamaño13= round(filesize($mod13)/1024/1024);
	$nombre13= pathinfo($mod13, PATHINFO_FILENAME);
}else{
	$estado13 = "Desactivado";
	$tamaño13= "NULL";
	$nombre13= "NULL";
}

if ($existemod14 == 1) {
	$estado14 = "Activo";
	$tamaño14= round(filesize($mod14)/1024/1024);
	$nombre14= pathinfo($mod14, PATHINFO_FILENAME);
}else{
	$estado14 = "Desactivado";
	$tamaño14= "NULL";
	$nombre14= "NULL";
}

if ($existemod15 == 1) {
	$estado15 = "Activo";
	$tamaño15= round(filesize($mod15)/1024/1024);
	$nombre15= pathinfo($mod15, PATHINFO_FILENAME);
}else{
	$estado15 = "Desactivado";
	$tamaño15= "NULL";
	$nombre15= "NULL";
}

if ($existemod16 == 1) {
	$estado16 = "Activo";
	$tamaño16= round(filesize($mod16)/1024/1024);
	$nombre16= pathinfo($mod16, PATHINFO_FILENAME);
}else{
	$estado16 = "Desactivado";
	$tamaño16= "NULL";
	$nombre16= "NULL";
}

if ($existemod17 == 1) {
	$estado17 = "Activo";
	$tamaño17= round(filesize($mod17)/1024/1024);
	$nombre17= pathinfo($mod17, PATHINFO_FILENAME);
}else{
	$estado17 = "Desactivado";
	$tamaño17= "NULL";
	$nombre17= "NULL";
}

if ($existemod18 == 1) {
	$estado18 = "Activo";
	$tamaño18= round(filesize($mod18)/1024/1024);
	$nombre18= pathinfo($mod18, PATHINFO_FILENAME);
}else{
	$estado18 = "Desactivado";
	$tamaño18= "NULL";
	$nombre18= "NULL";
}

if ($existemod19 == 1) {
	$estado19 = "Activo";
	$tamaño19= round(filesize($mod19)/1024/1024);
	$nombre19= pathinfo($mod19, PATHINFO_FILENAME);
}else{
	$estado19 = "Desactivado";
	$tamaño19= "NULL";
	$nombre19= "NULL";
}

if ($existemod20 == 1) {
	$estado20 = "Activo";
	$tamaño20= round(filesize($mod20)/1024/1024);
	$nombre20= pathinfo($mod20, PATHINFO_FILENAME);
}else{
	$estado20 = "Desactivado";
	$tamaño20= "NULL";
	$nombre20= "NULL";
}

if ($existemod21 == 1) {
	$estado21 = "Activo";
	$tamaño21= round(filesize($mod21)/1024/1024);
	$nombre21= pathinfo($mod21, PATHINFO_FILENAME);
}else{
	$estado21 = "Desactivado";
	$tamaño21= "NULL";
	$nombre21= "NULL";
}

if ($existemod22 == 1) {
	$estado22 = "Activo";
	$tamaño22= round(filesize($mod22)/1024/1024);
	$nombre22= pathinfo($mod22, PATHINFO_FILENAME);
}else{
	$estado22 = "Desactivado";
	$tamaño22= "NULL";
	$nombre22= "NULL";
}

if ($existemod23 == 1) {
	$estado23 = "Activo";
	$tamaño23= round(filesize($mod23)/1024/1024);
	$nombre23= pathinfo($mod23, PATHINFO_FILENAME);
}else{
	$estado23 = "Desactivado";
	$tamaño23= "NULL";
	$nombre23= "NULL";
}

if ($existemod24 == 1) {
	$estado24 = "Activo";
	$tamaño24= round(filesize($mod24)/1024/1024);
	$nombre24= pathinfo($mod24, PATHINFO_FILENAME);
}else{
	$estado24 = "Desactivado";
	$tamaño24= "NULL";
	$nombre24= "NULL";
}

if ($existemod25 == 1) {
	$estado25 = "Activo";
	$tamaño25= round(filesize($mod25)/1024/1024);
	$nombre25= pathinfo($mod25, PATHINFO_FILENAME);
}else{
	$estado25 = "Desactivado";
	$tamaño25= "NULL";
	$nombre25= "NULL";
}

if ($existemod26 == 1) {
	$estado26 = "Activo";
	$nombre26= pathinfo($mod26, PATHINFO_FILENAME);
	$tamaño26= round(filesize($mod26)/1024/1024);
}else{
	$estado26 = "Desactivado";
	$tamaño26= "NULL";
	$nombre26= "NULL";
}
if ($existemod27 == 1) {
	$estado27 = "Activo";
	$tamaño27= round(filesize($mod27)/1024/1024);
	$nombre27= pathinfo($mod27, PATHINFO_FILENAME);
}else{
	$estado27 = "Desactivado";
	$tamaño27= "NULL";
	$nombre27= "NULL";
}

if ($existemod29 == 1) {
	$estado29 = "Activo";
	$tamaño29= round(filesize($mod29)/1024/1024);
	$nombre29= pathinfo($mod29, PATHINFO_FILENAME);
}else{
	$estado29 = "Desactivado";
	$tamaño29= "NULL";
	$nombre29= "NULL";
}

if ($existemod30 == 1) {
	$estado30 = "Activo";
	$tamaño30= round(filesize($mod30)/1024/1024);
	$nombre30= pathinfo($mod30, PATHINFO_FILENAME);
}else{
	$estado30 = "Desactivado";
	$tamaño30= "NULL";
	$nombre30= "NULL";
}
if ($existemod28 == 1) {
	$estado28 = "Activo";
	$tamaño28= round(filesize($mod28)/1024/1024);
	$nombre28= pathinfo($mod28, PATHINFO_FILENAME);
}else{
	$estado28 = "Desactivado";
	$tamaño28= "NULL";
	$nombre28= "NULL";
}


//echo $existemod2."<br>";
//echo $estado2."<br>";
//echo $tamaño2."<br>";
//echo $nombre2."<br>";

?>