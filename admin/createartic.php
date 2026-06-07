<?php include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $content = $_POST['content'];

  if (!empty($_FILES['image']['name'])) {
    $imageName = basename($_FILES['image']['name']);
    $targetDir = "upload/";
    $targetFile = $targetDir . $imageName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
      $stmt = $conn->prepare("INSERT INTO articles (title, content, image) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $title, $content, $imageName);
      $stmt->execute();

      header("Location: artikel.php");
      exit;
    } else {
      echo "<div class='alert alert-danger'>Failed to upload !</div>";
    }
  } else {
    echo "<div class='alert alert-warning'>Select the picture first.</div>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Artikel</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- TinyMCE Rich Text Editor -->
  <script src="https://cdn.tiny.cloud/1/zu0szi8xfcddrq06g0hskro194lyl6te0jp0bbucjtxk7pgd/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: '#content',
    height: 300,
    menubar: false,
    plugins: 'link image code lists',
    toolbar: 'undo redo | bold italic underline | bullist numlist | link image | code',
    branding: false
  });
</script>
</head>
<body style="background-color: #f8f9fa;">
  <div class="container mt-5">
    <div class="bg-white p-5 rounded shadow border">
      <h2 class="mb-4 text-center">📝 Add New Article</h2>
      <form method="POST" enctype="multipart/form-data">
        
        <div class="mb-3">
          <label for="title" class="form-label">Article Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Add Article Title" required>
        </div>

        <div class="mb-3">
          <label for="content" class="form-label">Article Content</label>
          <textarea name="content" id="content" class="form-control" placeholder="Write down here..."></textarea>
        </div>

        <div class="mb-4">
          <label for="image" class="form-label">Article Image</label>
          <input type="file" name="image" id="image" class="form-control" required>
          <div class="form-text">Upload Image</div>
        </div>

        <div class="d-flex justify-content-between">
          <a href="artikel.php" class="btn btn-secondary px-4">← Back</a>
          <button type="submit" class="btn btn-primary px-4">Save</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS (optional, for interactivity) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  document.querySelector('form').addEventListener('submit', function(e) {
    const content = tinymce.get("content").getContent({ format: 'text' }).trim();
    if (content.length === 0) {
      alert("Isi artikel tidak boleh kosong.");
      e.preventDefault();
    }
  });
</script>
</body>
</html>
