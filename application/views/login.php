<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISTEM INFORMASI SURAT MENYURAT FTI UKDW</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="flash-data-berhasil" data-berhasil="<?= $this->session->flashdata('success'); ?>">
                        </div>
                        <div class="flash-data-gagal" data-gagal="<?= $this->session->flashdata('error'); ?>"></div>
                        <!-- Nested Row within Card Body -->
                        <?php if ($login) : ?>
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img src="https://media.istockphoto.com/vectors/mail-box-vector-id545240218?k=6&m=545240218&s=170667a&w=0&h=dXMhAMAno1sz0gsR6rvHeppqTbrs3a22Ms92XUr7b6k=" alt="Logo" width="400" height="400">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                                        </div>
                                        <form class="user" action="<?= base_url('auth/check_login'); ?>" method="post">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control form-control-user" placeholder="NIM / NIP / NIK">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Masuk
                                            </button>
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/sweet-alert/sweetalert2.all.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/demo/sweet-alert.js"></script>

</body>

</html>