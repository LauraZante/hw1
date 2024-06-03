<?php
$dbconfig = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'name' => 'hmw1'
];

$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
?>
