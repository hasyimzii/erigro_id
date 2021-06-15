<?php
// encrypt id
function encrypt($sData){
    $id=(double)$sData*525325.24;
    return base64_encode($id);
}
// decrypt id
function decrypt($sData){
    $url_id=base64_decode($sData);
    $id=(double)$url_id/525325.24;
    return $id;
}
// template login
function template_login(){
    $baseurl = BASEURL;
    echo <<<EOT
    <!DOCTYPE html>
    <html>
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8">
        <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

        <!-- Site favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="$baseurl/vendors/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="$baseurl/vendors/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="$baseurl/vendors/images/favicon-16x16.png">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="$baseurl/vendors/styles/core.css">
        <link rel="stylesheet" type="text/css" href="$baseurl/vendors/styles/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="$baseurl/vendors/styles/style.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-119386393-1');
        </script>
    </head>
    <body class="login-page">
    EOT;
}

// template header (seperti blade laravel)
function template_header($title) {
    $baseurl = BASEURL;
    echo <<<EOT
    <!DOCTYPE html>
    <html>
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8">
        <title>$title</title>
        <!-- Site favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="$baseurl/vendors/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="$baseurl/vendors/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="$baseurl/vendors/images/favicon-16x16.png">
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="$baseurl/vendors/styles/core.css">
        <link rel="stylesheet" type="text/css" href="$baseurl/vendors/styles/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="$baseurl/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="$baseurl/src/plugins/datatables/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="$baseurl/vendors/styles/style.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-119386393-1');
        </script>
    </head>
    <body>
    <div class="pre-loader">
    <div class="pre-loader-box">
    <div class="loader-logo"><img src="$baseurl/vendors/images/deskapp-logo.svg" alt=""></div>
    <div class='loader-progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    </div>
    <div class='percent' id='percent1'>0%</div>
    <div class="loading-text">
        Loading...
    </div>
    </div>
    </div>
    EOT;
}

// template navbar
function template_navbar() {
    $baseurl = BASEURL;
    echo <<<EOT
    <div class="header">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
            <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here">
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="$baseurl/vendors/images/img.jpg" alt="">
                                        <h3>John Doe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="$baseurl/vendors/images/photo1.jpg" alt="">
                                        <h3>Lea R. Frith</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="$baseurl/vendors/images/photo2.jpg" alt="">
                                        <h3>Erik L. Richards</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="$baseurl/vendors/images/photo3.jpg" alt="">
                                        <h3>John Doe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="$baseurl/vendors/images/photo4.jpg" alt="">
                                        <h3>Renee I. Hansen</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="$baseurl/vendors/images/img.jpg" alt="">
                                        <h3>Vicki M. Coleman</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="$baseurl/vendors/images/photo1.jpg" alt="">
                        </span>
                        <span class="user-name">Admin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="login.html"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    EOT;
}

// template sidebar
function template_sidebar() {
    $baseurl = BASEURL;
    echo <<<EOT
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="$baseurl/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
                <img src="$baseurl/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="$baseurl/admin/index" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-library"></span><span class="mtext">Informasi Bibit</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-apartment"></span><span class="mtext">Konfirmasi Donasi</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="$baseurl/admin/pengajuanPerorangan">Donasi Perorangan</a></li>
                            <li><a href="$baseurl/admin/pengajuanKelompok">Donasi Kelompok</a></li>
                            <li><a href="$baseurl/admin/pengajuanInstansi">Donasi Institusi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon dw dw-paint-brush"></span><span class="mtext">Konfirmasi Konseling</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="font-awesome.html">Data Konseling</a></li>
                            <li><a href="foundation.html">Hasil Konseling</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <div class="sidebar-small-cap">Extra</div>
                    </li>
                    <li>
                        <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-paper-plane1"></span>
                            <span class="mtext">Users Website <img src="vendors/images/coming-soon.png" alt="" width="25"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>
    EOT;
}

// template footer (seperti blade laravel)
function template_footer() {
    $baseurl = BASEURL;
    echo <<<EOT
        <!-- js -->
        <script src="$baseurl/vendors/scripts/core.js"></script>
        <script src="$baseurl/vendors/scripts/script.min.js"></script>
        <script src="$baseurl/vendors/scripts/process.js"></script>
        <script src="$baseurl/vendors/scripts/layout-settings.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="$baseurl/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="$baseurl/src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="$baseurl/vendors/scripts/datatable-setting.js"></script></body>
        <!-- add sweet alert js & css in footer -->
        <script src="$baseurl/src/plugins/sweetalert2/sweetalert2.all.js"></script>
        <script src="$baseurl/src/plugins/sweetalert2/sweet-alert.init.js"></script>
    </body>
    </html>
    EOT;
}
?>