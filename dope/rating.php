<html>
	<head>

	<?php
	$con=mysqli_connect("mysql.jjason.net","jasonj","warthogs","studentcongress");
		// Check connection
		if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

		$result = mysqli_query($con,"SELECT * FROM incoming");
		$row = mysqli_fetch_array($result);
	?>
	  <script src="jquery-2.2.2.min.js"></script>	
	  <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

	  <!-- Compiled and minified JavaScript -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>	
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
  <div class="ui inverted menu" style="opacity:0.8">
	  <div class="header item">
	   	<a href="/login/user.php"><img src="logo.png"></a>
	  </div>
	  

 </div>

  <!-- ksegment -->
 <table style="margin-top:20px;">
 	<tr>
 		<td style="margin-left:5px;vertical-align: text-top;" >
			<div class="ui vertical menu" style="width:98%;">
			 	 <div class="item">
			 	 	<table>
			 	 		<tr>
			 	 			<td style="width:50px;"> 
				    		<img class="ui avatar image" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRIUatH5g05dqO8E-iePfpPiWsR5ruXntp6O03ilp-V2H3EIgnUfQ">
				   		 	</td>
				   		 	<td style="vertical-align: text-top; ">
				   		 		<strong >Name</strong>
				   		 		<br>
				   		 		<p >bio....</p>
				   		 	</td>
				   		 </tr>
				 	</table>
				  </div>
			    <div class="item">
  					  <div class="ui input"><input type="text" placeholder="Search..."></div>
  				</div>
			  <div class="item">
			    <div class="header">Ideas</div>
			    <div class="menu">
			      <a class="item">Approved</a>
			      <a class="item">Disapproced</a>
			    </div>
			  </div>
			  <div class="item">
			    <div class="header">Academic</div>
			    <div class="menu">
			      <a class="item">Subject</a>
			      <a class="item">course</a>
			    </div>
			  </div>
	
			  <div class="item">
			    Extra curriculum
			    <div class="menu">
			      <a class="active item">Sport</a>
			      <a class="item">Clubs</a>
			    </div>
			  </div>
			  <a class="item">
			   	<button class="ui red fluid button">Create</button>
			  </a>
			  <div class="ui vertical menu">
			 
		
			</div>
		<td>

	<td style="width:75%;margin-right:5px;">
		  <div class="ui segment">
		  	<table>
		  		<tr>
		  			<th style="width:100px;">
					  <div class="ui small image" style="width:110px;">
					  	<img src="/include/form/uploads/1.png">
					  </div>
					 </th>
				  	<th style="width:800px;style="margin-left:10px;"">
				  		<table >
				  			<tr>
				  				<?php echo"<h1>". $row['title'] . "</h1>"; ?>
				  			</tr>
				  			<tr >
								  <div class="ui small buttons">
					                <button class="ui green button">Support</button>
					              <div class="or"></div>
					              	<button class="ui red button">Oppose</button>
					              </div>
				  			</tr>
				  		</table>
				 	</th>
				 	<th>
				 		<table>	
				  			<tr >
				  				<td style="vertical-align: text-top;">
				  					<?php echo"<p style='font-size:15px;color:gray;'>". $row['time'] . "</p>"; ?>
				  				</td>
				  			</tr>
				  		</table>
				 	</th>
				 <tr>
			 </table>
		  <div class="ui divider pink" ></div>

			<div class="ui accordion">
			  <div class="title">
			    <i class="dropdown icon"></i>
			    Description
			  </div>
			  <div class="content active">
			    <?php echo"<p>". $row['description'] . "</p>"; ?>
			  </div>
			</div>

				<div class="ui celled animated list">
					<a class="ui blue ribbon label">Comment</a>
				
			  	</div>
			  <form class="ui reply form" style="margin-top:10px;"> 
			        <div class="field">
			          <textarea placeholder="input your comment"></textarea>
			        </div>
			        <div class="ui primary submit labeled icon button" >
			          <i class="icon edit"></i> Add Reply
			        </div>
			  </form>
			</div>
		</td>
	</tr>
</table>



	<body>
	</body>
</html>