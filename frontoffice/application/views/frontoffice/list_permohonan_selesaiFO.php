<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between">
		<h3 class="judullist py-3">Data Permohonan Selesai Front Office</h1>
		<nav aria-label="breadcrumb" class="nav-breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Permohonan Selesai FO</li>
			</ol>
		</nav>
	</div>

	<!-- DataTables Warga -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Jenis Layanan</th>
							<th>Tanggal Permohonan</th>
							<th>Tanggal Disetujui</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
                        $no = 1;
                        foreach ($data_permohonan as $permohonan) {
                        ?>
						<tr>
							<td class="text-center"><?= $no ?></td>
							<td><?= $permohonan->nama_layanan ?></td>
							<td><?= format_indo(date($permohonan->tgl_permohonan)); ?></td>
							<td><?= format_indo(date($permohonan->tgl_persetujuan_fo)) ?></td>
							<td><label class="badge badge-success"><i class="far fa-check-circle text-status">
										 <?= $permohonan->status ?></i>
								</label></td>
							<td class="text-center">
								<a href="<?= base_url() ?>dashboard/detail_data_permohonan/<?= $permohonan->id_permohonan_ptsp ?>/<?= $permohonan->id_layanan ?>"
									class="btn btn-primary btn-sm">
									<i class="fas fa-search"></i>
								</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
