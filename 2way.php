<!DOCTYPE html>
<html>
<head>
	<title>Level 2 Authentication</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		#container{
			margin: 150px 450px;
		}
		#red_box, #blue_box, #green_box{
			padding: 50px;
			margin-left: 20px;
		}
		#input{
			margin-top: 30px;
			width: 400px;
		}
		#submit{
			margin-top: 30px;
			margin-left: 150px;
		}
	</style>
</head>

<body>
<div class="jumbotron" style="background-color: #1a1a1a; color: white;">
<h1 style="margin-left: 20px;">Graphical Password</h1>
</div>

<div id="container">
	<button id="red_box" class="btn btn-danger"></button>
	<button id="blue_box" class="btn btn-primary"></button>
	<button id="green_box" class="btn btn-success"></button>
	<form action="admin_result.php" method="POST">
		<input type="password" class="form-control" id="input" name="graph" placeholder="Pattern Here" />
		<button class="btn btn-info btn-lg" type="submit" id="submit">Submit</button>
	</form>
</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$('#red_box').click(function(){
		$('#input').val($('#input').val()+'RED');
	});
	$('#blue_box').click(function(){
		$('#input').val($('#input').val()+'BLUE');
	});
	$('#green_box').click(function(){
		$('#input').val($('#input').val()+'GREEN');
	});
</script>
</html>