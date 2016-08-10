
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Pen &amp; Paper Form</title>

<link href="style.css" rel="stylesheet" />

<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="scripts.js"></script>

</head>
<body>

<div id="container">
	
	<h1>Send a Letter</h1>
	
	<form action="" method="post">
		<fieldset>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" />
			
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" />
			
			<label for="message">Message:</label>
			<textarea id="message" name="message"></textarea>
			
			<input type="submit" id="send" value="Send" />
			
		</fieldset>
	</form>
</div>

</body>
</html>