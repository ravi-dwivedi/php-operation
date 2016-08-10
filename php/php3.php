<?php
echo Var_dump((bool)"*545");
var_dump(25/7);
var_dump((int)(25/7));
var_dump(round(25/7));
echo PHP_VERSION."<BR>".M_PI."<BR><BR>";
$w = array("item1",1,"kdfhdfh",5454.54);
$i = 1;
foreach($w as $v)
{
echo "array item $i is ".$v."<br>";
++$i;
}
echo "<br><br><br>";
foreach($w as $v=>$c)
{
echo "array item $v is ".$c."<br>";
}
?>
<form>
<pre>
type number :-       <input type = "text" name = "t1"/>
<br>
number status :-     <input type = "text" name = "t2" value="<?php 
if(!empty($_REQUEST['t1']))
{
$b="";
$a="";
$a .= $_REQUEST['t1'];
if($a==0)
$b .="The number is zero";
else if($a%2==0)
$b .="The number is even";
else
$b .="the number is odd";
}
echo $b;
?>">
<br>
enter the password :- <input type = "password" name = "t"/>

<input type = "submit" value ="press" name = "sub">

<?php
$c = "";
if(!empty($_REQUEST['t']))
{
$c .= $_REQUEST['t'];
if($c==="hello")
echo "correct password permission granted";
else
echo "incorrect password";
}
?>
<br>
</pre>
</form>
<?php
$a = 45;
$b=50;
function fun()
{
$a = 60;
global $b;
echo "function local variable data $a  <br>";
echo "accessing outside variable ".$GLOBALS['a']."<br>";
echo "function local variable data $b  <br>";
}
fun();
?>
<br>
<br>
var_dump(25/7);