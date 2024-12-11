<?php
if(isset($_POST['nama_kelas'])) {
  $nama_kelas = $_POST['nama_kelas'];
  $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
  
  $query = mysqli_query($koneksi, "INSERT INTO kelas(nama_kelas,kompetensi_keahlian) values('$nama_kelas','$kompetensi_keahlian')");
  if($query) {
    $message = "Tambah data berhasil!";
  }else{
    $message = "Tambah data gagal!";
  }
}
?>
<h1 class="h3 mb-3">Data Kelas</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="?page=kelas" class="btn btn-primary"><i class="align-middle" data-feather="corner-down-left"></i> Kembali</a>
        <hr>
        <form method="post">
        <table class="table">
        <tr>
            <td width="200">Nama Kelas</td>
            <td width="1">:</td>
            <td><input class="form-control" type="text" name="nama_kelas" placeholder="Isi nama kelas..." required></td>
          </tr>
        <tr>
            <td width="200">kompetensi_keahlian</td>
            <td width="1">:</td>
            <td><input class="form-control" type="text" name="kompetensi_keahlian" placeholder="Isi kompetensi keahlian..." required></td>
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
