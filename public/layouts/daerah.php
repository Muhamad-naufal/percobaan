<section class="section section-lg section-top-1 bg-gray-4">
    <div class="container offset-negative-1">
        <div class="box-categories cta-box-wrap">
            <div class="box-categories-content">
                <div class="row justify-content-center">
                    <?php
                    $query1 = mysqli_query($connect, "SELECT * FROM daerah as d join traveling as t on t.id_daerah = d.id_nama_daerah group by d.id_nama_daerah order by t.id desc limit 3");
                    while ($data2 = mysqli_fetch_array($query1)) {
                    ?>
                        <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
                            <ul class="list-marked-2 box-categories-list">
                                <li><a href="detail_daerah.php?id_nama_daerah=<?php echo $data2['id_nama_daerah'] ?>"><img src="admin/pages/travel/<?php echo $data2['gambar'] ?>" style="width: 300vh !important; height:50vh !important" /></a>
                                    <h5 class=" box-categories-title"><?php echo $data2['nama_daerah'] ?></h5>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div><a class="link-classic wow fadeInUp" href="#">LIHAT LAINNYA<span></span></a>
        <!-- Owl Carousel-->
    </div>
</section>