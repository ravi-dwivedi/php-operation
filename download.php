<?php
$path = $_SERVER['DOCUMENT_ROOT']."img/";
$fullpath = $path.$_GET['name'];
if($fd = fopen($fullpath,"r"))
{
    $fsize = filesize($fullpath);
    $path_parts = pathinfo($fullpath);
    $ext = strtolower($path_parts["extension"]);
    switch($ext)
    {
        case "jpeg":
        header("Content-type: application/image");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
        break;
        case "pdf":
        header("Content-type:application/pdf");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
        break;
        default:
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
        break;
    }
        header("Content-length: $fsize");
        header("Cache-control: private");
     while(!feof($fd))
        {
           $buffer = fread($fd, 2048);
           echo $buffer;
        }
        
    }
fclose($fd);
exit;
?>