<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM pembayaran WHERE id_pembayaran=$id");
if($query) {
  $_SESSION['success_message'] = "Pembayaran Berhasil di Hapus";
  echo "<script>location.href='index.php?page=pembayaran/history'</script>";
}else {
  $_SESSION['success_message'] = "Gagal Menghapus pembayaran";
  echo "<script>location.href='index.php?page=pembayaran/history'</script>";
}
?>