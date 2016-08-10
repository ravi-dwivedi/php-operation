
<?php
session_start();
$row;
require_once('blogic.php');
if(isset($_SESSION['user']))
{
    
    $obj = new Blogic();
    if(isset($_SESSION['other']))
    {
    $str = "select * from employee where Id=$_SESSION[other]";
    }
    else
    $str = "select * from employee where Id=$_SESSION[user]";
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
    if(isset($_SESSION['other']))
    {
        $str = "select * from family where Id=$_SESSION[other]";
        }
        else
    $str = "select * from family where Id=$_SESSION[user]";
    $res = $obj->GetResult($str);
    }
else
{
    header("location:../../Index.php");
}
?>
<html>
<head>
<style type="text/css">
marquee[Attributes Style] {
-webkit-marquee-increment: 2px;
-webkit-marquee-direction: up;
width: 200px;
height: 150px;
}
user agent stylesheetmarquee {
display: inline-block;
overflow: -webkit-marquee;
}
</style>
<link href="../../css/style2.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/styles.css" />
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
<script>
function change0()
{
  txt1 = document.getElementById("rag");
  txt1.style.background = "#EF8C0A";
  txt1.style.fontFamily = "Chiller";
  txt1.style.fontSize = "30px";
}
function change01()
{
  txt1 = document.getElementById("rag");
  txt1.style.background = "white";
  txt1.style.fontFamily = "Tohoma";
  txt1.style.fontSize = "20px";
}
function change1()
{
  txt1 = document.getElementById("li1");
  txt1.style.fontFamily = "Chiller";
  txt1.style.fontSize = "30px";
}
function change2()
{
  txt1 = document.getElementById("li2");
  txt1.style.fontFamily = "Chiller";
  txt1.style.fontSize = "30px";
}
function change3()
{
  txt1 = document.getElementById("li3");
  txt1.style.fontFamily = "Chiller";
  txt1.style.fontSize = "30px";
}
function change4()
{
  txt1 = document.getElementById("li4");
  txt1.style.fontFamily = "Chiller";
  txt1.style.fontSize = "30px";
}
function change5()
{
  txt1 = document.getElementById("li5");
  txt1.style.fontFamily = "Chiller";
  txt1.style.fontSize = "30px";
}function change6()
{
  txt1 = document.getElementById("li6");
  txt1.style.fontFamily = "Chiller";
  txt1.style.fontSize = "30px";
}function change11()
{
  txt1 = document.getElementById("li1");
  txt1.style.fontFamily = "Tohoma";
  txt1.style.fontSize = "20px";
}function change21()
{
  txt1 = document.getElementById("li2");
  txt1.style.fontFamily = "Tohoma";
  txt1.style.fontSize = "20px";
}function change31()
{
  txt1 = document.getElementById("li3");
 txt1.style.fontFamily = "Tohoma";
  txt1.style.fontSize = "20px";
}function change41()
{
  txt1 = document.getElementById("li4");txt1.style.fontFamily = "Tohoma";
  txt1.style.fontSize = "20px";
}function change51()
{
  txt1 = document.getElementById("li5");txt1.style.fontFamily = "Tohoma";
  txt1.style.fontSize = "20px";
}function change61()
{
  txt1 = document.getElementById("li6");txt1.style.fontFamily = "Tohoma";
  txt1.style.fontSize = "20px";
}
</script>
<title>
Profile
</title>
</head>
<body>
<table border="1px" align="center" width="80%" cellpadding="0" cellspacing="0">
<tr>
<td  height="120px"><img src="../../img/header.png"/></td>
</tr>
<tr>
<td>
<table width="100%">
<tr >
<td width="30%px" align="left" valign="bottom"><img src="../../img/snow.png" height="50px"/><form method="post"><input type="text"  align="center" name="searcht" style="width: 200px; background: #C0F0E4; border: black; font-family: cursive; z-index: auto;width: 200px;border-width: medium;border-style: solid;height: 30px;azimuth: center;overflow: auto;"/><input type="submit" value="Search" name="search"/></form></td>
<td height="100px"><nav id="colorNav">
			<ul>
				<li class="green">
					<a href="#" class="icon-home"></a>
					<ul>
						<li><a href="Home.php">Home</a></li>
						<li><a href="../../Index.php">Main Home</a></li>
						<li><a href="Logout.php">Log Out</a></li>
					</ul>
				</li>
				<li class="red">
					<a href="#" class="icon-cogs"></a>
					<ul>
						<li><a href="#">Profile</a></li>
						<li><a href="#">Notifications</a></li>
						<li><a href="#">Privacy options</a></li>
						<li><a href="#">Account Settings</a></li>
					</ul>
				</li>
				<li class="blue">
					<a href="#" class="icon-twitter"></a>
					<ul>
						<li><a href="#">Find colleague on twitter</a></li>
						<li><a href="#">Find colleague on Facebook</a></li>
					</ul>
				</li>
				<li class="yellow">
					<a href="#" class="icon-beaker"></a>
					<ul>
						<li><a href="#">Achievements</a></li>
						<li><a href="#">Works</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Entertainment Zone</a></li>
					</ul>
				</li>
				<li class="purple">
					<a href="#" class="icon-envelope"></a>
					<ul>
						<li><a href="#">Complaint Box</a></li>
					</ul>
				</li>
			</ul>
		</nav></td>
        <td width="30%" align="right" valign="bottom"><a>Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
        </tr>
