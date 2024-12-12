<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM spp WHERE id_spp=$id");
if($query) {
  $_SESSION['success_message'] = "Berhasil Menghapus SPP!";
  echo "<script>location.href='index.php?page=spp/spp'</script>";
}else {
  $_SESSION['success_message'] = "Gagal Menghapus SPP?";
  echo "<script>location.href='index.php?page=spp/spp'</script>";
}
?>