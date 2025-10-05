<?php
$a=array(1,2,3,4,5);
$b=array("n1 " => " php" , "n2 " => " python" , "n3 " => " rdbms");
?>
<html>
<head>
<title>array</title>
</head>
<body>
<form>
<table border="1" align="center">
	<tr>
		<td>Numeric array:</td>
		<td><?php
			foreach($a as $value)
			{
				echo " ".$value;
			}
		    ?>
		</td>
	</tr>
	<tr>
		<td>Associative array:</td>
		<td><?php
			foreach($b as $c=>$value)
			{
				echo "$c=>$value"."<br>";
			}
		    ?>
		</td>
	</tr>
</table>
</form>
</body>
</html>