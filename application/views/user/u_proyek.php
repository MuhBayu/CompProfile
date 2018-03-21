		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Proyek</h3>
							<p class="panel-subtitle">Proyek terlibat</p>
						</div>
						<div class="panel-body">
							<div class="row">
							<?php foreach ($proyek as $key => $proy) : ?>
								<div class="col-md-4">
									<div class="thumbnail text-center">
										<a href="<?= base_url('/main/detail_proyek/'.$proy->id_proy); ?>"><img src="<?= base_url('/assets/vendor/img/works/'.$proy->img_proy); ?>"></a>
										<br/>
										<label><?= $proy->nm_proy; ?></label><br/>
										<small><?= $proy->posisi; ?></small>
									</div>
								</div>
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
