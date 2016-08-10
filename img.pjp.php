 <?php
$link = @mysql_connect('localhost','root','')
or die("Server Cannot open");
mysql_select_db('Ravi');
if(isset($_REQUEST['show']))
{
   if(!empty($_REQUEST['id']))
    {
        $i = (int)$_REQUEST['id'];
        if($i>0)
        {
    $str = "select * from employee1 WHERE Id=$i";
    $rs = mysql_query($str);
    if(mysql_num_rows($rs)==1)
    {
        $row = mysql_fetch_array($rs);
        $mime = $row[4];
        header("Content-type: $mime");
        echo $row[3]; 
        }
        }
    mysql_close($link);
    ?>