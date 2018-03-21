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
						<h3><?= $proyek->nm_proy; ?></h3>
						<div class="row">
							<div class="col-lg-7">
								<img src="<?= base_url('/assets/vendor/img/works/'.$proyek->img_proy); ?>" alt="" class="align-left" />
							</div>
							<div class="col-md-5">
								<table class="table">
									<tr>
										<th width="150">Kode</th>
										<td width="10">:</td>
										<td><?= $proyek->id_proy; ?></td>
									</tr>
									<tr>
										<th>Nama Proyek</th>
										<td>:</td>
										<td><?= $proyek->nm_proy; ?></td>
									</tr>
									<tr>
										<th>Pimpinan Proyek</th>
										<td>:</td>
										<td><?= $proyek->nm_kar; ?></td>
									</tr>
									<tr>
										<th>Tanggal Mulai</th>
										<td>:</td>
										<td><?= $proyek->tgl_mulai; ?></td>
									</tr>
									<tr>
										<th>Tanggal Selesai</th>
										<td>:</td>
										<td><?= $proyek->tgl_selesai; ?></td>
									</tr>
								</table>
							</div>
						</div>
						<h4>Team</h4>
						<table class="table table-bordered">
							<tr>
								<th>#</th>
								<th>Karyawan</th>
								<th>Posisi</th>
							</tr>
						<?php $no=0; foreach ($terlibat as $key => $proy) : $no++; ?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $proy->nm_kar; ?></td>
								<td><?= $proy->posisi; ?></td>
							</tr>
						<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</section>