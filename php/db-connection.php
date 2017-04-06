<?php 
$port = 8889;
$username = "root";
$password = "root";
$name = "eksamen_gruppe17";

$connection = new PDO("mysql:host=localhost;dbname={$name};port={$port}", $username, $password);
