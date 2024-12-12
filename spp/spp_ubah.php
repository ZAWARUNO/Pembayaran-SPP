<?php
$id = $_GET['id'];
if(isset($_POST['tahun'])) {
  $tahun = $_POST['tahun'];
  $nominal = $_POST['nominal'];
  
  $query = mysqli_query($koneksi, "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp = $id");
  if($query) {
    $message = "SPP Telah di Ubah!";
  }else{
    $message = "Gagal Mengubah SPP?";
  }
}
$query = mysqli_query($koneksi, "SELECT*FROM spp WHERE id_spp=$id");
$data = mysqli_fetch_array($query);

?>
<h1 class="h3 mb-3">Ubah Data SPP</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="?page=spp/spp" class="btn btn-primary"><i class="align-middle" data-feather="corner-down-left"></i> Kembali</a>
        <hr>
        <form method="post">
        <table class="table">
        <tr>
            <td width="200">Tahun SPP</td>
            <td width="1">:</td>
            <td><input class="form-control" type="number" name="tahun" value="<?php echo $data['tahun']; ?>"></td>
          </tr>
        <tr>
            <td width="200">Nominal SPP</td>
            <td width="1">:</td>
            <td><input class="form-control" type="number" name="nominal" value="<?php echo $data['nominal']; ?>"></td>
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
