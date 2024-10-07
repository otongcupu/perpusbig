<div class="login-box">
	<div class="login-logo">
		<a href="#">Buku Tanda Terima Pembayaran</a>
	</div>

	<?= $this->session->flashdata('message'); ?>

	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Sign in to start your session</p>

			<form action="<?= base_url('auth'); ?>" method="post">
				<div class="input-group mt-3">
					<input type="text" id="username" name="username" class="form-control" placeholder="Username">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="input-group mt-3">
					<input type="password" id="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="row mt-3">
					<!-- /.col -->
					<div class="col-4 mx-auto">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<p class="mb-0">
				<a href="<?= base_url('auth/registration'); ?>" class="text-center">Register a new membership</a>
			</p>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->
