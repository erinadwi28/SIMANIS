<!-- Begin Page Content -->
<div class="container-fluid">
	<?php
	foreach ($detail_ptsp as $detail) { ?>
		<?php if ($detail->status === 'Proses Kasubag') { ?>
			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between">
				<h3 class="judullist py-3">Detail</h3>
				<nav aria-label="breadcrumb" class="nav-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard/list_permohonan_masuk') ?>">Permohonan Masuk</a></li>
						<li class="breadcrumb-item active" aria-current="page">Detail</li>
					</ol>
				</nav>
			</div>
		<?php } elseif ($detail->status === 'Selesai') { ?>
			<!-- Page Heading -->
			<div class="d-sm-flex align-items-center justify-content-between">
				<h3 class="judullist py-3">Detail</h3>
				<nav aria-label="breadcrumb" class="nav-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard/list_permohonan_selesaiKasubag') ?>">Permohonan Selesai</a></li>
						<li class="breadcrumb-item active" aria-current="page">Detail</li>
					</ol>
				</nav>
			</div>
		<?php } ?>


		<!-- Detail input -->
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-2"></div>
			<div class="col-md-8 mb-2">
				<!-- Detail Data -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-center">Konsultasi dan informasi sertifikasi halal,zakat dan wakaf</h6>
					</div>
					<div class="card-body">
						<table class="table-hover table-responsive">
							<tbody>
								<tr>
									<td><b>Nama</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->nama ?></td>
								</tr>
								<tr>
									<td><b>Alamat</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->alamat ?></td>
								</tr>
								<tr>
									<td><b>Pekerjaan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->pekerjaan ?></td>
								</tr>
								<tr>
									<td><b>No.handphone</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->no_hp ?></td>
								</tr>
								<tr>
									<td><b>Perihal Konsultasi</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td><?= $detail->perihal_konsultasi ?></td>
								</tr>

							</tbody>
						</table>
						<em class="small text-danger float-right mt-2 mb-0">*Pastikan data benar dan Unggah semua dokumen
							dibawah</em>
					</div>


					<div class="card-footer">
						<div class="float-right">
							<?php if ($detail->status == 'Proses Kasubag') { ?>
								<a href="<?= base_url() ?>dashboard/aksi_setujui_permohonan/<?= $detail->id_permohonan_ptsp ?>">
									<button id="btn_termia" class="btn btn-sm btn-success" type="submit">
										<i class="fas fa-check-circle">
										</i> Terima
									</button>
								</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<<<<<<< HEAD </div>
			<!--End Content-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
=======
<!--End Content-->
<?php } ?>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
>>>>>>> edd33503935bd484c3806bb33c524fdffe50412a