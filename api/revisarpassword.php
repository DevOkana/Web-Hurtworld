<?php
session_start();

class MyDB extends SQLite3
  {
    function __construct()
    {
      $this->open("../db/TINserver.users.db3");
    }
  }
$db = new MyDB();

//if (isset($_REQUEST['oldpassword']) && !empty($_REQUEST['oldpassword']) ) {
	//$password = trim($_REQUEST['oldpassword']);
	//$password = strip_tags($password);

	$sql = 'SELECT password from accounts where username="'.$_SESSION["name"].'";';
	$ret2 = $db->query($sql);
	while ($row = $ret2->fetchArray(SQLITE3_ASSOC)) {
		$id= $row['password'];
	}
	if($id == $_POST['oldpassword']){
		echo "true";

	}else{
		echo "false";
	}
	//}

?>