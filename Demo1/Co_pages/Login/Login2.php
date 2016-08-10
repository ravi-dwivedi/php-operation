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
    height: 160px;
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
</style><script>
function validate()
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
    alert("Please Enter your Hint");
    return false;
  }
    }</script><center>
<body id="body1">
<div id="container">
<form>
<table>
<tr>
<td class="feature">Login Id</td>
<td class="ravi12"><input type="text" id="valid1" name="id" maxlength="30"/></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td class="feature">Hint</td>
<td class="ravi12"><input type="password" id="valid2" name="hint" maxlength="30"/></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td>
<td class="feature" ><center><input type="submit" name="sub" value="    Get Password   " onclick="return validate()"/></center></td></tr>
<tr><td>&nbsp;</td><td align="right"><a href="Login1.php">Back to Login</a></td></tr>
</table>
</form>
</div></center>
<br /><br /><br />
<?php
if(!empty($_REQUEST['id'])&&!empty($_REQUEST['hint']))
{
    header("location:check.php?i=$_REQUEST[id]&p=$_REQUEST[hint]&t=1");
}
?>
</body>
<?php
if(!empty($_REQUEST['pass']))
{
    echo "<font color=green size=6><center>Your Password is ".$_REQUEST['pass']."</center></font>";
}
if(!empty($_REQUEST['s']))
{
    echo "<font color=red size=6><center>Invalid Match</center></font>";
}
?>