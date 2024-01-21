<?= $this->extend('layouts/admin')?>

<?= $this->section('content')?>

<div class="row">
    <div class="col-lg-12">
        <h2><center><b>Welcome to Administrator</h2></center></b>
        <p>
            <strong>Aplikasi </strong>klasifikasi penentuan pengajuan kartu kredit menggunakan metode Naive Bayes yang dibangun memiliki satu administrator (analis kartu kredit) sebagai aktor dalam aplikasi. Admin di dalam aplikasi ini memiliki seluruh hak akses yang ada di dalam aplikasi yaitu <strong> mengelola (input, update, delete)</strong> data training, mengelola data testing, melakukan pengujian, dan melakukan prediksi. </strong> merupakan halaman utama untuk pengelola aplikasi web. Dengan menggunakan level ini akan memudahkan dalam mengelola dan memonitor aplikasi web.
        </p>
        <img src="assets/img/admin.png" alt="">
    </div>
</div>


<?= $this->endSection()?>