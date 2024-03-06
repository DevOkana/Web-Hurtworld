<?php  
class My extends SQLite3
  {
    function __construct()
    {
      $this->open("../../../db/Hurtworld.db3");
    }
  }
$db12 = new My();
$id12="";

$email1 = 'SELECT email FROM usuarios where nombre="'.$_SESSION['name'].'";';
$ret = $db12->query($email1);
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
	$id12= $row['email'];
}
if($id12!=""){
  $email = $id12;
}else{
  $email = $id12;
}

?>