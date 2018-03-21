		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data Divisi</h3>
							<a href="#" data-toggle="modal" data-target="#modalAddDivisi" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i></a>
						</div>
						<div class="panel-body">
							<div class="row">
							<?php if($this->input->get('edit') == 'success') : ?>
								<div class="alert alert-success">Data divisi berhasil diperbarui...</div>
							<?php elseif($this->input->get('edit') == 'error'): ?>
								<div class="alert alert-add">Data divisi gagal diperbarui...</div>
							<?php endif;?>
								<table class="table table-striped">
									<thead>
										<th width="70">No</th>
										<th>Nama Divisi</th>
										<th width="150">#</th>
									</thead>
									<tbody>
									<?php $no = 1; foreach ($divisi as $key => $kar) : ?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $kar->nm_div; ?></td>
											<td><?= anchor(
													'#edit', 
													'<i class="fa fa-edit"></i>', 
													array('class' => 'btn btn-sm btn-default', 'id' => 'btn-edit-divisi','data-id'=> $kar->id_div)
												); ?> |
												<?= anchor(base_url("admin/do_delete_div/$kar->id_div"), '<i class="fa fa-trash"></i>', array('class' => 'btn btn-sm btn-danger', 'onclick'=> "return confirm('Yakin mau menghapusnya?');")); ?></td>
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
<div class="modal fade" id="modalAddDivisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Divisi</h4>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_add_divisi'); ?>" id="formAddDiv">
	        <div class="form-group">
	        	<label>Nama Divisi</label>
	        	<input type="text" class="form-control" name="nm_div" required>
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
<div class="modal fade" id="modalEditDivisi" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Divisi</h4>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_edit_divisi'); ?>" id="formEditDivisi">
      		<input name="id_div" type="hidden">
	        <div class="form-group">
	        	<label>Nama Divisi</label>
	        	<input type="text" class="form-control" name="nm_div" required>
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