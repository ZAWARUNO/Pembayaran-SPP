<?php
if(isset($_POST['nama'])) {
  $nisn = $_POST['nisn'];
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $id_kelas = $_POST['id_kelas'];
  $alamat = $_POST['alamat'];
  $no_telepon = $_POST['no_telepon'];
  $password = md5($_POST['password']);
  
  $query = mysqli_query($koneksi, "INSERT INTO siswa(nisn, nis, nama, id_kelas, alamat, no_telepon, password) values('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telepon', '$password')");
  if($query) {
    $message = "Berhasil Menambahkan Siswa!";
  }else{
    $message = "Gagal Menambahkan Siswa?";
  }
}
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
            <td><input class="form-control" type="number" name="nisn" placeholder="Isi NISN Siswa" required></td>
          </tr>
        <tr>
            <td width="200">NIS</td>
            <td width="1">:</td>
            <td><input class="form-control" type="number" name="nis" placeholder="Isi NIS Siswa" required></td>
          </tr>
        <tr>
            <td width="200">Nama siswa</td>
            <td width="1">:</td>
            <td><input class="form-control" type="text" name="nama" placeholder="Isi Nama Siswa" required></td>
          </tr>
        <tr>
            <td width="200">Kelas</td>
            <td width="1">:</td>
            <td><select name="id_kelas" class="form-control" required>
              <option value="" selected disabled>Silakan Pilih Kelas</option>
              <?php
              $kel = mysqli_query($koneksi, "SELECT*FROM kelas");
              while ($kelas = mysqli_fetch_array($kel)) {
              ?>
              <option value="<?php echo $kelas['id_kelas']; ?>"><?php echo $kelas['nama_kelas'];?></option>
              <?php } ?>
            </select></td>
          </tr>
        <tr>
            <td width="200">Alamat</td>
            <td width="1">:</td>
            <td><textarea class="form-control" rows="3" name="alamat" placeholder="Isi Alamat Siswa" required></textarea></td>
          </tr>
        <tr>
            <td width="200">No telepon</td>
            <td width="1">:</td>
            <td><input class="form-control" type="tel" name="no_telepon" placeholder="Isi No telp Siswa" required></td>
          </tr>
        <tr>
            <td width="200">password</td>
            <td width="1">:</td>
            <td><input class="form-control" type="password" name="password" placeholder="Isi Password Siswa" required></td>
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
