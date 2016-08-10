<?php
if(empty($_REQUEST['g']))
{
    header("location:../../Index.php");
}
?>
<style type="text/css">
#body1{
    background-image: url(../../img/sfw.jpg);
}
#container{
    z-index: 5;
    border: black;
    background: silver;
    border-width: medium;
    border-style: solid;
    cursor: e-resize;
    width: 500px;
    height: 230px;
    text-align: center;
   margin-top: 12%;
    padding: 50px;
    -moz-border-radius: 40px;
        -webkit-border-radius: 40px;
          opacity:0.7;
  filter:alpha(opacity=70);
}
#valid1,#valid2{
background: #C0F0E4; border: black; font-family: cursive; z-index: auto;width: 250px;border-width: medium;border-style: solid;height: 30px;azimuth: center;overflow: auto;
}
.feature {
	width: 300px; text-align: left;
	font-size: 24px; font-weight: normal; color: #DD0736; 
}
.ravi12{
	background: rgba(255,255,255,0.05);
}
</style>
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
  txt2 = document.getElementById("valid2");
  if(txt2.value==""||txt2.value==null)
  {
    txt2.style.background = "Yellow";
    txt2.focus();
    alert("Please Enter your Password");
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
  }
  txt2 = document.getElementById("valid2");
  if(txt2.value!=""||txt2.value!=null)
  {
    txt2.style.background = "white";
    return false;
  } 
    }
    </script>
<center>
<body id="body1">
<div id="container">
<form>
<table>
<tr>
<td class="feature">Login Id</td>
<td class="ravi12"><input type="text" class="text" id="valid1" maxlength="10" name="id" onkeyup="return validate2()" <?php if(isset($_COOKIE['ui'])) {echo "value=".$_COOKIE['ui'];}?>></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td class="feature">Password</td>
<td class="ravi12"><input type="password" class="text" id="valid2" name="password" maxlength="20" onkeyup="return validate2()" <?php if(isset($_COOKIE['up'])) {echo "value=".$_COOKIE['up'];}?>></td>
</tr>
<tr><td>&nbsp;</td></tr>
<?php
if(!empty($_REQUEST['s']))
{
    echo "<td colspan=2><FONT color='Red' size='4'><center>Please enter a valid Id or Password!!!</center></FONT></td>";
}
?>
<?php
session_start();
if(isset($_REQUEST['g']))
{
$_SESSION['status']=$_REQUEST['g'];
}
?>
<tr>
<td align="right"><input type="checkbox" name="ck" /></td>
<td class="ravi12" align="left">Remember</td>
</tr><tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td>
<td class="feature" ><center><input id="valid" type="submit" name="sub" value="Login" onclick="return validate1()"/></center></td></tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td class="feature" colspan="2" ><center><a href="Login2.php">Forget Password</a></center></td></tr>
</table>
</form>
</div></center>
<?php
if(isset($_REQUEST['sub']))
{
if(!empty($_REQUEST['id'])&&!empty($_REQUEST['password']))
{
    
    $k = $_SESSION['status'];
   header("location:check.php?i=$_REQUEST[id]&p=$_REQUEST[password]&z=$k");
}
}
?>
</body>
<?php
if(isset($_REQUEST['ck']))
{
    setcookie("ui",$_REQUEST['id'],time()+7200);
    setcookie("up",$_REQUEST['password'],time()+3000);
}
?>
