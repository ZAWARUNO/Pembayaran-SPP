<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas=$id");
if($query) {
  $_SESSION['success_message'] = "Kelas Berhasil di Hapus";
  echo "<script>location.href='index.php?page=kelas/kelas'</script>";
}else {
  $_SESSION['success_message'] = "Gagal Untuk Menghapus Kelas";
  echo "<script>location.href='index.php?page=kelas/kelas'</script>";
}
?>