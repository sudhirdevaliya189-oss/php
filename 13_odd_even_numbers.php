<?php
$n=0;
if(isset($_POST['submit']))
{
$n=$_POST['num'];
}

?>
<html>
<head>
<title>odd or even numbers</title>
</head>
<body>
<form method="post">
	<table border="1" align="center">
	<tr>
		<td>enter the number:</td>
		<td><input type="text" name="num"></td>
	</tr>
	<tr align="center">
		<td>even numbers:</td>
		<td><?php 
			for($i=1;$i<=$n;$i++)
			{
				if($i%2==0)
				{
					echo " ".$i;
				}
			}
		 ?></td>
	</tr>
	<tr align="center">
		<td>odd numbers:</td>
		<td><?php 
			for($i=1;$i<=$n;$i++)
			{
				if($i%2!=0)
				{
					echo " ".$i;
				}
			}
		 ?></td>
	</tr>
	<tr align="center">
		<td colspan="2"><input type="submit" name="submit"></td>
	</tr>
	</table>
</table>
</form>
</body>
</html>
