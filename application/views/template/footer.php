		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Get in touch with us</h5>
							<address>
					<strong><?= $profil->nm_perusahaan; ?></strong><br>
					 <?= $profil->alamat; ?></address>
							<p>
								<i class="icon-phone"></i> <?= $profil->telp; ?> <br>
								<i class="icon-envelope-alt"></i> <?= $profil->email; ?>
							</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Visi</h5>
							<p><?= $profil->visi; ?></p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="widget">
							<h5 class="widgetheading">Misi</h5>
							<p><?= $profil->misi; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="copyright">
								<p>&copy; Fusion Corporation. All right reserved.</p>
								<p>Created by <b>Mochammad Bayu Nugraha</b></p>
							</div>
						</div>
						<div class="col-lg-6">
							<ul class="social-network">
								<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="<?= base_url('/assets/vendor/js/jquery.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/jquery.easing.1.3.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/jquery.fancybox.pack.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/jquery.fancybox-media.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/google-code-prettify/prettify.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/portfolio/jquery.quicksand.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/portfolio/setting.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/jquery.flexslider.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/animate.js'); ?>"></script>
	<script src="<?= base_url('/assets/vendor/js/custom.js'); ?>"></script>
	<script type="text/javascript">
		var app_url=window.location.origin,app_location=window.location;
		$(function() {
			$('form#login').submit(function(e) {
				e.preventDefault();
				var frm = $(this);
				$.post("<?= base_url('login/authLogin'); ?>", frm.serialize(), function(data) {
					console.log(data);
					if(data.success) {
						$('.alert').html('Login berhasil..').removeClass('bg-danger').addClass('bg-success').show(500);
						setTimeout(function(){location.reload();}, 3000);
					} else {
						$('.alert').html('Login gagal, username & password tidak terdaftar.').removeClass('bg-success').addClass('bg-danger').show(500);
					}
				}, 'json');
			})
		})
	</script>
</body>

</html>
