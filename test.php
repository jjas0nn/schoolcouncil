<?php
	$name=$_GET['name'];
	header('Content-type: application/json');
	echo json_encode($name);

?>