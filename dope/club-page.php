<html><head>
<title>New CompSci Club</title>
	  <script src="jquery-2.2.2.min.js"></script>	
	  <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

	  <!-- Compiled and minified JavaScript -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css">	
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.ui.accordion')
			  .accordion()
			;
			$('.ui.rating')
			  .rating()
			;
		});
	</script>

	</head>

	<!-- knav -->
  <body><div class="ui inverted menu" style="opacity:0.8">
	  <div class="header item">
	    <img height="60" width="83" src="http://schoolcouncil.me/img/logo.png">
	  </div>
	  

 </div>

  <!-- ksegment -->
 <table style="margin-top:20px;">
 	<tbody><tr>
 		<td style="width:75%;margin-right:5px;">
		    
			<table>
				<tbody>
				<tr>
					<td style="width:29%;vertical-align: text-top;">
						<div class="ui segment">
							<h1 align="center">New CompSci Club</h1>
							<p>Because our school does not offer computer science as a course, we have decided to start a computer science club to teach peers. We are having our first meeting in room 1020.</p>
						</div>

<br>
					</td>
				</tr>
				<tr><td><?php
$servername = "mysql.jjason.net";
$username = "jasonj";
$password = "warthogs";
$dbname = "studentcongress";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT comment FROM comment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["comment"]. "<br>";
        echo"<hr>";
    }
} else {
    echo "No comments";
}
$conn->close();
?></td></tr>

				<tr>
					<td style="width:70%;margin-right:2%;">						
						
			 				
							  
				  		 <form name="comment" role="form" id="comment" action="http://schoolcouncil.me/include/form/comment.php" method="post" class="ui reply form" style="margin-top:10px;"> 
						        <div class="field">
						          <textarea form="comment" name="comment">Input your comment</textarea>
						        </div>
						        
						         <!--<button type="submit">Add Reply</button>-->
						         <input class="ui primary submit labeled icon button" type="submit">
						        
						  </form>



						</div>
					</div>
					</td>
					
					
				</tr>
			</tbody></table>
		</td>
	</tr>
</tbody></table>




	
	
<div class="hiddendiv common"></div></body></html>