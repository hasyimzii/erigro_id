<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Bibit') ?>
<?= template_navbar() ?>
<?= template_sidebar() ?>
<div class="main-container">

<!-- Simple Datatable start -->
<div class="pd-20 card-box mb-30">
<div class="clearfix mb-20">
    <div class="pull-left">
        <h4 class="text-blue h4">Informasi Bibit Erigro.id</h4>
        <p class="mb-30">Data bibit yang tersedia</p>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="<?= BASEURL; ?>/admin/createBibit" role="button"><i class="icon-copy fa fa-plus" aria-hidden="true"></i> Tambah Bibit</a>
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
                <th>Bibit</th>
                <th>Jumlah Bibit</th>
                <th>Jadwal Ambil</th>
                <th class="datatable-nosort">Action</th>
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
                <td><?= $d['bibit']; ?></td>
                <td><?= $d['jumlahBibit']; ?></td>
                <td><?= $d['jadwalAmbil']; ?></td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/detailBibit/<?= encrypt($d['idBibit']); ?>"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/editBibit/<?= encrypt($d['idBibit']); ?>"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/deleteBibit/<?= encrypt($d['idBibit']); ?>" id="sa-warning"><i class="dw dw-delete-3"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?= template_footer() ?>