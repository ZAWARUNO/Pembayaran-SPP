<?php
if(isset($_POST['nama_petugas'])) {
  $nama_petugas = $_POST['nama_petugas'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $level = $_POST['level'];
  
  $query = mysqli_query($koneksi, "INSERT INTO petugas(nama_petugas,username,password,level) values('$nama_petugas','$username','$password','$level')");
  if($query) {
    $message = "Berhasil Menambahkan Petugas!";
  }else{
    $message = "Gagal Menambahkan Petugas?";
  }
}
?>
<h1 class="h3 mb-3">Tambah Data Petugas</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="?page=petugas" class="btn btn-primary"><i class="align-middle" data-feather="corner-down-left"></i> Kembali</a>
        <hr>
        <form method="post">
        <table class="table">
        <tr>
            <td width="200">Nama petugas</td>
            <td width="1">:</td>
            <td><input class="form-control" type="text" name="nama_petugas" placeholder="Isi nama petugas..." required></td>
          </tr>
        <tr>
            <td width="200">username</td>
            <td width="1">:</td>
            <td><input class="form-control" type="text" name="username" placeholder="Isi username..." required></td>
          </tr>
          <tr>
        <tr>
            <td width="200">Password</td>
            <td width="1">:</td>
            <td><input class="form-control" type="password" name="password" placeholder="Isi password..." required></td>
          </tr>
        <tr>
            <td width="200">level</td>
            <td width="1">:</td>
            <td>
              <select class="form-select" name="level" required>
                <option value="" selected disabled>Pilih level...</option>
                <option value="petugas">Petugas</option>
                <option value="admin">Administrator</option>
              </select>
            </td>
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
