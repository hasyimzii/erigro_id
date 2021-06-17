<?php 
    include '../app/views/main/app.php';
?>

<?= template_head('About') ?>

<div class="main-container">
<div class="faq-wrap" >

<div id="accordion">
    <div class="card" style=" width: 100%; top:3%; right : 10%; padding-top: 1.5% ; padding-bottom: 1.5%">
        <div>
            <button class="btn btn-block">
                <h3 class="text-primary">Tentang Kami</h3>
            </button>
        </div>
    </div>
    <div class="card" style=" width: 100%; right : 10%; padding-right: 1% ; padding-left: 1%">
        <div class="card-header" >
            <button class="btn btn-block" data-toggle="collapse" data-target="#faq1">
                Apa itu Erigro?
            </button>
        </div>
        <div id="faq1" class="collapse show" data-parent="#accordion">
            <div class="card-body">
                Platform pengajuan bibit pohon gratis kepada Dinas Lingkungan Hidup Kabupaten Mojokerto, dimana masyarakat dapat mengajukan bibit secara online, efiseien, dan menjawab tantangan 17 Tujuan Pembangunan Berkelanjutan atau Suistainable Development Goals yang ke-15 yaitu "Life on land" yang mencakup melindungi, memulihkan, dan mempromosikan pemanfaatan berkelanjutan ekosistem darat, mengelola hutan secara berkelanjutan, memerangi penggurunan, dan menghentikan serta membalikkan degradasi lahan dan menghentikan hilangnya keanekaragaman hayati
            </div>
        </div>
    </div>
    <div class="card" style=" width: 100%; right : 10%; padding-right: 1% ; padding-left: 1%">
        <div class="card-header">
            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
                Tujuan Erigro
            </button>
        </div>
        <div id="faq2" class="collapse" data-parent="#accordion">
            <div class="card-body">
                Yaitu untuk memudahkan masyarakat dalam mengirim proposal perminttaan bibit gratis kepada Dinas Lingkungan Hidup Kabupaten Mojokerto -foya
            </div>
        </div>
    </div>
    <div class="card" style=" width: 100%; right : 10%; padding-right: 1% ; padding-left: 1%">
        <div class="card-header">
            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3">
                Manfaat Erigro
            </button>
        </div>
        <div id="faq3" class="collapse" data-parent="#accordion">
            <div class="card-body">
                Dengan dibuatnya website Erigro, diharapkan masyarakat dapat melakukan pengajuan bibit kepada Dinas Lingkungan Hidup dengan mudah dan efisien -foya
                
            </div>
        </div>
    </div>
    <div class="card" style=" width: 100%; right : 10%; padding-right: 1% ; padding-left: 1%">
        <div class="card-header">
            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq4">
                Pendaftaran Erigro
            </button>
        </div>
        <div id="faq4" class="collapse" data-parent="#accordion">
            <div class="card-body">
            <h6>DAFTAR</h6>
            Apabila pengguna ingin mengakses fitur pengajuan bibit dan konseling dan belum
            memiliki akun TAPO, maka pengguna diharuskan untuk mendaftarkan diri
            kedalam sistem TAPO dengan memasukkan beberapa data diri seperti nama,
            email, password, dan kolom ketik ulang password untuk mendeteksi apabila
            terdapat salah ketik atau error lainnnya
            <p></p>
            <h6>MASUK</h6>
            Apabila pengguna ingin mengakses sistem TAPO, terutama fitur pengajuan bibit
            dan konseling beserta riwayatnya, maka pengguna dapat masuk kembali kedalam
            sistem dengan memasukkan e-mail serta password yang telah didaftarkan.
            <p></p>
            </div>
        </div>
    </div>
    <div class="card" style=" width: 100%; right : 10%; padding-right: 1% ; padding-left: 1%">
        <div class="card-header">
            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5">
                Pengajuan Bibit
            </button>
        </div>
        <div id="faq5" class="collapse" data-parent="#accordion">
            <div class="card-body">
            <h6>PENGAJUAN BIBIT</h6>
            Apabila pengguna telah mendaftarkan diri dan ingin melakukan pengajuan bibit
            secara online maka pengguna dapat langsung menuju ke fitur pengajuan bibit
            dimana nanti pengguna akan diminta untuk mengisikan data diri, data lahan, serta
            data bibit yang diminta seperti nama bibit dan banyaknya bibit yang disediakan
            oleh Dinas Lingkungan Hidup. Adapun kelanjutan dari fitur pengajuan bibit
            adalah adanya pemantauan status pengajuan mulai dari proposal terkirim,
            proposal diterima, proposal diverifikasi, menunggu bibit, bibit siap diambil, bibit
            telah diambil hingga bibit telah ditanam.
            <p></p>
            <h6>RIWAYAT PENGAJUAN</h6>
            Apabila pengguna ingin melihat riwayat pengajuan bibit secara online  yang pernah dilakukan.
            </div>
        </div>
    </div>
    <div class="card" style=" width: 100%; right : 10%; padding-right: 1% ; padding-left: 1%">
        <div class="card-header">
            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq6">
                Pemangku Kepentingan
            </button>
        </div>
        <div id="faq6" class="collapse" data-parent="#accordion">
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">Muhammad Hasyim Asy'ari</dt>
                    <dd class="col-sm-9">192410101047</dd>
                    <dt class="col-sm-3">Achmad Galeh Indra Kurniawan</dt>
                    <dd class="col-sm-9">192410101077</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
</div>
<?= template_footer() ?>