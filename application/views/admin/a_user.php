		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data User</h3>
							<a href="#" data-toggle="modal" data-target="#modalAddUser" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i></a>
						</div>
						<div class="panel-body">
							<div class="row">
							<?php if($this->input->get('add') == 'success') : ?>
								<div class="alert alert-success">Berhasil menambahkan Data User</div>
							<?php elseif($this->input->get('add') == 'error'): ?>
								<div class="alert alert-danger">Gagal menambahkan Karyawan, karena username sudah tersedia.</div>
							<?php endif;?>

							<?php if($this->input->get('edit') == 'success') : ?>
								<div class="alert alert-success">Data user berhasil diperbarui...</div>
							<?php elseif($this->input->get('edit') == 'error'): ?>
								<div class="alert alert-danger">Data user gagal diperbarui...</div>
							<?php endif;?>

								<table class="table table-striped">
									<thead>
										<th width="100" align="center">ID User</th>
										<th>Username</th>
										<th>Level</th>
										<th width="150">#</th>
									</thead>
									<tbody>
									<?php foreach ($users as $key => $u) : ?>
										<tr>
											<td><?= $u->id; ?></td>
											<td><?= $u->username; ?></td>
											<td><?= ($u->level === '1') ? '<span class="badge bg-success">Admin</span>' : '<span class="badge bg-default">User</span>'; ?></td>
											<td>
												<?= anchor(
													'#edit', 
													'<i class="fa fa-edit"></i>', 
													array('class' => 'btn btn-sm btn-default', 'id' => 'btn-edit-user','data-id'=> $u->id)
												); ?> | 
												<?= anchor(base_url("admin/do_delete_user/$u->id"), '<i class="fa fa-trash"></i>', array('class' => 'btn btn-sm btn-danger', 'onclick'=> "return confirm('Yakin mau menghapusnya?');")); ?>
											</td>
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
<div class="modal fade" id="modalAddUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data User</h4>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_add_user'); ?>" id="formAddUser">
	        <div class="form-group">
	        	<label>Username</label>
	        	<input type="text" class="form-control" name="username" required>
	        </div>
	        <div class="form-group">
	        	<label>Password</label>
	        	<input type="password" class="form-control" name="password" required>
	        </div>
	        <div class="form-group">
	        	<label>Level</label>
	        	<select class="form-control" name="level">
	        		<option value="0">User</option>
	        		<option value="1">Admin</option>
	        	</select>
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
<div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Data User</h4>
      </div>
      <div class="modal-body">
      	<form method="POST" action="<?= base_url('admin/do_edit_user'); ?>" id="formEditUser">
      		<input name="id" type="hidden">
	        <div class="form-group">
	        	<label>Username</label>
	        	<input type="text" class="form-control" name="username" required>
	        </div>
	        <div class="form-group">
	        	<label>Level</label>
	        	<select class="form-control" name="level">
	        		<option value="0">User</option>
	        		<option value="1">Admin</option>
	        	</select>
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