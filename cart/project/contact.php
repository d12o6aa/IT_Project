<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Contact Us</h2>
		<form action="process.php" method="post">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" id="message" name="message" placeholder="Enter your message" rows="5" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = 'youremail@example.com';
	$subject = 'New Contact Form Submission';
	$body = "Name: $name\nEmail: $email\nMessage:\n$message";

	if(mail($to, $subject, $body)) {
		echo '<p class="alert alert-success">Your message was sent successfully!</p>';
	} else {
		echo '<p class="alert alert-danger">There was an error sending your message. Please try again later.</p>';
	}
}
?>
</body>
</html>
