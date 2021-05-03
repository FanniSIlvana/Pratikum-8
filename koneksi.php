<?php

$dbhost	= 'localhost';
$dbuser	= 'root';

$dbpass	= '';
$dbname	= 'php_validation';

$connect = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);

if ($connect->connect_error) {
	die ('Mohon maaf koneksi gagal:'. $connect->connect_error);

}


?>