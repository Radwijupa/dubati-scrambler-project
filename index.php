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

$products = mysqli_query($conn, "SELECT * FROM products ORDER BY id ASC LIMIT 4");
$articles = mysqli_query($conn, "SELECT * FROM articles ORDER BY id ASC LIMIT 2");
$partners = mysqli_query($conn, "SELECT * FROM partners");
$events = mysqli_query($conn, "SELECT * FROM events ORDER BY id DESC LIMIT 3");
$galeri = mysqli_query($conn, "SELECT * FROM gallery ORDER BY id DESC LIMIT 9");
$team = mysqli_query($conn, "SELECT * FROM team ORDER BY id ASC LIMIT 3");
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
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#stats">Products</a></li>
          <li><a href="#services">Events</a></li>
          <li><a href="#services-2">Highlight</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#team">Team</a></li>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/v3.webp" alt="" data-aos="fade-in">

      <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">GATHERING. TOURING. RACING.</h2>
        <p data-aos="fade-up" data-aos-delay="200">WELCOME TO THE OFFICAL DUCATI SCRAMBLER CLUB</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#about" class="btn-get-started">Get Started</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us - Ducati Scrambler</h3>
            <img src="assets/img/PAN.jpg" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ducati Scrambler (DS) is a community of Ducati motorcycle enthusiasts and riders, established on <strong>August 13, 2001</strong>. The club serves as a platform for Ducatisti across Indonesia to share passion, experience, and the lifestyle that comes with riding Italian-engineered machines.</p>
            <p>Since its inception, DCI has grown into a strong and united community through activities such as touring, trackday, gatherings, charity events, and rider safety education. With a spirit of brotherhood and togetherness, we continue to ride and explore the beauty of the archipelago while strengthening bonds among fellow riders.</p>
          </div>
        
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <h4 class="text-center md-4">
                Our Visions and Missions
              </h4>
              <p>
                More than just a motorcycle club — we are a family of passionate Ducati riders across the nation.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Founded on August 13, 2001, as an official community for Ducati enthusiasts.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Regularly organizes national and international touring events.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Actively involved in social causes and promoting safe riding in Indonesia.</span></li>
              </ul>
              <p>
                We believe that the spirit of riding is not just about speed — it's about connection, passion, and lifestyle. With DCI, every journey becomes more meaningful.
              </p>
        
              <div class="position-relative mt-4">
                <img src="assets/img/fptp.webp" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>        
      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="section light-background">

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
    <br>
    <center><a class="cta-btn" href="produk.php">See more</a></center>
  </div>
</section>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
  <h2>Events</h2>
  <p>Our Recent Events<br></p>
</div>

<div class="container" data-aos="fade-up" data-aos-delay="100">
  <div class="row gy-5">

    <?php $delay = 200; ?>
    <?php while ($e = mysqli_fetch_assoc($events)): ?>
    <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
      <div class="service-item">
        <div class="img aspect-ratio4">
          <img src="assets/img/<?php echo $e['image']; ?>" class="img-fluid" alt="">
        </div>
        <div class="member-info">
          <h3 class="text-center"><?php echo $e['title']; ?></h3>
          <p><?php echo nl2br($e['description']); ?></p>
        </div>
      </div>
    </div>
    <?php $delay += 100; ?>
    <?php endwhile; ?>
    <center><a class="cta-btn" href="event.php">See more</a></center>
  </div>
