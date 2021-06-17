<?php 
    include '../app/views/main/app.php';
?>

<?= template_admin('Pengajuan Perorangan') ?>
<?= template_sidebar() ?>
<div class="main-container">

<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
<div class="clearfix">
    <div class="pull-left">
        <h4 class="text-blue h4">Data Pengajuan Tanam Bibit</h4>
        <p class="mb-30">Data pengajuan yang masuk</p>
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
                <!-- <th>Tanggal</th> -->
                <th class="datatable-nosort">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach($data as $d) : 
                $no++;
                $string = str_replace('_', ' ', $d['statusPengajuan']);
            ?>
            <tr>
                <td class="table-plus"><?= $no; ?></td>
                <td><?= $d['namaLengkap']; ?></td>
                <td><?= $d['bibit']; ?></td>
                <td><?= $d['jumlahPengajuan']; ?></td>
                <td><?= $d['tujuan']; ?></td>
                <td><?= $d['luasLahan']; ?></td>
                <td><?= $string; ?></td>
                <!-- <td><?= $d['tanggal']; ?></td> -->
                <td>
                    <div class="dropdown">
                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <i class="dw dw-more"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/updatePengajuan/<?= encrypt($d['idPengajuan']); ?>/proposal_diterima"><i class="icon-copy fa fa-check" aria-hidden="true"></i> Terima Proposal</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/updatePengajuan/<?= encrypt($d['idPengajuan']); ?>/proposal_ditolak"><i class="icon-copy fa fa-close" aria-hidden="true"></i> Tolak Proposal</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/updatePengajuan/<?= encrypt($d['idPengajuan']); ?>/bibit_dikirim"><i class="icon-copy fa fa-truck" aria-hidden="true"></i> Kirim Bibit</a>
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/updatePengajuan/<?= encrypt($d['idPengajuan']); ?>/bibit_ditanam"><i class="icon-copy fa fa-tree" aria-hidden="true"></i> Tanam Bibit</a>
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