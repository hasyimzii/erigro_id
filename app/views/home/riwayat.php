<?php 
    include '../app/views/main/app.php';
?>

<?= template_head('Riwayat Pengajuan') ?>
<div class="container" style="padding-top: 6%;">

<!-- Simple Datatable start -->
<div class="pd-20 card-box mb-30">
<div class="clearfix mb-20">
    <div class="pull-left">
        <h4 class="text-blue h4">Riwayat Pengajuan erigro.id</h4>
        <p class="mb-30">Data riwayat pengajuan tanam bibit</p>
    </div>
</div>
<div class="pb-20">
    <table class="data-table table stripe hover nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>Bibit</th>
                <th>Jumlah Bibit</th>
                <th>Tujuan</th>
                <th>Luas Lahan</th>
                <th>Status</th>
                <th>Tanggal</th>
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
                <td><?= $d['bibit']; ?></td>
                <td><?= $d['jumlahPengajuan']; ?></td>
                <td><?= $d['tujuan']; ?></td>
                <td><?= $d['luasLahan']; ?></td>
                <td><?= $string; ?></td>
                <td><?= $d['tanggal']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
<?= template_footer() ?>