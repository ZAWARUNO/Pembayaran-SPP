<h1 class="h3 mb-3">Data SPP</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="?page=tambah_SPP" class="btn btn-primary">+ Tambah SPP</a>
        <hr>
        <table class="table">
          <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Nominal</th>
            <th>Aksi</th>
          </tr>
          <?php
          $i = 1;
          $query = mysqli_query($koneksi, "SELECT*FROM spp");
          while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
              <td><?php echo $i;?></td>
              <td><?php echo $data['tahun'];?></td>
              <td><?php echo number_format($data['nominal']);?></td>
              <td>
                <a href="?page=spp_ubah&id=<?php echo $data['id_spp']; ?>" class="btn btn-warning me-3"><i class="align-middle" data-feather="edit"></i> Ubah</a>
                <a href="?page=spp_hapus&id=<?php echo $data['id_spp']; ?>" class="btn btn-danger"><i class="align-middle" data-feather="delete"></i> Hapus</a>
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
