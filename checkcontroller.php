<?php
require_once "db.php";

$id = $_POST['id'];
$check = isset($_POST['check']) ? 1 : 0;

$sql = "UPDATE todo SET `check` = $check WHERE id = $id";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql);


if(!$result){
    echo "failed". mysqli_error($conn);
} else{
    header("Location: readController.php");
    exit();
}