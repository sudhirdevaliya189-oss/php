<?php
date_default_timezone_set("asia/kolkata");
$current_date="30/08/2025";
$system_date=date("d/m/Y");
echo "<br><br>Current Date:".$current_date;
echo "<br>System Date:".$system_date;
if($current_date==$system_date)
{
echo "<br><br>date is match";
}
else
{
echo "<br><br>date is not match";
}