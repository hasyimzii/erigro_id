<?php 
    include '../app/views/main/app.php';
?>

<?= template_header('Pengajuan Perorangan') ?>
<?= template_navbar() ?>
<?= template_sidebar() ?>
<div class="main-container">

<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
<div class="clearfix">
    <div class="pull-left">
        <h4 class="text-blue h4">Data Pengajuan Tanam Bibit</h4>
        <p class="mb-30"></p>
    </div>
</div>
<div class="pb-20">
    <table class="data-table table stripe hover nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Bibit</th>
                <th>Jumlah Bibit</th>
                <th>Tujuan</th>
                <th>Luas Lahan</th>
                <th>Status</th>
                <th>Tanggal</th>
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
                <td><?= $d['nama']; ?></td>
                <td><?= $d['bibit']; ?></td>
                <td><?= $d['jumlahPengajuan']; ?></td>
                <td><?= $d['tujuan']; ?></td>
                <td><?= $d['luasLahan']; ?></td>
                <td><?= $d['statusPengajuan']; ?></td>
                <td><?= $d['tanggal']; ?></td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/updatePengajuan/<?= encrypt($d['idPengajuan']); ?>/proposal_diterima"><i class="dw dw-eye"></i> Terima Proposal</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/updatePengajuan/<?= encrypt($d['idPengajuan']); ?>/proposal_ditolak"><i class="dw dw-edit2"></i> Tolak Proposal</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/updatePengajuan/<?= encrypt($d['idPengajuan']); ?>/bibit_dikirim"><i class="dw dw-edit2"></i> Kirim Bibit</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/updatePengajuan/<?= encrypt($d['idPengajuan']); ?>/bibit_ditanam"><i class="dw dw-delete-3"></i> Tanam Bibit</a>
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