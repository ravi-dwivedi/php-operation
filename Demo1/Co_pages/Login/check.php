<?php
require_once('blogic.php');
$obj = new Blogic();
session_start();
if(!empty($_REQUEST['i'])&&!empty($_REQUEST['p']))
{
    if(isset($_REQUEST['t']))
    {
    if($_REQUEST['t']==1)
    {
    $str = "select * from Login where Id=$_REQUEST[i] and Hint='$_REQUEST[p]'";
    }
    }
    else
    {
     $str = "select * from Login where Id=$_REQUEST[i] and Password='$_REQUEST[p]'";   
    }
    $res = $obj->GetResult($str);
    $row = mysql_fetch_row($res);
    if(mysql_num_rows($res)==1)
    {
        $_SESSION['user']=$row[0];
        $_SESSION['pass']=$row[1];
        if(isset($_REQUEST['t']))
        {
        if($_REQUEST['t']==1)
       { 
        header("Location:Login2.php?pass=$row[1]");
        }}
        else
        {
            if($_REQUEST['z']==1)
        header("Location:Home.php");
        if($_REQUEST['z']==2)
        header("location:admin.php");
}    }
    else
    {
        if(isset($_REQUEST['t']))
        {
        if($_REQUEST['t']==1)
        {
      header("location:Login2.php?s=1");
      }
      }
      else
      {
        header("location:Login1.php?s=1");
      }
    }
    }
?>