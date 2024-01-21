<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>

<?= session()->getFlashdata('error'); ?>

<div class="row">
    <div class="col-12 col-md-6 ">
        <form action="<?=base_url('/admin/testing/update'); ?>"method="post">

        <?=csrf_field() ?>

         <div class="mb-3">
            <label for="" class="form-label"> Nama</label>
            <input type="text" name="testing_nama" class="form-control"required autofocus>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jenis Kelamin</label>
            <input type="text" name="testing_jenis_kelamin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status Rumah</label>
            <input type="text" name="testing_status_rumah" class="form-control" required>
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" name="testing_status" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Jumlah Tanggungan</label>
            <input type="text" name="testing_jumlah_tanggungan" class="form-control" required>
        </div><div class="mb-3">
            <label for="" class="form-label">Profesi</label>
            <input type="text" name="testing_profesi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Penghasilan Pertahun</label>
            <input type="text" name="testing_penghasilan_pertahun" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Kartu Kredit</label>
            <textarea name="testing_kartu_kredit" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>

<?=$this->endSection()?>