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
function validate()
{
    var v = confirm("Do you really want to Change?");
    if(v==true)
    {
        return true;
    }
    else
    {
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
<td class="feature" colspan="2">Roll No  :- </td>
<td colspan="3" class="feature"><input type="text" <?php if(isset($_REQUEST['roll'])) echo "value=".$_REQUEST['roll']?>  size="50"/></td>
</tr>
           <tr>
<td>&nbsp;</td>
</tr>
<tr>
	<td class="feature" colspan="2">From:</td>
				<td class="ravi1"><SELECT Name="day1"><?php
                if(isset($_REQUEST['s']))
                $arr = explode("/",$_REQUEST['s']);
                    $today = date("j, n, Y");  
                    $present = explode(", ",$today);
                                    echo "<OPTION selected>--Day--</OPTION>";
                                  for($i=1;$i<=31;$i++)
                                    {
                                        echo "<OPTION VALUE=$i";
                                        if(!empty($arr))
                                        {
                                        if($arr[0]==$i)
                                        {
                                            echo " SELECTED";
                                        }
                                        }
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Day&nbsp;&nbsp;
                                        <SELECT Name="month1"><?php
                                    echo "<OPTION selected>--Month--</OPTION>";
                                  for($i=1;$i<=12;$i++)
                                    {
                                       echo "<OPTION VALUE=$i";
                                       if(!empty($arr))
                                        {
                                       if($arr[1]==$i)
                                        {
                                            echo " SELECTED";
                                        }
                                        }
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Month&nbsp;&nbsp;
                                        
</td>
				
			</tr>
            <tr class="ravi1">
<td class="feature" colspan="2">(From)  :- </td>
<td colspan="3" class="feature">
<select name="timing1">
<?php
echo "<option";
if(isset($_REQUEST['ff']))
{
    if($_REQUEST['ff']==Breakfast)
echo " selected>";
}
echo "Breakfast</option>";
echo "<option";
if(isset($_REQUEST['ff']))
{
    if($_REQUEST['ff']==Lunch)
echo " selected>";
}
echo "Lunch</option>";
echo "<option";
if(isset($_REQUEST['ff']))
{
    if($_REQUEST['ff']==Dinner)
echo " selected>";
}
echo "Dinner</option>";
?>
</select>
</td>
</tr>
             <tr>
<td>&nbsp;</td>
</tr>
           <tr>
	<td class="feature" colspan="2">To:</td>
				<td class="ravi1"><SELECT Name="day2"><?php
                if(isset($_REQUEST['s']))
                $arr = explode("/",$_REQUEST['e']);
                $today = date("j, n, Y");  
               $present = explode(", ",$today);
                                    echo "<OPTION selected>--Day--</OPTION>";
                                  for($i=1;$i<=31;$i++)
                                    {
                                        echo "<OPTION VALUE=$i";
                                        if(!empty($arr))
                                        {
                                        if($arr[0]==$i)
                                        {
                                            echo " SELECTED";
                                        }
                                        }
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Day&nbsp;&nbsp;
                                        <SELECT Name="month2"><?php
                                    echo "<OPTION selected>--Month--</OPTION>";
                                  for($i=1;$i<=12;$i++)
                                    {
                                       echo "<OPTION VALUE=$i";
                                       if(!empty($arr))
                                        {
                                       if($arr[1]==$i)
                                        {
                                            echo " SELECTED";
                                        }
                                        }
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Month&nbsp;&nbsp;
                                        
</td>
				
			</tr>
                       <tr class="ravi1">
<td class="feature" colspan="2">(From)  :- </td>
<td colspan="3" class="feature">
<select name="timing2">
<?php
echo "<option";
if(isset($_REQUEST['tf']))
{
    if($_REQUEST['tf']==Breakfast)
echo " selected>";
}
echo "Breakfast</option>";
echo "<option";
if(isset($_REQUEST['tf']))
{
    if($_REQUEST['tf']==Lunch)
echo " selected>";
}
echo "Lunch</option>";
echo "<option";
if(isset($_REQUEST['tf']))
{
    if($_REQUEST['tf']==Dinner)
echo " selected>";
}
echo "Dinner</option>";
?>
</select>
</td>
</tr>
            <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="4"><center><input type="submit" value="Omit" name="sub" onclick=" return validate()"/></center></td>
</tr>
</table>
<br /><br /><br />
<?php
if(isset($_REQUEST['sub']))
{
    if($_REQUEST['day1']!="--Day--"&&$_REQUEST['month2']!="--Month--"&&$_REQUEST['day2']!="--Day--"&&$_REQUEST['month1']!="--Month--")
    {   
    $date1 = $_REQUEST['day1']."/".$_REQUEST['month1'];
    $date2 = $_REQUEST['day2']."/".$_REQUEST['month2'];
    $k1 = $_REQUEST['day1'];
    $k2 = $_REQUEST['day2'];
    if($_REQUEST['month2']>$_REQUEST['month1'])
    {
        $k2=$_REQUEST['day2']+31;
    }
    if(($k2-$k1)>=3)
    {
     $str = "delete from holiday where Roll_No=$_REQUEST[roll] and Star='$_REQUEST[s]' and End='$_REQUEST[e]'";
     $res = $obj->GetResult($str);
     $str = "insert into holiday values($_REQUEST[roll],'$date1','$date2','$_REQUEST[timing1]','$_REQUEST[timing2]')";
    $res = $obj->GetResult($str);
   header("location:edit.php?roll=".$_REQUEST[roll]."&s=".$date1."&e=".$date2);
    
    }
    else
    {
        echo "<center><font color=yellow size=5>The difference must be of atleast 3 days</font></center>";
    }
    }
    else{
        echo "<center><font color=red size=5>please select correctly!!!</font></center>";
    }
}
?>