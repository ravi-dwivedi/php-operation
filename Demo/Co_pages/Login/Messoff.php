<?php
session_start();
require_once('blogic.php');
    $obj = new Blogic();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{

    $str = "select * from student where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
}
else
{
 header("location:../../Index.php");
}
?>
<?php
  $time = date('h:i:s');
  $time=str_replace(":","",$time);
  $time = md5($time);
  $time=substr($time,0,7);
  if(!(isset($_COOKIE['ti'])))
  {
  setcookie("ti",$time);
  }
?>
<script>
function validate()
{
    var v = confirm("Do you really want to Off the Mess?");
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
<div  style="margin-top: 30px;margin-left: 1000px;"><a href="Home.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>
<form method="post">
<div id="container">
<table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top: 60px ;">
<tr class="ravi1">
<td class="feature" colspan="2">Roll No  :- </td>
<td colspan="3" class="feature"><input type="text" <?php if(isset($_SESSION['user'])) echo "value=".$row[3]?>  size="50"/></td>
</tr>
           <tr>
<td>&nbsp;</td>
</tr>
<tr>
	<td class="feature" colspan="2">From:</td>
				<td class="ravi1"><SELECT Name="day1"><?php
                    $today = date("j, n, Y");  
                    $present = explode(", ",$today);
                                    echo "<OPTION selected>--Day--</OPTION>";
                                  for($i=$present[0]+1;$i<=$present[0]+2;$i++)
                                    {
                                        echo "<OPTION VALUE=$i";
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Day&nbsp;&nbsp;
                                        <SELECT Name="month1"><?php
                                    echo "<OPTION selected>--Month--</OPTION>";
                                  for($i=$present[1];$i<=$present[1]&&$present[1]<=12;$i++)
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
<td class="feature" colspan="2">(From)  :- </td>
<td colspan="3" class="feature">
<select name="timing1">
<option>Breakfast</option>
<option>Lunch</option>
<option>Dinner</option>
</select>
</td>
</tr>
           <tr>
<td>&nbsp;</td>
</tr>

           <tr>
	<td class="feature" colspan="2">To:</td>
				<td class="ravi1"><SELECT Name="day2"><?php
                $today = date("j, n, Y");  
               $present = explode(", ",$today);
                                    echo "<OPTION selected>--Day--</OPTION>";
                                  for($i=1;$i<=31;$i++)
                                    {
                                        echo "<OPTION VALUE=$i";
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Day&nbsp;&nbsp;
                                        <SELECT Name="month2"><?php
                                    echo "<OPTION selected>--Month--</OPTION>";
                                  for($i=$present[1];$i<=($present[1]+1)&&$present[1]<=12;$i++)
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
<td class="feature" colspan="2">(To)  :- </td>
<td colspan="3" class="feature">
<select name="timing2">
<option>Breakfast</option>
<option>Lunch</option>
<option>Dinner</option>
</select>
</td>
</tr>
            <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1" >
<td class="feature" colspan="2" height="75px"></td>
<td colspan="3" class="feature">  <?php
  
echo "<img border='1px' src='Captcha.php?to=$time'/>";
?></td>
</tr>
<tr class="ravi1" >
<td class="feature" colspan="2" height="75px">Enter Image Text:-</td>
<td colspan="3" class="feature"> <input type="text" name="captchatest"/></td>
</tr>
           <tr>
<td>&nbsp;</td>
</tr>





<tr class="ravi1">
<td class="feature" colspan="2"><center><input type="submit" value="Continue" name="sub1" onclick=" return validate()"/></center></td>
</tr>
</table>
<br /><br /><br />
<?php
if(isset($_REQUEST['sub1']))
{
    if($_REQUEST['captchatest']==$_COOKIE['ti'])
      {
    if($_REQUEST['day1']!="--Day--"&&$_REQUEST['month2']!="--Month--"&&$_REQUEST['day2']!="--Day--"&&$_REQUEST['month1']!="--Month--"&&isset($_REQUEST['timing1'])&&isset($_REQUEST['timing2']))
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
    $str = "insert into Holiday values($row[3],'$date1','$date2','$_REQUEST[timing1]','$_REQUEST[timing2]')";
    $res = $obj->GetResult($str);
    echo "<center><font color=green size=5>mess successfully offed</center></font>";
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
else
echo "<center><font color=red size=5>You are a Robot!!! try again</font></center>";
}
unset($_COOKIE['ti']);
?>