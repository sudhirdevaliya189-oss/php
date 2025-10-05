<?php
session_start();
$conn=mysqli_connect("localhost","root","","loginform");
$output=" ";
if(isset($_POST['submit']))
{
    $us=$_POST['unm'];
    $pwd=$_POST['pass'];
    $qur="select * from `login` where `username`='$us' and  `password`='$pwd'";
    $res=mysqli_query($conn,$qur);
    if(mysqli_num_rows($res)>0)
    {
        $_SESSION['user']=$us;
        echo "<script>window.location='P15_loginform_output.php';</script>";
    }
    else{
        $output="Incorrect Username or Password";
    }
}
?>
<html>
    <head>
        <title>Login form</title>
    </head>
    <body>
        <form method="post">
                <table border="2" align="center">
                <tr align="left">
                    <th colspan="2">Login</th>
                </tr>
                <tr>
                    <th>UserName :</th>
                    <td><input type="text" name="unm"></td>
                </tr>
                <tr>
                    <th>Password :</th>
                    <td><input type="password" name="pass"></td>
                </tr>
                 <tr align="right">
                    <th colspan="2"><input type="submit" value="Login" name="submit"></th>
                </tr>
            </table>
        </form>
        <center><?php echo" ".$output ;?></center>
    </body>
</html>