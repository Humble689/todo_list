<?php


require_once "db.php";

$sql = "SELECT *FROM todo"; 

$result= mysqli_query($conn, $sql);

$data= mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($data); return;

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TO-Do</title>
  </head>
  <body>
    <div class="card-header text-center">
    <h1>TO-DO LIST</h1>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <div class="d-grid gap-2 d-md-block">
  <a href="index.php">
    <button class="btn btn-primary" type="button">Add Item</button> </a>
  <!-- <button class="btn btn-primary" type="button">Button</button> -->
</div>
    </a>
  </div>
</nav>


<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">item</th>
      <th scope="col">Priority</th>
      <th scope="col">Summary</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      

    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) {?>
    <tr>
        
      <th scope="row"><?= $row['id'] ?></th>
      <td><?= $row['item'] ?></td>
      <td><?= $row['Priority'] ?></td>
      <td><?= $row['summary'] ?></td>
<td>
  <form action="checkcontroller.php" method="POST">

    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <div class="form-check">
      <input class="form-check-input"
             type="checkbox"
             name="check"
             value="1"
             onchange="this.form.submit()"
             <?= $row['check'] == 1 ? 'checked' : '' ?>>

      <label class="form-check-label">
        <?= $row['name'] ?>
      </label>
    </div>

  </form>
</td>
      <td>
        <a href="deletecontroller.php?id=<?= $row['id']; ?>"> Delete</a>
      </td>

      
    </tr>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
    <?php } ?>
  </tbody>
</table>
</div>
  </body>
</html>