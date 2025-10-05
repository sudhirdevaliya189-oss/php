<?php
$res=" ";
if(isset($_POST['submit']))
{
$n=$_POST['num1'];
$fact=1;
for($i=1;$i<=$n;$i++)
{
	$fact=$fact*$i;
}
	$res=$fact;
}
?>
<html>
<head>
<title>factorial number</title>
</head>
<body>
<form method="post">
	<table border="1" align="center">
	<tr>
		<td>enter the number:</td>
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