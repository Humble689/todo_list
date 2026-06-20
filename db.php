<?php


$host = "localhost";
$username = "root";
$password = "Travis@12";
$database = "todo_list";


$conn = mysqli_connect($host, $username, $password, $database);

if ($conn) {
    // echo "connected";
} else {
    echo "error". mysqli_connect_error();
}
