<?php
$res=" ";
if(isset($_POST['submit']))
{
$no=$_POST['num'];
if($no%2==0)
{
  $res= "number is even";
}
  else
{
  $res= "number is odd";
}
}
?>
<html>
<head>
<title>odd or even</title>
</head>
<body>
<form method="post">
	<table border="2" align="center">
	<tr>
		<td>enter the number:</td>
		<td><input type="text" name="num"></td>
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