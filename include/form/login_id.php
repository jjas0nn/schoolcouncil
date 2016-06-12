<?php
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("mysql.jjason.net","jasonj","warthogs");//database connection
mysql_select_db("studentcongress");

//inserting data order
//$IP			= clean_user_input($_SERVER["REMOTE_ADDR"]);
$id = $_POST['student'];//get data from input

$order = 'SELECT * FROM `iden` where `student` ='.$id;

//declare in the order variable
$result = mysql_query($order);	//order executes

$fResult = mysql_fetch_row ( $result );

//var_dump($fResult);

if ($fResult!=false){
	header('Location: http://www.schoolcouncil.me/login/user.php');
}else{
	echo '<p style="font-size:250">Invalid ID</p>';


	
}

?>
<html>



</html>
