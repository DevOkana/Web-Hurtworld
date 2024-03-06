<?php
// Incluimos el fichero de conexion a la base de datos
class MyDB extends SQLite3{
   	function __construct(){
      $this->open("../db/Hurtworld.db3");
    }
}

$db = new MyDB();


$email = $_POST['email'];
$id="";
// Condicional para revisar el correo electronico
$query = 'SELECT email from usuarios where email="'.$email.'";';
$ret2 = $db->query($query);
while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
	$id= $row['email'];

}

if ($id == $_POST['email']) {
	echo 'false'; 
} else {
	echo 'true'; 
}
	
