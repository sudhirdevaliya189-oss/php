<html>
    <head>
        <title>Display Data</title>
        <style>
        .tclr{

        }
        th, td, tr{
            border-color: #96D4D4;
        }
        </style>
    </head>
    <body align="center">
        <form method="post">
            <table border="1" align="center">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birth Date</th>
                </tr>
                <?php 
                $conn=mysqli_connect("localhost","root","","student");
                if(isset($_POST['menu']))
                {
                    header("location:18_operation_ondb.php");
                    exit();
                }
                if(isset($_POST['menu']))
                {
                    header("location:18_operation_ondb.php");
                    exit();
                }
                $query="Select * from `birthdays`";
                $res=mysqli_query($conn,$query);
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
                echo "<tr>";
                echo "<td  colspan='4' style='color:#ff0000; border-style:dotted; text-align:center;'>Total record :".mysqli_num_rows($res)."</td>";
                echo "</tr>";
                ?>
            </table><br>
            <input type="submit" name="menu" value="menu">
        </form>
    </body>
</html>