<?php
include '../home/koneksi.php';
if(isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$cek_petugas = mysqli_query($koneksi, "SELECT*FROM petugas WHERE username='$username' AND password='$password'");

	if(mysqli_num_rows($cek_petugas) > 0) {
		$_SESSION['user'] = mysqli_fetch_array($cek_petugas);
		$_SESSION['success_message'] = "Selamat datang kembali, " . $_SESSION['user']['level'];
		$toastClass = "text-bg-success";
		header('location:../index.php');
		exit;
		} else {
		$cek_siswa = mysqli_query($koneksi, "SELECT*FROM siswa WHERE nisn='$username' AND password='$password'");
		if(mysqli_num_rows($cek_siswa)) {
			$_SESSION['user'] = mysqli_fetch_array($cek_siswa);
			$_SESSION['success_message'] = "Selamat datang kembali, Siswa!";
			header('location:../index.php');
			exit;
				} else{
					$_SESSION['error_message'] = "Username atau password salah!";
						}
	}
}
$error_message = "";
if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/icons/smkn_4_plg.png" />

	<title>Login Pembayaran SPP SMKN 4 Palembang</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Aplikasi Pembayaran SPP</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">NISN / Username</label>
											<input class="form-control form-control-lg" type="username" name="username" placeholder="Masukan NISN jika kamu siswa" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="masukan password" />
										</div>
										<div class="d-grid gap-2 mt-5">
											<button class="btn btn-lg btn-primary" type="submit" id="liveToastBtn">Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							&copy; Copyright BY <a href="pages-sign-up.html">M.Apriansyah</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php if (!empty($error_message)): ?>
	<div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 11">
	<div id="liveToast" class="toast align-items-center text-bg-danger border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo $error_message; ?>
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
</div>
<?php endif; ?>

	<script src="../js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="../js/script.js"></script>
</body>

</html>