<?php
$result="";
$conn=mysqli_connect("localhost","root","","student");
if(isset($_POST['menu']))
{
    header("location:18_operation_ondb.php");
    exit();
}
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $query="delete from `birthdays` where id='$id'";
    $res=mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn)>0)
    {
        $result="Data Deleted";
        header("Refresh");
    }
    else
    {
        $result="Error.. try again";
    }
}
$query="select * from `birthdays`";
$res=mysqli_query($conn,$query);
echo "There are ".mysqli_num_rows($res)."   records";
?>
<html>
    <head>
        <title>Delete data</title>
        <style>
            th, td, tr {
                border-color: #96D4D4;
            }
        </style>
    </head>
    <body align="center">
        <form method="post"><br><br>
            <table border="1" align="center">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                </tr>
                <?php 
                if(mysqli_num_rows($res)>0) 
                {
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo"<tr>";
                        echo"<td>".$row['id']."</td>";
                        echo"<td>".$row['fname']."</td>";
                        echo"<td>".$row['lname']."</td>";
                        echo"<td>".$row['bdate']."</td>";
                        echo"</tr>";
                    }
                }  
                ?>
            </table><br><br>
            Enter ID Number to delete:<input type="text" name="id" style="width:50px";><br><br> 
                                    <input type="submit" name="submit" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="reset" name="Clear">&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="submit" name="menu" value="menu"><br>
            <h3><b><u><?php echo $result; ?></u></b></h3>
        </form>
    </body>
</html>