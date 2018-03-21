		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Pengaturan</h3>
							<p class="panel-subtitle">Ubah Data Anda</p>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<div class="row">
									<?php if ($this->input->get('update') == 'success') : ?>
										<div class="alert alert-success">Sukses diperbarui</div>
									<?php elseif($this->input->get('update') == 'error') : ?>
										<div class="alert alert-danger">Gagal diperbarui, pastikan gambar kurang dari 1 MB</div>
									<?php endif; ?>
									<div class="col-md-3 col-sm-3">

										<div class="thumbnail">
											<img src="<?= base_url('/assets/vendor/img/foto/'.$profil->foto_kar); ?>" class="img-circle" id="src-img" width="150">
											<button onclick="$('input[type=file]').click()" class="btn btn-default btn-block">Pilih gambar</button>
										</div>
										*max 1MB
									</div>
									<div class="col-md-9">

									<form id="edit-userprofil" enctype="multipart/form-data" action="<?= base_url('user/do_update_dataprofil');?>" method="POST">
										<input type="file" name="foto_kar" accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this)" style="display: none;">
										<div class="form-group">
											<label>ID Karyawan</label>
											<input class="form-control" value="<?= $profil->id;?>" disabled>
										</div>
										<div class="form-group">
											<label>Nama</label>
											<input class="form-control" name="nm_kar" value="<?= $profil->nm_kar;?>">
										</div>
										<div class="form-group">
											<label>Jenis Kelamin</label>
											<select class="form-control" name="jk_kar">
												<option value="L">Laki-laki</option>
												<option value="P">Perempuan</option>
											</select>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-info">Ubah</button>
										</div>
									</form>
									<form id="edit-userpass">
										<hr/>
										<h3 class="page-header">Ubah Password</h3>
										<div class="alert" style="display: none;"></div>
										<div class="form-group">
											<label>Password lama</label>
											<input type="password" class="form-control" name="old_pass" minlength="5" required>
										</div>
										<div class="form-group">
											<label>Password Baru</label>
											<input type="password" class="form-control" name="new_pass" minlength="5" required>
										</div>
										<div class="form-group">
											<label>Konfirmasi Password</label>
											<input type="password" class="form-control" name="con_pass" minlength="5" required>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-info">Ubah</button>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
