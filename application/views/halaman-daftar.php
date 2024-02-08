

<h1 style="text-align:center">Halaman Daftar Pengunjung</h1>


<br>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Hari/Tanggal</th>
      <th scope="col">Nama</th>
      <th scope="col">Dari/Instansi</th>
      <th scope="col">Tujuan</th>
      <th scope="col">No Hp</th>
      <th class="text-center" scope="col">action</th> 
    
    
    </tr>
  </thead>
  <tbody>
<?php   
$no = 1;
foreach ($data_daftar as $row) 
{
?>
    <tr>
      <th scope="row"><?= $no++;  ?></th>
      <td><?= $row['hari_tanggal']; ?></td>
      <td><?= $row['nama']; ?></td>
      <td><?= $row['dari_instansi']; ?></td>
      <td><?= $row['tujuan']; ?></td>
      <td><?= $row['nohp']; ?></td>     
      <td class="text-center">
        <a href="daftar/editdatadaftar/<?= $row['id']; ?>" style="color: #0f0404;" title="edit">
          <i class="fa fa-pencil" aria-hidden="true"></i>
        </a> | 
        <a href="daftar/deletedaftar/<?= $row['id']; ?>" style="color: #0f0404;" title="delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
          <i class="fa fa-trash" aria-hidden="true"></i>
        </a>
      </td>
    </tr>

<?php  
  }
?>

  </tbody>
</table>
<a href="<?= base_url('daftar/tambahdatadaftar'); ?>" class="btn btn-success">Tambah Data</a href="<?= base_url('daftar/tambahdatadaftar'); ?>">
  </div>


