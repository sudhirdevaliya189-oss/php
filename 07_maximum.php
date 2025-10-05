<?php
$res=" ";
if(isset($_POST['submit']))
{
$no1=$_POST['num1'];
$no2=$_POST['num2'];
$no3=$_POST['num3'];
if($no1>$no2 && $no1>$no3)
{
	$res= "number 1 is maximum";
}
else if($no2>$no1 && $no2>$no3)
{
	$res= "number 2 is maximum";
}
else
{
	$res= "number 3 is maximum";
}
}
?>
<html>
<head>
<title>maximum between three numbers</title>
</head>
<body>
<form method="post">
	<table border="1" align="center">
	<tr>
		<td>enter the number 1:</td>
		<td><input type="text" name="num1"></td>
	</tr>
	<tr>
		<td>enter the number 2:</td>
		<td><input type="text" name="num2"></td>
	</tr>
	<tr>
		<td>enter the number 3:</td>
		<td><input type="text" name="num3"></td>
	</tr>
	<tr align="center">
		<td colspan="2"><?php echo " ".$res; ?></td>
	</tr>
	<tr align="center">
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>
	</table>
</table>
</form>
</body>
</html>