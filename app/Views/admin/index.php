<?= $this->extend('layouts/admin')?>

<?= $this->section('content')?>

<div class="row bg-white">
    <div class="col-lg-12">
    <center><img src="assets/img/favicon1.png" alt=""></center>
        <h3><center><b>Penentuan Pengajuan Kartu Kredit di Bank BNI Syariah Surabaya</h3></center></b>
        <p>
            <strong>Aplikasi </strong>klasifikasi penentuan pengajuan kartu kredit menggunakan metode Naive Bayes yang dibangun memiliki satu administrator (analis kartu kredit) sebagai aktor dalam aplikasi. Admin di dalam aplikasi ini memiliki seluruh hak akses yang ada di dalam aplikasi yaitu <strong> mengelola (input, update, delete)</strong> data training, mengelola data testing, melakukan pengujian, dan melakukan prediksi. </strong> merupakan halaman utama untuk pengelola aplikasi web. Dengan menggunakan level ini akan memudahkan dalam mengelola dan memonitor aplikasi web.
        </p>
        
        <p><b>Metode Naive Bayes dari teorema Bayes adalah:</b></p>
        <p><strong>P(H|X) =  P(X|H) . P(H) / P(X)</p></strong>
        <p>Keterangan:</p>
          <p> X          = Data dengan class yang belum diketahui</p>
           <p>H          = Hipotesis data merupakan suatu class spesifik P(H|X)= Probabilitas hipotesis H berdasar kondisi X (posteori probabilitas)</p>
           <p>P(H)       = Probabilitas hipotesis H (prior probabilitas)</p>
           <p>P(X|H)     = Probabilitas X berdasarkan kondisi pada hipotesis H P(X) = Probabilitas X</p>
        

           

        
    
<h3><b>Data Training</b></h3>
<img src="assets/img/8.PNG" alt="">

 <h3><b>Data Testing</b></h3>
 <img src="assets/img/9.PNG" alt="">

<tr>
 <h3><b>Perhitungan Naive Bayes</b></h3>
 <img src="assets/img/1.PNG" alt="">
 <img src="assets/img/2.PNG" alt="">
 <img src="assets/img/3.PNG" alt="">
 <img src="assets/img/4.PNG" alt="">
 <img src="assets/img/5.PNG" alt="">
 <img src="assets/img/6.PNG" alt="">
 <img src="assets/img/7.PNG" alt="">


    </div>
</div>

<?= $this->endSection()?>
