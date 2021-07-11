<?php
// data connection
$pdo = new PDO(
  "mysql:host=localhost;port=3306;port=3306;dbname=products_crud",
  "root",
  ""
);

// if connection fails, throw exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  /* _$POST is a global var where POST request values are stored */
  $title = $_POST["title"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $date = date("Y-m-d H:i:s");

  // var_dump( $_POST);

  // echo '<pre>';
  // var_dump($_SERVER);
  // echo '</pre>';

  /* calling execute directly on the db insert can result in SQL injection attacks */
  $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date) 
                   VALUES (:title, :image, :description, :price, :date)");

  $statement->bindValue(":title", $title);
  $statement->bindValue(":image", "");
  $statement->bindValue(":description", $description);
  $statement->bindValue(":price", $price);
  $statement->bindValue(":date", $date);

  $statement->execute();
}

$errors = [];

if (!$title) {
  $errors[] = "Product title is required";
}

if (!$price) {
  $errors[] = "Product price is required";
}
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
    <a href="index.php">Go back</a>

    <div class="alert alert-danger">
      <?php foreach ($errors as $error): ?>
        <div><?php echo $error; ?></div>
      <?php endforeach; ?>
    </div>

/** get exposes the parameters in the URL, therefore post method is more secure. */
    <form action="" method="POST">
      <div class="form-group">
        <label>Product Image</label>
        <br>
        <input type="file" name="image">
      </div>
      <div class="form-group">
        <label for="">Product Title</label>
        <input type="title" name="title" class="form-control" placeholder="Enter">
      </div>
      <div class="form-group">
        <label for="">Product Desc</label>
        <textarea class="form-control" name="description" placeholder="Enter"></textarea>
      </div>
      <div class="form-group">
        <label for="">Product Price</label>
        <input type="number" name="price" step=".01" class="form-control mb-3" placeholder="Enter">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>