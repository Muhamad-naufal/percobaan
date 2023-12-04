<section class="section section-lg section-top-1 bg-gray-4">
    <div class="container offset-negative-1">
        <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
                <div class="row justify-content-center">
                    <?php
                    $query = mysqli_query($connect, "SELECT * FROM kategori as k join traveling as t on t.id_kategori = k.id_nama_kategori 
              order by t.id desc limit 3");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                            <ul class="list-marked-2 box-categories-list">
                                <li><a href="detail_kategori.php?id_nama_kategori=<?php echo $data['id_nama_kategori'] ?>">
                                        <img src="admin/pages/travel/<?php echo $data['gambar'] ?>" style="width: 300vh !important; height:40vh !important" /></a>
                                    <h5 class=" box-categories-title"><?php echo $data['nama_kategori'] ?></h5>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div><a class="link-classic wow fadeInUp" href="kategori.php">LIHAT LAINNYA<span></span></a>
        <!-- Owl Carousel-->
    </div>
</section>