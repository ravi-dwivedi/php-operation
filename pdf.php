<?php
$file = $_SERVER['DOCUMENT_ROOT']."1.pdf";
if(file_exists($file))
{
    header("Content-type: application/pdf");
    header("Content-length: ".filesize($file));
    readfile($file);
}
    exit;
?>