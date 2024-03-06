<!-- =======================================================
Theme Name: Steam - Hurtworld.
Author: Okana_Studios.
Designed: Okana.
Created: 06_01_2021-09_30_10.
======================================================= -->

<?php

//Conexxión con la base de datos del Steam
if(isset($_SESSION["name"])){
  class MyDB extends SQLite3
  {
    function __construct()
    {
      $this->open("../../../db/TINserver.users.db3");
    }
  }
//craendo la connexion
$db = new MyDB();
if(!$db){
  echo $db->lastErrorMsg();
}else{
  "Database is Ok".'<br>';
}
//selecionando la cantidad de user registrados
$sql2= 'SELECT count(username) from accounts';
$ret2 = $db->query($sql2);
while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
$_SESSION['id'] = $row['count(username)'];
}
}

/**
incluyendo la consulta
**/

//Conectando con la base de datos data
class MyDB2 extends SQLite3
  {
    function __construct()
    {
      $this->open("../../../db/TINserver.cmserver.db3");
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

/**
Buscando el steam id de cada user
*/
$id5="";
if (!empty($_SESSION['name'])) {
  $sql3= 'SELECT player_id from player where nickname="'.$_SESSION["name"].'"';
  $ret3 = $db2->query($sql3);
  while ($row = $ret3->fetchArray(SQLITE3_ASSOC)) {
    $id5 = $row['player_id'];
}
if($id5 !=""){
  $_SESSION['steamid'] = $id5;
}else{
  $_SESSION['steamid'] = "ID No disponible";
}
}

$id6="";
if (!empty($_SESSION['name'])) {
  $sql6= 'SELECT created_at from profile where steam_id="'.$_SESSION['steamid'].'"';
  $ret6 = $db2->query($sql6);
  while ($row = $ret6->fetchArray(SQLITE3_ASSOC)) {
    $id6 = $row['created_at'];
}

if($id6 !=""){
  $fecha = date("d-m-Y", $id6);
  $hora = date("H:i:s", $id6);
  $_SESSION['creada'] = $fecha;
  $_SESSION['hora'] = $hora;
}else{
  $_SESSION['creada'] = "-";
    $_SESSION['hora'] = "-";
}
}

$id7="";
if (!empty($_SESSION['name'])) {
  $sql7= 'SELECT * from play_times where player_id="'.$_SESSION['steamid'].'"';
  $ret7 = $db2->query($sql7);
  while ($row = $ret7->fetchArray(SQLITE3_ASSOC)) {
    $id7 = $row['last_start'];
}
if($id7 !=""){
  $fecha2 = date("d-m-Y", $id7);
  $hora2 = date("H:i:s", $id7);
  $_SESSION['lastfecha'] = $fecha2;
  $_SESSION['lasthora'] = $hora2;
}else{
  $_SESSION['lastfecha'] = "-";
    $_SESSION['lasthora'] = "-";
}
}








/**
 * Función para detectar el sistema operativo, navegador y versión del mismo
 */
$info=detect();

 
/**
 * Funcion que devuelve un array con los valores:
 *    os => sistema operativo
 *    browser => navegador
 *    version => version del navegador
 */

function detect()
{
    $browser=array("IE","OPERA","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME");
    $os=array("WIN","MAC","LINUX");
 
    # definimos unos valores por defecto para el navegador y el sistema operativo
    $info['browser'] = "OTHER";
    $info['os'] = "OTHER";
 
    # buscamos el navegador con su sistema operativo
    foreach($browser as $parent)
    {
        $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
        $f = $s + strlen($parent);
        $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
        $version = preg_replace('/[^0-9,.]/','',$version);
        if ($s)
        {
            $info['browser'] = $parent;
            $info['version'] = $version;
        }
    }
    $_SESSION['navegador'] = $info['browser'];
    # obtenemos el sistema operativo
    foreach($os as $val)
    {
        if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
            $info['os'] = $val;
    }
    $_SESSION['os'] = $info['os'];
 
    # devolvemos el array de valores
    return $info;






   






}


?>