<div class="register-box">
	<div class="register-logo">
		<a href="../../index2.html">Form Registrasi Member</a>
	</div>

	<div class="card">
		<div class="card-body register-card-body">
			<p class="login-box-msg">Register a new membership</p>

			<form action="<?= base_url('auth/registration'); ?>" method="post">
				<div class="input-group">
					<input type="text" id="name" name="name" class="form-control" placeholder="Full name" value="<?= set_value('name'); ?>">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="input-group mt-3">
					<input type="text" id="username" name="username" class="form-control" placeholder="User Name" value="<?= set_value('username'); ?>">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="input-group mt-3">
					<input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
				<div class="input-group mt-3 mb-3">
					<input type="password" id="password2" name="password2" class="form-control" placeholder="Retype password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- /.col -->
					<div class="col-4 mx-auto">
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

			<a href="<?= base_url('auth'); ?>" class="text-center">I already have a membership</a>
		</div>
		<!-- /.form-box -->
	</div><!-- /.card -->
</div>
<!-- /.register-box -->
