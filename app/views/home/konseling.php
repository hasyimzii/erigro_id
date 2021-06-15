<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Pengajuan Konseling') ?>
<?= template_navbar() ?>
<?= template_sidebar() ?>
<div class="main-container">
<form action="<?= BASEURL; ?>/admin/createBibit" method="post">
<!-- Default Basic Forms End -->

<!-- horizontal Basic Forms Start -->
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Pengajuan Konseling Erigro.id</h4>
            <p class="mb-30">Isikan form konseling dengan sebenar-benarnya</p>
        </div>
        <div class="pull-right">
            <a href="#horizontal-basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Submit</a>
        </div>
    </div>
    <form>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Ancaman erosi agak berat</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Ancaman erosi berat</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Ancaman erosi sangat berat</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Ancaman erosi sedang</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Ancaman erosi kecil</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Daerah perakaran sangat dangkal</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Kapasitas menahan air baik</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Kapasitas menahan air rendah</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Keadaan iklim tidak sesuai</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Keadaan iklim kurang sesuai</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Keadaan iklim sudah sesuai</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Kelebihan air</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Lahan tergenang air / banjir</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Tanah berbatu</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Kedalaman tanah 0-30cm</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Lereng curam kemiringan > 45derajat</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Lereng sedang kemiringan 20-30derajat</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Lereng bergelombang</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Memiliki tanah yang basah</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Memiliki tanah yang subur</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Mengandung natrium yang rendah</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Mengandung natrium yang tinggi</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Tanah rawan longsor</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Tanah bekas limbah pabrik</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Tanah bekas kebakaran</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Tanah bekas makam</label>
                    </div>
                    <div class="custom-control custom-checkbox mb-5">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Tanah sengketa</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="collapse collapse-box" id="horizontal-basic-form1" >
        <div class="code-box">
            <div class="clearfix">
                <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy Code</a>
                <a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
            </div>
            <pre><code class="xml copy-pre" id="horizontal-basic">

</form>

</div>
<?= template_footer() ?>
