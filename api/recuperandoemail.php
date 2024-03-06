<?php
// Incluimos el fichero de conexion a la base de datos
class MyDB extends SQLite3{
   	function __construct(){
      $this->open("../db/Hurtworld.db3");
    }
}

$db = new MyDB();

//$_POST['email'] = "okana@snet.cu";
$email = $_POST['email'];
$id="";
$ip = $_SERVER['REMOTE_ADDR'];
// Condicional para revisar el correo electronico
$query = 'SELECT email,ip from usuarios where email="'.$email.'";';
$ret2 = $db->query($query);
while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
	$id= $row['email'];
	$id2= $row['ip'];

}

if ($id == $_POST['email'] and $id2 == $ip) {
	echo 'true'; 
} else {
	echo 'false'; 
}
	
