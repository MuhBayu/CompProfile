		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li><a href="#">Divisi</a><i class="icon-angle-right"></i></li>
							<li class="active"><?= @$divisi[0]->nm_div; ?></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<!-- Lists -->
				<div class="row">
					<!-- Unordered Lists -->
					<div class="col-lg-12">
						<h4>Divisi <?= @$divisi[0]->nm_div; ?></h4>
						<table class="table table-bordered">
							<tr>
								<th>No.</th>
								<th>Nama Karyawan</th>
								<th>Jenis Kelamin</th>
								<th>Jabatan</th>
								<th>Foto</th>
							</tr>
						<?php $no = 1; foreach (@$divisi as $key => $kar): ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $kar->nm_kar; ?></td>
								<td><?= $kar->jk_kar; ?></td>
								<td><?= $kar->nm_kar; ?></td>
								<td align="center"><img style="height: 50px;" class="img-fluid" src="<?= base_url('/assets/vendor/img/foto/'.$kar->foto_kar); ?>"></td>
							</tr>
						<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</section>