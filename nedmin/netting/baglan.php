<?php 

try {

	$db=new PDO("mysql:host=localhost;dbname=lawyer_mume;charset=utf8",'root','bebek571');
	
}

catch (PDOExpception $e) {

	echo $e->getMessage();
}


 ?>