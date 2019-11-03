<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Baker</title>
</head>
<body>

<!-- nav-start -->

<?php
include 'nav.php';
?>
<!-- nav-end -->


<!-- caurosel slide start -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/picB.jpg" class="img-thumbnail" alt="First slide" style="height: 550px">
      <div class="carousel-caption d-none d-md-block">
    <h3 style="color: #FF0100"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></h3>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/picB.jpg" class="img-thumbnail" alt="Second slide"  style="height: 550px">
      <div class="carousel-caption d-none d-md-block">
    <h3 style=" color: #000000"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></h3>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/picB.jpg" class="img-thumbnail" alt="Third slide"  style="height: 550px">
      <div class="carousel-caption d-none d-md-block">
    <h3 style="color: #000000"><strong>Lorem ipsum dolor sit amet.</strong></h3>
    <p></p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- caurosel slide ends -->


<div class="container">
		<div class="row">
			<div class="col-md-4">
			<div class="card">
				<div class="card-header text-center">
                <p>If you haven't experienced the kick in writing code, yet you have a passion for adventure,
                 you are missing out on a great deal of adventure.
                 I think of the art of writing code as an awesome sci-fi series in which I am the scriptwriter.
                <p><a class="btn btn-primary" href="#" role="button">Read more...</a></p>
			</div>	
		</div>
    </div>
			<div class="col-md-4">
				<div class="card">
				<div class="card-header text-center">
                <p>If you haven't experienced the kick in writing code, yet you have a passion for adventure,
                 you are missing out on a great deal of adventure.
                 I think of the art of writing code as an awesome sci-fi series in which I am the scriptwriter.
                <p><a class="btn btn-warning" href="#" role="button">Read more...</a></p>
			</div>
			</div>
		</div>
        <div class="col-md-4">
				<div class="card">
				<div class="card-header text-center">
                <p>If you haven't experienced the kick in writing code, yet you have a passion for adventure,
                 you are missing out on a great deal of adventure.
                 I think of the art of writing code as an awesome sci-fi series in which I am the scriptwriter.
                <p><a class="btn btn-success" href="#" role="button">Read more...</a></p>
			</div>
			</div>
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