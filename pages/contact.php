
	<?php 

	include '../includes/header.php';
	include '../includes/navbar.php';
	?>
<?php 
if(isset($_POST['submit'])){
    $to = "cagaananadrian@gmail.com"; // this is your Email address
    $from = $_POST['inputEmail']; // this is the sender's Email address
    $name = $_POST['inputName'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['inputMessage'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['inputMessage'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    }
?>
	<div class="container">
		<div class="panel panel-default">

		<br />
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<center> 
					<h1> Contact</h1>
					<h2> Home Address</h2>
					<p>Adrian Pmentel Cagaanan<br>
						2986 15th Ave NE <br>
						Fort Dodge, IA 50501<br>
						515-955-5406
					</p>
					<h2> Current Address </h2>
					<p> 711 W 27th Street <br>
						Apartment 107 <br>
						515-227-6054 <br>
						cagaanan@usc.edu
					</p>

				</center>


			</div><!--/span-->
			<div class="col-md-6 col-sm-6">
				<div class="panel panel-default" style="margin:0 auto;width: 400px">
					<div class="panel-heading">
						<h2 class="panel-title">Contact Form</h2>
					</div>
					<div class="panel-body">
						<form name="contactform" method="post" action="" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputName" class="col-lg-2 control-label">Name</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputSubject" class="col-lg-2 control-label">Subject</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword1" class="col-lg-2 control-label">Message</label>
								<div class="col-lg-10">
									<textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button type="submit" name="submit" class="btn btn-default">
										Send Message
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>

		</div>	
		


		


	

		<footer>

		</footer>
		</div>
	</div><!--/.container-->



	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="../lib/js/jquery-1.10.2.min.js"></script>
	    <script src="../lib/js/bootstrap.min.js"></script>
	    <script src="../lib/js/offcanvas.js"></script>

	</body></html>