<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$link=mysqli_connect("localhost","root","","beauty_pluses");
function dbFormat($givenDate)
{
	$givenDate=explode("-",$givenDate);
	$givenDate=$givenDate["2"]."-".$givenDate["1"]."-".$givenDate["0"];
	return $givenDate;
}
?>