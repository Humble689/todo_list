<?php 

require_once 'db.php';

$id = $_GET['id'];



$sql = "SELECT * FROM todo where id = ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result= mysqli_stmt_get_result($stmt);

$data = mysqli_fetch_assoc($result);

// var_dump($id);
// return
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TODO LIST</title>
  </head>
  <body>
    <h1 class="card-header text-center">TODO LIST</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<div class="container"> 
    <div class="row justify-content-center">

<div class="col-md-6">
<div class="card-body">  

<form action="updatecontroller.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
 
<div class="md-6">
  <label for="item" class="form-label">ITEM</label>
  <input type="text" class="form-control" id="item" placeholder="Enter Item Name" name="item" value="<?= $data['item'] ?>">
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput2" class="form-label">Summary</label>
  <!-- <input type="text" class="form-control" id="summary" placeholder="(optional)" name ="summary"> -->
<textarea name="summary" id="summary" placeholder="(Optional)" rows="10" cols="62"><?= htmlspecialchars($data['summary']) ?></textarea></div>

&nbsp;
&nbsp;
&nbsp;


<select class="form-select" aria-label="Default select example" name="priority">
  <!-- <option value="" disabled selected>Select Priority</option> -->
<option value="Low" <?= trim($data['Priority']) == "Low" ? "selected" : "" ?>>Low</option>
<option value="Medium" <?= trim($data['Priority']) == "Medium" ? "selected" : "" ?>>Medium</option>
<option value="High" <?= trim($data['Priority']) == "High" ? "selected" : "" ?>>High</option>
<option value="Critical" <?= trim($data['Priority']) == "Critical" ? "selected" : "" ?>>Critical</option> <br>
&nbsp;

<input type="submit" value="Update">



</form>

<div class="container-fluid d-flex justify-content-end align-items-start">
    <a href="readController.php">
        <button class="btn btn-primary" type="button">
            View list
        </button>
    </a>
</div>
</div>
</div>
</div>
  </body>
</html>


