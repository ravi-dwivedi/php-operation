<?php
require_once('blogic.php');
if(isset($_GET['i']))
{
    $i=(int)$_GET['i'];
    if($i>0)
    {
        $obj = new Blogic();
        $str = "select Id,Image,Image_Type from employee where Id=".$_GET['i'];
        $rs =$obj->GetResult($str);
        if(mysql_num_rows($rs)==1)
        {
            $row = mysql_fetch_array($rs);
            $mime=$row['Image_Type'];
            header("Content-type:$mime");
            echo $row['Image'];
            
        }
    }
}
?>