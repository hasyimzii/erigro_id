<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Detail Bibit') ?>
<?= template_navbar() ?>
<?= template_sidebar() ?>
<div class="main-container">
 <!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
<div class="clearfix">
    <div class="pull-left">
        <h4 class="text-blue h4">Detail Bibit Erigro.id</h4>
        <p class="mb-30">Detail data tiap bibit</p>
    </div>
    <div class="pull-right">
        <a class="btn btn-secondary" href="<?= BASEURL; ?>/admin" role="button"><i class="icon-copy fa fa-home" aria-hidden="true"></i> Kembali</a>
    </div>
</div>
<dl class="row">
    <dt class="col-sm-3">Nama Bibit</dt>
    <dd class="col-sm-9"><?= $data['bibit'] ?></dd>
    <dt class="col-sm-3">Jumlah Bibit</dt>
    <dd class="col-sm-9"><?= $data['jumlahBibit'] ?></dd>
    <dt class="col-sm-3">Jadwal Ambil</dt>
    <dd class="col-sm-9"><?= $data['jadwalAmbil'] ?></dd>
</div>
<?= template_footer() ?>