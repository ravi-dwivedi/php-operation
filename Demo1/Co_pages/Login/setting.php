<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Committee</title>

<link href="../../css/style3.css" rel="stylesheet" />
<?php
session_start();
$row;
require_once('blogic.php');
    $obj = new Blogic();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
    if($_REQUEST['i']!=-1)
    {
    $str = "select * from employee where Id=$_REQUEST[i]";
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
    }
}
else
{
  //  header("location:Login1.php");
}
?>
</head>

<body>
<div id="ravi2" align="center"><img src="../../img/header.png"></img></div>
<div id="container" style="margin-top: 75px;">
<FORM method="post" enctype="multipart/form-data">
<fielset>
	<legend>Personal Details</legend>
	<table>
               <tbody>
	                <tr>
				<th class="feature">Employee Id</th>
				<th class="ravi1"><h2><input  type="text" name="t1" id="text" <?php
                if($_REQUEST['i']!=-1) 
                echo "value=$row[0]>";
                else 
                echo "/>";
                ?></h2></th>
			
			</tr>
		
			<tr>
				<td class="feature">Name</td>
				<td class="ravi1"><input type="text" id="text" name="t2"
                <?php
                if($_REQUEST['i']!=-1)
                echo "value=$row[1]>";
                else 
                echo "/>";
                ?></td>
				
			</tr>
			
			<tr>
				<td class="feature">Department</td>
				<td class="ravi1"><input type="text" id="text" name="t3" <?php
                if($_REQUEST['i']!=-1)
                echo "value=$row[2]>";
                else 
                echo "/>";
                ?></td>
				
			</tr>
			
			<tr>
				<td class="feature">Post</td>
				<td class="ravi1"><input  type="text" name="t4" id="text"<?php
                if($_REQUEST['i']!=-1)
                echo "value=$row[3]>";
                else 
                echo "/>";
                ?></td>
				
			</tr>
			
			<tr>
				<td class="feature">Since</td>
				<td class="ravi1"><input id="text" type="text" name="t5" <?php
               if($_REQUEST['i']!=-1)
                echo "value=$row[4]>";
                else 
                echo "/>";
                ?></td>
				
			</tr>
<tr>
				<td class="feature">Address</td>
				<td class="ravi1"><input id="text" type="text" name="t6" <?php
                if($_REQUEST['i']!=-1)
                echo "value=$row[5]>";
                else 
                echo "/>";
                ?></td>
				
			</tr>
            <tr>
				<td class="feature">Salary</td>
				<td class="ravi1"><input id="text" type="text" name="t7" <?php
                if($_REQUEST['i']!=-1) 
                echo "value=$row[6]>";
                else 
                echo "/>";
                ?></td>
				
			</tr>
            <?php
            if($_REQUEST['i']!=-1)
            {
              $arr = explode("/",$row[7]);  
            }
            ?>
                        <tr>
				<td class="feature">DATE OF BIRTH:</td>
				<td class="ravi1"><SELECT Name="day"><?php
                                    echo "<OPTION selected>--Day--</OPTION>";
                                  for($i=1;$i<=31;$i++)
                                    {
                                        echo "<OPTION VALUE=$i";
                                         if($_REQUEST['i']!=-1)
                                        {
                                            if($arr[0]==$i)
                                            echo " SELECTED";
                                        }
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Day&nbsp;&nbsp;
                                        <SELECT Name="month"><?php
                                    echo "<OPTION selected>--Month--</OPTION>";
                                  for($i=1;$i<=12;$i++)
                                    {
                                       echo "<OPTION VALUE=$i";
                                        if($_REQUEST['i']!=-1)
                                        {
                                            if($arr[1]==$i)
                                            echo " SELECTED";
                                        }
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Month&nbsp;&nbsp;
                                        <SELECT Name="year"><?php
                                    echo "<OPTION selected>--Year--</OPTION>";
                                  for($i=1950;$i<=2013;$i++)
                                    {
                                       echo "<OPTION VALUE=$i";
                                         if($_REQUEST['i']!=-1)
                                        {
                                            if($arr[2]==$i)
                                            echo " SELECTED";
                                        }
                                        echo ">".$i."</OPTION>";
                                     }
                                        ?>
                                        </SELECT>Year&nbsp;&nbsp;
</td>
				
			</tr>
           <tr><td class="feature">Image</td>
				<td class="ravi1"><input  type="file" name="image"></td>
				
			</tr> 
		</tbody>
	
	</table></fieldset>
    <input align="center" type="submit" value="Update" name="sub1"/><br /><br />
    <input align="center" type="submit" value="Insert" name="sub2"/>
    </form>
    <?php
    
    if(isset($_REQUEST['sub2']))
 {
    if(!empty($_REQUEST['t1'])&&!empty($_REQUEST['t2'])&&!empty($_REQUEST['t3'])
    &&!empty($_REQUEST['t4'])&&!empty($_REQUEST['t5'])&&!empty($_REQUEST['t6'])&&!empty($_REQUEST['t7'])&&
    $_REQUEST['day']!="--Day--"&&$_REQUEST['month']!="--Month--"&&$_REQUEST['year']!="--Year--")
{  
    if($_FILES['image']['error']==0)
    {
    $temp_name = $_FILES['image']['tmp_name'];
    }
    else
    {
        echo "Error In image File";
        break;
    }
    $date = $_REQUEST['day']."/".$_REQUEST['month']."/".$_REQUEST['year'];
    $mime = $_FILES['image']['type'];
    $handler = @fopen($temp_name,"r");
    $read = @fread($handler,filesize($temp_name));
    if($data=addslashes($read))
    {
    $str = "insert into employee values($_REQUEST[t1],'$_REQUEST[t2]','$_REQUEST[t3]','$_REQUEST[t4]','$_REQUEST[t5]','$_REQUEST[t6]',$_REQUEST[t7],'$date','$data','$mime')";
    $res = $obj->GetResult($str);
    if(mysql_affected_rows()>0)
    {
        header("location:admin.php?s=6");
    }
    else
    {
        header("location:admin.php?s=1");
    }
    }
    }
    else
    {
        echo "<font size=6 color=red>First Complete the entries!!!</font>";
    }
}
if(isset($_REQUEST['sub1']))
{  
    if($_FILES['image']['error']==0)
    {
    $temp_name = $_FILES['image']['tmp_name'];
    }
    else
    {
        echo "Error In image File";
        break;
    }
    $date = $_REQUEST['day']."/".$_REQUEST[month]."/".$_REQUEST[year];
    $mime = $_FILES['image']['type'];
    $handler = @fopen($temp_name,"r");
    $read = @fread($handler,filesize($temp_name));
    if($data=addslashes($read))
    {
    $str = "update employee set Id=$_REQUEST[t1],Name='$_REQUEST[t2]',Department='$_REQUEST[t3]',Post='$_REQUEST[t4]',Since='$_REQUEST[t5]',Address='$_REQUEST[t6]',Salary=$_REQUEST[t7],
    Date_of_Birth='$date',Image='$data',Image_Type='$mime' where Id=$_REQUEST[i]";
    $res = $obj->GetResult($str);
    if(mysql_affected_rows()>0)
    {
        header("location:admin.php?s=8");
    }
    else
    {
        header("location:admin.php?s=3");
    }
    }
    }   
    ?>