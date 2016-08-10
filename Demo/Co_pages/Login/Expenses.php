<?php
session_start();
require_once('blogic.php');
    $obj = new Blogic();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
    $str = "select * from student where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
    $roll = $row[3];
}
else
{
  header("location:../../Index.php");
}
?>

    <link href="../../css/style4.css" rel="stylesheet" type="text/css" />
<div class="logo">
<div style="margin-left: 0px;">
      <h1><a href="#">NIT <span>Jalandhar</span><small>India's Leading Institute</small></a></h1>
      </div>
    </div>
<link href="../../css/style2.css" rel="stylesheet" />
<div  style="margin-top: 30px;margin-left: 1000px;"><a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>
<div  style="margin-top: 30px;margin-left: 1000px;"><a href="Home.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>
<form method="post">
<div id="container">
<table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top: 60px ;">
<tr><td>Month</td><td>Price</td></tr>
<?php
 $str = "select * from account where Roll_No=$roll";
    $res = $obj->GetResult($str);
while($row = mysql_fetch_row($res))
{
    echo "<tr>
	<td class='feature'><center>$row[1]</center></td>";
				echo "<td class='ravi1'><center>$row[2]</center></td></tr>";
                echo "<tr><td>&nbsp;<td></tr>";
				}
                ?>			
</table>
<br /><br /><br />
<table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top: 60px ;">
<tr><td>Item Name</td><td>Quantity</td><td>Price</td><td>Date of Purchase</td></tr>
<?php
$str = "Select * from extra where Roll_No=$roll";
$res = $obj->GetResult($str);
while($row = mysql_fetch_row($res))
{
    echo "<tr><td class='feature'><center>$row[1]</center></td>";
	echo "<td class='ravi1' width=20%><center>$row[2]</center></td>";
    echo "<td class='ravi1'><center>$row[3]</center></td>";
    echo "<td class='ravi1'><center>$row[4]</center></td></tr>";
    echo "<tr><td>&nbsp;<td></tr>";
}
?>	