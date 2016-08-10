<link href="style.css" rel="stylesheet" />
<div id="container" style="margin-top: 75px;">
<form>
	<table>
               <tbody>
	                <tr>
				<th class="feature">Roll No</th>
				<th class="ravi1"><h2><input  type="text" name="roll" id="text"></h2></th>
			
			</tr>
		
			<tr>
				<td class="feature">Name</td>
				<td class="ravi1"><input type="text" id="text" name="name"/></td>
				
			</tr>
			
			<tr>
				<td class="feature">Fees</td>
				<td class="ravi1"><input type="text" id="text"  name="fee"/></td>
				
			</tr>
			
			<tr>
				<td class="feature">City</td>
				<td class="ravi1"><input  type="text" name="city" />
			</tr>
            <tr>
				<td class="feature">Submit</td>
				<td><input  type="submit" name="insert" />
			</tr>
            <tr>
				<td class="feature">Show</td>
				<td ><input  type="submit" name="show" />
			</tr>
            <tr>
				<td class="feature">Reset</td>
				<td><input  type="reset" />
			</tr>
            
 <table>           
</form>
<br /><br /><br />
<?php
$link = @mysql_connect('localhost','root','')
or die("Server Cannot open");
mysql_select_db('Ravi');
if(isset($_REQUEST['insert']))
{
    if(!empty($_REQUEST['name'])&&!empty($_REQUEST['roll'])&&!empty($_REQUEST['fee'])&&!empty($_REQUEST['city']))
{  
    $str = "insert into student values($_REQUEST[roll],'$_REQUEST[name]',$_REQUEST[fee],'$_REQUEST[city]')";
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
    $str = "select * from student";
    $rs = mysql_query($str);
    while($row = mysql_fetch_row($rs))
    {
        echo "<font size = 5 color=green>Roll No :- ".$row[0]."<br>";
        echo "Name :- ".$row[1]."<br>";
        echo "Fees :- ".$row[2]."<br>";
        echo "City :- ".$row[3]."</font><br>";
        echo "<br>";
    }
    mysql_close($link);
}
?>
</div>
