<!doctype html>
<html lang="us-en">
	<head>
		<title>CEL</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />
		<link rel="stylesheet" href="css/home_ss.css" type="text/css" />
		<link rel="stylesheet" href="css/common_ss.css" type="text/css" />
		<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	</head>
	
	<body>
		<div id="jumbo">
			<div id="head2">
				<p class="clearfix" id="head1"><img id="logo" src="images/logo.gif" />	
					<span id="first">DIGITIZATION PROJECT<br/></span> 
					<span id="on"> IN<br /> </span> 
					<span id="bold">CENTRAL ELECTRONICS LIMITED</span><br />
					<span id="big_head">CEL-2016</span>
				</p>
			</div>
		</div>
		<nav>
			<a href="home.php" class="nav_btn" style="text-decoration:none;" id="home"><i class="fa fa-home" id="font-awesome"></i> Home</a>
			<span>
				<a type="button" id="divisionBtn" class="nav_btn">
	    		<i class="fa fa-sign-in" id="font-awesome"></i> Divisional Login</a>  
    		</span>
			<span>
				<a type="button" id="loginButton" class="nav_btn">
	    		<i class="fa fa-sign-in" id="font-awesome"></i> Admin Login</a>  
    		</span>
    	<a href="register.php" class="nav_btn" style="text-decoration:none;"><i class="fa fa-file" id="font-awesome"></i> Register</a>
	</nav>

	<span id="transform">
		<button id="anim">Important Notices!!</button>
	</span>
	<div id="loginModal" class="modal fade" role="dialog">
		        <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		                <h4 class="modal-title">Login </h4>
		            </div>
		            <div class="modal-body">
					 <form method="post" action="1way.php" class="form-inline">
							<div class="form-group">
								<input type="email" class="form-control input-sm" name="Id" placeholder="Id">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-sm" name="password" placeholder="Password">
							</div>
							<div class="checkbox">
								<label><input type="checkbox">Remember me</label>
							</div>
							<button type="submit" class="btn btn-primary btn-sm">Log In</button>
						</form>
					</div>
	        	</div>
        	</div>
    	</div>

    	<div id="emploginModal" class="modal fade" role="dialog">
		        <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal">&times;</button>
		                <h4 class="modal-title">Login </h4>
		            </div>
		            <div class="modal-body">
					 <form method="post" action="emp_login.php" class="form-vertical">
							<div class="form-group">
								<label class="control-label">Id:</label>
								<input type="email" class="form-control input-sm" name="Id" placeholder="Id">
							</div>
							<div class="form-group">
								<label class="control-label">Password:</label>
								<input type="password" class="form-control input-sm" name="password" placeholder="Password">
							</div>
							<div class="form-group">
								<label class="control-label">Division:</label>
								<select class="custom-select form-control input-sm" name="div">
						            <option>ECD</option>
						            <option>FAD</option>
						            <option>HRD</option>
						            <option>MED</option>
						            <option>MMD</option>
						            <option>SPD</option>
						            <option>SPV</option>
						        </select>
							</div>
							<div class="checkbox">
								<label><input type="checkbox">Remember me</label>
							</div>
							<button type="submit" class="btn btn-primary btn-sm" name="submit1">Log In</button>
						</form>
					</div>
	        	</div>
        	</div>
    	</div>

		<section class="container-fluid" id="slider">
			<div class="row">
				<div class="col-md-12">
					<div id="outline">
						<div class="container">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">				
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
									<li data-target="#myCarousel" data-slide-to="4"></li>
									<li data-target="#myCarousel" data-slide-to="5"></li>
								</ol>

								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="images/img2.jpg" alt="Students studying" width="460" height="345">
									</div>

									<div class="item">
										<img src="images/img3.jpg" alt="Students studying" width="460" height="345">
									</div>
										
									<div class="item">
										<img src="images/img4.jpg" alt="Students studying" width="460" height="345">
									</div>

									<div class="item">
										<img src="images/img1.jpg" alt="Students studying" width="460" height="345">
									</div>
									
									<div class="item">
										<img src="images/img5.jpg" alt="Students studying" width="460" height="345">
									</div>
									
									<div class="item">
										<img src="images/img6.jpg" alt="Students studying" width="460" height="345">
									</div>
									
								</div>

								<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" id="glyph_copy" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" id="glyph_copy" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="body">
			<h2 id="text_head">ABOUT CEL</h2>
			<p id="text">
				Central Electronics Limited is a Govt. of India Enterprise under Department of 
				Scientific & Industrial Research (DSIR), Ministry of Science & Technology. It was 
				established in 1974 with an objective to commercially exploit the indigenous 
				technologies developed by National Laboratories and R&D Institutions in the 
				country. CEL has developed a number of products for the first time in the country 
				through its own R&D efforts and in close association with the premier National & 
				International Laboratories including Defense Laboratories.
				
				TOTAL FILES DURING THE YEAR APRIL - 2012 TO 31 MARCH 2013 = 603 NOS
				DIVISIONO WISE BIFARCATIONS
				
				
				MED: 137 NOS TO BE SCANNED AS A PILOT PROJECT
			</p>
		</section>
		
		<footer>
			<span class="glyphicon glyphicon-copyright-mark" id="glyph_copy"></span>Copyright 2016 CEL. All Rights Reserved.
		</footer>
	</body>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script>
		$("#loginButton").click(function(){
					$("#loginModal").modal();
				});
		$("#divisionBtn").click(function(){
					$("#emploginModal").modal();

				});
	</script>
</html> 