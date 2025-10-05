<?php 
echo "<br><h1>current date in different format</h1>";
date_default_timezone_set("asia/kolkata");
echo "<br><br>Current date in dd/mm/yy format:".date("d/m/y");
echo "<br>Current date in dd/mm/yyyy format:".date("d/m/Y");
echo "<br>Current date in dd MON yyyy format:".date("d M Y");
echo "<br>Current date in Day, dd MON yyyy format:".date(" D , d M Y");
echo "<br>Current date in Day, dd MONTH yyyy format:".date(" D , d F Y");
?>
