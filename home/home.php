					<h1 class="h3 mb-3">Dashboard</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Selamat Datang! di Aplikasi pembayara SPP SMKN 4 PLG >0<</h5>
								</div>
								<div class="card-body">
                  <table class="table">
                    <?php
                    if (isset($_SESSION['user']['level'])) {
                    ?>
                    <tr>
                      <td width="200">Nama User</td>
                      <td width="1">:</td>
                      <td><?php echo $_SESSION['user']['nama_petugas']; ?></td>
                    </tr>
                    <tr>
                      <td width="200">Level</td>
                      <td width="1">:</td>
                      <td><?php echo $_SESSION['user']['level']; ?></td>
                    </tr>
                    <?php
                    }else {
                    ?>
                    <tr>
                      <td width="200">Nama User</td>
                      <td width="1">:</td>
                      <td><?php echo $_SESSION['user']['nama']; ?></td>
                    </tr>
                    <tr>
                      <td width="200">Level</td>
                      <td width="1">:</td>
                      <td>Siswa</td>
                    </tr>
                    <?php } ?>
                    <tr>
                      <td width="200">Tanggal Login</td>
                      <td width="1">:</td>
                      <td><?php echo date('d-m-y H:i:s'); ?></td>
                    </tr>
                    <tr>
                      <td colspan="3" class="text-center">Tata cara pembayaran SPP</td>
                    </tr>
                  </table>
                  <embed src="img/tata_cara_pembayaran.pdf" type="application/pdf" width="100%" height="800px">
								</div>
							</div>
						</div>
					</div>
