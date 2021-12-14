<?php $this->load->view('home/header'); ?>
<div class="bradcam_area slider_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Informasi Terkini</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <?php
            foreach ($berita_all as $row) : ?>
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="feature-img text-center">
                            <img width="100%" class="img-fluid text-center" src="<?= base_url('assets/upload/' . $row['foto']) ?>" alt="">
                        </div>
                        <br>
                        <div class="blog_details">
                            <h2><?= $row['judul']; ?>
                            </h2>
                            <hr>
                            <p class="excert">
                            <?= $row['deskripsi']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php $this->load->view('home/footer'); ?>