<?php
include '../koneksi.php';
$id = $_GET['id'];
$product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id = $id"));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $shop_link = $_POST['shop_link'];

  if ($_FILES['image']['name']) {
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp, "upload/" . $image);
    mysqli_query($conn, "UPDATE products SET name='$name', description='$description', shop_link='$shop_link', image='$image' WHERE id=$id");
  } else {
    mysqli_query($conn, "UPDATE products SET name='$name', description='$description', shop_link='$shop_link' WHERE id=$id");
  }

  header("Location: produk.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Edit Product</h2>
    <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm bg-white">
      <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= $product['name'] ?>" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Product Description</label>
        <textarea name="description" id="description" class="form-control" rows="4" required><?= $product['description'] ?></textarea>
      </div>
      <div class="mb-3">
        <label for="shop_link" class="form-label">Online Shop Link</label>
        <input type="url" name="shop_link" id="shop_link" class="form-control" value="<?= $product['shop_link'] ?>" required>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Product Image (leave blank if not changing)</label>
        <input type="file" name="image" id="image" class="form-control">
        <img src="upload/<?= $product['image'] ?>" alt="Current Product Image" class="img-thumbnail mt-2" width="150">
      </div>
      <button type="submit" class="btn btn-primary mb-3">Update</button>
      <a href="produk.php" class="btn btn-secondary">Back</a>
    </form>
  </div>
</body>
</html>
