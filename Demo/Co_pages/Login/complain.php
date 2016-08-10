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
<link rel="stylesheet" href="../../css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="../../css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="../../css/style5.css" type="text/css" media="all">
<body>
<div class="main">
  <header>
  </header>
  <section id="content">
    <div class="wrapper">
      <article class="col1">
        <h2>Our Contacts</h2>
        <div class="pad">
          <div class="wrapper">
            <p class="cols"><br>
              State:<br>
              City:<br>
              Telephone:<br>
              Email:</strong> </p>
            <p class="col3"><br>
              Punjab<br>
              Jalandhar<br>
              +651 56546541<br>
              <a href="#">hello@gmail.com</a> </p>
          </div>
        </div>
        <h2><span>Contact Form</span></h2>
        <form id="ContactForm">
          <div>
            <div class="wrapper"> <span>Your Name:</span>
              <input type="text" class="input" value="<?php echo $row[1];?>">
            </div>
            <div class="wrapper"> <span>Your Roll_No:</span>
              <input type="text" class="input" value="<?php echo $row[3];?>">
            </div>
            <div class="textarea_box"> <span>Your Message:</span>
              <textarea name="textarea" cols="1" rows="1"></textarea>
            </div>
            <input type="submit" name="sub" align="center" style="background-image: ../../img/send_button.png;"/></div>
        </form>
      </article>
    </div>
  </section>
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













