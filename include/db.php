<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'task_manager';

//crear conexion 
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed:",
    $conn>connect_error"');
}


