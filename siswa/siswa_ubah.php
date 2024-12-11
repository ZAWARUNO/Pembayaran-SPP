<?php
$id = $_GET['id'];
if(isset($_POST['nama'])) {
  $nisn = $_POST['nisn'];
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $id_kelas = $_POST['id_kelas'];
  $alamat = $_POST['alamat'];
  $no_telepon = $_POST['no_telepon'];
  $password = md5($_POST['password']);
  
  $query = mysqli_query($koneksi, "UPDATE siswa set nisn='$nisn', nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', no_telepon='$no_telepon' WHERE nisn=$id");

  if(isset($_POST['password'])) {
    $query = mysqli_query($koneksi, "UPDATE siswa set password='$password' WHERE nisn=$id");
  }
  
  if($query) {
    $message ="Berhasil diubah";
    }else{
    $message = "Data Gagal diubah";
    }
}
$query = mysqli_query($koneksi, "SELECT*FROM siswa WHERE nisn = $id");
$data = mysqli_fetch_array($query);
?>
<h1 class="h3 mb-3">Data siswa</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="?page=siswa" class="btn btn-primary"><i class="align-middle" data-feather="corner-down-left"></i> Kembali</a>
        <hr>
        <form method="post">
        <table class="table">
        <tr>
            <td width="200">NISN</td>
            <td width="1">:</td>
            <td><input class="form-control" type="number" name="nisn" value="<?php echo $data['nisn']; ?>"></td>
          </tr>
        <tr>
            <td width="200">NIS</td>
            <td width="1">:</td>
            <td><input class="form-control" type="number" name="nis" value="<?php echo $data['nis']; ?>"></td>
          </tr>
        <tr>
            <td width="200">Nama siswa</td>
            <td width="1">:</td>
            <td><input class="form-control" type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
          </tr>
        <tr>
            <td width="200">Kelas</td>
            <td width="1">:</td>
            <td><select name="id_kelas" class="form-select">
              <?php
              $kel = mysqli_query($koneksi, "SELECT*FROM kelas");
              while ($kelas = mysqli_fetch_array($kel)) {
              ?>
              <option <?php if($data['id_kelas'] == $kelas['id_kelas']) echo 'selected'; ?> value="<?php echo $kelas['id_kelas']; ?>"><?php echo $kelas['nama_kelas'];?></option>
              <?php } ?>
            </select></td>
          </tr>
        <tr>
            <td width="200">Alamat</td>
            <td width="1">:</td>
            <td><textarea class="form-control" rows="3" name="alamat"><?php echo $data['alamat']; ?></textarea></td>
          </tr>
        <tr>
            <td width="200">No telepon</td>
            <td width="1">:</td>
            <td><input class="form-control" type="tel" name="no_telepon" value="<?php echo $data['no_telepon']; ?>"></td>
          </tr>
        <tr>
            <td width="200">password</td>
            <td width="1">:</td>
            <td><input class="form-control" type="password" name="password">
            <span class="small">*)Jika pasword tidak diganti, maka kosongkan saja</span>
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
