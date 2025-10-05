<?php
session_start();
if(!isset($_SESSION['user']))
{
    echo "<script>window.location='P15_loginform.php';</script>";
}
echo "Welcome".$_SESSION['user'];
echo "<br><a href='#'>Sign out</a>";
?>