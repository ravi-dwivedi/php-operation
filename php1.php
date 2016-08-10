<?php
if(isset($_COOKIE['user']))
{
    echo $_COOKIE['user'];
}
else
{
    echo "cookie not created";
}
/*
if(isset($_COOKIE['id']))
{
    echo $_COOKIE['id'];
}
else
{
    echo "cookie not created";
}
session_start();
echo "<br><br><br>";
if(isset($_SESSION['cnt']))
{
 
    echo $_SESSION['cnt'];
}
else
{
    echo "SESSION not created";
}
echo session_id('cnt');
echo "<br><br><br>";
if(isset($_SESSION['cnt1']))
{
    echo $_SESSION['cnt1'];
}
else
{
    echo "SESSION not created";
}

session_destroy();
unset($_SESSION['cnt']);
unset($_SESSION['cnt1']);  */
?>