<?php
$host = 'localhost';
$db = 'perpajakan';
$usr = 'root';
$pwd = '';

// parameter = hostname, username, password, database
$conn = mysqli_connect($host, $usr, $pwd, $db); //true|false

if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}