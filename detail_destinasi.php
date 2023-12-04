<?php
session_start();
include "public/config/connection.php"
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
    <title>Destinasi</title>
    <?php
    include "public/layouts/head.php";
    ?>
    <style>
        small {
            margin-top: -41px !important;
            margin-left: 300px !important;
        }

        .comment p {
            left: 0px !important;
            margin-left: -460px !important;
            margin-top: -5px;
            margin-bottom: 30px;
        }

        .comments-section {
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .comment {
            margin-bottom: 15px;
        }

        .comment h6 {
            margin-bottom: -5px;
            margin-left: -470px !important;
        }

        .no-comment-message {
            font-style: italic;
            color: #888;
        }

        .kotak-komen {
            margin-left: 150px;
            margin-bottom: 20px;
        }
    </style>
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

        <!-- Breadcrumbs -->
        <?php
        $query1 = mysqli_query($connect, "SELECT * FROM traveling as t 
        join kategori as k on t.id_kategori = k.id_nama_kategori 
        join daerah as d on t.id_daerah = d.id_nama_daerah
        WHERE t.id = '$_GET[id]'");
        $data1 = mysqli_fetch_array($query1);
        ?>
        <section class="breadcrumbs-custom-inset">
            <div class="breadcrumbs-custom context-dark bg-overlay-60">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title"><?php echo $data1['nama_tempat'] ?></h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><?php echo $data1['nama_tempat'] ?></li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(public/assets/images/raja.jpg);"></div>
            </div>
        </section>

        <!-- Why choose us-->
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 justify-content-center align-items-xl-center">
                    <div class="col-md-10 col-lg-5 col-xl-6"><img src="admin/pages/travel/<?php echo $data1['gambar'] ?>" alt="" width="519" height="564" />
                    </div>
                    <div class="col-md-10 col-lg-7 col-xl-6">
                        <h1 class="text-spacing-25 font-weight-normal title-opacity-9">Selamat Datang di <?php echo $data1['nama_tempat'] ?></h1>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Deskripsi</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Fasilitas</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">HTM</a></li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-4-1">
                                    <p><?php echo $data1['deskripsi'] ?></p>
                                </div>
                                <div class="tab-pane fade show" id="tabs-4-2">
                                    <p><?php echo $data1['fasilitas'] ?></p>
                                </div>
                                <div class="tab-pane fade show" id="tabs-4-3">
                                    <p>Untuk harga masuk ke dalam wisata ini, sekitar <?php echo 'Rp ' . number_format($data1['price'], 0, ',', '.') ?> per orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-sm">
            <div class="container">
                <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Lokasi</span></h3>
                <div class="container">
                    <?php echo $data1['lokasi'] ?>
                </div>
            </div>
        </section>

        <!-- Komentar Section -->
        <form action="f_komen.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Komentar</h3>
                        <div class="mb-3">
                            <input type="hidden" value="<?php echo $data1['id'] ?>" name="id" readonly>

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                            <textarea class="form-control" id="komentar" rows="3" name="komentar"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Kirim</button>
                    </div>
                    <div class="col-md-6">
                        <div class="comments-section">
                            <?php
                            $koment = mysqli_query($connect, "SELECT r.review, r.created_at, t.id, u.username
                              FROM review AS r 
                              JOIN traveling AS t ON r.id_travel = t.id
                              LEFT JOIN user AS u ON r.id_user = u.id_nama_user
                              WHERE t.id = '{$data1['id']}' ORDER BY r.created_at DESC");
                            if (mysqli_num_rows($koment) > 0) {
                                while ($komentar = mysqli_fetch_array($koment)) {
                            ?>
                                    <div class="comment">
                                        <h6>
                                            <?php
                                            echo htmlspecialchars($komentar['username'], ENT_QUOTES, 'UTF-8');
                                            ?>
                                        </h6>
                                        <p><?php echo htmlspecialchars($komentar['review'], ENT_QUOTES, 'UTF-8'); ?></p>
                                        <small class="text-muted">Publish pada <?php echo date('F j, Y, g:i a', strtotime($komentar['created_at'])); ?></small>
                                    </div>
                                <?php
                                }
                            } else {
                                // Display a message if there are no comments
                                ?>
                                <div class="no-comment-message">Belum Ada Komentar</div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Komentar -->


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