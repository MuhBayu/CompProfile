	<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="https://bayyu.net" target="_blank">mbn12</a>. &#60;3 Made in <b>RPL - SMKN 1 CILEGON.</b></p>
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

		//-- UNTUK Navbar Active-nya
		$nav = $('div.sidebar-scroll');
		if(currentLocation == "<?= base_url('user/proyek');?>") {
			$nav.find('li:eq(1) a').addClass('active');
		} else if(currentLocation == "<?= base_url('user/pengaturan');?>") {
			$nav.find('li:eq(2) a').addClass('active');
		} else {
			$nav.find('li:eq(0) a').addClass('active');
		}
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        reader.onload = function (e) {  $('img#src-img').attr('src', e.target.result); }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$('form#edit-userpass').submit(function(e) {
			e.preventDefault();
			$(this).find('.alert').removeClass('alert-danger').removeClass('alert-success');
			var n_pass = $(this).find('input[name=new_pass]').val(),
				c_pass = $(this).find('input[name=con_pass]').val()
			if(n_pass !== c_pass) {
				$(this).find('.alert').html('Password tidak cocok').addClass('alert-danger').show(400);
			} else {
				$.post("<?= base_url('user/do_update_password/'); ?>", $(this).serialize(), function(data) {
					console.log(data.success);
					if(data.success) {
						$('#edit-userpass').find('.alert').html('Password berhasil diubah').addClass('alert-success').show(400);
					} else {
						$('#edit-userpass').find('.alert').html('Password gagal diubah').addClass('alert-danger').show(400);
					}
				}, 'json')
			}
		})
	</script>
</body>

</html>
