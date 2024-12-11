<?php
$id = $_GET['id'];
if(isset($_POST['nama_petugas'])) {
  $nama_petugas = $_POST['nama_petugas'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $level = $_POST['level'];
  
  $query = mysqli_query($koneksi, "UPDATE petugas SET nama_petugas='$nama_petugas', username='$username', level='$level' WHERE id_petugas = $id");

  if($_POST['password'] != "") {
  $query = mysqli_query($koneksi, "UPDATE petugas SET password='$password' WHERE id_petugas = $id");
  }

  if($query) {
    $message = "Petugas berhasil diubah!";
  }else{
    $message = "Gagal Mengubah Petugas?";
  }
}
$query = mysqli_query($koneksi, "SELECT*FROM petugas WHERE id_petugas=$id");
$data = mysqli_fetch_array($query);
?>
<h1 class="h3 mb-3">Ubah Data Petugas</h1>

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
            <td><input class="form-control" type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>"></td>
          </tr>
        <tr>
            <td width="200">username</td>
            <td width="1">:</td>
            <td><input class="form-control" type="text" name="username" value="<?php echo $data['username']; ?>"></td>
          </tr>
          <tr>
        <tr>
            <td width="200">Password</td>
            <td width="1">:</td>
            <td><input class="form-control" type="password" name="password">
            <span class="small">*)Jika tidak diganti, kosongkan saja</span>
          </td>
          </tr>
        <tr>
            <td width="200">level</td>
            <td width="1">:</td>
            <td>
              <select class="form-select" name="level">
                <option value="petugas" <?php if ($data['level'] == 'petugas') {
                  echo 'selected';
                }?> >Petugas</option>
                <option value="admin" <?php if ($data['level'] == 'admin') {
                  echo 'selected';
                }?> >Administrator</option>
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
