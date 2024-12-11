<?php
if(isset($_POST['tahun'])) {
  $tahun = $_POST['tahun'];
  $nominal = $_POST['nominal'];
  
  $query = mysqli_query($koneksi, "INSERT INTO spp(tahun,nominal) values('$tahun','$nominal')");
  if($query) {
    $message = "SPP Baru Berhasil ditambahkan!";
  }else{
    $message = "Gagal Menambahkan SPP Baru?";
  }
}
?>
<h1 class="h3 mb-3">Data SPP</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="?page=spp" class="btn btn-primary"><i class="align-middle" data-feather="corner-down-left"></i> Kembali</a>
        <hr>
        <form method="post">
        <table class="table">
        <tr>
            <td width="200">Tahun SPP</td>
            <td width="1">:</td>
            <td><input class="form-control" type="number" name="tahun" placeholder="Isi tahun..." required></td>
          </tr>
        <tr>
            <td width="200">Nominal SPP</td>
            <td width="1">:</td>
            <td><input class="form-control" type="number" name="nominal" placeholder="Isi nominal..." required></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><button class="btn btn-success" type="submit">Simpan</button></td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </div>
</div>
