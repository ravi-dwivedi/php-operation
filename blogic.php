<?php
require_once('db.php');
class Blogic
{
    function OpenConnection()
    {
        $link = mysql_connect(HOST,USER,PASSWORD);
        if($link)
        {
            return $link;
        }
        else
        {
            return false;
        }
    }
    function Selectdb()
    {
        $db = mysql_select_db(DATABASE);
        if($db)
        {
            return true;
        }
        else
        {
        return false;    
        }
    }
    function ExcuteQuery($str)
    {
        self::OpenConnection();
        self::Selectdb();
        $res = mysql_query($str);
        if(mysql_affected_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function GetResult($str)
    {
        self::OpenConnection();
        self::Selectdb();
        $res = mysql_query($str);
        self::CloseConnection();
        if($res)
        {
            return $res;
        }
        else
        {
            return false;
        }
        
    }
    function CloseConnection()
    {
        mysql_close(self::OpenConnection());
    }
}



?>