<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'labExamRev';
$conn = '';

try {
    $conn = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception) {
    echo '<h1>Could Not Connect</h1>';
}


?>