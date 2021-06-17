<?php 
    include '../app/views/main/app.php';
?>

<?= template_admin('Pegawai') ?>
<?= template_sidebar() ?>
<div class="main-container">

<!-- Simple Datatable start -->
<div class="pd-20 card-box mb-30">
<div class="clearfix mb-20">
    <div class="pull-left">
        <h4 class="text-blue h4">Informasi Pengguna erigro.id</h4>
        <p class="mb-30">Data pengguna yang terdaftar</p>
    </div>
</div>
<div class="card-box mb-30">
    <?php Flasher::flash(); ?>
</div>
<div class="pb-20">
    <table class="data-table table stripe hover nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Nomor HP</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach($data as $d) : 
                $no++;
            ?>
            <tr>
                <td class="table-plus"><?= $no; ?></td>
                <td><?= $d['username']; ?></td>
                <td><?= $d['namaLengkap']; ?></td>
                <td><?= $d['noHp']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?= template_footer() ?>