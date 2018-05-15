<?php
$connect = mysqli_connect('localhost', 'root', '', 'crc');

if (mysqli_connect_errno())
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>
