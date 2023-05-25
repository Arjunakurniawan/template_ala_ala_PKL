<section class="w3l-team py-5" id="team">
    <div class="call-w3 py-lg-5 py-md-4">
        <div class="container">
                    <h5 class="title-small mb-1"></h5>
                    <h3 class="title-big mb-sm-5 mb-4 text-center">Galery</h3>
                </div>
                  <div class="col-lg-12 feature-grid-right mt-lg-0 mt-5">
                    <div class="row">
                    <?php
                        include "../admin/koneksi.php";
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_galery order by id_galery desc");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                        <div class="col-sm-4">
                            <div class="box16">      
                                <a href="#url"><img  src="../gambar/<?php echo $d['gambar']; ?>" alt="" class="img-fluid radius-image"/></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url"><?php echo $d['judul_galery']; ?></a></h3>
                                    <span class="post"><?php echo $d['tanggal']; ?></span>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>    
                          </div>
                          <br>                        
                      </div>          
                        <?php } ?>                        
                    </div>
                </div>
            </div>
        </div>
</section>