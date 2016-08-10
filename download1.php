<?php
$path = $_SERVER['DOCUMENT_ROOT']."img/";
$fullPath = $path.$_GET['name'];
if ($fd = fopen ($fullPath, "r")) 
{    
    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);
    switch ($ext) 
    {
        case "jpeg":
        header("Content-type:application/image");
        header("Content-Disposition: attachment;
         filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
        break;
        case "pdf":
        header("Content-type:application/pdf");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use 'attachment' to force a download
        break;
        default:
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\"");
    }
    header("Content-length: $fsize");
    header("Cache-control:private");
    while(!feof($fd)) 
    {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit;
?>