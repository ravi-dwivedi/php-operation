<link href="style.css" rel="stylesheet" />
<div id="container" style="margin-top: 75px;">
<form method="post" enctype="multipart/form-data">
	<table>
        <tbody>
             <tr>
				<th class="feature">Id</th>
				<th class="ravi1"><h2><input  type="text" name="id" id="text"></h2></th>
			
			</tr>
	         <tr>
				<td class="feature">Name</td>
				<td class="ravi1"><input type="text" id="text" name="name"/></td>
				
			</tr>
			<tr>
				<td class="feature">Salary</td>
				<td class="ravi1"><input type="text" id="text"  name="salary"/></td>
				
			</tr>
			<tr>
				<td class="feature">Image</td>
				<td class="ravi1"><input  type="file" name="image"></td>
			</tr>
            <tr>
				<td class="feature">Insert</td>
				<td><input  type="submit" name="insert" value="Sign Up"/>
			</tr>
            <tr>
				<td class="feature">Show</td>
				<td ><input  type="submit" name="show" value="Show" />
			</tr>
            <tr>
				<td class="feature">Update</td>
				<td ><input  type="submit" name="update" value="Update" />
			</tr>
            <tr>
				<td class="feature">Delete</td>
				<td ><input  type="submit" name="delete" value="Delete" />
			</tr>
            <tr>
				<td class="feature">Reset</td>
				<td><input  type="reset" />
			</tr>
         </tbody>
   </table>           
</form>
<br /><br /><br />
<?php
$link = @mysql_connect('localhost','root','')
or die("Server Cannot open");
mysql_select_db('Ravi');
if(isset($_REQUEST['insert']))
{
    if(!empty($_REQUEST['name'])&&!empty($_REQUEST['id'])&&!empty($_REQUEST['salary']))
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
    $mime = $_FILES['image']['type'];
    $handler = @fopen($temp_name,"r");
    $read = @fread($handler,filesize($temp_name));
    if($data=addslashes($read))
    {
    $str = "insert into employee1 (Id,Name,Salary,Image,Image_Type) values($_REQUEST[id],'$_REQUEST[name]',$_REQUEST[salary],'$data','$mime')";
    $rs = @mysql_query($str) or die("Query cannot we executed!!!");
    if(mysql_affected_rows()>0)
    {
        echo "<font size=6 color=green>Record Saved</font>";
    }
    mysql_close($link);
    }
    else
    {
        echo "File can not be read";
    }
    }
    else
    {
        echo "<font size=6 color=red>First Complete the entries!!!</font>";
    }
}

if(isset($_REQUEST['show']))
{
   if(!empty($_REQUEST['id']))
    {
    $str = "select * from employee1 WHERE Id=$_REQUEST[id]";
    $rs = mysql_query($str);
    if(mysql_num_rows($rs)==1)
    {
        
        $row = mysql_fetch_array($rs);
        $mime = $row[4];
        echo "Employee Id :- ".$row[0]."<br>";
        echo "Employee Name :- ".$row[1]."<br>";
        echo "Salary :- ".$row[2]."<br>";
        echo "<br>";
        echo "<a src='image.php?ravi=$row[3]&type=$row[4]'>view image</a>";
       header("location:image.php?ravi=".$row[3]);   
        echo "Hello"; 
        }
    mysql_close($link);
}
}
/*
if(isset($_REQUEST['update']))
{
    if(!empty($_REQUEST['id']))
{  
    $str = "update employee set Name='$_REQUEST[name]',Street='$_REQUEST[street]',City='$_REQUEST[city]',Bank='$_REQUEST[bank]',Salary=$_REQUEST[salary] WHERE Id=$_REQUEST[id]";
    $rs = @mysql_query($str) or die("Query cannot we executed!!!");
    if(mysql_affected_rows()>0)
    {
        echo "<font size=6 color=green>Record Updated</font>";
    }
    mysql_close($link);
    }
    else
    {
        echo "<font size=6 color=red>Enter the Id!!!</font>";
    }
}
if(isset($_REQUEST['delete']))
{
    if(!empty($_REQUEST['id']))
{  
    $str = "delete from employee WHERE Id=$_REQUEST[id]";
    $rs = @mysql_query($str) or die("Query cannot we executed!!!");
    if(mysql_affected_rows()>0)
    {
        echo "<font size=6 color=green>Record Deleted</font>";
    }
    mysql_close($link);
    }
    else
    {
        echo "<font size=6 color=red>Enter the Id!!!</font>";
    }
}*/
if(isset($_REQUEST['show']))
{
    if(!empty($_REQUEST['id']))
    {
        echo "<img src='image.php'></img>";
    }
}
?>
</div>

