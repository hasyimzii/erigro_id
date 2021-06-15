<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Tambah Bibit') ?>
<?= template_navbar() ?>
<?= template_sidebar() ?>
<div class="main-container">
<form action="<?= BASEURL; ?>/admin/createBibit" method="post">
<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
<div class="clearfix">
    <div class="pull-left">
        <h4 class="text-blue h4">Form Bibit Erigro.id</h4>
        <p class="mb-30">Isikan form dengan sebenar-benarnya</p>
    </div>
    <div class="pull-right">
        <a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i>Submit</a>
    </div>
</div>
<form>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Bibit</label>
        <div class="col-sm-12 col-md-10">
            <input name="bibit" class="form-control" type="text" placeholder="Input Nama Bibit">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Jumlah Bibit</label>
        <div class="col-sm-12 col-md-10">
            <input name="jumlahBibit" class="form-control" value="100" type="Input Jumlah Bibit">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Jadwal Ambil</label>
        <div class="col-sm-12 col-md-10">
            <input name="jadwalAmbil" class="form-control datetimepicker" placeholder="Jadwal Siap Ambil Bibit" type="text">
        </div>
    </div>
    <!-- <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Email</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" value="bootstrap@example.com" type="email">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">URL</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" value="https://getbootstrap.com" type="url">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" value="1-(111)-111-1111" type="tel">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Password</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" value="password" type="password">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Number</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" value="100" type="number">
        </div>
    </div>
    <div class="form-group row">
        <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Date</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control date-picker" placeholder="Select Date" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Month</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control month-picker" placeholder="Select Month" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Time</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control time-picker" placeholder="Select time" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Select</label>
        <div class="col-sm-12 col-md-10">
            <select class="custom-select col-12">
                <option selected="">Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Color</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" value="#563d7c" type="color">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" value="50" type="range">
        </div>
    </div> -->
</form>
<div class="collapse collapse-box" id="basic-form1" >
    <div class="code-box">
        <div class="clearfix">
            <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#copy-pre"><i class="fa fa-clipboard"></i> Copy Code</a>
            <a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
        </div>
        <pre><code class="xml copy-pre" id="copy-pre">

</form>

</div>
<?= template_footer() ?>
