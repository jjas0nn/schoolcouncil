<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("mysql.kefi-foundation.org","jjason","warthogs32");//database connection
mysql_select_db("form_submission");

//inserting data order
//$IP			= clean_user_input($_SERVER["REMOTE_ADDR"]);
$order = "INSERT INTO msjkefi_join
			(fname, lname, email, class, other)
			VALUES
			('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[class]','$_POST[other]')";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result){
	echo("<br>You are now an official MSJ Kefi member.  Stay tuned for updates via email, facebook, and our blog.");
} else{
	echo("<br>ERROR!");
}
?>