<?php
$res=" ";
if(isset($_POST['submit']))
{
$a=$_POST['num1'];
$b=$_POST['num2'];
$op=$_POST['op'];
switch($op)
{
	case 'add':
	$res=$a+$b;
	break;

	case 'sub':
	$res=$a-$b;
	break;
	
	case 'mul':
	$res=$a*$b;
	break;

	case 'div':
	$res=$a/$b;
	break;
}
}
?>
<html>
<head>
<title>arithmetic operator</title>
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
		<td><select name="op">
			<option name="add">add</option>
			<option name="sub">sub</option>
			<option name="mul">mul</option>
			<option name="div">div</option>
		</select></td>
	</tr>
	<tr>
		<td>Result:</td>
		<td><?php  echo " ".$res;    ?></td>
	</tr>
			
	<tr align="center">
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>
	</table>
</table>
</form>
</body>
</html>