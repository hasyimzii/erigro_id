<?php 
// connection database
// $databaseHost = 'localhost';
// $databaseName = 'pemweb-erigro_id';
// $databaseUsername = 'root';
// $databasePassword = '';

// $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

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


// template header (seperti blade laravel)
function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8">
        <title>$title</title>
        <!-- Site favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
        <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
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
    EOT;
}

// template footer (seperti blade laravel)
function template_footer() {
    echo <<<EOT
        <!-- js -->
        <script src="vendors/scripts/core.js"></script>
        <script src="vendors/scripts/script.min.js"></script>
        <script src="vendors/scripts/process.js"></script>
        <script src="vendors/scripts/layout-settings.js"></script>
        <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <script src="vendors/scripts/dashboard.js"></script>
    </body>
    </html>
    EOT;
}
?>