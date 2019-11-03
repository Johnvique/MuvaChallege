<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>

<!-- nav-start -->

<?php
include 'nav.php';
?>
<!-- nav-end -->


<div class="Gmap-area" style="margin-top: 5em">
  <div class="text-center"><h2 style="color: #000000">Talk to Us</h2></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4 style="color: #0077BE">Personal Details</h4>
                      <div class="form-group">
                        <form method="post" action="#">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                      <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>

        
      </div>
    </form>
      <div class="col-md-4">
        <h4 style="color: #0077BE">Text here</h4>
           <div class="form-group">
                           <form method="post" action="#">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows=""></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-info btn-lg" required="required">Submit Message</button>
                        </div>
                    
        
      </div>
    </form>

      <div class="col-md-4">
        <h4 style="color: #0077BE">Postal Address</h4>
                                <strong><address>
                                    <h5 style="color: #670001">Our Offices</h5>
                                    <p style="color: #670001">Home Bakery <br>P.O BOX, 40222-236,Home.</p>
                                    <p style="color: #670001">Phone: <a href="tel:+254705820937">+254705820937</a> <br>
                                    <p style="color: #670001">Email: <a href="mailto:homebakery@gmail.com">homebakery@gmail.com</a></p>
                                </address>
                              </strong>
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