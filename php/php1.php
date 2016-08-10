<html>
<head>
<title>
ravi's 
</title>
</head>

<?php 
echo "<body";
if(!empty($_REQUEST['color']))
{
echo " BGCOLOR= ".$_REQUEST['color'];
}
if(!empty($_REQUEST['t2']))
{
echo " TEXT= ".$_REQUEST['t2'];
}
echo ">";
?>
<br>
<br>
<form>
<pre>
type your name :-                 <input type = "text" name = "t1">
<br>
type your background color :-     <input type = "text" name = "color">
<br>
type your foreground color :-     <input type = "text" name = "t2">
<br>
<input type = "submit" value ="press" name = "sub">
<br>

<pre>
</form>

<?php
if(!empty($_REQUEST['t1']))
{
echo "welcome ".$_REQUEST['t1'];
}
?>
</body>
</html>


