		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data Proyek</h3>
							<a href="#" data-toggle="modal" data-target="#modalAddProy" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i></a>
						</div>
						<div class="panel-body">
							<?php if($this->input->get('upload') == 'success') : ?>
								<div class="alert alert-success">Berhasil menambahkan Data Karyawan</div>
							<?php elseif($this->input->get('upload') == 'error'): ?>
								<div class="alert alert-danger">Gagal menambahkan Karyawan</div>
							<?php endif;?>
							<?php if($this->input->get('edit') == 'success') : ?>
								<div class="alert alert-success">Data proyek berhasil diperbarui...</div>
							<?php elseif($this->input->get('edit') == 'error'): ?>
								<div class="alert alert-add">Data proyek gagal diperbarui...</div>
							<?php endif;?>
							<div class="row">
								<table class="table table-striped">
									<thead>
										<th>ID</th>
										<th>Foto Proyek</th>
										<th>Nama Proyek</th>
										<th>Pimpinan Proyek</th>
										<th>Tanggal Mulai</th>
										<th>Tanggal Selesai</th>
										<th>#</th>
									</thead>
									<tbody>
									<?php foreach ($proyek as $key => $kar) : ?>
										<tr>
											<td><?= $kar->id_proy; ?></td>
											<td><a href='<?= base_url("main/detail_proyek/$kar->id_proy"); ?>'><img src="<?= base_url('assets/vendor/img/works/'.$kar->img_proy); ?>" height="50"></a></td>
											<td><?= $kar->nm_proy; ?></td>
											<td><?= $kar->nm_kar; ?></td>
											<td><?= $kar->tgl_mulai; ?></td>
											<td><?= $kar->tgl_selesai; ?></td>
											<td><?= anchor(
													'#edit', 
													'<i class="fa fa-edit"></i>', 
													array('class' => 'btn btn-sm btn-default', 'id' => 'btn-edit-proyek','data-id'=> $kar->id_proy)
												); ?> |
												<?= anchor(base_url("admin/do_delete_proy/$kar->id_proy"), '<i class="fa fa-trash"></i>', array('class' => 'btn btn-sm btn-danger', 'onclick'=> "return confirm('Yakin mau menghapusnya?');")); ?></td>
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
		<!-- END MAIN -->
<!-- Modal -->
<div class="modal fade" id="modalAddProy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Proyek</h4>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_upload_proyek'); ?>" enctype="multipart/form-data" id="formKar">
	        <div class="form-group">
	        	<label>Nama Proyek</label>
	        	<input type="text" class="form-control" name="nm_proy" required>
	        </div>
	        <div class="form-group">
	        	<label>Pimpinan Proyek</label>
	        	<select class="form-control" name="pim_proy">
	        	<?php foreach ($karyawan as $k): ?>
	        		<option value="<?= $k->id_kar; ?>"><?= $k->nm_kar; ?></option>
	        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Deskripsi</label>
	        	<textarea class="form-control" name="desk_proy" rows="10"></textarea>
	        </div>
	        <div class="row">
	        	<div class="col-md-6">
	        		<div class="form-group">
			        	<label>Tanggal Mulai</label>
			        	<input type="date" class="form-control" name="tgl_mulai">
			        </div>
			    </div>
			    <div class="col-md-6">
			        <div class="form-group">
			        	<label>Tanggal Selesai</label>
			        	<input type="date" class="form-control" name="tgl_selesai">
			        </div>
			    </div>
			</div>
	        <div class="form-group">
	        	<label>Gambar</label>
	        	<input type="file" class="form-control" name="img_proy" required>
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

<!-- Modal Edit -->
<div class="modal fade" id="modalEditProy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="myModalLabel">Edit Proyek</h4></div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_edit_proyek'); ?>" enctype="multipart/form-data" id="formEditProy">
	        <input type="hidden" name="id_proy">
	        <div class="form-group">
	        	<label>Nama Proyek</label>
	        	<input type="text" class="form-control" name="nm_proy" required>
	        </div>
	        <div class="form-group">
	        	<label>Pimpinan Proyek</label>
	        	<select class="form-control" name="pim_proy">
	        	<?php foreach ($karyawan as $k): ?>
	        		<option value="<?= $k->id_kar; ?>"><?= $k->nm_kar; ?></option>
	        	<?php endforeach; ?>
	        	</select>
	        </div>
	        <div class="form-group">
	        	<label>Deskripsi</label>
	        	<textarea class="form-control" name="desk_proy" rows="10"></textarea>
	        </div>
	        <div class="row">
	        	<div class="col-md-6">
	        		<div class="form-group">
			        	<label>Tanggal Mulai</label>
			        	<input type="date" class="form-control" name="tgl_mulai">
			        </div>
			    </div>
			    <div class="col-md-6">
			        <div class="form-group">
			        	<label>Tanggal Selesai</label>
			        	<input type="date" class="form-control" name="tgl_selesai">
			        </div>
			    </div>
			</div>
	        <div class="form-group">
	        	<label>Gambar</label>
	        	<input type="file" class="form-control" name="img_proy">
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