<?php
require_once "db.php";

$id = $_GET["id"];

// var_dump($id); return



$sql = "DELETE FROM todo where id= $id";

$data = mysqli_query($conn, $sql);


if ($data==TRUE){
    echo "deleted sucessfully";
    header("Location: readController.php");
    exit();
} else{
    echo "failed". mysqli_error($conn);
}