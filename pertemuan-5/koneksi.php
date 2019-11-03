<?php 

$db = new mysqli("localhost","root","","pendaftaran_siswa");

	if (mysqli_connect_errno()) {
		echo "Error : " . mysqli_connect_error();
	}

?>