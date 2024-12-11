<h1 class="h3 mb-3">Data Kelas</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="?page=kelas/tambah_kelas" class="btn btn-primary">+ Tambah Kelas</a>
        <hr>
        <table class="table">
          <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Kompetensi keahlian</th>
            <th>Aksi</th>
          </tr>
          <?php
          $i = 1;
          $query = mysqli_query($koneksi, "SELECT*FROM kelas");
          while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
              <td><?php echo $i;?></td>
              <td><?php echo $data['nama_kelas'];?></td>
              <td><?php echo $data['kompetensi_keahlian'];?></td>
              <td>
                <a href="?page=kelas/kelas_ubah&id=<?php echo $data['id_kelas']; ?>" class="btn btn-warning me-3"><i class="align-middle" data-feather="edit"></i> Ubah</a>
                <a href="?page=kelas/kelas_hapus&id=<?php echo $data['id_kelas']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="delete"></i> Hapus</a>
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
