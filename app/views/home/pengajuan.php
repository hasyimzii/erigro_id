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
    <div class="form-group">
        <label>Nama</label>
        <input name="??" class="form-control" type="text" placeholder="Input Nama Sesuai Kartu Identitas">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input name="??" class="form-control" type="text" placeholder="Input Alamat Sesuai Kartu Identitas">
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label>NIK</label>
                <input name="??" type="text" class="form-control" placeholder="Input NIK">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label>No Telepon</label>
                <input name="??" type="tel" class="form-control" value="+62-111-111-111-111">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Tujuan Pengajuan Donasi</label>
        <textarea name="??" class="form-control"></textarea>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label>Bibit</label>
                <input name="??" type="text" class="form-control" placeholder="Input Bibit Yang Diajukan">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label>Jumlah Bibit</label>
                <input name="??" type="number" class="form-control" value="0">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Luas Lahan</label>
        <input name="??" class="form-control" type="text" placeholder="Input Luas Lahan">
    </div>
</form>

</div>
<?= template_footer() ?>
