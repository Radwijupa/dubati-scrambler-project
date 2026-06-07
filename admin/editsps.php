<?php
require '../koneksi.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM partners WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $image = $data['image'];

  if ($_FILES['image']['name']) {
    $img_name = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $path = 'assets/img/clients/' . $img_name;
    move_uploaded_file($tmp, '../assets/img/clients/' . $img_name);
    $image = $path;
  }

  $sql = "UPDATE partners SET name='$name', image='$image' WHERE id=$id";
  mysqli_query($conn, $sql);
  header("Location: dashboard_2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Edit Gallery</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <main class="container mt-5"></main>

   <div class="card shadow-sm p-4 mb-5 bg-white rounded" style="max-width: 600px; margin: 40px auto;">
  <h3 class="text-center mb-4">Edit Sponsor</h3>
  <form method="POST" enctype="multipart/form-data">
    
    <div class="mb-3">
      <label for="partnerName" class="form-label">Partner Name</label>
      <input type="text" name="name" id="partnerName" class="form-control" 
             value="<?= htmlspecialchars($data['name']) ?>" required>
    </div>

    <div class="mb-3">
      <label for="partnerImage" class="form-label">Upload New Logo (optional)</label>
      <input type="file" name="image" id="partnerImage" class="form-control">
      <?php if (!empty($data['image'])): ?>
      <?php endif; ?>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-danger px-4 rounded-pill">
        <i class="bi bi-save me-1"></i> Update Partner
      </button>
    </div>

  </form>
</div>
