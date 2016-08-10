<?php
$handler = opendir("./img/");
while(false!==($filename=readdir($handler)))
    {
        if($filename=='.'||$filename=="..")
        continue;
    echo "<a href='download.php?name=$filename'>".$filename."</a><br>";
    }
    closedir($handler);
?>