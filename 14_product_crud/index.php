<?php
// data connection
$pdo = new PDO(
  "mysql:host=localhost;port=3306;port=3306;dbname=products_crud",
  "root",
  ""
);

// if connection fails, throw exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Querying the DB
$statement = $pdo->prepare("SELECT * FROM PRODUCTS ORDER BY CREATE_DATE DESC");
$statement->execute();
// Query results stored on variable
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($products);
// echo '</pre>';
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
    <h1>Products CRUD</h1>
    <p>
      <a href="create.php">
        <button class="btn btn-success">Create Product</button>
      </a>
    </p>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
          <th scope="col">Title</th>
          <th scope="col">Price</th>
          <th scope="col">Create</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
<!-- dynamically generating table content from the db -->
      <?php foreach ($products as $i => $product): ?>

          <tr>
            <th scope="row"><?php echo $i + 1; ?> </th>
            <td></td>
            <td><?php echo $product["title"]; ?> </td>
            <td><?php echo $product["price"]; ?> </td>
            <td><?php echo $product["create_date"]; ?> </td>
            <td>
              <button class="btn btn-sm btn-outline-primary">Edit</button>
              <button class="btn btn-sm btn-outline-danger">Delete</button>
            </td>
          </tr>

      <?php endforeach; ?>

      </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>