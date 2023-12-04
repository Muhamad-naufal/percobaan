<?php
session_start();
include "public/config/connection.php";
// Check for success message
if (isset($_SESSION['success_message'])) {
  echo '<script>alert("' . $_SESSION['success_message'] . '")</script>';
}

// Check for error message
if (isset($_SESSION['error_message'])) {
  echo '<script>alert("' . $_SESSION['error_message'] . '"); window.location.href = "registrasi.php";</script>';
}
?>

<?php
require_once 'util.php';

// Cek apakah pengguna sudah login
if (!isUserLoggedIn()) {
  redirectToLoginPage();
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Home</title>
  <?php
  include  "public/layouts/head.php";
  ?>
</head>

<body>

  <?
  include "public/layouts/preloader.php";
  ?>

  <div class="page">
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
          <?php
          include "public/layouts/header.php";
          ?>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap">
                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                  <li><a class="icon fa fa-instagram" href="#"></a></li>
                </ul>

                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">About</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="kategori.php">Kategori</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="daerah.php">Daerah</a>
                  </li>
                  <?php
                  // Check if the user is logged in
                  if (isset($_SESSION['username'])) { ?>
                    <li class="dropdown rd-nav-item">
                      <a href="#" class="dropdown-toggle rd-nav-link" data-toggle="dropdown"><?php echo $_SESSION['username'] ?><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="logout.php">Logout</a></li>
                      </ul>
                    </li>
                  <?php }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Swiper-->
    <?php
    include "public/layouts/swiper.php";
    ?>

    <!-- Section Box Categories-->
    <?php
    include "public/layouts/kategori.php";
    ?>

    <!-- Daerah -->
    <?php
    include "public/layouts/daerah.php";
    ?>

    <!-- Hot tours-->
    <section class="section section-sm bg-default">
      <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Destinasi</span></h3>
        <div class="row row-sm row-40 row-md-50">
          <div class="col-sm-6 col-md-12 wow fadeInRight">
            <?php
            $kate = mysqli_query($connect, "SELECT * FROM traveling as t join kategori as k on 
            t.id_kategori = k.id_nama_kategori join daerah as d on t.id_daerah = d.id_nama_daerah group by k.id_nama_kategori order by t.id desc limit 3");

            while ($data1 = mysqli_fetch_array($kate)) {
              $deskripsi = strip_tags($data1['deskripsi']); // Remove HTML tags
              $words = str_word_count($deskripsi, 1); // Split the string into an array of words
              $limitedWords = implode(' ', array_slice($words, 0, 20));
            ?>
              <!-- Product Big-->
              <article class="product-big mb-3">
                <div class="unit flex-column flex-md-row align-items-md-stretch">
                  <div class="unit-left"><a class="product-big-figure" href=""><img src="admin/pages/travel/<?php echo $data1['gambar'] ?>" alt="" width="600" height="366" /></a></div>
                  <div class="unit-body">
                    <div class="product-big-body">
                      <h5 class="product-big-title"><a href="#"><?php echo $data1['nama_tempat'] ?>, Jawa Barat</a></h5>
                      <p class="product-big-text"><?php echo htmlspecialchars($limitedWords) ?>....</p>
                      <a class="button button-black-outline button-ujarak" href="detail_destinasi.php?id=<?php echo $data1['id'] ?>">Detail Destinasi</a>
                      <div class="product-big-price-wrap"><span class="product-big-price"><?php echo 'Rp ' . number_format($data1['price'], 0, ',', '.') ?>
                        </span></div>
                    </div>
                  </div>
                </div>
              </article>
            <?php } ?>
          </div>
          <div class="col-sm-6 col-md-12 wow fadeInLeft">
          </div>
        </div>
      </div>
    </section>

    <!-- Section Subscribe-->
    <section class="section bg-default text-center offset-top-50">
      <div class="parallax-container" data-parallax-img="public/assets/images/paralax.jpg">
        <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
          <div class="container">
            <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">Tunggu Apa Lagi?</span><span class="d-block font-weight-light"> Pesen Sekarang!!</span></h2>
            <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Dengan Pengalaman dan fasilitas kami yang lengkap, anda akan mendapatkan perjalanan yang akan sangat dikenang</p><a class="button button-secondary button-pipaluk" href="#">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </section>

    <!--	Instagrram wondertour-->
    <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
      <div class="container-fluid">
        <h6 class="gallery-title">Gallery</h6>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0" data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
          <?php
          $kate1 = mysqli_query($connect, "SELECT * FROM traveling as t join kategori as k on 
            t.id_kategori = k.id_nama_kategori join daerah as d on t.id_daerah = d.id_nama_daerah group by 
            k.id_nama_kategori order by t.id desc limit 10");
          while ($data1 = mysqli_fetch_array($kate1)) {
          ?>
            <!-- Thumbnail Classic-->
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="admin/pages/travel/<?php echo $data1['gambar'] ?>" alt="" width="270" height="195" />
              </div>
              <div class="thumbnail-mary-caption">
                <a class="icon fl-bigmug-line-zoom60" href="admin/pages/travel/<?php echo $data1['gambar'] ?>" data-lightgallery="item" style="max-width: 300vh !important; max-height:300vh !important">
                  <img src="admin/pages/travel/<?php echo $data1['gambar'] ?>" style="width: 300vh !important; height:300vh !important" />
                </a>
              </div>
            </article>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- Rights-->
    <?php
    include "public/layouts/footer.php";
    ?>
    </footer>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="public/assets/js/core.min.js"></script>
  <script src="public/assets/js/script.js"></script>
</body>

</html>