<?php
$arr1 = array(554,86474,641646,46464,664464,56545,5545454,51456,646545,44654);
$op = array("searching","sorting asc","sorting dsc");
echo "<form>";
echo "Enter the number ro search :-  <input type='text' name='t1'/><br>";
echo "<select name ='oper'>";
for($i=0;$i<4;$i++)
{
    echo "<option>".$op[$i]."</option><br>";
}
echo "</select>";
echo "<input type ='submit' name='sub' value='Evaluate'/>";
echo "</form>";
if(isset($_REQUEST['sub']))
{
    
        switch($_REQUEST['oper'])
        {
            case "searching":
            if(!empty($_REQUEST['t1']))
            {
                for($i=0;$i<10;$i++)
                {
                    if($_REQUEST['t1']==$arr1[$i])
                    {
                        echo "Search Successful";
                    }
            }
            }
            else 
            echo "First enter the search number";
            break;
            case "sorting asc":
            sort($arr1);
            for($i=0;$i<10;$i++)
            {
            echo $arr1[$i]."<br>";
            }
            break;
            case "sorting dsc":
            rsort($arr1);
            for($i=0;$i<10;$i++)
            {
            echo $arr[$i]."<br>";
            }
            break;
        }
        }
?>