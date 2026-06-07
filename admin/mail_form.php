<?php if (isset($_GET['success'])): ?>
  <div class="alert alert-success text-center">
    Email berhasil dikirim!
  </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kirim Email</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Optional: FontAwesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f4f6f9;
    }
    .email-form {
      max-width: 600px;
      margin: auto;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="bg-white p-5 shadow rounded email-form">
      <h3 class="mb-4 text-center"><i class="fas fa-envelope"></i> Send Email</h3>
      
      <form method="POST" action="mail.php">
        <div class="mb-3">
          <label for="email" class="form-label">To (Email Receiver)</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="example@domain.com" required>
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
        </div>

        <div class="mb-4">
          <label for="message" class="form-label">Message</label>
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Write your message..." required></textarea>
        </div>

        <div class="d-flex justify-content-between">
          <a href="mssg.php" class="btn btn-secondary">← Back</a>
          <button type="submit" class="btn btn-primary px-4">Send</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
