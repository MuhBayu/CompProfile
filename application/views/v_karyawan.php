		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li><a href="#">Data</a><i class="icon-angle-right"></i></li>
							<li class="active">Karyawan</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<!-- Lists -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<h4 class="lead">Daftar Karyawan</h4>
								<table class="table">
									<tr>
										<th>ID</th>
										<th>Kode</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Divisi</th>
										<th>Jabatan</th>
										<th>Foto</th>
									</tr>
									<?php foreach ($karyawan as $key => $kar) : ?>
										<tr>
											<td><?= $kar->id_kar; ?></td>
											<td><?= $kar->no_kar; ?></td>
											<td><?= $kar->nm_kar; ?></td>
											<td><?= $kar->jk_kar; ?></td>
											<td><?= $kar->nm_div; ?></td>
											<td><?= $kar->nm_jab; ?></td>
											<td><img style="height: 50px;" class="img-fluid" src="/assets/vendor/img/foto/<?= $kar->foto_kar; ?>"></td>
										</tr>
									<?php endforeach; ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>