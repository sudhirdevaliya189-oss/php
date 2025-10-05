<?php
$res=" ";
if(isset($_POST['submit']))
{
$n=$_POST['num1'];
$n1=0;
$n2=1;
for($i=1;$i<=$n;$i++)
{
	$res.= $n1;
	$next=$n1+$n2;
	$n1=$n2;
	$n2=$next;
}
}
?>
<html>
<head>
<title>fibonacci series</title>
</head>
<body>
<form method="post">
	<table border="1" align="center">
	<tr>
		<td>enter the number 1:</td>
		<td><input type="text" name="num1"></td>
	</tr>
	<tr align="center">
		<td colspan="2"><?php echo " " .$res; ?></td>
	</tr>
	<tr align="center">
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>
	</table>
</table>
</form>
</body>
</html>