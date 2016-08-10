<?php
session_start();
 require_once('blogic.php');
 $obj = new Blogic();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
    
    
}
else
{
  //  header("location:Login1.php");
}
?>
<script>
function validate1()
{
  txt1 = document.getElementById("valid1");
  if(txt1.value==""||txt1.value==null)
  {
    txt1.style.background = "yellow";
    txt1.focus();
    alert("Please Enter your Id");
    return false;
  }
    }
    function validate2()
    {
        txt1 = document.getElementById("valid1");
  if(txt1.value!=""||txt1.value!=null)
  {
    txt1.style.background = "white";
    return false;
  }   }
    </script>
<link href="../../css/style2.css" rel="stylesheet" />
<div  style="margin-top: 30px;margin-left: 1000px;"><a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>
<form method="post">
<div id="container">
<table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top: 60px ;">
<tr class="ravi1"><td class="feature" colspan="2">Enter Employee Id  :- </td>
<td colspan="3" class="feature"><input  type="text" name="t" size="50" id="valid1" onkeyup="return validate2()"/></td></tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature"><input type="submit" value="Show All" name="sub1"/></td>
<td  class="feature"><input type="submit" value="Show" name="sub2" onclick="return validate1()"/></td>
<td class="feature"><input type="submit" value="Update" name="sub3" onclick="return validate1()"/></td>
<td class="feature"><input type="submit" value="Delete" name="sub4" onclick="return validate1()"/></td>
<td class="feature"><input type="submit" value="Insert" name="sub5"/></td>
</tr>
</table>
</div>
</form>
<br /><br />
<?php
if(isset($_REQUEST['sub1'])||isset($_REQUEST['sub2']))
{
echo "<table align='center' border = '2' cellpadding='0' cellspacing='0'>";
echo "<tr><td width=125px>Employee Id</td><td width=125px>Name</td><td width=150px>Department</td>";
echo "<td width=125px>Post</td><td>Since</td>";
echo "<td width=125px>Address</td>";
echo "<td width=125px>Salary</td>";
echo "<td width=125px>DOB</td><td width=125px>Image</td></tr>";
}
?>
<?php

if(isset($_REQUEST['sub1']))
{
   $str = "select * from employee";
    $res = $obj->GetResult($str);
    while($row = mysql_fetch_row($res))
    {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td><img src='view_image.php?i=$row[0]' height='100px' width='100px' ></img>";
    }
    echo "</table>";  
}
if(isset($_REQUEST['sub2']))
{
    $str = "select * from employee where Id=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    while($row = mysql_fetch_row($res))
    {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td><img src='view_image.php?i=$row[0]' height='100px' width='100px' ></img>";
    }
    }
  if(isset($_REQUEST['sub3']))
{  
    $str = "select * from employee where Id=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    if($row = mysql_fetch_row($res))
    {
    header("location:setting.php?i=$_REQUEST[t]");
    }
    else
    echo "This id Does not exist";
    }
    if(isset($_REQUEST['sub4']))
{    
    $str = "delete from employee where Id=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    if(mysql_affected_rows()>0)
    {
        echo "<font size=6 color=green>Record Deleted</font>";
    }
    else
    {
        echo "<font size=6 color=red>Enter the Id!!!</font>";
    }
    }
    if(isset($_REQUEST['sub5']))
    {
        header("location:setting.php?i=-1");
    }
?>
<?php
if(empty($_SESSION['user'])&&empty($_SESSION['pass']))
{
    header("location:../../Index.php");
}
if(isset($_REQUEST['s']))
{
    
    if($_REQUEST['s']==8)
    echo "Record updated";
    else if($_REQUEST['s']==3)
    echo "Error in updating";
    else if($_REQUEST['s']==6)
    echo "Record INserted";
    else if($_REQUEST['s']==1)
    echo "Error in inserrting record";
$s = 80;
}
?>
