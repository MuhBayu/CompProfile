		<!-- end header -->
		<section id="featured">
			<!-- start slider -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- Slider -->
						<div id="main-slider" class="flexslider">
							<ul class="slides">
								<li>
									<img src="<?= base_url('/assets/vendor/img/slides/1.jpg'); ?>" alt="" />
									<div class="flex-caption">
										<h3>Modern Design</h3>
										<p>Desain yang modern mengikuti tren terbaru.</p>
										<a href="#" class="btn btn-theme">Learn More</a>
									</div>
								</li>
								<li>
									<img src="<?= base_url('assets/vendor/img/slides/2.jpg'); ?>" alt="" />
									<div class="flex-caption">
										<h3>Fully Responsive</h3>
										<p>Desain yang responsive, sehingga nyaman diakses dimanapun.</p>
										<a href="#" class="btn btn-theme">Learn More</a>
									</div>
								</li>
								<li>
									<img src="<?= base_url('assets/vendor/img/slides/3.jpg'); ?>" alt="" />
									<div class="flex-caption">
										<h3>Clean &amp; Fast</h3>
										<p>Aplikasi cepat dalam memuat konten.</p>
										<a href="#" class="btn btn-theme">Learn More</a>
									</div>
								</li>
							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>

		</section>
		<section class="callaction">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="big-cta">
							<div class="cta-text">
								<h2><span>fusion</span> Corporation</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="heading">Pengenalan</h3>
						<div class="row">
							<div class="col-lg-7">
							  <video width="700" class="img-responsive" controls class="align-left">
							    <source src="<?= base_url('/assets/vendor/video/fusionCompany.mp4'); ?>" type="video/mp4">
							    Your browser does not support HTML5 video.
							  </video>
						 	</div>
							 <div class="col-lg-4">
								<p class="align-left"><?= $profil->sejarah; ?></p>
							</div>
						</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter" style="height: 250px;">
										<h4>Desktop Application</h4>
										<div class="icon">
											<i class="fa fa-desktop fa-3x"></i>
										</div>
										<p>Pembuatan aplikasi desktop.</p>
									</div>
									<div class="box-bottom">
										<a href="#">Learn more</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter" style="height: 250px;">
										<h4>Web Application</h4>
										<div class="icon">
											<i class="fa fa-code fa-3x"></i>
										</div>
										<p>Dengan aplikasi web, aplikasi dapat digunakan dimanapun dan kapanpun.</p>

									</div>
									<div class="box-bottom">
										<a href="#">Learn more</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter" style="height: 250px;">
										<h4>Mobile Application</h4>
										<div class="icon">
											<i class="fa fa-mobile fa-3x"></i>
										</div>
										<p>Dapat diakses kapanpun dan dimanapun melalui aplikasi mobile.</p>
									</div>
									<div class="box-bottom">
										<a href="#">Learn more</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter" style="height: 250px;">
										<h4>Infrastructur</h4>
										<div class="icon">
											<i class="fa fa-server fa-3x"></i>
										</div>
										<p>Kami telah mempersiapkan diri dengan pengkajian secara menyeluruh dan implementasi terhadap aspek Infrastructure.</p>
									</div>
									<div class="box-bottom">
										<a href="#">Learn more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- divider -->
				<div class="solidline"></div>
				<!-- end divider -->

				<!-- Portfolio Projects -->
				<div class="row">
					<div class="col-lg-12">
						<h4 class="heading">Recent Works</h4>
						<div class="row">
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
									<!-- End Item Project -->
								</ul>
							</section>
						</div>
					</div>
				</div>

			</div>
		</section>
