<!-- =======================================================
Theme Name: Steam - Hurtworld.
Author: Okana_Studios.
Designed: Okana.
Created: 06_01_2021-09_30_10.
======================================================= -->
<?php
session_start();
//llamar a las vaiables mandadas x ajax
header('Content-type: application/json');
$response = array();
$name = $_SESSION['name'];
include "config.php";
//Resiviendo información del AJAX
$oldclave = $_POST['oldpassword'];
$newclave = $_POST['newpassword'];



//La clase para crear la connexion con la sqlite
class MyDB extends SQLite3{
    function __construct(){
      $this->open("../db/TINserver.users.db3");
    }
}  
$db = new MyDB();

class MDB extends SQLite3{
    function __construct(){
      $this->open("../db/Hurtworld.db3");
    }
}  
$db2 = new MDB();

//Verificando connexión con la base de datos
if(!$db){
  $response['status'] = 'error';
}else{
	if (empty($oldclave) || empty($newclave)) {
		$response['status'] = 'error';
	}else{
		$sql ='UPDATE accounts SET "password" = "'. $newclave.'" WHERE username = "'. $name.'"';
		$sql2 ='UPDATE usuarios SET "password" = "'. $newclave.'" WHERE nombre = "'. $name.'"';

		if ($db->query($sql) == TRUE and $db2->query($sql2)== TRUE) {
			$response['status'] = 'success';
		}
	}
}
//Imprimiendo la respuesta de la condición
echo json_encode($response);

?>