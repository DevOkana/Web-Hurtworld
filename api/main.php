<?php
session_start(); 

include "config.php";
//$user = $_POST['user_php'];
//$clave = $_POST['clave_php'];
$user = $_POST['user_php'];
$clave = $_POST['clave_php'];

class MyDB extends SQLite3
  {
    function __construct()
    {
      $this->open("../".steam);
    }
  }

$db = new MyDB();
if (empty($user)||empty($clave)) {
	echo "error_1";
} else {
	# code...



$sql = 'SELECT * from accounts where username="'.$user.'" and password="'.$clave.'"  ;';
$ret = $db->query($sql);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
  $id= $row['username'] !== null? $row['password']: false;
$name = $row['username'];
}
//selecionando la cantidad de user registrados
$sql2= 'SELECT count(username) from accounts';
$ret2 = $db->query($sql2);
while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
$_SESSION['id'] = $row['count(username)'];
}

if(empty($id)){
  echo "error_3";
}elseif ($id!="") {
	$_SESSION['name'] = $name;

	echo "view/user/";
  $email= $user. "@snet.cu";
$ip= $_SERVER['REMOTE_ADDR'];

class MyDB3 extends SQLite3{
    function __construct(){
      $this->open("../db/Hurtworld.db3");
    }
}

$db2 = new MyDB3();

$sql = 'SELECT ip from usuarios where ip="'.$ip.'";';
$stmt2 = $db2->query($sql);
while ($row = $stmt2->fetchArray(SQLITE3_ASSOC)) {
  $id2= $row['ip'] !== null? $row['ip']: false;
}

if (empty($id2)) {
  $query = 'INSERT INTO "usuarios"("nombre", "email", "ip", "password") VALUES ("'. $user .'", "' . $email . '", "' . $ip. '", "' . $clave . '" )';
  $stmt = $db2->query($query);
} elseif ($id2!="") {

}
}else{
	echo "error_2";
}
}


?>