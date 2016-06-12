<!DOCTYPE html>
<html lang="en">
<!--Header-->
<?php include("include/head.html");?>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<img src="">-->
                <a class="navbar-brandi page-scroll" href="#page-top"><img width="83" height="60" src="http://schoolcouncil.me/img/logo.png"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   
                  <!--  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="page-scroll" href="#">Action</a></li>
            <li><a class="page-scroll" href="#">Another action</a></li>
            <li><a class="page-scroll" href="#">Something else here</a></li>
            
          </ul>
        </li>-->
                    
					
                    
                    
					<!--<li>
                        <a class="page-scroll" href="#contribute">Contribute</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 style="font-size:300%;">School Council</h1>
                <br>
                <!--<h2>The Online Student Council</h2>-->
                <!--<a data-toggle="modal" data-target="#post" href="#post" class="btn btn-default btn-xl wow tada">Post</a>-->
                <a data-toggle="modal" data-target="#login" href="#login" class="btn btn-default btn-xl wow tada">Login</a>
                
            </div>
        </div>
    </header>





    <div class="modal fade" id="login">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					 <div class="modal-header">
					 	<button type="button" class="close" data-dismiss="modal">&times;</button>
					 	<h3 class="modal-title">Login</h3>
					 </div>
					 <div class="modal-body">
					 	 <form role="form" id="post" action="http://schoolcouncil.me/include/form/login_id.php" method="post" enctype="multipart/form-data">
						  <div class="form-group" >
						    <label for="text">Student ID</label>
						    <input name="student" type="number" class="form-control" id="number" required>
						  </div>
						  
						  
						  
						  


						  
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
						
 			 		
					 	
					 </div>

					 <div class="modal-footer">
					 	<a href="" class="btn btn-default" data-dismiss="modal">Close</a>
					 	
					 </div>
				</div>
			</div>
		</div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

    <!--Modal-->
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

	<script src="js/bootstrap-modalmanager.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	

</body>

</html>
