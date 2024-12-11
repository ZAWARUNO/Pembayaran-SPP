<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas=$id");
if($query) {
  $_SESSION['success_message'] = "Pertugas Berhasil di Hapus!";
  echo "<script>location.href='index.php?page=petugas'</script>";
}else {
  $_SESSION['success_message'] = "Gagal Menghapus Petugas?";
  echo "<script>location.href='index.php?page=petugas'</script>";
}
?>