<?php
session_start();
 require_once('blogic.php');
 $obj = new Blogic();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
  $str = "select * from holiday where Roll_No=$_REQUEST[roll]";
  $res = $obj->GetResult($str);
}
else
{
   header("location:../../Index.php");
}
?>
<script>
function validate()
{
var v = confirm("Do you really want to do this");
if(v==true)
{
    return true;
}    
else
return false;
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
<div  style="margin-top: 30px;margin-left: 1000px;"><a href="admin.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>

<br /><br /><br />
<form method="post">
<div id="container">
<table align='center' border = '2' cellpadding='0' cellspacing='0'>
<tr>
<td width=125px>Roll No</td>
<td>Start of Vacation</td>
<td width=125px>End of Vacation</td>
<td width=125px>Edit</td>
<td width=125px>Delete</td></tr>
<?php
$i =1;
while($row=mysql_fetch_row($res))
{
    echo "<tr class='ravi1'><td class='feature'>$row[0]</td><td class='feature'>$row[1]</td><td class='feature'>$row[2]</td>";
    echo "<td class='feature'><input type='checkbox' name='ed&$row[1]&$row[2]'></input></td>";
    echo "<td class='feature'><input type='checkbox' name='de&$row[1]&$row[2]'></td></tr>";
    echo "<tr><td>&nbsp;</td><td>From :- $row[3]</td><td>To  :- $row[4]</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
    echo "<tr><td>&nbsp;</td></tr>";
    $i = $i +1;
}
?>
<tr><td></td><td colspan="3"><center><input type="submit" name="sub" value="Done" onclick="return validate()"/></center></td></tr>
</table>
<?php
if(isset($_REQUEST['sub']))
{
    $str1 = "select * from holiday where Roll_No=$_REQUEST[roll]";
  $res1 = $obj->GetResult($str1);
  while($row1=mysql_fetch_row($res1))
     {
      $val1 = "de&".$row1[1]."&".$row1[2];
     if(isset($_REQUEST[$val1]))
     {
         $str2 = "delete from holiday where Star='$row1[1]' and End='$row1[2]'";
         $res2 = $obj->GetResult($str2);
         echo "<br><br><center>Record Deleted</center>";
         header("location:Cancel.php?roll=".$row1[0]."&n=12");
      }  
        $val2 = "ed&".$row1[1]."&".$row1[2];
     if(!empty($_REQUEST[$val2]))
     {
        header("location:edit.php?roll=".$row1[0]."&s=".$row1[1]."&e=".$row1[2]."&ff=".$row1[3]."&tf=".$row1[4]);
      }
    }
}
?>
<?php
if(isset($_REQUEST['n']))
{
    echo "<br><br><center>Record Deleted</center>";
}
?>