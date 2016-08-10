<html>
<head>
<title>
ravi's 
</title>
</head>
<BODY>
<br>
<br>
<form>
<pre>
<FONT SIZE=5 STYLE=Comic>
Input String          :-       <TEXTAREA type = "text" name = "input"><?php 
if((!empty($_REQUEST['input']))&&(!empty($_REQUEST['search']))&&(!empty($_REQUEST['replace'])))
{
$b="";
$a="";
$c="";
$a .= $_REQUEST['input'];
$b .= $_REQUEST['search'];
$c .= $_REQUEST['replace'];
$d = str_replace($b,$c,$a,$count);
echo $d;
}
else if((empty($_REQUEST['input']))||(empty($_REQUEST['search']))||(empty($_REQUEST['replace'])))
{
echo " ";
}
?>
</TEXTAREA>
<br>
Type the search word  :-       <input type = "text" name = "search">
<br>
Replace word          :-       <input type="text" name = "replace">
<br>
<input type = "submit" value ="Replace" name = "sub">
<br>
No. of words Replaced :-       <input type = "text" name = "no" value="<?php 
if((!empty($_REQUEST['input']))&&(!empty($_REQUEST['search']))&&(!empty($_REQUEST['replace'])))
{
$b="";
$a="";
$c="";
$a .= $_REQUEST['input'];
$b .= $_REQUEST['search'];
$c .= $_REQUEST['replace'];
str_replace($b,$c,$a,$count);
echo $count;
}
else
{
echo "";
}
echo "\"/>";
$d="";
if((empty($_REQUEST['input']))||(empty($_REQUEST['search']))||(empty($_REQUEST['replace'])))
{
$d .= "<u>Complete all the fields first</u>";
}
echo "<FONT SIZE=6 COLOR=\"red\"><r><br><br><b>".$d."</b>";
?>
</FONT>
<pre>
</form>
</body>
</html>


