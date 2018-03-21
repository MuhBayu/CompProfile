<div class="container">
	<div class="row">
		<div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
			<h3><i class="fa fa-sign-in"></i> Masuk Akun</h3>
			<hr/>
			<form id="login">
				<div class="alert bg-success a-hide">Login Berhasil</div>
				<div class="form-group">
					<label>Name Pengguna</label>
					<?= password_hash('user', PASSWORD_BCRYPT); ?>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="username" placeholder="Masukan username" autocomplete="off">
					</div>
				</div>
				<div class="form-group">
					<label>Kata Sandi</label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-key"></i></span>
						<input type="password" class="form-control" name="upassword" placeholder="Masukan password">
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success"><i class="fa fa-sign-in"></i> Masuk</button>
				</div>
			</form>
		</div>
	</div>
</div>