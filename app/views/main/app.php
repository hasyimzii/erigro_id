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
function template_login($title){
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

// template home (seperti blade laravel)
function template_home($title) {
    $baseurl = BASEURL;
    $username = $_SESSION['username'];
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
    <div class="loader-logo"><img src="$baseurl/vendors/images/deskapp-logo.png" alt="" width="400></div>
    <div class='loader-progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    </div>
    <div class='percent' id='percent1'>0%</div>
    <div class="loading-text">
        Loading...
    </div>
    </div>
    </div>
    <div class="header px-5 py-1" style="background: transparent; width: 100%;">
        <div class="header-left">
        <a href="$baseurl/admin">
            <img src="$baseurl/vendors/images/deskapp-logo-white.png" alt="" width="190">
        </a>
        <div class="ml-5 my-3">
            <a href="$baseurl/home/riwayat" class="text-white">Riwayat</a>
        </div>
        <div class="ml-5 my-3">
            <a href="$baseurl/home/about" class="text-white">About</a>
        </div>
        </div>
        <div class="header-right">
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown">
                        <span class="user-name text-white">$username</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="$baseurl/auth/logout"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    EOT;
}

// template head (seperti blade laravel)
function template_head($title) {
    $baseurl = BASEURL;
    $username = $_SESSION['username'];
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
    <div class="loader-logo"><img src="$baseurl/vendors/images/deskapp-logo.png" alt="" width="400></div>
    <div class='loader-progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    </div>
    <div class='percent' id='percent1'>0%</div>
    <div class="loading-text">
        Loading...
    </div>
    </div>
    </div>
    <div class="header px-5 py-1" style="background: transparent; width: 100%;">
        <div class="header-left">
        <a href="$baseurl/admin">
            <img src="$baseurl/vendors/images/deskapp-logo.png" alt="" width="190">
        </a>
        <div class="ml-5 my-3">
            <a href="$baseurl/home/riwayat">Riwayat</a>
        </div>
        <div class="ml-5 my-3">
            <a href="$baseurl/home/about">About</a>
        </div>
        </div>
        <div class="header-right">
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-name">$username</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="$baseurl/auth/logout"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    EOT;
}

// template admin (seperti blade laravel)
function template_admin($title) {
    $baseurl = BASEURL;
    $username = $_SESSION['username'];
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
    <div class="loader-logo"><img src="$baseurl/vendors/images/deskapp-logo.png" alt="" width="400></div>
    <div class='loader-progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    </div>
    <div class='percent' id='percent1'>0%</div>
    <div class="loading-text">
        Loading...
    </div>
    </div>
    </div>
    <div class="header px-5 py-2">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
        </div>
        <div class="header-right">
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-name">$username</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="$baseurl/auth/logout"><i class="dw dw-logout"></i> Log Out</a>
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
            <a href="$baseurl/admin">
                <img src="$baseurl/vendors/images/deskapp-logo.png" alt="" class="dark-logo">
                <img src="$baseurl/vendors/images/deskapp-logo-white.png" alt="" class="light-logo">
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
                            <span class="micon dw dw-palm-tree"></span><span class="mtext">Informasi Bibit</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="$baseurl/admin/pengajuan" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-inbox"></span><span class="mtext">Data Pengajuan</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="$baseurl/admin/pengguna" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-user1"></span><span class="mtext">Data Pengguna</span>
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