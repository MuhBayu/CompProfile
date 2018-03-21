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
					<h4 class="text-center">Nama Divisi</h4>
					<hr/>
					<?php foreach ($nm_divisi as $key => $nm_div) : ?>
					<?php $id_div = $nm_div->id_div; ?>
						<div class="col-lg-6">
							<hr/>
							<h5 class="text-center"><?= $nm_div->nm_div; ?></h5>
							<hr/>
					<?php foreach ($divisi as $key => $value): ?>
					<?php foreach ($value as $key => $d): ?>
					<?php if ($d->id_div == $id_div): ?>
						<div class="col-md-4 text-center">
							<img src="/assets/vendor/img/foto/<?= $d->foto_kar; ?>" class="img-circle"><br/>
							<strong><?= $d->nm_kar; ?></strong><br/>
							<span>(<?= $d->nm_jab; ?>)</span>
						</div>
					<?php endif; ?>
					<?php endforeach; ?>
					<?php endforeach; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>