<h1 class="h3 mb-3">Data siswa</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="?page=siswa/tambah_siswa" class="btn btn-primary">+ Tambah siswa</a>
        <hr>
        <table class="table">
          <tr>
            <th>No</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Aksi</th>
          </tr>
          <?php
          $i = 1;
          $query = mysqli_query($koneksi, "SELECT*FROM siswa LEFT JOIN kelas on siswa.id_kelas=kelas.id_kelas");
          while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
              <td><?php echo $i;?></td>
              <td><?php echo $data['nisn'];?></td>
              <td><?php echo $data['nis'];?></td>
              <td><?php echo $data['nama'];?></td>
              <td><?php echo $data['nama_kelas'];?></td>
              <td><?php echo $data['alamat'];?></td>
              <td><?php echo $data['no_telepon'];?></td>
              <td>
                <a href="?page=siswa/siswa_ubah&id=<?php echo $data['nisn']; ?>" class="btn btn-warning me-3"><i class="align-middle" data-feather="edit"></i> Ubah</a>
                <a href="?page=siswa/siswa_hapus&id=<?php echo $data['nisn']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="delete"></i> Hapus</a>
              </td>
            </tr>
            <?php
            $i++;
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</div>
