<?php
$conn=mysqli_connect("localhost","root","","student");
?>
<html>
    <head>
        <title>Search record</title>
    </head>
    <body>
    <?php 
    $sql="select * from `user` where username like 'H%'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    ?>
        <table border="2" align="center">
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>Mobile No.</th>
            </tr>
            <?php   
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['mobile'];?></td><br>
            </tr>
        
        <?php 
        }}
    else{
        echo "<h3><center><b><u>No Data Found</u></b></center></h3>";
    }
    ?>
    </table>
    </body>
</html>