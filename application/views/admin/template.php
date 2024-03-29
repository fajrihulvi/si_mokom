<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?> - Si MoKoM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menupos-fixed menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div " >
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item">
                        <a href="<?= base_url('home') ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-home"></i></span><span class="pcoded-mtext">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('home/pemeriksaan') ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-file-alt"></i></span><span class="pcoded-mtext">Pemeriksaan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('home/pasang_baru') ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-box-open"></i></span><span class="pcoded-mtext">Pasang Baru</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link pcoded-hasmenu"><span class="pcoded-micon"><i class="fas fa-file-export"></i></span><span class="pcoded-mtext">Tindak Lanjut Pemriksaan</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?= base_url('laporan/pemeriksaan') ?>">Laporan Pemeriksaan</a></li>
                            <li><a href="<?= base_url('laporan/tindak_lanjut') ?>">Laporan Tindak Lanjut Pemeriksaan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('home/maps') ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-map-marked-alt"></i></span><span class="pcoded-mtext">Maps Pelanggan</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('home/data_wo') ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-folder-open"></i></span><span class="pcoded-mtext">Data WO</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('home/reset_modem') ?>" class="nav-link "><span class="pcoded-micon"><i class="fas fa-history"></i></span><span class="pcoded-mtext">Reset Modem</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link pcoded-hasmenu"><span class="pcoded-micon"><i class="fas fa-database"></i></span><span class="pcoded-mtext">Master Data</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="<?= base_url('site') ?>">Site</a></li>
                            <li><a href="<?= base_url('meter') ?>">Meter</a></li>
                            <li><a href="<?= base_url('modem') ?>">Modem</a></li>
                            <li><a href="<?= base_url('simcard') ?>">Sim Card</a></li>
                            <li><a href="<?= base_url('pelanggan') ?>">Pelanggan</a></li>
                            <li><a href="<?= base_url('vendor') ?>">Vendor</a></li>
                        </ul>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

        <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-blue">
        
            
                <div class="m-header">
                    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                    <a href="#!" class="b-brand">
                        <!-- ========   change your logo hear   ============ -->
                        <!-- <img src="<?= base_url('assets/images/logo.png') ?>" alt="" class="logo"> -->
                        <!-- <img src="<?= base_url('assets/images/logo-icon.png') ?>" alt="" class="logo-thumb"> -->
                        <a href="<?= base_url('home') ?>" style="color: white; font-size: 20px; font-weight: bold;" >Si MoKoM</a>
                    </a>
                    <a href="#!" class="mob-toggler">
                        <i class="feather icon-more-vertical"></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                            <div class="search-bar">
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i><span class="badge bg-danger"><span class="sr-only"></span></span></a>
                                <div class="dropdown-menu dropdown-menu-right notification">
                                    <div class="noti-head">
                                        <h6 class="d-inline-block m-b-0">Notifications</h6>
                                        <div class="float-right">
                                            <a href="#" class="m-r-10">mark as read</a>
                                            <a href="#">clear all</a>
                                        </div>
                                    </div>
                                    <ul class="noti-body">
                                        <li class="n-title">
                                            <p class="m-b-0">NEW</p>
                                        </li>
                                        <li class="notification">
                                            <div class="media">
                                                <img class="img-radius" src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                                    <p>New ticket Added</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="n-title">
                                            <p class="m-b-0">EARLIER</p>
                                        </li>
                                        <li class="notification">
                                            <div class="media">
                                                <img class="img-radius" src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                                    <p>Prchace New Theme and make payment</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="notification">
                                            <div class="media">
                                                <img class="img-radius" src="<?= base_url('assets/images/user/avatar-1.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                                    <p>currently login</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="notification">
                                            <div class="media">
                                                <img class="img-radius" src="<?= base_url('assets/images/user/avatar-2.jpg') ?>" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                    <p>Prchace New Theme and make payment</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="noti-footer">
                                        <a href="#!">show all</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown drp-user">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url('assets/images/user/default.png') ?>" class="img-radius wid-40" alt="User-Profile-Image">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-notification">
                                    <div class="pro-head">
                                        <img src="<?= base_url('assets/images/user/default.png') ?>" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <a href="<?= base_url('auth/logout') ?>" class="dud-logout" title="Logout">
                                            <i class="feather icon-log-out"></i>
                                        </a>
                                    </div>
                                    <ul class="pro-body">
                                        <li><a href="#" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                        <li><a href="#" class="dropdown-item"><i class="feather icon-lock"></i> Change Password</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            
    </header>
    <!-- [ Header ] end -->

    <?= $contents ?>

    <script>var base_url = '<?= base_url() ?>';</script>
    <!-- Required Js -->
    <script src="<?= base_url('assets/js/vendor-all.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/pcoded.min.js') ?>"></script>

    <!-- Apex Chart -->
    <!-- <script src="<?= base_url('assets/js/plugins/apexcharts.min.js') ?>"></script> -->

    <!-- custom-chart js -->
    <!-- <script src="<?= base_url('assets/js/pages/dashboard-main.js') ?>"></script> -->
    <!-- <script src="<?= base_url('assets/js/pages/chart-apex.js') ?>"></script> -->
    <script src="<?= base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/myscript.js')?>"></script>

</body>

</html>