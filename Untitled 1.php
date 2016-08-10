<form>
<input type="file" name="img"/>
<input type="submit" name="sub"/>
</form>
<?php 
if(isset($_REQUEST['sub']))
{
    if($_FILES['img']['error']==0)
    {
    $temp_name = $_FILES['img']['tmp_name'];
    }
    echo $temp_name;
}
?>