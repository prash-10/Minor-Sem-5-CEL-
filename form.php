<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<style>
    #loginButton
    {
        margin-left: 570px;
        text-decoration: none;
        margin-top: 320px;
    }
</style>
</head>
<body>

<button id="loginButton" class="btn btn-info">
    <span class="glyphicon glyphicon-log-in"></span> Admin Login</button>  

<div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
            </div>
            <div class="modal-body">
			 <form method="post" action="admin_result.php" class="form-inline">
					<div class="form-group">
						<input type="email" class="form-control input-sm" name="Id" placeholder="Id">
					</div>
					<div class="form-group">
						<input type="password" class="form-control input-sm" name="password" placeholder="Password">
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Remember me</label>
					</div>
					<button type="submit" class="btn btn-info btn-sm">Log In</button>
				</form>
			</div>
        </div>
        </div>
    </div>

</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script>
$("#loginButton").click(function(){
			$("#loginModal").modal();
		});
</script>
</html>
