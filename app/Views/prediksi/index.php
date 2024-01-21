<?=$this->extend('layouts/admin') ?>
<?= $this->section('content') ?>

<div class="row bg-secondary-subtle">
    <div class="col-lg-12">
        

        <!-- menampilkan pesan -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-info">
                <strong>Success!!</strong>
                <p>
                    <?= session()->getFlashdata('success') ?>
                </p>
            </div>
            <?php endif;?>

            <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <strong>Whoops Salah!!</strong>
                <p>
                    <?= session()->getFlashdata('error') ?>
                </p>
            </div>
            <?php endif;?>
            <h3><b>Data Prediksi</b> <a href="<?=url_to('prediksi.create')?>"class="btn btn-success">Add Data</a></h3>
        <hr/> <table class="table table-bordered">
    <thead>
            <thead>
                <tr>
                    
                    <th>No.</th> 
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Status Rumah</th>
                    <th>Status</th>
                    <th>Jumlah Tanggungan</th>
                    <th>Profesi</th>
                    <th>Penghasilan Pertahun</th>
                    <th>Kartu Kredit</th>
                    <th>Prediksi</th>

                </tr>
            
            </thead>
            <tbody>
                <?php
                $nomor=1;
                foreach ($prediksis as $p) :
                ?>
                <tr>
                    <td> <?=$nomor?></td>
                    <td> <?=$p->prediksi_nama?></td>
                    <td> <?=$p->prediksi_jenis_kelamin?></td>
                    <td> <?=$p->prediksi_status_rumah?></td>
                    <td> <?=$p->prediksi_status?></td>
                    <td> <?=$p->prediksi_jumlah_tanggungan?></td>
                    <td> <?=$p->prediksi_profesi?></td>
                    <td> <?=$p->prediksi_penghasilan_pertahun?></td>
                    <td>  <?=$p->prediksi_kartu_kredit?> </td>
                    <td>
                        <a href="<?=site_url('/admin/prediksi/edit/'.$p->prediksi_id)?>" class="btn btn-primary">Edit</a>
                        <a href="<?=site_url('/admin/prediksi/delete/'.$p->prediksi_id)?>" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
                <?php $nomor++; endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>