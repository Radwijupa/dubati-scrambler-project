<?php

require 'koneksi.php';
$id = $_GET['id'] ?? 0;

$result = $conn->query("SELECT * FROM articles WHERE id = $id");
if ($result->num_rows == 0) {
  echo "Artikel tidak ditemukan.";
  exit;
}
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ducati Scramblers</title>

  <!-- Favicons -->
  <link href="assets/img/kolo.png" rel="icon">
  <link href="assets/img/kolo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
  
  .duckati-text {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  line-height: 1.4;
  color: #222;
  max-width: 600px;
  margin: 0 auto;
  text-align: left;
}

.ducati-lamborghini p {
  font-size: 15px;
  line-height: 1.6;
  color: #333;
  font-family: 'Open Sans', sans-serif;
}
    body {
      font-family: 'Open Sans', sans-serif;
      line-height: 1.7;
      font-size: 16px;
      color: #333;
    }
    strong {
      font-weight: 700;
    }
    em {
      font-style: italic;
    }
    
    </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image  logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src="assets/img/kolo.png" height="100">CLUB OF JOY</h1>
      </a>
    </div>
  </header>

  <main class="main" style="padding-top: 80px;">

<section id="ducati-lamborghini" class="py-5">
<div class="container section-title">
  <h2><a href="index.php">company</a></h2>
  </div>
  <div class="container section-title">
        <h1><?= $data['title'] ?></h1>
      </div>

      <div class="container">
        <div class="text-center mb-4">
          <img src="admin/upload/<?= $data['image'] ?>" class="img-fluid w-8 mb-4" alt="<?= $data['title'] ?>">
        </div>

        <div class="duckati-text" style="font-family: 'Open Sans', sans-serif; font-size: 15px; line-height: 1.6; color: #333;">
          <?php
          $paragraphs = explode("\n", $data['content']);
          foreach ($paragraphs as $p) {
            echo "<p>" . nl2br(trim($p)) . "</p>";
          }
          ?>
    </div>
  </div>
</section>
</main>
</body> 


<footer id="footer" class="footer dark-background" style="width: 100%; padding: 40px 0;">

<div class="container-fluid">
  <div class="row gy-5">
    <div class="col-lg-3 col-md-6 d-flex">
      <i class="bi bi-geo-alt icon"></i>
      <div>
        <h4>  Address</h4>
        <p>
          Jalan Bukit Golf Utama PB02. Pondok Pinang. Jakarta Selatan, 12310, Jakarta selatan,(01) - ID<br>
        </p>
      </div>

    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-telephone icon"></i>
      <div>
        <h4> Our Contact</h4>
        <p>
        <strong>Telephone:</strong> -<br></a>
          <strong>Email:</strong> admin@docindonesia.com<br></a>
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-5 footer-links d-flex">
<i class=""></i>
<div>
<img src="assets/img/pogo.png" alt="" style="width: 90px; height: auto;">
</div>
</div>

    <div class="col-lg-3 col-md-6 footer-links">
      <h4> Follow Us</h4>
      <div class="social-links d-flex">
        <a href="https://www.instagram.com/ducati/?utm_source=website&utm_medium=footermain&utm_campaign=social_banner" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ducati-motor-holding/?utm_source=website&utm_medium=footermain&utm_campaign=social_banner" class="instagram"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.tiktok.com/@ducati" class="instagram"><i class="bi bi-tiktok"></i></a>
        <a href="https://x.com/ducatimotor?utm_source=website&utm_medium=footermain&utm_campaign=social_banner" class="instagram"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.youtube.com/user/DucatiMotorHolding" class="instagram"><i class="bi bi-youtube"></i></a>
      </div>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">Ducati Scrambler</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
  </div>
</div>

</footer>

  <!-- JS Vendor (Optional kalau pakai AOS dll.) -->
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>