<body style="margin-left: 100px; margin-top: 100px;"></body>
<?php
$arr = array("friend1"=>array("rollno"=>1,"name"=>"Ravi1","email"=>"ravi.dwivedi1@yahoo.com","contact no"=>9914257394,"img"=>"img\\1.jpg"),
"friend2"=>array("rollno"=>2,"name"=>"Ravi2","email"=>"ravi.dwivedi2@yahoo.com","contact no"=>8914257394,"img"=>"img\\2.jpg"),
"friend3"=>array("rollno"=>3,"name"=>"Ravi3","email"=>"ravi.dwivedi3@yahoo.com","contact no"=>7914257394,"img"=>"img\\3.jpg"),
"friend4"=>array("rollno"=>4,"name"=>"Ravi4","email"=>"ravi.dwivedi4@yahoo.com","contact no"=>6914257394,"img"=>"img\\4.jpg"),
"friend5"=>array("rollno"=>5,"name"=>"Ravi5","email"=>"ravi.dwivedi5@yahoo.com","contact no"=>5914257394,"img"=>"img\\5.jpg"),
"friend6"=>array("rollno"=>6,"name"=>"Ravi6","email"=>"ravi.dwivedi6@yahoo.com","contact no"=>4914257394,"img"=>"img\\6.jpg"));
?>
<form>
Select the friend name :-  <select name="t"><option>--Friend List--</option>
<?php
foreach($arr as $v=>$a)
{
    foreach($a as $b=>$c)
    {
        if($b=="name")
        echo "<option>".$c."</option>";
    }
}
?>
</select>
<br><br />
click me to get details :-  <input type="submit" name="sub" value="details">
</form>
<br />
<br />
<?php
if(isset($_REQUEST['sub']))
{
foreach($arr as $v=>$a)
{
    foreach($a as $b=>$c)
    {
     if($arr[$v]["name"]==$_REQUEST['t'])   
    echo $b."  =  ".$c."<br>";  
    }
}
echo "<br><br>";
foreach($arr as $v=>$a)
{
    foreach($a as $b=>$c)
    {
     if($arr[$v]["name"]==$_REQUEST['t']&&$b=="img")   
    echo "<img height=400px width=400px src=$c></img>";  
    }
}
}
echo count($arr,1);
?>
