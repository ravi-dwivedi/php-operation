<?php
$arr = array("item1"=>array("item11"=>11,"item12"=>12,"item13"=>13),"item2"=>array("item21"=>21,"item22"=>22));
foreach($arr as $a=>$b)
{
    foreach($b as $c=>$d)
    {
        echo $c." ".$d."<br>";
    }
}

?>
Select the city   :-      <form><select name="t1"> 
<option >--select me--</option>
<option selected="<?php
if($_REQUEST['t1']=="hello")
{
    echo "1";
}
else
echo "0";
?>">hello</option>
<option selected="<?php
if($_REQUEST['t1']=="hiii")
{
    echo "true";
}
else
echo "false";
?>">hiii</option>
<option selected="<?php
if($_REQUEST['t1']=="kanpur")
{
    echo "true";
}
else
echo "false";
?>">kanpur</option>
<option selected="<?php
if($_REQUEST['t1']=="delhi")
{
    echo "true";
}
else
echo "false";
?>">delhi</option>
</select>
<br />
<br />
<input type="submit" name="sub"> <br />
you selected   :-      <input type="text" value="<?php
if(isset($_REQUEST['sub']))
{
$a = $_REQUEST['t1'];


    echo $a;

}
?>">
</form>
