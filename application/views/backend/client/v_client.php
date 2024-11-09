<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>DataTable</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">DataTable</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								January 2018
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Export List</a>
								<a class="dropdown-item" href="#">Policies</a>
								<a class="dropdown-item" href="#">View Assets</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Export Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Data Table with Export Buttons</h4>
					<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add" type="button">
						<i class="fa fa-plus"></i> Tambah Client
					</a>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th>No</th>
								<th class="table-plus datatable-nosort">Nama</th>
								<th>Kelas</th>
								<th>Angkatan</th>
								<th>No Hp</th>
								<th>Judul Skripsi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($client as $clients) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td class="table-plus"><?= $clients->nama ?></td>
									<td><?= $clients->kelas ?></td>
									<td><?= $clients->angkatan ?></td>
									<td><?= $clients->no_hp ?> </td>
									<td><?= $clients->judul ?></td>
									<td>
										<a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $clients->id_client ?>" type="button">
											<i class="fa fa-pencil"></i>
										</a>
										<a href="<?= base_url('client/delete/' . $clients->id_client) ?>" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- Export Datatable End -->
		</div>

		<!-- modal tambah data client  -->
		<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myLargeModalLabel">Tambah Client</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<?php echo form_open('client/add') ?>
					<div class="modal-body">
						<div class="input-group custom">
							<input type="text" name="nama" class="form-control form-control-lg" oninput="this.value = this.value.toUpperCase()" placeholder="Nama">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<input type="text" name="kelas" class="form-control form-control-lg" oninput="this.value = this.value.toUpperCase()" placeholder="Kelas">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy fa fa-institution" aria-hidden="true"></i></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<input type="number" name="angkatan" class="form-control form-control-lg" oninput="this.value = this.value.toUpperCase()" placeholder="Angkatan">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy fa fa-mortar-board" aria-hidden="true"></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<input type="number" name="no_hp" class="form-control form-control-lg" placeholder="No Hp">
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy fa fa-mobile-phone" aria-hidden="true"></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<textarea name="judul" class="form-control form-control-lg" oninput="this.value = this.value.toUpperCase()" placeholder="Judul"></textarea>
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="icon-copy fa fa-graduation-cap" aria-hidden="true"></i></span>
							</div>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
					<?php form_close() ?>
				</div>
			</div>
		</div>
		<!-- end modal tambah data client -->

		<!-- modal update data client  -->
		<?php foreach ($client as $update) { ?>
			<div class="modal fade" id="update<?= $update->id_client ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="myLargeModalLabel">Upadte Client</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<?php echo form_open('client/update/' . $update->id_client) ?>
						<div class="modal-body">
							<div class="input-group custom">
								<input type="text" name="nama" value="<?= $update->nama ?>" class="form-control form-control-lg" oninput="this.value = this.value.toUpperCase()" placeholder="Nama">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="text" name="kelas" value="<?= $update->kelas ?>" class="form-control form-control-lg" oninput="this.value = this.value.toUpperCase()" placeholder="Kelas">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy fa fa-institution" aria-hidden="true"></i></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="number" name="angkatan" value="<?= $update->angkatan ?>" class="form-control form-control-lg" oninput="this.value = this.value.toUpperCase()" placeholder="Angkatan">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy fa fa-mortar-board" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="number" name="no_hp" value="<?= $update->no_hp ?>" class="form-control form-control-lg" placeholder="No Hp">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy fa fa-mobile-phone" aria-hidden="true"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<textarea name="judul" class="form-control form-control-lg" oninput="this.value = this.value.toUpperCase()" placeholder="Judul"><?= $update->judul ?></textarea>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy fa fa-graduation-cap" aria-hidden="true"></i></span>
								</div>
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
						<?php form_close() ?>
					</div>
				</div>
			</div>
		<?php } ?>
		<!-- end modal update data client -->
