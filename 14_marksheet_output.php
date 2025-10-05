<?php
$conn=mysqli_connect("localhost","root","","marksheet");
$res=" ";
$tot=0;
$per=0.0;
if(isset($_POST['submit']))
{
    $rno=$_POST['rno'];
    $nm=$_POST['nm'];
    $m1=$_POST['c1'];
    $m2=$_POST['c2'];
    $m3=$_POST['c3'];
    $tot=$m1+$m2+$m3;
    $per=$tot/3;
    $per=round($per,2);
    $qur="insert into `marks`(`roll_no`,`name`,`m1`,`m2`,`m3`,`total`,`per`)
    values('$rno','$nm','$m1','$m2','$m3','$tot','$per')";
    if(mysqli_query($conn,$qur))
    {
        $res="Data Insert Successfully";
    }
}
?>
<html>
    <head>
        <title>Marksheet Output</title>
    </head>
    <body>
        <form>
            <font color="red"><h2 align="center"><b>Student's Marksheet</b></h2></font>
            <table border="2" align="center">
                <tr>
                    <td>Roll No :</td>
                    <td><?php echo" ".$rno;?></td>
                </tr>
                <tr>
                    <td>Name :</td>
                    <td><?php echo" ".$nm;?></td>
                </tr>
                <tr>
                    <td>C51 :</td>
                    <td><?php echo" ".$m1;?></td>
                </tr>
                <tr>
                    <td>C52 :</td>
                    <td><?php echo" ".$m2;?></td>
                </tr>
                <tr>
                    <td>C53 :</td>
                    <td><?php echo" ".$m3;?></td>
                </tr>
                <tr>
                    <td>Total Marks:</td>
                    <td><?php echo" ".$tot;?></td>
                </tr>
                <tr>
                    <td>Percentage :</td>
                    <td><?php echo" ".$per;?></td>
                </tr>
            </table>
            <center><br><u>*<?php echo" ".$res ;?></u></center>
        </form>
    </body>
</html>