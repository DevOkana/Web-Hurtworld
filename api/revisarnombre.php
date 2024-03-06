<?php
// Incluimos el fichero de conexion a la base de datos
class MyDB extends SQLite3{
   	function __construct(){
      $this->open("../db/Hurtworld.db3");
    }
}

$db = new MyDB();

class MyDB2 extends SQLite3{
   	function __construct(){
      $this->open("../db/TINserver.users.db3");
    }
}

$db2 = new MyDB2();


$name = $_POST['name'];
$name2 = $_POST['name'];
//$name = "okana";
//$name2 = "okana";
$id="";
$id2="";
// Condicional para revisar el correo electronico
$query = 'SELECT nombre from usuarios where nombre="'.$name.'";';
$ret2 = $db->query($query);
while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
	$id= $row['nombre'];

}
$query2 = 'SELECT username from accounts where username="'.$name2.'";';
$ret = $db2->query($query2);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
	$id2= $row['username'];

}

if ($id == $name || $id2 == $name2) {
	echo 'false'; 
} else {
	echo 'true'; 
}
	
