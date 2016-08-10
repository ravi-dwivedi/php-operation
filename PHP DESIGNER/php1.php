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
Input String          :-       <TEXTAREA type = "text" name = "input">
</TEXTAREA>
<br>
<input type = "submit" value ="List" name = "sub">
<br>
List of cities         :-       <SELECT><OPTION>SELECT CITY</OPTION>
<?php 
if(!empty($_REQUEST['input']))
{
$a="";
$a .= $_REQUEST['input'];
$strarr=explode(", ",$a);
foreach($strarr as $v)
{
echo "<option>".$v."</option>";
}
echo "</select>";
}
else if(empty($_REQUEST['input']))
{
echo "<FONT SIZE=6 COLOR=\"red\"><r><br><br><b>First input cities</b>";
}
?>


