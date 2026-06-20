
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

<form action="insertContoller.php" method="POST">
 
<div class="md-6">
  <label for="item" class="form-label">ITEM</label>
  <input type="text" class="form-control" id="item" placeholder="Enter Item Name" name="item">
</div>
<div class="col-md-6">
  <label for="formGroupExampleInput2" class="form-label">Summary</label>
  <!-- <input type="text" class="form-control" id="summary" placeholder="(optional)" name ="summary"> -->
  <textarea name="summary" id="summary" placeholder="(Optional)"  rows="10" cols="62"></textarea>
</div>

&nbsp;
&nbsp;
&nbsp;


<select class="form-select" aria-label="Default select example" name="priority">
  <option value="" disabled selected>Select Priority</option>
  <option value="Low">Low</option>
  <option value="Medium">Medium</option>
  <option value="High">High</option>
  <option value="Critical">Critical</option>
</select>
 <br>
&nbsp;

<input type="submit" value="save">



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


