<section class="w3l-courses">
    <div class="blog pb-5" id="courses">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-big text-center mb-sm-5 mb-4"><span>Berita</span></h3>
            <div class="row">
                <?php
                        include "../admin/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_berita order by id_berita desc limit 3");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                <div class="col-lg-6 item">
                    <div class="card">
                        <div class="card-header p-2 position-relative">
                            <a href="#course-single" class="zoom d-block">
                                <img class="card-img-bottom d-block" src="../gambar/<?php echo $d['gambar']; ?>"
                                    width="350px" height="350px" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p><?php echo $d['judul']; ?></p>
                            </div>
                            <a href="#course-single" class="course-desc"><?php echo $d['isi_berita']; ?></a>

                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fa fa-clock-o"></span>
                                    <span class="meta-value"><?php echo $d['tgl_post']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>