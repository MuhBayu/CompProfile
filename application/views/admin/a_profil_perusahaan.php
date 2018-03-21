		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<form class="panel panel-headline" action="<?= base_url('admin/do_edit_perusahaan'); ?>" method="POST">
						<div class="panel-heading">
							<h3 class="panel-title">Profil Perusahaan</h3>
						</div>
						<div class="panel-body">
						<?php if($this->input->get('edit') == 'success') : ?>
							<div class="alert alert-success">Data perusahaan berhasil diperbarui...</div>
						<?php elseif($this->input->get('edit') == 'error'): ?>
							<div class="alert alert-danger">Data perusahaan gagal diperbarui...</div>
						<?php elseif($this->input->get('edit') == 'denied'): ?>
							<div class="alert alert-danger">Data perusahaan gagal diperbarui... Anda tidak berhak mengubah profil perusahaan.</div>
						<?php endif;?>
							<div class="form-group">
								<label>Nama Perusahaan</label>
								<input class="form-control" type="text" name="nm_perusahaan" value="<?= $company->nm_perusahaan; ?>">
							</div>
							<div class="form-group">
								<label>Deskripsi Perusahaan</label>
								<textarea class="form-control" name="desk_perusahaan" rows="10"><?= $company->desk_perusahaan; ?></textarea>
							</div>
							<div class="form-group">
								<label>Visi</label>
								<textarea class="form-control" name="visi" rows="2"><?= $company->visi; ?></textarea>
							</div>
							<div class="form-group">
								<label>Misi</label>
								<textarea class="form-control" name="misi" rows="2"><?= $company->misi; ?></textarea>
							</div>
							<div class="form-group">
								<label>Sejrah</label>
								<textarea class="form-control" name="sejarah" rows="10"><?= $company->sejarah; ?></textarea>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<textarea class="form-control" name="alamat" rows="2"><?= $company->alamat; ?></textarea>
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input class="form-control" name="telp" value="<?= $company->telp; ?>"></textarea>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" value="<?= $company->email; ?>"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success">Edit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>