<section class="w3l-courses">
    <div class="blog pb-5" id="courses">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-big text-center mb-sm-5 mb-4"><span>Agenda</span></h3>
            <div class="row">
                <?php
                include "../admin/koneksi.php";
                $sql = "SELECT * FROM tb_agenda ORDER BY id_agenda ";
                $data = mysqli_query($koneksi, $sql);
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <div class="col-lg-12 item mt-3">
                    <div class="card">
                        <div class="card-body course-details">
                            <div class="price-review d-flex justify-content-between mb-1align-items-center">
                                <p><?php echo $d['agenda']; ?></p>
                            </div>
                            <a href="#course-single" class="course-desc"><?php echo $d['deskripsi']; ?></a>

                            <div class="course-meta mt-4">
                                <div class="meta-item course-lesson">
                                    <span class="fa fa-clock-o"></span>
                                    <span class="meta-value"><?php echo $d['tgl_agenda']; ?></span>
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