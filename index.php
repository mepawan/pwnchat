<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Alina Christeen">
    <title>pwnChat - Video | Audio | text messeging System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
</head>
<body>
	<div role="main" class="container theme-showcase">
		<div class="jumbotron">
			<h1>pwnChat 
				<a class="btn btn-lg btn-info pull-right" href="./client/">View Demo</a>
			
			</h1>
			<h2>Video, Audio & text messaging system</h2>
			<p>pwnChat is full featured video, audio & text messeging system with directly available within your web browser. You can consider it as online web based Skype, but without the requirement to install any additional software, plugin nor flash.</p>
			<p>There is unlimited number of use cases: online live video chat support, private rooms, community chat rooms...</p>
			<p>Unlike some other systems, pwnChat includes full featured server side "signaling" engine: you can see who is online, click to call, click to end call, send text messages. You can even mark certain users as operators which are able to receive calls while all others can just make calls.</p>
			<p></p>
			
			<?php
				if(isset($_POST['sendmsg'])){
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: <'.$_POST["email"].'>' . "\r\n";
									
					
					$msg = "Hi, I'm " . $_POST['name'] . ",\n<br /> " . $_POST['message'] . "<br />contact me :" . $_POST["email"] ." <br /><br />pwnChat Team";
					$rs = mail('pawan.developers@gmail.cm', $_POST['iwant'], $msg, $headers);
					echo '<div role="alert" class="alert alert-success alert-dismissible">
					  <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
					  We received your request and will contact you soon. </div>';
					  
					  print_r($rs);
				}
			
			?>
			
			<form class="form-signin" method="post">
				<h2><span style="font-size:13px; font-weight:bold;">Write Us here  OR email : pawan.developers@gmail.com </span></h2>
				<label class="sr-only1" for="inputEmail">Email</label>
				<input type="email" name="email" autofocus="" required="" placeholder="Email" class="form-control" id="inputEmail">
				<p></p>
				<label class="sr-only1" for="inputName">Name</label>
				<input type="text" name="name"  required="" placeholder="Name" class="form-control" id="inputName">
				<p></p>
				
				<label class="sr-only1" for="inputIwant">I Want To</label><div class="clearfix"></div>
				<select name="iwant" id="inputIwant">
					<option value="Integrate this script own website">Integrate this script own website</option>
					<option value="Purchase source code of this script">Purchase source code of this script</option>
					<option value="Ask some query">Ask some query </option>
				</select>
				<div class="clearfix"></div>
				<p></p>
				<label class="sr-only1" for="inputMessage">Message</label>
				<textarea name="message"  required="" placeholder="Message" class="form-control" id="inputMessage"></textarea>
				<p></p>
				<button type="submit" name="sendmsg" class="btn btn-lg btn-primary btn-block">Send </button>
			</form>
		</div>
		<style>
			form label{display:none}
		</style>
	</div>
</body>
</html>
