



<!DOCTYPE html>
<html lang="en">
<?php include("include/head.html");?>
<!--<style>
p{
	color:black;
}
h2 {
    text-decoration: none;
}



</style>-->

<!--Header-->

<body id="page-top" style="background-color:gray;">

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
                    
					
                    
                    
					<li>
          <!--<a>Logged in as:101</a>-->
          <?php $con=mysqli_connect("mysql.jjason.net","jasonj","warthogs","studentcongress");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


                        ?>
                    </li>
					<li>
                        <a class="page-scroll" href="http://schoolcouncil.me/">Log Out</a>
                    </li>
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
                <!--<a data-toggle="modal" data-target="#post" href="#post" class="btn btn-default btn-xl wow tada">Post</a>-->
                <a target="_blank" href="https://web.telegram.org/#/im?p=@School_Council_bot" class="btn btn-default btn-xl wow tada">Create Post</a>
                <h1><h1>
                <a target="_blank" href="http://schoolcouncil.me/dope/club-page.php" class="btn btn-default btn-xl wow tada">View Posts</a>
                
            </div>
        </div>
    </header>

<a href="/dope/club-page.html">
    <div class="container" >
  
  

    <!-- Wrapper for slides -->
    

    
 <!--   <br>
    <br>
  </div>
</div>
</a>
<br>
    <br>
    <br>
    <br>
       <br>
    <br>
  </div>
</div>
<br>
    <br>
    <br>
    <br>
       <br>
    <br>
  </div>
</div>
<br>
    <br>
    <br>
    <br>-->



   



    <!-- jQuery -->
    <script src="http://schoolcouncil.me/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://schoolcouncil.me/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://schoolcouncil.me/js/jquery.easing.min.js"></script>
    <script src="http://schoolcouncil.me/js/jquery.fittext.js"></script>
    <script src="http://schoolcouncil.me/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="http://schoolcouncil.me/js/creative.js"></script>

    <!--Modal-->
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>

	<script src="http://schoolcouncil.me/js/bootstrap-modalmanager.js"></script>
	<script src="http://schoolcouncil.me/js/bootstrap-modal.js"></script>
	

</body>

</html>

