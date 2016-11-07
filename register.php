<!doctype html>
<html lang="us-en">
	<head>
		<title>CEL | Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8" />
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="css/register_ss.css" type="text/css" />
    <link rel="stylesheet" href="css/common.css" type="text/css" />
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
	<head>
	<body>
		<form class="form-horizontal" id="register" action="mail.php" method="post"> 
			<div class="jumbotron page-header" id="jumbo">
				<h1 id="h101">Register Here !!</h1>
			</div>
			<div id="form_body">
				<div class="form-group">
					<div class="col-md-1">
					</div>
					<div class="col-md-1">
						<label for="name" class="control-label">First Name:</label>
					</div>
					<div class="col-md-4">
						<input type="text" name="fname" class="form-control" placeholder="First Name" />
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-1">
					</div>
					<div class="col-md-1">
						<label for="name" class="control-label">Last Name:</label>
					</div>
					<div class="col-md-4">
						<input type="text" name="lname" class="form-control" placeholder="Last Name" />
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-1">
					</div>
					<div class="col-md-1">
						<label for="name" class="control-label">Email:</label>
					</div>
					<div class="col-md-4">
						<input type="text" name="email" class="form-control" placeholder="Id" />
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-1">
					</div>
					<div class="col-md-1">
						<label for="password" class="control-label">Password:</label>
					</div>
					<div class="col-md-4">
						<input type="password" name="pass" class="form-control" placeholder="Password" />
					</div>
				</div>

        <div class="form-group">
          <div class="col-md-1">
          </div>
          <div class="col-md-1">
            <label for="password" class="control-label">Division:</label>
          </div>
          <div class="col-md-4">
          <select class="custom-select form-control" name="div">
            <option>ECD</option>
            <option>FAD</option>
            <option>HRD</option>
            <option>MED</option>
            <option>MMD</option>
            <option>SPD</option>
            <option>SPV</option>
          </select>
            
          </div>
        </div>

			</div>
			<br /><br />

			<div class="form-group">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<button type="submit" class="btn btn-primary btn-lg" name="submit1" id="button">Submit</button> 
				</div>
			</div>
		</form>
	</body>
</html>

