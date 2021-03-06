<?php 
    include '../app/views/main/app.php';
?>

<?= template_admin('Tambah Bibit') ?>
<?= template_sidebar() ?>
<div class="main-container">
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
<div class="clearfix">
    <div class="pull-left">
        <h4 class="text-blue h4">Form Bibit erigro.id</h4>
        <p class="mb-30">Isikan form dengan sebenar-benarnya</p>
    </div>
    <div class="pull-right">
        <a class="btn btn-secondary" href="<?= BASEURL; ?>/admin" role="button"><i class="icon-copy fa fa-home" aria-hidden="true"></i> Kembali</a>
    </div>
</div>
<form action="<?= BASEURL; ?>/admin/storeBibit" method="post">
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Bibit</label>
        <div class="col-sm-12 col-md-10">
            <input name="bibit" class="form-control" type="text" placeholder="Input Nama Bibit" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Jumlah Bibit</label>
        <div class="col-sm-12 col-md-10">
            <input name="jumlahBibit" class="form-control" type="number" value="100" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Jadwal Ambil</label>
        <div class="col-sm-12 col-md-10">
            <input name="jadwalAmbil" class="form-control" type="datetime-local" required>
        </div>
    </div>
    <button type="submit" class="btn btn-block btn-primary">Submit</button>
</form>
</div>
<?= template_footer() ?>
