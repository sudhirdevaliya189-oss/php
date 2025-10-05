<?php
$result="";
$conn=mysqli_connect("localhost","root","","student");
if(isset($_POST['insert']))
{
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $bdate=$_POST['bdate'];
    $query="insert into `birthdays`(`id`,`fname`,`lname`,`bdate`) values('$id','$fname','$lname','$bdate')";
    $res=mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)>0)
    {
        $result="data Inserted";
    }
    else
    {
        $result="Error.. try again";
    }
}
if(isset($_POST['menu']))
{
    header("location:18_operation_ondb.php");
    exit();
}
?>
<html>
    <head>
        <title>Insert Data</title>
        <style>
            .btn{
                margin:15px;
            }
            .d{
                background-color:#96D4D4;
            }
        </style>
    </head>
    <body align="center" bgcolor="white">
        <form method="post">
            <div style="border:1px solid; padding:20px;" class="d">
                <h2><b><u>Insert Record</u></b></h2><br>
                Enter ID:<br><input type="text" name="id"><br>
                Enter First Name:<br><input type="text" name="fname"><br>
                Enter last Name:<br><input type="text" name="lname"><br>
                Enter Birthdate:<br><input type="date" name="bdate"><br><br>
                <input type="submit" name="insert" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Clear">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="menu" value="menu"><br><br>
                <h2><b><?php echo $result;?></b></h2> 
        </div>          
        </form>
    </body>
</html>