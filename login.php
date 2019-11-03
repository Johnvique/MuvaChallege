<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
</head>
<body>

<!-- nav-start -->

<?php
include 'nav.php';
?>
<!-- nav-end -->



<div class="container" style="margin-top: 1em">
	<div class="">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header text center text-primary bg-default flex-center">
				<h3><strong><i>SIGN IN</i></strong></h3></div>
				<div class="card-body">
							<form method="post" action="index.php">
								<div class="form-group">
									<label for="user" ><button ><i class="fa fa-user-o"></i></button></label>
									<input type="text" class="form-control" name="uname" id="user" placeholder="...Username" required="">
								</div>
								<div class="form-group">
									<label for="pass" ><button ><i class="fa fa-lock"></i></button></label>
									<input type="password" class="form-control" name="pword" id="pass" placeholder="...Password" required="">
								</div>
								<button type="submit" class="btn btn-primary">Login</button>
								<br>
								<p class="message">You don't have an account? <a href="signup.php">Sign Up</a></p>

								
							</form>
				</div>	
			</div>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>





<!-- footer-start -->

<?php
include 'footer1.php';
?>

<!-- footer-end -->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
<script src="js/style.js"></script>
<script type="text/javascript">
</script>  
</body>
</html>