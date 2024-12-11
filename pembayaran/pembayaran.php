<?php
if(isset($_POST['id_petugas'])) {
  $id_petugas = $_POST['id_petugas'];
  $nisn = $_POST['nisn'];
  $tgl_bayar = $_POST['tgl_bayar'];
  $id_spp = $_POST['id_spp'];
  $jumlah_bayar = $_POST['jumlah_bayar'];
  $bulan_bayar = $_POST['bulan_bayar'];
  $tahun_dibayar = $_POST['tahun_dibayar'];

  $query = mysqli_query($koneksi, "INSERT INTO pembayaran(id_petugas, nisn, tgl_bayar, id_spp, jumlah_bayar, bulan_bayar, tahun_dibayar) values ('$id_petugas', '$nisn', '$tgl_bayar', '$id_spp', '$jumlah_bayar', '$bulan_bayar', '$tahun_dibayar')");

  if($query){
    $message = "Entri Pembayaran Berhasil!";
  }else{
    $message = "Gagal Melakukan Entri pembayaran";
  }

}
?>
<h1 class="h3 mb-3">Entri Data Pembayaran</h1>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form method="post">
        <table class="table">
          <tr>
            <td width="200">Petugas</td>
            <td width="1">:</td>
            <td>
              <select name="id_petugas" class="form-select" required>
                <?php
                $p = mysqli_query($koneksi, "SELECT*FROM petugas");
                while($petugas = mysqli_fetch_array($p)){
                  ?>
                  <option value="<?php echo $petugas['id_petugas'];?>" <?php if($_SESSION['user']['nama_petugas'] == $petugas['nama_petugas']) echo 'selected'; ?>>
                    <?php echo $petugas['nama_petugas'];?>
                  </option>
                  <?php
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td width="200">Siswa</td>
            <td width="1">:</td>
            <td>
              <select name="nisn" class="form-select" required>
                <option value="" selected disabled>Silakan Pilih siswa</option>
                <?php
                $p = mysqli_query($koneksi, "SELECT*FROM siswa");
                while($siswa = mysqli_fetch_array($p)){
                  ?>
                  <option value="<?php echo $siswa['nisn'];?>">
                    <?php echo $siswa['nama'];?>
                  </option>
                  <?php
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td width="200">Tanggal Bayar</td>
            <td width="1">:</td>
            <td>
                <input type="date" class="form-control" name="tgl_bayar" required>
            </td>
          </tr>
          <tr>
          <tr>
            <td width="200">Bulan Bayar</td>
            <td width="1">:</td>
            <td>
              <select name="bulan_bayar" class="form-select" required>
                <option value="" selected disabled>Bulan apa yang dibayar?</option>
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Agustus</option>
                <option>September</option>
                <option>Oktober</option>
                <option>November</option>
                <option>Desember</option>
              </select>
            </td>
          </tr>
          <tr>
          <tr>
            <td width="200">Tahun Dibayar</td>
            <td width="1">:</td>
            <td>
                <input type="number" class="form-control" name="tahun_dibayar" placeholder="Tahun mana yang dibayar?" required>
            </td>
          </tr>
          <tr>
            <td width="200">SPP</td>
            <td width="1">:</td>
            <td>
              <select name="id_spp" class="form-select" required>
                <option value="" selected disabled>Berapa SPP nya?</option>
                <?php
                $p = mysqli_query($koneksi, "SELECT*FROM spp");
                while($spp = mysqli_fetch_array($p)){
                  ?>
                  <option value="<?php echo $spp['id_spp'];?>">
                    <?php echo number_format($spp['nominal']) . ' ('.$spp['tahun'].')';?>
                  </option>
                  <?php
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td width="200">Jumlah Bayar</td>
            <td width="1">:</td>
            <td>
                <input type="number" class="form-control" name="jumlah_bayar" placeholder="Berapa yang dibayar?" required>
            </td>
          </tr>
          <tr>
            <td width="200"></td>
            <td width="1"></td>
            <td>
              <button class="btn btn-success" type="submit">Simpan</button>
            </td>
          </tr>
        </table>
        </form>
      </div>
    </div>
  </div>
</div>
