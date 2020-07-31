<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $judul; ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url(); ?>/assets/img/icon.png" type="image/x-icon" />


    <!-- Fonts and icons -->
    <script src="<?= base_url(); ?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url(); ?>/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/atlantis.min.css">
    <link href="<?= base_url(); ?>/assets/css/all.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark2">
                <a href="index.html" class="logo">
                    <img src="<?= base_url(); ?>/assets/img/iconHome.png" alt="navbar brand" class="navbar-brand" width="150">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->
            <?= $this->include('templates/navbar'); ?>
            <?= $this->include('templates/sidebar'); ?>
            <!-- content -->
            <div class="main-panel">
                <div class="content">
                    <div class="panel-header bg-danger-gradient">
                        <div class="page-inner py-5">
                            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                                <div>
                                    <h2 class="text-white pb-2 fw-bold"><?= $judul2; ?></h2>
                                </div>
                                <div class="ml-md-auto py-2 py-md-0">
                                    <a href="#" class="btn btn-secondary btn-round">Lihat Data Pasien</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= $this->renderSection('content'); ?>

                    <footer class="footer">
                        <div class="container-fluid">
                            <nav class="pull-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.themekita.com">
                                            ThemeKita
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Help
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Licenses
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="copyright ml-auto">
                                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <!--   Core JS Files   -->
            <script src="<?= base_url(); ?>/assets/js/core/jquery.3.2.1.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/core/popper.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/core/bootstrap.min.js"></script>

            <!-- jQuery UI -->
            <script src="<?= base_url(); ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

            <!-- jQuery Scrollbar -->
            <script src="<?= base_url(); ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


            <!-- Chart JS -->
            <script src="<?= base_url(); ?>/assets/js/plugin/chart.js/chart.min.js"></script>

            <!-- jQuery Sparkline -->
            <script src="<?= base_url(); ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

            <!-- Chart Circle -->
            <script src="<?= base_url(); ?>/assets/js/plugin/chart-circle/circles.min.js"></script>

            <!-- Datatables -->
            <script src="<?= base_url(); ?>/assets/js/plugin/datatables/datatables.min.js"></script>

            <!-- Bootstrap Notify -->
            <script src="<?= base_url(); ?>/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

            <!-- jQuery Vector Maps -->
            <script src="<?= base_url(); ?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
            <script src="<?= base_url(); ?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

            <!-- Sweet Alert -->
            <script src="<?= base_url(); ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

            <!-- Atlantis JS -->
            <script src="<?= base_url(); ?>/assets/js/atlantis.min.js"></script>


</body>

</html>