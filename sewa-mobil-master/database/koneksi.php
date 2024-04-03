<?php
	$kon = new mysqli('localhost','root','','sewamobil');
	if (!$kon) {
		die('Could not connect: ' . mysqli_error($con));
	}
?>
