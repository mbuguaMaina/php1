<?php


$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'database1';

$conn = new mysqli($host,$username,$pass,$db);
if($conn->connect_error) die('Something went wrong. Please try again later.');

