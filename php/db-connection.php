<?php

//Databasetilkobling

$port = 3306;
$username = "marchr16_cmarker";
$password = "HOTfcrrFNe0E";
$name = "marchr16_wordpress";
$host = "tek.westerdals.no";

$connection = new PDO("mysql:host={$host};dbname={$name};port={$port};charset=utf8", $username, $password);
