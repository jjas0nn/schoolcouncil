<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("mysql.jjason.net","jasonj","warthogs");//database connection
mysql_select_db("studentcongress");

//inserting data order
//$IP			= clean_user_input($_SERVER["REMOTE_ADDR"]);
$order = "INSERT INTO comment
			(comment)
			VALUES
			('$_POST[comment]')";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result){
	header('Location: http://www.schoolcouncil.me/dope/club-page.php');
} else{
	echo("<br>ERROR!");
}
?>