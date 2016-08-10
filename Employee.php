<link href="style.css" rel="stylesheet" />
<div id="container" style="margin-top: 75px;">
<form>
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
				<td class="feature">Street</td>
				<td class="ravi1"><input type="text" id="text"  name="street"/></td>
				
			</tr>
			<tr>
				<td class="feature">City</td>
				<td class="ravi1"><input  id="text" type="text" name="city" />
			</tr>
            <tr>
				<td class="feature">Bank</td>
				<td class="ravi1"><input  id="text" type="text" name="bank" />
			</tr>
            <tr>
				<td class="feature">Salary</td>
				<td class="ravi1"><input  id="text" type="text" name="salary" />
			</tr>
            <tr>
				<td class="feature">Signup</td>
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
				<td class="feature">Search</td>
				<td ><input  type="submit" name="search" value="Search" />
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
    if(!empty($_REQUEST['name'])&&!empty($_REQUEST['id'])&&!empty($_REQUEST['salary'])&&!empty($_REQUEST['city'])&&!empty($_REQUEST['street'])&&!empty($_REQUEST['bank']))
{  
    $str = "insert into Employee values($_REQUEST[id],'$_REQUEST[name]','$_REQUEST[street]','$_REQUEST[city]','$_REQUEST[bank]',$_REQUEST[salary])";
    $rs = @mysql_query($str) or die("Query cannot we executed!!!");
    if(mysql_affected_rows()>0)
    {
        echo "<font size=6 color=green>Record Saved</font>";
    }
    mysql_close($link);
    }
    else
    {
        echo "<font size=6 color=red>First Complete the entries!!!</font>";
    }
}
if(isset($_REQUEST['show']))
{
    $str = "select * from Employee";
    $rs = mysql_query($str);
    while($row = mysql_fetch_row($rs))
    {
        echo "<font size = 5 color=green>Employee Id :- ".$row[0]."<br>";
        echo "Employee Name :- ".$row[1]."<br>";
        echo "Street :- ".$row[2]."<br>";
        echo "City :- ".$row[3]."<br>";
        echo "Bank :- ".$row[4]."<br>";
        echo "Salary :- ".$row[5]."<br>";
        echo "<br>";
    }
    mysql_close($link);
}
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
}
function search()
{
    $str = "select * from Employee WHERE Id=$_REQUEST[id]";
    $rs = mysql_query($str);
    if(false!==($row = mysql_fetch_row($rs)))
    {
        echo "<font size = 5 color=green>Employee Id :- ".$row[0]."<br>";
        echo "Employee Name :- ".$row[1]."<br>";
        echo "Street :- ".$row[2]."<br>";
        echo "City :- ".$row[3]."<br>";
        echo "Bank :- ".$row[4]."<br>";
        echo "Salary :- ".$row[5]."<br>";
        echo "<br>";
    }
    else
    {
    echo "Record Does Not exist";
     }
     }
     if(isset($_REQUEST['search']))
{
    if(!empty($_REQUEST['id']))
    {
        search();
        }
        else
        echo "Input id first!!!";
        }
?>
</div>
