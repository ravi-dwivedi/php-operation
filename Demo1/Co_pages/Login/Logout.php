<?php

session_start();
if(isset($_SESSION['user'])&&isset($_SESSION['pass']))
{
    session_destroy();
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
    header("location:../../Index.php");
}
else
{
      header("location:../../Index.php");  
}
?>