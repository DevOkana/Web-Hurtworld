<?php
header('Content-type: application/json');
$response = array();
$name = $_POST['name'];
$email = $_POST['email'];
$ip = $_REQUEST['ip'];
$pass = $_POST['cpassword'];
$banned = "0";


class MyDB extends SQLite3{
   	function __construct(){
      $this->open("../db/Hurtworld.db3");
    }
}

class MyDB2 extends SQLite3{
   	function __construct(){
      $this->open("../db/TINserver.users.db3");
    }
}

//base de datos hurtworld
$db = new MyDB();
$sql = 'SELECT ip from usuarios where ip="'.$ip.'";';
$ret2 = $db->query($sql);
while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
	$id= $row['ip'] !== null? $row['ip']: false;
}
$db2 = new MyDB2();
if (empty($id)) {
	if ($_POST) {
	$steam = 'INSERT INTO "accounts"("username", "password", "banned") VALUES ("'. $name .'", "' . $pass . '", "' . $banned. '")';
	$stmt2 = $db2->query($steam);

	$query = 'INSERT INTO "usuarios"("nombre", "email", "ip", "password") VALUES ("'. $name .'", "' . $email . '", "' . $ip. '", "' . $pass . '" )';
	$stmt = $db->query($query);
	
	if ($stmt == true) {
		$response['status'] = 'success';
		$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Usted se ha registrado con éxito, puede iniciar sesión ahora';
	} else {
	    $response['status'] = 'error'; // No pudo registrarse
		$response['message'] = '<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No se pudo registrar, intente de nuevo más tarde';
	}
	}
} elseif ($id!="") {
	$response['status'] = 'error';
	$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Usted ya tiene una cuenta, su ip ya esta registrado';
} else {
	$response['status'] = 'error';
	$response['message'] = '<span class="glyphicon glyphicon-ok"></span> &nbsp; Error desconocido, Reintente más tarde.';
}





echo json_encode($response);
	
?>