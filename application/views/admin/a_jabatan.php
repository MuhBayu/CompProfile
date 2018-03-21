		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data Jabatan</h3>
							<a href="#" data-toggle="modal" data-target="#modalAddJab" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i></a>
						</div>
						<div class="panel-body">
							<div class="row">
							<?php if($this->input->get('edit') == 'success') : ?>
								<div class="alert alert-success">Data jabatan berhasil diperbarui...</div>
							<?php elseif($this->input->get('edit') == 'error'): ?>
								<div class="alert alert-add">Data jabatan gagal diperbarui...</div>
							<?php endif;?>
								<table class="table table-striped">
									<thead>
										<th width="70" align="center">#</th>
										<th>Nama Jabatan</th>
										<th width="150">#</th>
									</thead>
									<tbody>
									<?php $no = 1; foreach ($jabatan as $key => $jab) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $jab->nm_jab; ?></td>
											<td><?= anchor(
													'#edit', 
													'<i class="fa fa-edit"></i>', 
													array('class' => 'btn btn-sm btn-default', 'id' => 'btn-edit-jabatan','data-id'=> $jab->id_jab)
												); ?> |
												<?= anchor(base_url("admin/do_delete_jab/$jab->id_jab"), '<i class="fa fa-trash"></i>', array('class' => 'btn btn-sm btn-danger', 'onclick'=> "return confirm('Yakin mau menghapusnya?');")); ?></td>
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
<div class="modal fade" id="modalAddJab" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Jabatan</h4>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_add_jabatan'); ?>" id="formAddJab">
	        <div class="form-group">
	        	<label>Nama Jabatan</label>
	        	<input type="text" class="form-control" name="nm_jab" required>
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
<div class="modal fade" id="modalEditJabatan" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title">Edit Jabatan</h4></div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_edit_jabatan'); ?>" id="formEditJabatan">
      		<input name="id_jab" type="hidden">
	        <div class="form-group">
	        	<label>Nama Jabatan</label>
	        	<input type="text" class="form-control" name="nm_jab" required>
	        </div>
	        <button class="hide" type="submit" id="submit2"></button>
	    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" onclick="$('#submit2').click();" class="btn btn-primary">Edit</button>
      </div>
    </div>
  </div>
</div>