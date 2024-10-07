<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="<?= base_url('assets/'); ?>dist/img/LogoPT.png" alt="PTBIG Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Buku TTP</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('assets/'); ?>dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $user['fullname']; ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
				<!-- QUERY MENU -->
				<?php
				$role_id = $this->session->userdata('role_id');
				$queryMenu = "SELECT `a`.`idx`, `menu`
								FROM `user_menu` `a`, `user_access_menu` `b`
							   WHERE `a`.`idx` = `b`.`menu_id` AND `b`.`role_id` = $role_id
							ORDER BY `b`.`menu_id` ASC";
				$menu = $this->db->query($queryMenu)->result_array();
				?>

				<!-- LOOPING MENU -->
				<?php foreach ($menu as $m) : ?>
					<li class="nav-header"><?= $m['menu']; ?></li>

					<!-- SIAPKAN SUB-MENU -->
					<?php
					$menuId = $m['idx'];
					$querySubMenu = "SELECT * FROM `user_submenu`
								  WHERE `menu_id` = $menuId
									AND `is_active` = 1";
					$subMenu = $this->db->query($querySubMenu)->result_array();
					?>

					<?php foreach ($subMenu as $sm) : ?>
						<li class="nav-item">
							<a href="<?= base_url($sm['url']); ?>" class="nav-link">
								<i class="<?= $sm['icon']; ?>"></i>
								<span>
									<?= $sm['title']; ?>
								</span>
							</a>
						</li>
					<?php endforeach; ?>

				<?php endforeach; ?>

				<li class="nav-header"></li>
				<li class="nav-item">
					<a href="<?= base_url('auth/logout'); ?>" class="nav-link">
						<i class="nav-icon fas fa-sign-out-alt"></i>
						<p>Logout</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
