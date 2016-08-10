<div style="margin-left: 100px;">
<br>
<form action="file.php">
Enter File name            :- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="t1"><br><br />
<br>Enter the text to append   :- <textarea type="text" name="t2" columns=25"></textarea><br /><br />
<input type="submit" name="read" value="Read">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="write" value="Write" >
</form>
<form>
Request Output :-
<br />
<textarea type="text" name="output" rows="10" cols="50">
<?php
$b="";
if(isset($_REQUEST['read']))
{
    if(!empty($_REQUEST['t1']))
    {
        $filename = "img/".$_REQUEST['t1'];
        if(file_exists($filename))
        {
          $handler = fopen($filename,"r");
         
      while(!feof($handler))
            {
                $c = fread($handler,2);
                echo $c;
            }
            
            $b.="File open Successfully";
            
            fclose($handler);
        }
        else{
            $b .= "File doesn't exists!!!";
        }
    }
    else if(empty($_REQUEST['t1']))
    {
        $b .=  "Enter the file name first!!!";
    }
    }
    if(isset($_REQUEST['write']))
    {
    if(!empty($_REQUEST['t1'])&&!empty($_REQUEST['t2']))
    {
        $filename = $_REQUEST['t1'];
        if(file_exists($filename))
        {
          $handler = fopen($filename,"a");
          fwrite($handler,$_REQUEST['t2']);
          echo "File appended successfully";
    }
     else{
            $b .= "File doesn't exists!!!";
        }
    }
    else if(empty($_REQUEST['t1'])||empty($_REQUEST['t2']))
    {
        $b .=  "Complete the entries first!!!";
  }
    }
?>
</textarea>

</form></br>
<?php
echo "<br>".$b; 
?>