<?php
$conn=mysqli_connect("localhost","root","","marksheet");
$sql="select * from `marks`";
$res=mysqli_query($conn,$sql);
$cont=mysqli_num_rows($res);
if(isset($_POST['submit']))
{
    for($i=1;$i<=$cont;$i++)
    {
        $qur="delete from `marks` where `roll_no`=".$_POST['chk'.$i];
        mysqli_query($conn,$qur);
        echo $_POST['chk'.$i];
    }
    $res=mysqli_query($conn,$sql);
}
?>
<html>
    <body>
        <form method="post">
            <table align="center" border="2">
                <tr>
                    <th>Roll no.</th>
                    <th>Name</th>
                    <th>Marks1</th>
                    <th>Marks2</th>
                    <th>Marks3</th>
                    <th>Total</th>
                    <th>Percentage</th>
                    <th>select</th>
                </tr>
                <?php   
                if(mysqli_num_rows($res)>0)
                {
                    while($row=mysqli_fetch_assoc($res))
                {
                ?>
                <tr>
                    <td align="center"><?php echo $row['roll_no'];?></td>
                    <td align="center"><?php echo $row['name'];?></td>
                    <td align="center"><?php echo $row['m1'];?></td>
                    <td align="center"><?php echo $row['m2'];?></td>
                    <td align="center"><?php echo $row['m3'];?></td>
                    <td align="center"><?php echo $row['total'];?></td>
                    <td align="center"><?php echo $row['per'];?></td>
                    <td align="center"><input type="checkbox" value="<?php echo $row['roll_no'];?>" name="<?php echo 'chk'.$row['roll_no'];?>"></td>
                </tr>
                <?php } }?>
                <tr>
                    <td colspan="9" align="center"><input type="submit" name="submit" value="Delete">&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="reset" name="clear" value="Clear"></td>
                </tr>
            </table>
        </form>
    </body>
</html>