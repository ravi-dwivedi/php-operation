<div style="margin-left:100px; margin-top: 25px;">
<br />
<form method="post" enctype="multipart/form-data">
Select your file here to upload :-   <input type="file" name="filename">
<br /><br /><br />
<input type="submit" name="upload" value="Upload"/>
<input type="submit" name="getinfo" value="Information">
</form>
<br /><br /><br />
<?php
if(isset($_REQUEST['getinfo']))
{    
    echo "File name :- ".$_FILES['filename']['name']."<br>";
    echo "File type :- ".$_FILES['filename']['type']."<br>";
    echo "File size :- ".$_FILES['filename']['size']."<br>";
    echo "File Temp name :- ".$_FILES['filename']['tmp_name']."<br>";
    echo "File Error :- ".$_FILES['filename']['error']."<br>"; 
    
}
if(isset($_REQUEST['upload']))
{
    $add = $_SERVER['DOCUMENT_ROOT']."img/";
   //  $handler = opendir("./img/"); 
     $s = $_FILES['filename']['tmp_name'];
     $add .= $_FILES['filename']['name'];
     if(move_uploaded_file($s,$add))
     {
        echo "File Upload successful";
        
        
     }
     $url = "img/".$_FILES['filename']['name'];
     
    /*while(false!==($filename=readdir($handler)))
    {
        if($filename=='.'||$filename=="..")
        continue;
    echo $filename."<br>";
    
    }*/
    
  //  closedir($handler);
  echo "<IMG src=$url height=200px width=200px></IMG>";
    }    
?>