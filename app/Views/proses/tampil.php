<?= $this->extend('admin/layout')?>

<?= $this->section('content')?>
<?= session()->getFlashdata('pesan'); ?>

<div class="row">
  <div class="col-md-12">
      <h1>Data Customer</h1>
      <div>
        <button class="btn btn-lg bg-primary">
          <a style="color: white;" href="<?= site_url('addcustomer') ?>">Tambah Data</a>
        </button>
      </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Nomor Telpon</th>
          <th>#</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($record as $key): ?> 
        <tr>
          <td>
            <?php if ($key->Foto=='') { ?>
                          <img src="<?= base_url() ?>/uploads/noimage.png" alt="No Image" class="rounded-circle w-25" style="border-radius: 50%; width: 80px; height: 100px;">
                          <?php }else{ ?>
                          <img src="<?= base_url() ?>/uploads/<?= $key->Foto ?>" alt="No Image" class="rounded-circle" style="border-radius: 50%; width: 80px; height: 100px;">
                          <?php } ?>
            <?= $key->nama ?></td>
           <td><?= $key->tgl_lahir ?></td>
           <td><?= $key->umur ?></td>
           <td><?= $key->jenis_kelamin ?></td>
           <td><?= $key->alamat ?></td>
           <td><?= $key->no_telp ?></td>
           <td>
            <a class="btn btn-success" style="color: white; margin-right: 10pt;" href="<?= site_url('customer-upload/'.$key->no_telp) ?>">Upload</a>
          <a class="btn btn-primary" style="color: white; margin-right: 10pt; margin-left: 10pt;" href="<?= site_url('customer-edit/'.$key->no_telp) ?>">Edit</a>
          <a class="btn btn-danger" style="color: white; margin-left: 10pt;" href="<?= site_url('customer-delete/'.$key->no_telp) ?>">Delete</a>
        </td>
        </tr>
        <?php endforeach ?> 
      </tbody>
    </table>
  </div>
  
</div>
<?= $this->endSection()?>