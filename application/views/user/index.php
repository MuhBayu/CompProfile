		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Profil</h3>
							<p class="panel-subtitle">Dashboard profil</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3 col-sm-3 text-center">
									<div class="thumbnail">
										<img src="<?= base_url('/assets/vendor/img/foto/'. $profil->foto_kar); ?>" class="img-circle">
									</div>
								</div>
								<div class="col-md-9 col-sm-9">
									<table class="table">
										<tr>
											<th width="150">Nama</th>
											<td width="10">:</td>
											<td><?= $profil->nm_kar; ?></td>
										</tr>
										<tr>
											<th>Jenis Kelamin</th>
											<td>:</td>
											<td><?= $profil->jk_kar; ?></td>
										</tr>
										<tr>
											<th>Divisi</th>
											<td>:</td>
											<td><?= $profil->nm_div; ?></td>
										</tr>
										<tr>
											<th>Jabatan</th>
											<td>:</td>
											<td><?= $profil->nm_jab; ?></td>
										</tr>
										<tr>
											<th>Peran</th>
											<td>:</td>
											<td><?= ($profil->level == '1') ? '<span class="badge bg-success">ADMIN</span>' : '<span class="badge bg-danger">USER</span>' ; ?></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
