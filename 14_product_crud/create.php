<?php 
// data connection
$pdo = new PDO('mysql:host=localhost;port=3306;port=3306;dbname=products_crud', 'root', '');

// if connection fails, throw exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Querying the DB
$statement = $pdo->prepare('SELECT * FROM PRODUCTS ORDER BY CREATE_DATE DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="./app.css" rel="stylesheet">

    <title>Products CRUD</title>
  </head>
  <body class="p-5">
    <h1>Create new Product</h1>

    <form action="" method="post">
      <div class="form-group">
        <label>Product Image</label>
        <br>
        <input type="file">
      </div>
      <div class="form-group">
        <label for="">Product Title</label>
        <input type="title" class="form-control" placeholder="Enter">
      </div>
      <div class="form-group">
        <label for="">Product Desc</label>
        <textarea class="form-control" placeholder="Enter"></textarea>
      </div>
      <div class="form-group">
        <label for="">Product Price</label>
        <input type="number" step=".01" class="form-control mb-3" placeholder="Enter">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>