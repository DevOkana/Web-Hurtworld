<?php
header('Content-type: application/json');
$response = array();
$cuenta = array();
$email = $_POST['email'];
//$email = "okana@snet.cu";


class MyDB5 extends SQLite3{
   	function __construct(){
      $this->open("../db/Hurtworld.db3");
    }
}

//base de datos hurtworld
$db = new MyDB5();
$sql = 'SELECT * from usuarios where email="'.$email.'";';
$ret2 = $db->query($sql);
while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
	$id= $row['email'];
	$nombre = $row['nombre'];
	$pass = $row['password'];
}

if($id!=""){
	if ($ret2 == true) {
		$response['status'] = 'success';
		$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; La recuperación fue un exito, recuerde cambiar la contraseña';
		$response["nombre"] = "<b>Nombre:</b> <i>".$nombre."</i>";
		$response["password"] = '<b>Password: </b><i>'.$pass;
		$response["data"] = 'Sus credenciales será ocultadas en 1 minuto por su seguridad. <center><a href="index.php"> Inicia Sesión!</a></center>';
	} else {
	    $response['status'] = 'error'; // No pudo registrarse
		$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No se puede conectar con la base de datos';
	}
}elseif(empty($id)){
	$response['status'] = 'error';
	$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Usted no tiene ninguna cuenta con este email';
} else {
	$response['status'] = 'error';
	$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Error desconocido, Reintente más tarde.';
}





echo json_encode($response);

	
?>