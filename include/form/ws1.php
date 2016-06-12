<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("mysql.kefi-foundation.org","jjason","warthogs32");//database connection
mysql_select_db("form_submission");

//inserting data order
//$IP			= clean_user_input($_SERVER["REMOTE_ADDR"]);
$order = "INSERT INTO ws1
			(fname, lname, email, other)
			VALUES
			('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[other]')";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result){
	echo("<br>Thanks for your submission.  See you Wednesday.");
} else{
	echo("<br>ERROR!");
}
?>