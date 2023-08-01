<?php

$connect = mysqli_connect("localhost","root","");
if(!$connect){
	die("Cannot connect" . mysqli_error());
}
mysqli_select_db($connect, "thesis") or die("cannot connect");
?>
