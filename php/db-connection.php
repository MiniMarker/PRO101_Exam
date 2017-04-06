<?php

//LOCALHOST

//$port = 8889;
//$username = "root";
//$password = "root";
//$name = "eksamen_gruppe17";
//$host = "localhost";


$port = 3306;
$username = "marchr16_cmarker";
$password = "HOTfcrrFNe0E";
$name = "marchr16_wordpress";
$host = "tek.westerdals.no";

$connection = new PDO("mysql:host={$host};dbname={$name};port={$port}", $username, $password);
