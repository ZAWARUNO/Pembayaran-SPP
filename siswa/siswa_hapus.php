<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn=$id");
if($query) {
  $_SESSION['success_message'] = "Berhasil Menghapus Siswa!";
  echo "<script>location.href='index.php?page=siswa'</script>";
}else {
  $_SESSION['success_message'] = "Gagal Menghapus Siswa?";
  echo "<script>location.href='index.php?page=siswa'</script>";
}
?>