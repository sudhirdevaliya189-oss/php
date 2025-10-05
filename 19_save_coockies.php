<?php
session_start();
$err="";
if(isset($_POST['save']))
{
    $unm=$_POST['em'];
    $pass=$_POST['pass'];
    if(isset($_POST['rem']) && $_POST['rem']=="rem")
    {
        setcookie('unm',$unm,time()+(86400*30),"/"); //86400=1 day
        setcookie('pass',$pass,time()+(86400*30),"/"); //86400=1 day
    }
}
?>
<html>
    <head>
        <title>save cookies</title>
    </head>
    <body>
        <form method="post">
            <table align="center" border="2">
                <tr>
                    <td colspan="2"><h2>Sign In</h2></td>
                </tr>
                <tr>
                    <td>Enter Username:</td>
                    <td><input type="text" name="em" value="<?php if(isset($_COOKIE['unm']))
                                                            {
                                                                echo $_COOKIE['unm'];
                                                            }?>"></td>
                </tr>
                <tr>
                    <td>Enter Password:</td>
                    <td><input type="password" name="pass" value="<?php if(isset($_COOKIE['pass']))
                                                            {
                                                                echo $_COOKIE['pass'];
                                                            }?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" value="rem" name="rem">Remember me</td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Log in"></td>
                    <td><input type="reset" name="re" value="Clear"></td>
                </tr>
            </table>
        </form>
    </body>
</table>