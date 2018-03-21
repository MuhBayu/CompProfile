		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data Karyawan</h3>
							<a href="#" data-toggle="modal" data-target="#modalAddKar" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i></a>
						</div>
						<div class="panel-body">
						<?php if($this->input->get('upload') == 'success') : ?>
							<div class="alert alert-success">Berhasil menambahkan Data Karyawan</div>
						<?php elseif($this->input->get('upload') == 'error'): ?>
							<div class="alert alert-danger">Gagal menambahkan Karyawan</div>
						<?php endif;?>
						<?php if($this->input->get('edit') == 'success') : ?>
							<div class="alert alert-success">Data karyawan berhasil diperbarui...</div>
						<?php elseif($this->input->get('edit') == 'error'): ?>
							<div class="alert alert-danger">Data karyawan gagal diperbarui...</div>
						<?php endif;?>
						<?php if($this->input->get('delete') == 'success') : ?>
							<div class="alert alert-danger">Data karyawan berhasil dihapus...</div>
						<?php endif; ?>
							<div class="row">
								
								<table class="table table-striped">
									<thead>
										<th>No</th>
										<th>Nama</th>
										<th>J/K</th>
										<th>Divisi</th>
										<th>Jabatan</th>
										<th>Foto</th>
										<th style="text-align: center;">#</th>
									</thead>
									<tbody>
									<?php $no=1; foreach ($karyawan as $key => $kar) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $kar->nm_kar; ?></td>
											<td><?= $kar->jk_kar; ?></td>
											<td><?= $kar->nm_div; ?></td>
											<td><?= $kar->nm_jab; ?></td>
											<td><img style="height: 50px;" class="img-fluid" src="<?= base_url('/assets/vendor/img/foto/'.$kar->foto_kar); ?>"></td>
											<td><?= anchor(
													'#edit', 
													'<i class="fa fa-edit"></i>', 
													array('class' => 'btn btn-sm btn-default', 'id' => 'btn-edit-karyawan','data-id'=> $kar->id_kar)
												); ?> |
												<?= anchor(base_url("admin/do_delete_kar/$kar->id_kar"), '<i class="fa fa-trash"></i>', array('class' => 'btn btn-sm btn-danger', 'onclick'=> "return confirm('Yakin mau menghapusnya?');")); ?></td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
<!-- Modal -->
<div class="modal fade" id="modalAddKar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Karyawan</h4>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_upload_karyawan'); ?>" enctype="multipart/form-data" id="formKar">
	        <div class="form-group">
	        	<label>Nama Karyawan</label>
	        	<input type="text" class="form-control" name="nm_kar" required>
	        </div>
	        <div class="form-group">
	        	<label>Jenis Kelamin</label>
	        	<select class="form-control" name="jk_kar">
	        		<option value="L">Laki-laki</option>
	        		<option value="P">Perempuan</option>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Divisi</label>
	        	<select class="form-control" name="id_div">
	        	<?php foreach ($divisi as $d): ?>
	        		<option value="<?= $d->id_div; ?>"><?= $d->nm_div; ?></option>
	        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Jabatan</label>
	        	<select class="form-control" name="id_jab">
	        	<?php foreach ($jabatan as $j): ?>
	        		<option value="<?= $j->id_jab; ?>"><?= $j->nm_jab; ?></option>
	        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Foto</label>
	        	<input type="file" class="form-control" name="foto_kar" required>
	        </div>
	        <button class="hide" type="submit" id="submit"></button>
	    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" onclick="$('#submit').click();" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal EDIT -->
<div class="modal fade" id="modalEditKar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data Karyawan</h4>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_edit_karyawan'); ?>" enctype="multipart/form-data" id="formEditKar">
	        <input type="hidden" name="id_kar">
	        <div class="form-group">
	        	<label>Nama Karyawan</label>
	        	<input type="text" class="form-control" name="nm_kar" required>
	        </div>
	        <div class="form-group">
	        	<label>Jenis Kelamin</label>
	        	<select class="form-control" name="jk_kar">
	        		<option value="L">Laki-laki</option>
	        		<option value="P">Perempuan</option>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Divisi</label>
	        	<select class="form-control" name="id_div">
	        	<?php foreach ($divisi as $d): ?>
	        		<option value="<?= $d->id_div; ?>"><?= $d->nm_div; ?></option>
	        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Jabatan</label>
	        	<select class="form-control" name="id_jab">
	        	<?php foreach ($jabatan as $j): ?>
	        		<option value="<?= $j->id_jab; ?>"><?= $j->nm_jab; ?></option>
	        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Foto</label>
	        	<input type="file" class="form-control" name="foto_kar">
	        </div>
	        <button class="hide" type="submit" id="submit2"></button>
	    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" onclick="$('#submit2').click();" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>
		<!-- END MAIN -->
