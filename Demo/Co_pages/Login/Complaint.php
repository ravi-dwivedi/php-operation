<?php
session_start();
$row;
require_once('blogic.php');
    
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
    $obj = new Blogic();
    $str = "select * from student where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
}
else
{
header("location:../../Index.php");
}
?>





<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Complaint Box</title>
<link href="css/style.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="css/scripts.js"></script>

</head>
<body>

<div id="container">
	
	<h1>Send a Letter</h1>
	
	<form action="" method="post">
		<fieldset>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?php echo $row[1];?>" disabled="true"/>
            
				<label for="email">RollNo:-</label>
			<input type="email"  value="<?php echo $row[3];?>" disabled="true"/>
            
			<label for="email">Subject:</label>
			<input type="email" id="email" name="email" style="border: black;border-left-width: thick;"/>
			
			<label for="message">Message:</label>
			<textarea id="message" name="message"></textarea>
			
			<input type="submit" id="send" value="Send" />
			
		</fieldset>
	</form>
</div>

</body>

<?php
if(isset($_REQUEST['sub']))
{
$to      = 'ravi.dwivedi23@gmail.com';
$subject = 'the subject';
$message = "From :- $row[3]";
$message  .=PHP_EOL;
$message .=$_REQUEST['message'];
$headers = 'From: fsf@yahoo.com' . "\r\n" .
    'Reply-To: sfsdfwe@yahoo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers))
{
    echo "mail send";
}
else
{
    echo "try again";
}
}
?>

</html>



