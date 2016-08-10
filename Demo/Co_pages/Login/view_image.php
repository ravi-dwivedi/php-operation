<?php
require_once('blogic.php');
if(isset($_GET['i']))
{
    $i=(int)$_GET['i'];
    if($i>0)
    {
        $obj = new Blogic();
        $str = "select * from student where Roll_No=".$_GET['i'];
        $rs =$obj->GetResult($str);
        if(mysql_num_rows($rs)==1)
        {
            $row = mysql_fetch_array($rs);
            $mime=$row['Type'];
            header("Content-type:$mime");
            echo $row['Image'];
        }
    }
}
?>