</div>
    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

    <div class="container justify-content-center" data-aos="fade-up">
    <h3 class="text-center">OUR PARTNERS</h3>

    <div class="row gy-4 justify-content-center">
      <?php while($row = mysqli_fetch_assoc($partners)): ?>
        <div class="col-xl-2 col-md-3 col-6 client-logo text-center">
          <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="<?php echo $row['name']; ?>">
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="container section-title" data-aos="fade-up">
          <h2>Join Us</h2>
          <p>Be Our Family<br></p>
        </div><!-- End Section Title -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Become part of the Ducati Scrambler</h3>
                <p class="fst-italic">
                  Being a D.S. member means being a member of a large community that shares your passion for Ducati. By joining a Ducati Official Club you will also enjoy many advantages and benefits designed especially for you.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Borgo Panigale Experience is a unique experience that a D.S. member can experience for free by booking your visit online at <a href="https://www.ducati.com/ww/en/borgo-panigale-experience"><span>Ducati.com</span></a></spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>By presenting <strong>the D.S card or the club section on your MyDucati APP</strong> for offline verification you can make purchases at the Factory Store and Bookshop with a 15% discount on apparel, spare parts and accessories.</span>.</li>
                </ul>
                <p>
                  Don't miss many other opportunities to immerse yourself in the history of Ducati and visit the factory where the Reds are built, enjoying the Borgo Panigale Experience.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/docc.jpeg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
  <h2>Highlight</h2>
  <p>Our Recent Highlight</p>
</div><!-- End Section Title -->

<div class="container my-5">
  <div class="row g-4">
  <?php while ($a = mysqli_fetch_assoc($articles)): ?>
      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="card d-flex position-relative h-100">
          <a href="artikel.php?id=<?= $a['id'] ?>" class="stretched-link">
            <img src="admin/upload/<?= $a['image'] ?>" class="card-img-top thumbnail-img" alt="Article Image">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><?= $a['title'] ?></h5>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <br>
    <center><a class="cta-btn" href="highlight.php">See more</a></center>
      </div>
    </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services 2 Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>CHECK OUR GALLERY</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <?php while ($g = mysqli_fetch_assoc($galeri)): ?>
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?php echo $g['category']; ?>">
        <div class="portfolio-content h-100">
          <img src="<?php echo $g['image']; ?>" class="img-fluid" alt="">
          <div class="portfolio-info aspect-ratio16">
            <h4><?php echo $g['title']; ?></h4>
            <p><?php echo $g['description']; ?></p>
            <a href="<?php echo $g['image']; ?>"
               title="<?php echo $g['title']; ?>"
               data-gallery="portfolio-gallery-<?php echo $g['category']; ?>"
               class="glightbox preview-link">
              <i class="bi bi-zoom-in"></i>
            </a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<br>
<center><a class="cta-btn" href="gallery.php">See more</a></center>
    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>CHECK OUR TEAM</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

        <?php $delay = 100; ?>
    <?php while ($t = mysqli_fetch_assoc($team)): ?>
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
        <div class="member">
          <div class="pic"><img src="<?= $t['image'] ?>" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4><?= $t['name'] ?></h4>
            <span><?= $t['position'] ?></span>
          </div>
        </div>
      </div>
      <?php $delay += 100; ?>
    <?php endwhile; ?>
    <center><a class="cta-btn" href="team.php">See more</a></center>
  </div>

</div>
    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section pt-5 pb-10 justify-content-center">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>contact us IF YOU INTRESTED TO BE ONE OUR FAMILY</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="mb-3" data-aos="fade-up" data-aos-delay="200">
            <iframe style="border:0; width: 100%; height: 350px;"
              src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d27269.07879590544!2d106.75982602053918!3d-6.580607822561864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1748360376113!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
          </div><!-- End Google Maps -->

        <div class="row gy-4">
          <div class="col-lg-8 ">
            <div class="row gy-8">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p style="text-align: justify;">Jalan Bukit Golf Utama PB02. Pondok Pinang. Jakarta Selatan, 12310, Jakarta selatan,  (01)</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>----</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>admin@docindonesia.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-4">
          <form action="" method="POST" class="contact-form p-4 shadow rounded bg-white">
          <input type="hidden" name="contact_form" value="1">
 
          <div class="row gy-3">
            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-md-12">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
              <textarea name="message" rows="5" class="form-control" placeholder="Message" required></textarea>
            </div>
            <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-warning w-100 py-2 rounded-pill shadow-sm">
              <i class="bi bi-send"></i> Send Message </button>
            </div>
  </div>
</form>
</div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- /Contact Section -->
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