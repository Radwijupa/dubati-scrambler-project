<?php

require 'koneksi.php'; // file koneksi ke database

// Proses jika form disubmit
if (isset($_POST["contact_form"])) {
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Assuming $conn is your mysqli connection
  $stmt = $conn->prepare("INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $subject, $message);

  if ($stmt->execute()) {
    $success = "Your message has been sent. Thank you!";
    // Redirect to avoid form resubmission
    header("Location: ".$_SERVER['PHP_SELF']."?success=1");
    exit;
  } else {
    $error = "Failed to send message.";
  }

  $stmt->close();
}

$products = mysqli_query($conn, "SELECT * FROM products");
$articles = mysqli_query($conn, "SELECT * FROM articles");
$partners = mysqli_query($conn, "SELECT * FROM partners");
$events = mysqli_query($conn, "SELECT * FROM events");
$galeri = mysqli_query($conn, "SELECT * FROM gallery");
$team = mysqli_query($conn, "SELECT * FROM team");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ducati Scrambler</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/kolo.png" rel="icon">
  <link href="assets/img/kolo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
   <!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <h1><img src="assets/img/kolo.png" height="50">CLUB OF JOY</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>
  <main class="main" style="padding-top: 100px;">
    <!-- Stats Section -->
    <section id="stats" class="section light-background" style="padding-top: 90px;">

    <div class="container section-title" data-aos="fade-up">
    <h2>Products</h2>
  <p>CHECK OUR PRODUCTS<br></p>
</div>

<div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

<?php while ($p = mysqli_fetch_assoc($products)): ?>
  <div class="col-lg-3 col-md-6">
          <div class="stats-item d-flex flex-column text-center p-3 bg-white shadow-sm rounded h-100" style="transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.2)'" onmouseout="this.style.transform='none'; this.style.boxShadow='none'">
            <img src="admin/upload/<?= $p['image'] ?>" class="img-fluid mb-3 rounded" alt="<?= $p['name'] ?>">
            <h6><?= $p['name'] ?></h6>
            <p class="small text-muted"><?= nl2br(substr($p['description'], 0, 100)) ?></p>
            <a href="<?= $p['shop_link'] ?>" class="btn btn-sm btn-danger mt-auto" target="_blank">Contact To Our Dealer</a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <a href="index.php" class="btn btn-warning" style="margin-top: 20px;">Back</a>
  </div>
</section>

    </section><!-- /Stats Section -->

  </main>
</body>
<footer id="footer" class="footer dark-background" style="width: 100%; padding: 40px 0;">

<div class="container-fluid">
  <div class="row gy-5">
    <div class="col-lg-3 col-md-5 d-flex">
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

    <div class="col-lg-3 col-md-6 footer-links d-flex">
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

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
   
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

</html>