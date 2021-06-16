<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Pengajuan Donasi') ?>
<?= template_navbar() ?>
<div class="main-container">
<!-- Default Basic Forms End -->
<div class="pd-20 card-box mb-30">
<div class="clearfix">
    <div class="pull-left">
        <h4 class="text-blue h4">Form Pengajuan Tanam Bibit Erigro.id</h4>
        <p class="mb-30">Isikan form dengan sebenar-benarnya</p>
    </div>
    <div class="pull-right">
        <a class="btn btn-secondary" href="<?= BASEURL; ?>/home" role="button"><i class="icon-copy fa fa-home" aria-hidden="true"></i> Kembali</a>
    </div>
</div>
<form action="<?= BASEURL; ?>/home/storePengajuan" method="post"> 
    <input type="hidden" name="idProfil" value="#">
    <input type="hidden" name="idBibit" value="#">
    <div class="form-group">
        <label>Tujuan Pengajuan Donasi</label>
        <textarea name="tujuan" class="form-control"></textarea>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label>Jumlah Bibit</label>
                <input name="jumlahPengajuan" type="number" class="form-control" value="0">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label>Luas Lahan</label>
                <input name="luasLahan" type="text" class="form-control" placeholder="Luas Lahan Tanam">
            </div>
        </div>
    </div>
</form>

</div>
<?= template_footer() ?>
