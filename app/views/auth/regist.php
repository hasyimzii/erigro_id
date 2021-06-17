<?php 
    include '../app/views/main/app.php';
?>

<?= template_login('Regist') ?>

<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="<?= BASEURL; ?>/">
                <img src="<?= BASEURL; ?>/vendors/images/deskapp-logo.png" alt="">
            </a>
        </div>
        <div class="login-menu">
            <ul>
                <li><a href="<?= BASEURL; ?>/auth/login">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <img src="<?= BASEURL; ?>/vendors/images/register-page-img.png" alt="">
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Buat akun erigro.id</h2>
                    </div>
                    <div class="card-box mb-30">
                        <?php Flasher::flash(); ?>
                    </div>
                    <form action="<?= BASEURL; ?>/auth/storeRegist" method="post">
                        <div class="form-wrap max-width-600 mx-auto">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nama Lengkap*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="namaLengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Nomor HP*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="noHp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Username*</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Password*</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Konfirmasi Password*</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="confpass">
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox mt-4">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="agree">
                            <label class="custom-control-label" for="customCheck1">Saya telah menyetujui kebijakan privasi</label>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button type="submit" class="btn mb-20 btn-primary btn-block">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= template_footer() ?>