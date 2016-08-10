<link href="style.css" rel="stylesheet" />
<div id="container" style="margin-top: 75px;">
<form method="post" enctype="multipart/form-data">
	<table>
        <tbody>
             <tr>
				<th class="feature">Id</th>
				<th class="ravi1"><h2><input  type="text" name="id" id="text"/></h2></th>
	</tr>
    <tr>
				<td class="feature">Show</td>
				<td ><input  type="submit" name="show" value="Show" />
			</tr>
    </tbody>
    </table>
    </form>
    <?php
$link = @mysql_connect('localhost','root','')
or die("Server Cannot open");
mysql_select_db('Ravi');
if(isset($_REQUEST['show']))
{
   if(!empty($_REQUEST['id']))
    {
        $i = $_REQUEST['id'];
       
    $str = "select * from employee1 WHERE Id=$i";
    $rs = mysql_query($str);
    if(mysql_num_rows($rs)>0)
    {
     $row = mysql_fetch_array($rs);
   
echo "<a href='img.php?i=$row[0]'>";
echo "View Image  </a>";
  
        }
        
    mysql_close($link);
}
}    
?>