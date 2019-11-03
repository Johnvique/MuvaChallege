<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Here</title>
</head>
<body>

<!-- nav-start -->

<?php
include 'nav.php';
?>
<!-- nav-end -->


<div class="container">
		<div class="row" style="margin-top: 1em">
			<div class="col-md-3">
				
			</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header text-center bg-info"><strong><h5>SIGN UP</h5></strong></div>
					<div class="card-body">
						<form method="post" action="login.php">
        <div class="input-group form-group">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-user"></i></button>
      </span>
      <input type="text" name="fname" class="form-control" id="name" placeholder="Write your Names here" required="">
        </div>

        <div class="input-group form-group">
          <!-- <label for="dob">DOB</label> -->
          <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
      </span>
      <input type="date" name="dob" class="form-control" id="dob" placeholder="insert your date of birth" required="">
        </div>
        <div class="input-group form-group">
          <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-envelope"></i></button>
      </span>
          <input type="mail" name="mail" class="form-control" id="email" placeholder="Enter Email" required="">
        </div>
        <div class="input-group form-group">
          <span class="input-group-btn">
        <button class="btn btn-default" type="button"><i class="fa fa-lock"></i></button>
      </span>
         <input type="password" name="passd" class="form-control" id="pass" placeholder="Enter Password"required=""></div>
<button type="reset" class="btn btn-danger"><samp>Reset</samp></button>
<button type="submit" class="btn btn-primary"><samp>Register</samp></button>
<br><br>
<p class="message">Already a member? <a href="login.php">Login</a></p>	
						</div>
					</div>
				</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>






<!-- footer-start -->

<?php
include 'footer.php';
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