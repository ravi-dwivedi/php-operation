<?php
session_start();
require_once('blogic.php');
    $obj = new Blogic();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
    $str = "select * from student where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
    $str = "select * from Login where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $row1 = mysql_fetch_row($res);
}
else
{
  header("location:../../Index.php");
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
    alert("Please Enter new or old user id");
    return false;
  }
  txt1 = document.getElementById("valid2");
  if(txt1.value==""||txt1.value==null)
  {
    txt1.style.background = "yellow";
    txt1.focus();
    alert("Please Enter you old password");
    return false;
  }
  txt1 = document.getElementById("ck1");
  if(txt1.checked)
  {
    txt2 = document.getElementById("valid3");
    txt3 = document.getElementById("valid4"); 
    if(txt2.value==""||txt1.value==null)
    {
        txt2.style.background = "yellow";
        txt2.focus();
        alert("Please Enter new Password");
        return false;
    }
    if(txt3.value==""||txt1.value==null)
    {
        txt3.style.background = "yellow";
        txt3.focus();
        alert("Please Enter Confirmation Password");
        return false;
    }
    if(txt3.value.toString()!=txt2.value.toString())
    {
    txt3.style.background = "yellow";
    txt3.focus();
    alert("Please Correct Confirmation Password");
    return false;  
    }  
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
  if(txt1.value!=""||txt1.value!=null)
  {
    txt1.style.background = "white";
    return false;
  }   }
      function validate4()
    {
        txt1 = document.getElementById("valid3");
  if(txt1.value!=""||txt1.value!=null)
  {
    txt1.style.background = "white";
    return false;
  }   }
      function validate5()
    {
        txt1 = document.getElementById("valid4");
        if(txt1.value!=""||txt1.value!=null)
  {
    txt1.style.background = "white";
    return false;
  }   }
    </script>
    
    <link href="../../css/style4.css" rel="stylesheet" type="text/css" />
<div class="logo">
<div style="margin-left: 0px;">
      <h1><a href="#">NIT <span>Jalandhar</span><small>India's Leading Institute</small></a></h1>
      </div>
    </div>
<link href="../../css/style2.css" rel="stylesheet" />
<div  style="margin-top: 20px;margin-left: 1000px;"><a href="logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>
<div  style="margin-top: 20px;margin-left: 1000px;"><a href="Home.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp</div>

<FORM method="post" enctype="multipart/form-data">

<div id="container">
<table border="1" cellpadding="0" cellspacing="0" align="center" style="margin-top: 60px ;">
<tr class="ravi1"><td class="feature" colspan="2">User Id  :- </td>
<td colspan="3" class="feature"><input  type="text" name="t1" size="50" id="valid1" onkeyup="return validate2()" <?php if(!empty($row[0])){echo "value=".$row[0];}?>>
<input type="submit" name="sub1" value="availability"/></td></tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">Old Password  :- </td>
<td colspan="3" class="feature"><input type="password" name="t2" size="50" id="valid2" onkeyup="return validate3()"/></td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">&nbsp;</td>
<td colspan="3" class="feature"><input  type="checkbox" name="t3" size="50" id="ck1"/>Change Password</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">New Password  :- </td>
<td colspan="3" class="feature"><input  type="password" name="t4" size="50" id="valid3" onkeyup="return validate4()"/></td>
</tr>
            <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">Confirm New Password  :- </td>
<td colspan="3" class="feature"><input type="password" name="t5" size="50" id="valid4" onkeyup="return validate5()"/></td>
</tr>
            <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">New Image:- </td>
<td colspan="3" class="feature"><input  type="file" name="image" size="50"/></td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">&nbsp;</td>
<td colspan="3" class="feature"><input  type="checkbox" name="t7" size="50" id="ck2" value="p"/>Change Image</td>
</tr>
           <tr>
<td>&nbsp;</td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="2">Hint:- </td>
<td colspan="3" class="feature"><input  type="text" name="t8" size="50"/></td>
</tr>
<tr class="ravi1">
<td class="feature" colspan="5"><center><input type="submit" value="Update" name="sub2" onclick="return validate1()"/></center></td>
</tr>
</table>
</FORM>
<br /><br />
<?php
if(isset($_REQUEST['sub2']))
 {
if($_FILES['image']['error']==0)
    {
    $temp_name = $_FILES['image']['tmp_name'];
    $mime = $_FILES['image']['type'];
    }
    else
    {
        $temp_name = "assets/img/empty.png";
        $mime = "image/png";
    }
    
    $count =0;
    $handler = @fopen($temp_name,"r");
    $read = @fread($handler,filesize($temp_name));
    $str = "select * from Login where Password='$_SESSION[pass]' and Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    if($row = mysql_fetch_row($res))
    {
        $count =$count +1;
        if(!empty($_REQUEST['t1']))
        {
     $str = "update student set Id='$_REQUEST[t1]' where Id='$_SESSION[user]'";
     $res = $obj->GetResult($str);
     }
    if(!empty($_REQUEST['t8']))
    {
    $str = "update Login set Hint='$_REQUEST[t8]' where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    }
    $str ="update Login set Id='$_REQUEST[t1]' where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    $_SESSION['user']=$_REQUEST['t1'];
    if(!empty($_REQUEST['t3']))
    {
    $str ="update Login set Password='$_REQUEST[t4]' where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);  
    $_SESSION['pass']=$_REQUEST['t4'];
    }
    if(!empty($_REQUEST['t7']))
    {
    if($data=addslashes($read))
    {
    $str = "update student set Image='$data',Type='$mime' where Id='$_SESSION[user]'";
    $res = $obj->GetResult($str);
    }
    }
    
       echo "<center><Font size=5 color=green>Updated</font></center>";
    }
    
    if($count==0)
        echo "<center><Font size=5 color=red>Failed to update Try Later</font></center>";
    
  }  
?>
<?php
if(isset($_REQUEST['sub1']))
{
if(!empty($_REQUEST['t1'])&&$_REQUEST['t1']!=$_SESSION['user'])
{
    $str = "select * from Login where Id='$_REQUEST[t1]'";
    $res = $obj->GetResult($str);  
    $no=0;
    while($row=mysql_fetch_row($res))
    {
        $no = $no +1;
    }
    if($no>=1)
    {
     echo "<center><Font size=5 color=red>User Id already in use</font><br></center>";   
    }
    else
    {
        echo "<center><Font size=5 color=green>Available<br></Font></center>"; 
    }
}
else if(empty($_REQUEST['t1']))
{
    echo "<center><Font size=5 color=red>Please enter a user Id </font></center>";
}
else
{
    echo "<center><Font size=5 color=yellow>Same as Previous </font></center>";
}
}
?>