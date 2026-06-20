<?php
require_once "db.php";

function test($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripcslashes($data);
     return $data;
}


if ($_SERVER["REQUEST_METHOD"]== 'POST') {

$item = test($_POST['item']);
$summary= test($_POST['summary']);
$priority= test($_POST['priority']);


$sql = "INSERT INTO todo (item, summary, Priority) values (?,?,?)";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt){
    echo "Prepare failed" . mysqli_error($conn);
}

mysqli_stmt_bind_param($stmt, "sss", $item, $summary,$priority);

if (mysqli_stmt_execute($stmt)){
    mysqli_stmt_close($stmt);
    header("Location: readController.php");
    exit();
    

} else{
    echo "error". mysqli_error($conn);
}


}