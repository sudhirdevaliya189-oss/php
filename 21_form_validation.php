<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
if(isset($_POST['submit']))
{
    $name=$_POST['nm'];
    $email=$_POST['email'];
    $web=$_POST['url'];
    $comm=$_POST['com'];
    if(empty($name) || empty($email))
    {
        $err1=$err2="Required";
    }
    else
    {
        if(!preg_match("/^[a-z A-Z]*$/",$name))
        {
            $err1="Name is not valid";
        }
        else
        {
            $err1="";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $err2="Email is not valid";
        }
        else
        {
            $err2="";
        }
        if(!filter_var($web, FILTER_VALIDATE_URL) && !empty($web))
        {
            $err3="Url is not valid";
        }
        else
        {
            $err3="";
        }
        if(!isset($_POST['gnm']))
        {
            $err5="Gender should be selected";
        }
        else{
            $err5="";
        }        
    }
}
?>
<html>
    <head>
        <title>Form Validation</title>
        <style>
        .er{
            color:red;
        }
        </style>
    </head>
    <body>
        <form method="post">
            <table align="center">
                <tr>
                    <td colspan="3"><h2>PHP Form Validation Example</h2></td>
                </tr>
                <tr>
                    <td colspan="3" class="er">*Required Field</h2></td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="nm"></td>
                    <td class="er">*<?php echo $err1;?></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td><input type="email" name="email"></td>
                    <td class="er">*<?php echo $err2;?></td>
                </tr>
                <tr>
                    <td>Website:</td>
                    <td><input type="text" name="url"></td>
                   
                </tr>
                <tr>
                    <td>Comment:</td>
                    <td><textarea row="5" name="com"></textarea></td>
        
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gnm">Male
                        <input type="radio" name="gnm">Female
                        <input type="radio" name="gnm">Other</td>
                    <td class="er">*<?php echo $err5;?></td>
                </tr>
                <tr>
                    <td colspan="3"><b><input type="submit" name="submit" value="submit">&nbsp;&nbsp;&nbsp;
                                        <input type="reset" name="re" value="Clear"></b></td>
                </tr>
            </table>
        </form>
    </body>
</html>
