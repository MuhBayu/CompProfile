
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Portfolio</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="clearfix"></div>
						<div class="row">
							<h3>Proyek Kami</h3>
							<section id="projects">
								<ul id="thumbs" class="portfolio">
								<?php foreach ($produk as $key => $data) : ?>
									<!-- Item Project and Filter Name -->
									<li class="col-lg-3 design" data-id="id-0" data-type="web">
										<div class="item-thumbs">
											<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?= $data->nm_proy; ?>" href="<?= base_url('/assets/vendor/img/works/'.$data->img_proy); ?>">
												<span class="overlay-img"></span>
												<span class="overlay-img-thumb font-icon-plus"></span>
											</a>
											<?php $aProy = base_url('/main/detail_proyek/'.$data->id_proy); ?>
											<img class="img-fluid" height="600" src="<?= base_url('/assets/vendor/img/works/'.$data->img_proy); ?>" alt="Tanggal proyek: <?= date('d M Y', strtotime($data->tgl_mulai)); ?> 
												<br/><br/><a href='<?= $aProy; ?>'>Detail</a>">
										</div>
									</li>
								<?php endforeach; ?>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>