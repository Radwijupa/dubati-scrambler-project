<?php
include '../koneksi.php';
$products = mysqli_query($conn, "SELECT * FROM products");
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
      <title>Admin Page</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
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
      <link rel="stylesheet" href="css/bootstrap.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="">
                        <a href="index.php"><img class="logo_icon img-responsive" src="../assets/img/og.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/pp.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6>Admin-Radwijupa</h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="index.php">> <span>Event</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.php">> <span>Sponsor</span></a>
                           </li>
                           <li>
                              <a href="gallery.php">> <span>Gallery</span></a>
                           </li>
                           <li>
                              <a href="team.php">> <span>Team</span></a>
                           </li>
                           <li>
                              <a href="artikel.php">> <span>Articles</span></a>
                           </li>
                           <li>
                              <a href="produk.php">> <span>Product</span></a>
                           </li>
                           </ul>
                     </li>
                     <li><a href="mssg.php"><i class="fa fa-envelope-o orange_color"></i> <span>Message</span></a></li>
                        </ul>
                     </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
             
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/pp.jpg" alt="#" /><span class="name_user">Radwijupa</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard - Products</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                 <main id="main">
  <section id="menu" class="menu">
<body class="bg-light">
  <div class="container py-5">
    <div class="d-flex justify-content-between mb-4">
      <h2>Products List</h2>
      <a href="createproduk.php" class="btn btn-success">+ Add Product</a>
    </div>

    <div class="row">
      <?php while ($p = mysqli_fetch_assoc($products)) : ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <img src="upload/<?= $p['image'] ?>" class="card-img-top" alt="<?= $p['name'] ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?= $p['name'] ?></h5>
              <p class="small text-muted"><?= substr($p['description'], 0, 100) ?>...</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <a href="editproduk.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="deleteproduk.php?id=<?= $p['id'] ?>" onclick="return confirm('Sure to Delete this?')" class="btn btn-danger btn-sm">Delete</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      </main>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2025 Designed by Ducati Scrambler. All rights reserved.
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>