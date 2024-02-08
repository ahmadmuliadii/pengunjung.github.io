<br><br>

<h2>Tambah Daftar Pengunjung</h2>
<br>

<form action="<?= base_url('Daftar/tambahdaftar'); ?>" method="post">
  
  <div class="form-group">
    <label for="nm-hari">Hari/Tanggal</label>
    <input type="date" name="hari-tanggal" class="form-control" id="nm-daftar">
  </div>

  <div class="form-group">
    <label for="nm-nama">Nama</label>
    <input type="text" name="nama-daftar" class="form-control" id="nm-daftar" placeholder="Nama" required>
  </div>

  <div class="form-group">
    <label for="nm-dari">Dari/Instansi</label>
    <input type="text" name="dari-instansi" class="form-control" id="nm-dari" placeholder="instansi" required>
  </div>

  <div class="form-group">
    <label for="nm-tujuan">Tujuan</label>
    <input type="text" name="tujuan-daftar" class="form-control" id="nm-tujuan" placeholder="Tujuan" required>
  </div>

  <div class="form-group">
    <label for="no-hp">No Hp</label>
    <input type="text" name="no-hp" class="form-control" id="no-hp" placeholder="No HP" required>
  </div>

  
  <div class="form-group">
    <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
    <button type="reset" class="btn btn-warning float-right mx-2">Reset</button>
  </div>
  
</form>