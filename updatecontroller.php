<?php
require_once "db.php";

$id = $_POST['id'];
$item = $_POST['item'];
$summary = $_POST['summary'];
$priority = $_POST['priority'];

$sql = "UPDATE todo SET item = ?, summary = ?, priority = ? WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Prepare failed: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssi", $item, $summary, $priority, $id);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header("Location: readController.php");
    exit();
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}