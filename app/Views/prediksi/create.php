<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>

<?= session()->getFlashdata('error'); ?>

<div class="row">
    <div class="col-12 col-md-6">
        <form action="<?=base_url('/admin/prediksi/store'); ?>"method="post">

        <?=csrf_field() ?>

        <div class="mb-3">
            <label for="" class="form-label"> Nama</label>
            <input type="text" name="prediksi_nama" class="form-control"required autofocus>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jenis_Kelamin</label>
            <input type="text" name="prediksi_jenis_kelamin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status_Rumah</label>
            <input type="text" name="prediksi_status_rumah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" name="prediksi_status" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jumlah Tanggungan</label>
            <input type="text" name="prediksi_jumlah_tanggungan" class="form-control" required>
        </div><div class="mb-3">
            <label for="" class="form-label">Profesi</label>
            <input type="text" name="prediksi_profesi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Penghasilan Pertahun</label>
            <input type="text" name="prediksi_penghasilan_pertahun" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Kartu Kredit</label>
            <textarea name="prediksi_kartu_kredit" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>
  </div>
<?=$this->endSection()?>