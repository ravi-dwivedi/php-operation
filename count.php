<div style="margin-left: 100px;">
<br>
<form action="php2.php">
Enter File name            :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1"><br><br />
<br>Enter the word to search   :- <input type="text" name="t2" ><br /><br />
<input type="submit" name="search" value="Search">
</form>
<?php
$b="";
$num=0;
$copy=$_REQUEST['t2'];
if(isset($_REQUEST['search']))
{
    if(!empty($_REQUEST['t1']))
    {
        if(!empty($_REQUEST['t2']))
    {
        $filename = "img/".$_REQUEST['t1'];
        if(($filename))
        {
        $handler = fopen($filename,"r");
        
        while(!feof($handler))
            {
                $c = fgets($handler,2048);
                $v = explode(" ",$c);
              //  print_r($v);    
                echo "<br>"; 
                foreach($v as $a)
                {
                    if($copy==$a)
                    {
                    $num = $num + 1;
                    echo "The Total No. of Ocuurence of ".$copy." = ".$num;
                    
                    }
                echo "<br>".$a."<br>";
                    }    
                }
                 echo "The Total No. of Ocuurence of ".$copy." = ".$num;
               
            $b.="File open Successfully";
            
            fclose($handler);
        }
        else
        {
            $b .= "File doesn't exists!!!";
        }
        }
        else 
        echo "First enter the word to search";
        }
    else if(empty($_REQUEST['t1']))
    {
        $b .=  "Enter the file name first!!!";
    }
}    
?>

</br>
<?php
echo "<br>".$b;
?>