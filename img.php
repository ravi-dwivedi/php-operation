 <?php
$link = @mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('Ravi') or die(mysql_error());
   if(isset($_GET['i']))
    {
        $i = (int)$_GET['i'];
        if($i>0)
        {
    $str="select * from employee1 WHERE Id=".$i;
    $rs = mysql_query($str) or die(mysql_error());
    if(mysql_num_rows($rs)>0)
    {
        $row = mysql_fetch_array($rs) or die(mysql_error());
        $mime = $row['Image_Type'];
        // header("Content-type:$mime"); 
      header("Content-type:image/jpeg");
        echo $row['Image'];
        //var_dump($row[3]);
        }
        }
    }
    ?>