</table>
</td>
</tr>
<tr>
<td height="600px">
<table border="1" width="100%" >
<tr>
<td height="600px" width="20%">
<ul>
<li>Wife
<ul>
<?php
if(isset($_SESSION['user']))
{
while($row3 = mysql_fetch_row($res))
{
    if($row3[3]=="wife")
    {
        echo "<li>".$row3[1]."</li>";
    }
}
}
?></ul></li>
<li>Childrens<ul>
<?php
if(isset($_SESSION['user']))
{
     $obj1 = new Blogic();
    $str1 = "select * from family where Id=$_SESSION[user]";
    $res1 = $obj1->GetResult($str1);
while($row1 = mysql_fetch_row($res1))
{
    if($row1[3]=="children")
    {
        echo "<li>".$row1[1]."<li>";
    }
}
}
?>
</ul>
</li>
<li>Parents
<ul>
<?php
if(isset($_SESSION['user']))
{ $obj2 = new Blogic();
    $str2 = "select * from family where Id=$_SESSION[user]";
    $res2 = $obj2->GetResult($str2);
while($row2 = mysql_fetch_row($res2))
{
    if($row2[3]=="parent")
    {
        echo "<li>".$row2[1]."<li>";
    }
}
}
?>
</ul></li>
</ul></td>
<td valign="top"><br />&nbsp;&nbsp;<img src="view_image.php?i=<?php if(isset($_SESSION['user']))
echo $row[0]; ?>" height="120px" width="120px" ></img>
<br /><br />
<div id="container" style="margin-top: 75px;">
	<table align="center" width="75%">
               <tbody>
	                <tr class="ravi1">
				<td class="feature">Name</td>
				<td><?php if(isset($_SESSION['user']))echo $row[1]; ?></td>
			
			</tr>
		
			<tr class="ravi1">
				<td class="feature">Department</td>
				<td ><?php if(isset($_SESSION['user']))echo $row[2]; ?></td>
				
			</tr>
			
			<tr class="ravi1">
				<td class="feature">Post</td>
				<td ><?php if(isset($_SESSION['user']))echo $row[2]; ?></td>
				
			</tr>
			
			<tr class="ravi1">
				<td class="feature">Since</td>
				<td class="ravi12"><?php if(isset($_SESSION['user']))echo $row[3]; ?></td>
				
			</tr>
			
			<tr class="ravi1">
				<td class="feature">Address</td>
				<td class="ravi1"><?php if(isset($_SESSION['user']))echo $row[4]; ?></td>
				
			</tr>
<tr class="ravi1">
				<td class="feature">Salary</td>
				<td class="ravi1"><?php if(isset($_SESSION['user']))echo $row[5]; ?></td>
				
			</tr>
<tr class="ravi1">
				<td class="feature">Date Of Birth</td>
				<td class="ravi1"><?php if(isset($_SESSION['user']))echo $row[6]; ?></td>
				
			</tr>
		</tbody>
	
	</table></div>
</td>
<td width="20%" valign="top">
<MARQUEE bgcolor scrollamount="2" direction="up" loop="true" width="90%" height="250px" ONMOUSEOVER="stop()" onmouseout="start()">
 <font color="maroon" style="font-size: 20px;"><ul><li><div id="li1" onmouseover="change1()" onmouseout="change11()">Morning time is likely to change</div></li>
<li ><div id="li2" onmouseover="change2()" onmouseout="change21()">Their is strike continuing in the workers</div></li>
<li ><div id="li3" onmouseover="change3()" onmouseout="change31()">Please confirm your identity before entering</div></li>
<li><div id="li4" onmouseover="change4()" onmouseout="change41()">Morning shift is llikely to change</div></li>
<li ><div id="li5" onmouseover="change5()" onmouseout="change51()">All are informed to wear formal cloths</div</li>
<li><div id="li6" onmouseover="change6()" onmouseout="change61()">Thats it</div></li></ul></font></MARQUEE>
</td>
<div id="rag" onmouseover="change0()" onmouseout="change01()"><Center><?php 
if(isset($_SESSION['user']))
{
    echo "Welcome ".$row[1];
}
?></Center></div>
</tr></table>
</td>
</tr>
<tr>
<td height="100px">
<table width="100%">
<tr >
<td width="100px">&nbsp;&nbsp;&nbsp;<img src="../../img/community.jpg" height="100px" align="bottom"/></td>
<td width="200px" align="center"><font face="chiller" size="6">Copy Right &copy; 2013</font></td>
<td width="100px"><img src="../../img/keepout.png" height="90px" align="right"/></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
<?php
if(isset($_REQUEST['search']))
{
    if(isset($_REQUEST['searcht']))
    {
        $strr = "Select Id from employee where Name=$_REQUEST[searcht]";
        $res = $obj->GetResult($strr);
        $row = mysql_fetch_row($res);
        if(mysql_affected_rows()==1)
        {
        session_start();
            $_SESSION['other']=$row[0];
            header("location:profile.php?i=$_SESSION[other]"); 
        }
    }
}
?>
<?php
if(empty($_SESSION['user'])&&empty($_SESSION['pass']))
{
    header("location:../../Index.php");
}
?>
<?php
if(isset($_SESSION['other']))
{
    session_destroy();
    unset($_SESSION['other']);
}
?>
<?php
if(isset($_REQUEST['search']))
{
    if(!empty($_REQUEST['searcht']))
    {
         $obj1 = new Blogic();
        $strr = "Select * from employee where Id=$_REQUEST[searcht]";
        $res1 = $obj1->GetResult($strr);
        $row1 = mysql_fetch_row($res1);
        if(mysql_num_rows($res1)==1)
        {
            session_start();
            $_SESSION['other']=$row1[0];
            header("location:Profile.php?"); 
        }
    }
}
?>