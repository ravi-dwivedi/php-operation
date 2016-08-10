<?php
$month = array("January","Febraury","March","April","May","June","July","August","September","Octuber","November","December");
$today = date("j, n, Y");  
$present = explode(", ",$today);
if($present[1]>6&&$present[1]<=12)
{
    $_SESSION['semester']=1;
}
else if($present[1]>=1&&$present[1]<=6)
{
   $_SESSION['semester']=2; 
}
?>
<?php
session_start();
 require_once('blogic.php');
 $obj = new Blogic();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
    
    
}
else
{
   header("location:../../Index.php");
}
?>
<script>
function myFunction()
{
var x;

var person=prompt("Please enter your name");
if(person!=null)
{
if (person.toString()=="authentication")
  {
    return true;
  }
  else
  {
    return false;
  }
  }
  else
  return false;
}
function validate1()
{
  txt1 = document.getElementById("valid1");
  if(txt1.value==""||txt1.value==null)
  {
    txt1.style.background = "yellow";
    txt1.focus();
    alert("Please Enter Roll No");
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
  function validate3()
{
  txt1 = document.getElementById("valid2");
  if(txt1.value==""||txt1.value==null)
  {
    txt1.style.background = "yellow";
    txt1.focus();
    alert("Please Enter Hostel No.");
    return false;
  }
    }
      function validate4()
{
  name
  if(txt1.value==""||txt1.value==null)
  {
    txt1.style.background = "yellow";
    txt1.focus();
    alert("Please Enter Hostel No.");
    return false;
  }
    }
    </script>
    
    <link href="../../css/style4.css" rel="stylesheet" type="text/css" />
<div class="logo">
<div style="margin-left: 0px;">
      <h1><a href="#">NIT <span>Jalandhar</span><small>India's Leading Institute</small></a></h1>
      </div>
    </div>
<link href="../../css/style2.css" rel="stylesheet" />
<div  style="margin-top: 30px;margin-left: 1000px;"><a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>
<form method="post">
<div id="container">
<table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top: 60px ;">
<tr class="ravi1"><td class="feature" colspan="2">Enter Student Roll No  :- </td>
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
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature"><input type="submit" value="Id and Password" name="sub6" onclick="return validate1()"/></td>
<td  class="feature"><input type="submit" value="Extra" name="sub7" onclick="return validate1()"/></td>
<td class="feature"><input type="submit" value="Balance" name="sub8" onclick="return validate1()"/></td>
<td class="feature"><input type="submit" value="Cancel Vacation" name="sub9" onclick="return validate1()"/></td>
<td class="feature"><input type="submit" value="Change Menu" name="sub10" onclick="return validate3()"/></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature"><input type="submit" value="Delete Previous Mess Semester Data" name="sub11" onclick="return myFunction()"/></td>
<td class="feature"><center><input type="submit" value="Tomarrow Diet" name="sub12" onclick="return myFunction()"/></center></td>

</tr></table>
</div>
</form>
<br /><br />
<?php
if(isset($_REQUEST['sub1'])||isset($_REQUEST['sub2'])||isset($_REQUEST['sub6']))
{
echo "<table align='center' border = '2' cellpadding='0' cellspacing='0'>";
echo "<tr><td width=125px>Student Id</td><td width=125px>Name</td><td width=150px>Department</td>";
echo "<td width=125px>Roll No</td><td>Year</td>";
echo "<td width=125px>Hostel No</td>";
echo "<td width=125px>Room No</td>";
echo "<td width=125px>Date of Birth</td><td width=125px>Image</td></tr>";
}
?>
<?php

if(isset($_REQUEST['sub1']))
{
   $str = "select * from student";
    $res = $obj->GetResult($str);
    while($row = mysql_fetch_row($res))
    {
        echo "<tr><td align='center'>".$row[0]."</td><td align='center'>".$row[1]."</td><td align='center'>".$row[2]."</td><td align='center'>".$row[3]."</td><td align='center'>".$row[4]."</td><td align='center'>".$row[5]."</td><td align='center'>".$row[6]."</td><td align='center'>".$row[7]."</td><td align='center'><img src='view_image.php?i=$row[3]' height='100px' width='100px' ></img>";
    }
    echo "</table>";  
}
if(isset($_REQUEST['sub2']))
{
    $str = "select * from student where Roll_No=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    while($row = mysql_fetch_row($res))
    {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td><img src='view_image.php?i=$row[3]' height='100px' width='100px' ></img>";
    }
    }
  if(isset($_REQUEST['sub3']))
{  
    $str = "select * from student where Roll_No=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    if($row = mysql_fetch_row($res))
    {
    header("location:setting.php?i=$_REQUEST[t]");
    }
    else
    echo "This Roll No Does not exist";
    }
    if(isset($_REQUEST['sub4']))
{    
    $str = "delete from student where Roll_No=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    if(mysql_affected_rows()>0)
    {
        echo "<font size=6 color=green><center><br><br>Record Deleted</center></font>";
    }
    else
    {
        echo "<font size=6 color=red><center><br><br>This Roll No. Does Not exist</center></font>";
    }
    }
    if(isset($_REQUEST['sub5']))
    {
        header("location:setting.php?i=-1");
    }
    if(isset($_REQUEST['sub6']))
{
   $str = "select * from login where roll_no=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    while($row = mysql_fetch_row($res))
    {
        echo "</table><br><br><br><center><table border=1><tr><td>Id</td><td>Password</td></tr>";
        echo "<tr><td align='center'>".$row[0]."</td><td align='center'>".$row[1]."</td></tr>";
    }
    echo "</table></center>";  
}
if(isset($_REQUEST['sub8']))
{
echo "<center>Balance Details</center><br>";
echo "<table align='center' border = '2' cellpadding='0' cellspacing='0'>";
echo "<tr><td width=125px>Roll No</td>";
echo "<td width=125px>Month</td>";
echo "<td width=125px>Price</td>";
    $str = "select * from account where Roll_No=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    if(mysql_affected_rows()>0)
    {
    while($row = mysql_fetch_row($res))
    {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
    }
    echo "</table><br><br><br>";
echo "<center>Extra Eatings</center><br><br>";
echo "<table align='center' border = '2' cellpadding='0' cellspacing='0'>";
echo "<tr><td width=125px>Roll No</td>";
echo "<td>Item Name</td>";
echo "<td width=125px>Quantity</td>";
echo "<td width=125px>Price</td>";
echo "<td width=125px>Date</td></tr>";
    $str = "select * from extra where Roll_No=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    while($row = mysql_fetch_row($res))
    {
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[3]."</td></tr>";
    }
    echo "</table><br>";
    }
    
    else
    {
        echo "<center>This Student Does not exist<center>";
    }
    }
    if(isset($_REQUEST['sub11']))
{
   $str = "delete from account";
    $res = $obj->GetResult($str);
    $str = "delete from extra";
    $res = $obj->GetResult($str);
    
        if(mysql_affected_rows()==0)
        {
            echo "<center>Records Succesfuly Deleted</center>";
        }
        else{
            echo "<center>Failed to delete</center>";
        }
    }
    
    if(isset($_REQUEST['sub7']))
{
         header("location:Extra.php?w=$_REQUEST[t]");   
}
if(isset($_REQUEST['sub9']))                                   
{    
    header("Location:Cancel.php?roll=$_REQUEST[t]");
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
if(isset($_SESSION['semester']))
{
    unset($_SESSION['semester']);
    }
?>
