<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>About</title>
  <?php
  include "public/layouts/head.php";
  ?>
</head>

<body>
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
                  <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                  </li>
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="about.php">About</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="kategori.php">Kategori</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="daerah.php">Daerah</a>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom-inset">
      <div class="breadcrumbs-custom context-dark bg-overlay-60">
        <div class="container">
          <h2 class="breadcrumbs-custom-title">About</h2>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active">About</li>
          </ul>
        </div>
        <div class="box-position" style="background-image: url(public/assets/images/raja.jpg);"></div>
      </div>
    </section>
    <!-- Why choose us-->
    <section class="section section-sm section-first bg-default text-md-left">
      <div class="container">
        <div class="row row-50 justify-content-center align-items-xl-center">
          <div class="col-md-10 col-lg-5 col-xl-6"><img src="public/assets/images/about.png" alt="" width="519" height="564" />
          </div>
          <div class="col-md-10 col-lg-7 col-xl-6">
            <h1 class="text-spacing-25 font-weight-normal title-opacity-9">Kenapa Memilih Kami?</h1>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
              <!-- Nav tabs-->
              <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Pengalaman</a></li>
              </ul>
              <!-- Tab panes-->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-4-1">
                  <p>Telusuri petualangan penuh keajaiban melalui blog perjalanan kami, di mana setiap tulisan adalah kisah yang ditenun dengan benang petualangan, budaya, dan pemandangan yang memukau. Meresapi cerita-cerita yang memikat, menemukan tempat-tempat tersembunyi, dan biarkan keinginan menjelajah dalam dirimu berkobar. Bergabunglah bersama kami saat kami menjelajahi dunia, berbagi pengalaman yang menginspirasi, memberikan informasi, dan menyalakan hasrat untuk menjelajahi keindahan yang ditawarkan dunia ini.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Counter Classic-->
    <?php
    include "public/config/connection.php";
    $query = mysqli_query($connect, "SELECT * FROM traveling as t join kategori as k on t.id_kategori = k.id_nama_kategori join daerah as d on t.id_daerah = d.id_nama_daerah");
    $rowCount = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    $count_kategori = $rowCount;
    $count_daerah = $rowCount;
    $count_desti = $rowCount;
    ?>
    <section class="section section-fluid bg-default">
      <div class="parallax-container" data-parallax-img="public/assets/images/lope.jpeg">
        <div class="parallax-content section-xl context-dark bg-overlay-26">
          <div class="container">
            <div class="row row-50 justify-content-center border-classic">
              <div class="col-sm-6 col-md-5 col-lg-3">
                <div class="counter-classic">
                  <div class="counter-classic-number"><span class="counter"><?php echo $count_desti ?></span>
                  </div>
                  <h5 class="counter-classic-title">Destinasi</h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3">
                <div class="counter-classic">
                  <div class="counter-classic-number"><span class="counter"><?php echo $count_kategori ?></span>
                  </div>
                  <h5 class="counter-classic-title">Kategori</h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-3">
                <div class="counter-classic">
                  <div class="counter-classic-number"><span class="counter"><?php echo $count_daerah ?></span>
                  </div>
                  <h5 class="counter-classic-title">Daerah</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-sm">
      <div class="container">
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">TeamS</span></h3>
        <div class="row row-30 justify-content-center box-ordered">
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-1-118x118.jpg" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Muhamad Fauzan</a></h6>
                <p class="team-modern-status">Mahasiswa</p>
                <h6 class="team-modern-phone"><a href="tel:#">0821..........</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-2-118x118.jpg" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Muhamad Naufal</a></h6>
                <p class="team-modern-status">Mahasiswa</p>
                <h6 class="team-modern-phone"><a href="tel:#">08........</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-3-118x118.jpg" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Maieka Sari</a></h6>
                <p class="team-modern-status">Mahasiswa</p>
                <h6 class="team-modern-phone"><a href="tel:#">08.........</a></h6>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-md-5 col-lg-3">
            <!-- Team Modern-->
            <article class="team-modern">
              <div class="team-modern-header"><a class="team-modern-figure" href="#"><img class="img-circles" src="images/user-4-118x118.jpg" alt="" width="118" height="118" /></a>
                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                  <g>
                    <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                  </g>
                </svg>
              </div>
              <div class="team-modern-caption">
                <h6 class="team-modern-name"><a href="#">Anisa Sumayyah</a></h6>
                <p class="team-modern-status">Mahasiswa</p>
                <h6 class="team-modern-phone"><a href="tel:#">08.......</a></h6>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <?php
    include "public/layouts/footer.php";
    ?>

  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="public/assets/js/core.min.js"></script>
  <script src="public/assets/js/script.js"></script>
</body>

</html>