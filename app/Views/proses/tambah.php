<?= $this->extend('website/layout')?>

  <?= $this->section('content')?>
  <?= session()->getFlashdata('error'); ?>
  <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
                <form class="row g-3" action="<?= site_url('prosesadd')  ?>" method="POST">
              </div>
              <a href="<?= site_url('customer') ?>" class="btn btn-primary btn-sm">Lihat Data</a>
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="tgl" class="form-label">TGL LAHIR</label>
                    <input type="text" name="tgl" class="form-control" id="tgl">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label for="umur" class="form-label">UMUR</label>
                    <input type="text" name="umur" class="form-control" id="umur">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="no_telp" class="form-label">NO TELP</label>
                    <input type="text" name="no_telp" class="form-control" id="no_telp">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" id="alamat"></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <div><select id="jk" name="jk" class="form-select">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select></div>
                      
                      </div>
                    </div>
                  </div>
                <div class="text-center">
                  <button style="margin-right: 80pt" type="submit" class="btn btn-md btn-primary">Simpan</button>
                  <button style="margin-left: 80pt" type="reset" class="btn btn-md btn-secondary">Reset</button>
              </div>
                </form>
              </div>
</div>
<?= $this->endSection()?>