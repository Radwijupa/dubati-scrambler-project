<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $shop_link = $_POST['shop_link'];
  $image = $_FILES['image']['name'];
  $tmp = $_FILES['image']['tmp_name'];
  move_uploaded_file($tmp, "upload/" . $image);

  mysqli_query($conn, "INSERT INTO products (name, description, image, shop_link) VALUES ('$name', '$description', '$image', '$shop_link')");
  header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Add New Product</h2>
    <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white">
      <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Product Description</label>
        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
      </div>
      <div class="mb-3">
        <label for="shop_link" class="form-label">Online Shop Link</label>
        <input type="url" name="shop_link" id="shop_link" class="form-control" required>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" name="image" id="image" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success mb-2">Save Product</button>
      <a href="produk.php" class="btn btn-secondary">Back</a>
    </form>
  </div>
</body>
</html>