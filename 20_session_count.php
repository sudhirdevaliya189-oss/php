<?php
session_start();
if(isset($_SESSION['count']))
{
    echo "Your Session Count is:".$_SESSION['count']."<br>";
    $_SESSION['count']++;
}
else
{
    $_SESSION['count']=1;
    echo "Session Does Not Exist";
}
?>