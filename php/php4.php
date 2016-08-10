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
Input String         :-       <TEXTAREA type = "text" name = "input"></TEXTAREA>
<br>
Type the search word :-       <input type = "text" name = "search">
<br>
Output message       :-       <TEXTAREA ROWS=1 cols=50 type = "text" name = "output"><?php 
if((!empty($_REQUEST['input']))&&(!empty($_REQUEST['search'])))
{
$b="";
$a="";
$a .= $_REQUEST['input'];
$b .= $_REQUEST['search'];
if(strstr($a,$b))
{
echo "The word you type exist in the input string";
}
else
{
echo "The word you type does not exist in the input string";
}
}
if((empty($_REQUEST['input']))||(empty($_REQUEST['search'])))
{
echo "complete the fiels first";
}
?>
</TEXTAREA>
<br>
<input type = "submit" value ="Find" name = "find">
<br>
Position of word     :-       <input type = "text" name = "pos" value="<?php 
if((!empty($_REQUEST['input']))&&(!empty($_REQUEST['search'])))
{
$b="";
$a="";
$a .= $_REQUEST['input'];
$b .= $_REQUEST['search'];
if(strstr($a,$b))
{
echo strpos($a,$b);
}
else
{
echo "";
}
}
echo "\"/>";
$c="";
if((empty($_REQUEST['input']))||(empty($_REQUEST['search'])))
{
$c .= "<u>Complete both the fields first</u>";
}
else if(empty($_REQUEST['input']))
{
$c .= "complete the input field";
}
else if(empty($_REQUEST['search']))
{
$c .= "complete the search word field";
}
echo "<br><br><br><b><i><FONT SIZE=6 COLOR=\"GREEN\">".$c."</b></i>";
?>
</FONT>
<pre>
</form>
</body>
</html>


