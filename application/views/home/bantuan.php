<?php $this->load->view('home/header'); ?>
<div class="bradcam_area slider_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Bantuan</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our_latest_news_area">
    <div class="container">
        <h3><?php echo $this->session->flashdata('success'); ?></h3>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <form action="<?= base_url('home/bantuan'); ?>" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control valid" name="nama" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="nohp" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="No HP" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="pesan" cols="30" rows="9" placeholder="Tuliskan Pesan Anda Di Sini" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('home/footer'); ?>