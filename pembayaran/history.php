<h1 class="h3 mb-3">Data Pembayaran</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <?php
        if (isset($_SESSION['user']['level'])) {
        ?>
        <a href="?page=pembayaran" class="btn btn-primary">+ Tambah Pembayaran</a>
        <?php
        }
        ?>
        <a href="pembayaran/laporan.php" target="_blank" class="btn btn-success ms-2">+ Buat Laporan</a>
        <hr>
        <table class="table">
          <tr>
            <th>No</th>
            <th>Petugas</th>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Bayar</th>
            <th>Tahun Dibayar</th>
            <th>SPP</th>
            <th>Jumlah Dibayar</th>
            <th>Status</th>
            <?php if (isset($_SESSION['user']['level'])) { 
              $where = "";
              ?>
            <th>Aksi</th>
            <?php
            }else {
              $where = " WHERE pembayaran.nisn=" . $_SESSION['user']['nisn'];
            }
            ?>
          </tr>
          <?php
          $i = 1;
          $query = mysqli_query($koneksi, "SELECT*FROM pembayaran LEFT JOIN petugas on petugas.id_petugas = pembayaran.id_petugas LEFT JOIN siswa ON siswa.nisn = pembayaran.nisn LEFT JOIN spp ON spp.id_spp = pembayaran.id_spp $where");
          while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
              <td><?php echo $i;?></td>
              <td><?php echo $data['nama_petugas'];?></td>
              <td><?php echo $data['nisn'];?></td>
              <td><?php echo $data['nama'];?></td>
              <td><?php echo $data['tgl_bayar'];?></td>
              <td><?php echo $data['bulan_bayar'];?></td>
              <td><?php echo $data['tahun_dibayar'];?></td>
              <td><?php echo number_format($data['nominal']);?></td>
              <td><?php echo number_format($data['jumlah_bayar']);?></td>
              <td><?php 
              if ($data['jumlah_bayar'] == $data['nominal']) {
                echo 'Lunas';
              } else{
                echo 'Belum Lunas';
              }
              ?></td>
            <?php if (isset($_SESSION['user']['level'])) { ?>
              <td>
                <!-- <a href="?page=pembayaran_ubah&id=<?php echo $data['id_pembayaran']; ?>" class="btn btn-warning me-3"><i class="align-middle" data-feather="edit"></i> Ubah</a> -->
                <a href="?page=pembayaran_hapus&id=<?php echo $data['id_pembayaran']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="delete"></i> Hapus</a>
              </td>
            </tr>
            <?php
            }
            $i++;
          }
          ?>
        </table>
      </div>
    </div>
  </div>
</div>
