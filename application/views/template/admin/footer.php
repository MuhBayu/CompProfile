	<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="https://bayyu.net" target="_blank">Mochammad Bayu Nugraha</a>. &#60;3 Made in <b>RPL - SMKN 1 CILEGON.</b></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="<?= base_url('/assets/klorofil/vendor/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('/assets/klorofil/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('/assets/klorofil/scripts/klorofil-common.js'); ?>"></script>
	<script type="text/javascript">
		var currentLocation = window.location.origin+window.location.pathname;
		var baseurl = '<?= base_url(); ?>'; 
		//-- UNTUK Navbar Active-nya
		if(currentLocation == "<?= base_url('admin/jabatan');?>") {
			$('a[href="#subJab"]').addClass('active');
		} else if(currentLocation == "<?= base_url('admin/divisi');?>") {
			$('a[href="#subDiv"]').addClass('active');
		} else if(currentLocation == "<?= base_url('admin/proyek');?>") {
			$('a[href="#subProy"]').addClass('active');
		} else if(currentLocation == "<?= base_url('admin/karyawan');?>") {
			$('a[href="#subKar"]').addClass('active');
		} else if(currentLocation == "<?= base_url('admin/users');?>") {
			$('a[href="#subUser"]').addClass('active');
		} else if(currentLocation == "<?= base_url('admin/profil_company');?>") {
			$('a[id=navCompany]').addClass('active');
		} else {
			$('a[id=navDash]').addClass('active');
		}
		$('a#btn-edit-user').click(function(e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			$form = $('form#formEditUser');
			$.get(baseurl+'/admin/get_data/user/'+id, function(data) {
				$form.find('input[name=id]').val(data.id);
				$form.find('input[name=username]').val(data.username);
				$form.find('select[name=level]').val(data.level).change();
			}, 'json');
			$('#modalEditUser').modal('show');	
		});
		$('a#btn-edit-divisi').click(function(e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			$form = $('form#formEditDivisi');
			$.get(baseurl+'/admin/get_data/divisi/'+id, function(data) {
				$form.find('input[name=id_div]').val(data.id_div);
				$form.find('input[name=nm_div]').val(data.nm_div);
			}, 'json');
			$('#modalEditDivisi').modal('show');	
		});
		$('a#btn-edit-jabatan').click(function(e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			$form = $('form#formEditJabatan');
			$.get(baseurl+'/admin/get_data/jabatan/'+id, function(data) {
				$form.find('input[name=id_jab]').val(data.id_jab);
				$form.find('input[name=nm_jab]').val(data.nm_jab);
			}, 'json');
			$('#modalEditJabatan').modal('show');	
		});
		$('a#btn-edit-proyek').click(function(e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			$form = $('form#formEditProy');
			$.get(baseurl+'/admin/get_data/proyek/'+id, function(data) {
				$form.find('input[name=id_proy]').val(data.id_proy);
				$form.find('input[name=nm_proy]').val(data.nm_proy);
				$form.find('select[name=pim_proy]').val(data.pim_proy);
				$form.find('textarea[name=desk_proy]').val(data.desk_proy);
				$form.find('input[name=tgl_mulai]').val(data.tgl_mulai);
				$form.find('input[name=tgl_selesai]').val(data.tgl_selesai);
			}, 'json');
			$('#modalEditProy').modal('show');
		});
		$('a#btn-edit-karyawan').click(function(e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			$form = $('form#formEditKar');
			$.get(baseurl+'/admin/get_data/karyawan/'+id, function(data) {
				$form.find('input[name=id_kar]').val(data.id_kar);
				$form.find('input[name=no_kar]').val(data.no_kar);
				$form.find('input[name=nm_kar]').val(data.nm_kar);
				$form.find('select[name=jk_kar]').val(data.jk_kar);
				$form.find('select[name=id_div]').val(data.id_div);
				$form.find('select[name=id_jab]').val(data.id_jab);
			}, 'json');
			$('#modalEditKar').modal('show');
		});
	</script>
</body>

</html>
