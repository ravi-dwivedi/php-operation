<script>
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
<div  style="margin-top: 30px;margin-left: 1000px;"><a href="admin.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>
<form method="post">
<div id="container">
<table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top: 60px ;">
<tr class="ravi1">
<td class="feature" colspan="2">Enter Roll No  :- </td>
<td colspan="3" class="feature"><input name="t" type="text" <?php if(isset($_REQUEST['w'])){echo "value=$_REQUEST[w]";}?>  size="50" id="valid1" onkeyup="return validate2() "/></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1"><td class="feature" colspan="2">Item Name  :- </td>
<td colspan="3" class="feature"><select name="t1"><option>Banana</option><option>Apple</option><option>eggs</option></select></td></tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">Quantity  :- </td>
<td colspan="3" class="feature"><input  type="text" name="t2" size="50" id="valid1" onkeyup="return validate2()"/></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">One Item Price  :- </td>
<td colspan="3" class="feature"><input  type="text" name="t3" size="50" id="valid1" onkeyup="return validate2()"/></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
	<td class="feature" colspan="2">Date of Purchase:</td>
				<td class="ravi1"><SELECT Name="day"><?php
                                    echo "<OPTION selected>--Day--</OPTION>";
                                  for($i=1;$i<=31;$i++)
                                    {
                                        echo "<OPTION VALUE=$i";
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Day&nbsp;&nbsp;
                                        <SELECT Name="month"><?php
                                    echo "<OPTION selected>--Month--</OPTION>";
                                  for($i=1;$i<=12;$i++)
                                    {
                                       echo "<OPTION VALUE=$i";
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Month&nbsp;&nbsp;
                                        
</td>
				
			</tr>
            <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2"><center><input type="submit" value="Show all extra" name="sub1"/></center></td>
<td class="feature"><center><input type="submit" value="Insert" name="sub2"/></center></td>
</tr>
</table>
<br /><br /><br />
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
if(isset($_REQUEST['sub1']))
{
echo "<table align='center' border = '2' cellpadding='0' cellspacing='0'>";
echo "<tr><td width=125px><center>Roll No</center></td>";
echo "<td width=125px><center>Item</center></td>";
echo "<td width=125px><center>Quantity</center></td>";
echo "<td width=125px><center>Price</center></td>";
echo "<td width=125px><center>Date of Purchase</center></td></tr>";

    $str = "select * from extra where Roll_No=$_REQUEST[t]";
    $res = $obj->GetResult($str);
    while($row = mysql_fetch_row($res))
    {
        echo "<tr><td align='center'>".$row[0]."</td><td align='center'>".$row[1]."</td><td align='center'>".$row[2]."</td><td align='center'>".$row[3]."</td><td align='center'>".$row[4]."</td><tr>";
    }
    echo "</table>";  
}
    if(isset($_REQUEST['sub2']))
 {
    if(!empty($_REQUEST['t1'])&&!empty($_REQUEST['t2'])&&!empty($_REQUEST['t3'])&&!empty($_REQUEST['t'])&&$_REQUEST['day']!="--Day--"&&$_REQUEST['month']!="--Month--")
{  
    $total = $_REQUEST['t2']*$_REQUEST['t3'];
    $date = $_REQUEST['day']."/".$_REQUEST['month'];
    $str = "insert into extra values($_REQUEST[t],'$_REQUEST[t1]',$total,$_REQUEST[t3],'$date')";
    $res = $obj->GetResult($str);
    if(mysql_affected_rows()>0)
    {
       echo "Item Inserted";
    }
    else
    {
        echo "Try Later";
    }
}
}
?>