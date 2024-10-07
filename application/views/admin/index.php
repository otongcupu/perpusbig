<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?= $title; ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active"><?= $title; ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>150</h3>
							<p>Jumlah Anggota</p>
						</div>
						<div class="icon">
							<i class="fas fa-users"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3>53</h3>
							<p>Buku Tersedia</p>
						</div>
						<div class="icon">
							<i class="fas fa-book"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3>44</h3>

							<p>Buku TTP Di Pinjam</p>
						</div>
						<div class="icon">
							<i class="fas fa-book-reader"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<h3>44</h3>

							<p>Buku TTP Kembali</p>
						</div>
						<div class="icon">
							<i class="fas fa-hand-holding"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- Diagram Batang Peminjaman TTP -->
			<div class="col-lg">
				<div class="card">
					<div class="card-header border-0">
						<div class="d-flex justify-content-between">
							<h3 class="card-title">Sales</h3>
							<a href="#">View Report</a>
						</div>
					</div>
					<div class="card-body">
						<div class="d-flex">
							<p class="d-flex flex-column">
								<span class="text-bold text-lg">$18,230.00</span>
								<span>Sales Over Time</span>
							</p>
							<p class="ml-auto d-flex flex-column text-right">
								<span class="text-success">
									<i class="fas fa-arrow-up"></i> 33.1%
								</span>
								<span class="text-muted">Since last month</span>
							</p>
						</div>
						<!-- /.d-flex -->

						<div class="position-relative mb-4">
							<canvas id="sales-chart" height="200"></canvas>
						</div>

						<div class="d-flex flex-row justify-content-end">
							<span class="mr-2">
								<i class="fas fa-square text-primary"></i> This year
							</span>

							<span>
								<i class="fas fa-square text-gray"></i> Last year
							</span>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- DATA PEMINJAMAN 5 TERBARU -->
			<div class="row">
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header border-0">
							<h3 class="card-title">Data Peminjaman Terakhir</h3>
						</div>
						<div class="card-body table-responsive p-0">
							<table class="table table-striped table-valign-middle">
								<thead>
									<tr>
										<th>Tanggal</th>
										<th>Nomor Buku TTP</th>
										<th>Gudang</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											Some Product
										</td>
										<td>$13 USD</td>
										<td>
											<small class="text-success mr-1">
												<i class="fas fa-arrow-up"></i>
												12%
											</small>
											12,000 Sold
										</td>
										<td>
											<a href="#" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											Another Product
										</td>
										<td>$29 USD</td>
										<td>
											<small class="text-warning mr-1">
												<i class="fas fa-arrow-down"></i>
												0.5%
											</small>
											123,234 Sold
										</td>
										<td>
											<a href="#" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											Amazing Product
										</td>
										<td>$1,230 USD</td>
										<td>
											<small class="text-danger mr-1">
												<i class="fas fa-arrow-down"></i>
												3%
											</small>
											198 Sold
										</td>
										<td>
											<a href="#" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											Perfect Item
											<span class="badge bg-danger">NEW</span>
										</td>
										<td>$199 USD</td>
										<td>
											<small class="text-success mr-1">
												<i class="fas fa-arrow-up"></i>
												63%
											</small>
											87 Sold
										</td>
										<td>
											<a href="#" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- DATA PENGEMBALIAN 5 TERBARU -->
				<div class="col-lg-6">
					<div class="card">
						<div class="card-header border-0">
							<h3 class="card-title">Data Pengembalian Terakhir</h3>
						</div>
						<div class="card-body table-responsive p-0">
							<table class="table table-striped table-valign-middle">
								<thead>
									<tr>
										<th>Tanggal</th>
										<th>Nomor Buku TTP</th>
										<th>Gudang</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											Some Product
										</td>
										<td>$13 USD</td>
										<td>
											<small class="text-success mr-1">
												<i class="fas fa-arrow-up"></i>
												12%
											</small>
											12,000 Sold
										</td>
										<td>
											<a href="#" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											Another Product
										</td>
										<td>$29 USD</td>
										<td>
											<small class="text-warning mr-1">
												<i class="fas fa-arrow-down"></i>
												0.5%
											</small>
											123,234 Sold
										</td>
										<td>
											<a href="#" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											Amazing Product
										</td>
										<td>$1,230 USD</td>
										<td>
											<small class="text-danger mr-1">
												<i class="fas fa-arrow-down"></i>
												3%
											</small>
											198 Sold
										</td>
										<td>
											<a href="#" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											Perfect Item
											<span class="badge bg-danger">NEW</span>
										</td>
										<td>$199 USD</td>
										<td>
											<small class="text-success mr-1">
												<i class="fas fa-arrow-up"></i>
												63%
											</small>
											87 Sold
										</td>
										<td>
											<a href="#" class="text-muted">
												<i class="fas fa-search"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
