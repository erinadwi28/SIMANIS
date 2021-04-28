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
				<li class="breadcrumb-item"><a href="<?= base_url('dashboard/list_permohonan_masuk') ?>">Permohonan
						Masuk</a></li>
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
				<li class="breadcrumb-item"><a
						href="<?= base_url('dashboard/list_permohonan_selesaiKasubag') ?>">Permohonan Selesai</a></li>
				<li class="breadcrumb-item active" aria-current="page">Detail</li>
			</ol>
		</nav>
	</div>
	<?php } ?>
	<div class="row clearfix">
		<div class="col-md-4 mb-0">
			<!-- Surat Permohonan -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold">Rek. ID Masjid & Musala</h6>
					</center>
				</div>
				<div class="card-body">
					<center>
						<?php if ($detail->srt_permohonan != null) { ?>
							<p><?= $detail->srt_permohonan; ?></p>
							<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>../assets/dashboard/pemohon/ptsp/ptsp22/srt_permohonan/<?= $detail->srt_permohonan ?>" target="_blank">
								<i class="fa fa-download nav-icon">
								</i> Klik untuk melihat
							</a>
						<?php } elseif ($detail->srt_permohonan == null) { ?>
							<p class="mb-0">Belum ada lampiran</p>
						<?php } ?>
					</center>
				</div>
			</div>
			<!-- Formulir -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold">Formulir</h6>
					</center>
				</div>
				<div class="card-body">
					<center>
						<?php if ($detail->formulir != null) { ?>
							<p><?= $detail->formulir; ?></p>
							<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>../assets/dashboard/pemohon/ptsp/ptsp22/formulir/<?= $detail->formulir ?>" target="_blank">
								<i class="fa fa-download nav-icon">
								</i> Klik untuk melihat
							</a>
						<?php } elseif ($detail->formulir == null) { ?>
							<p class="mb-0">Belum ada lampiran</p>
						<?php } ?>
					</center>
				</div>
			</div>
			<!-- Surat Keterangan ID masjid -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<center>
						<h6 class="m-0 font-weight-bold">Surat Keterangan ID Masjid </h6>
					</center>
				</div>
				<div class="card-body">
					<center>
						<?php if ($detail->srt_ket_id_masjid != null) { ?>
							<p><?= $detail->srt_ket_id_masjid; ?></p>
							<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>../assets/dashboard/pemohon/ptsp/ptsp22/srt_ket_id_masjid/<?= $detail->srt_ket_id_masjid ?>" target="_blank">
								<i class="fa fa-download nav-icon">
								</i> Klik untuk melihat
							</a>
						<?php } elseif ($detail->srt_ket_id_masjid == null) { ?>
							<p>Belum ada lampiran <br> Silahkan unggah terlebih dahulu</p>
						<?php } ?>
					</center>
				</div>

				<?php if ($detail->status == 'Proses Kasi') { ?>
					<div class="card-footer">
						<form action="<?= base_url('dashboard/update_srt_ket_id_masjid_ptsp22/' . $detail->id_ptsp) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="srt_ket_id_masjid">
							<div class="form-group">
								<div class="input-group">
									<div class="form-group-upload">
										<div class="custom-file">
											<label class="custom-file-label" for="file-upload-2">pilih file...</label>
											<input type="file" class="custom-file-input" id="file-upload-2" name="srt_ket_id_masjid" value="<?= $detail->srt_ket_id_masjid ?>">
											<input type="hidden" class="form-control form-user-input" name="id_permohonan_ptsp" id="file-upload" value="<?= $detail->id_permohonan_ptsp ?>">
											<input type="hidden" class="form-control form-user-input" name="id_layanan" id="file-upload" value="<?= $detail->id_layanan ?>">
										</div>
									</div>
								</div>
							</div>
							<center>
								<button class="btn btn-sm btn-primary" type="submit">
									<i class="fa fa-upload">
									</i>
								</button>
							</center>
						</form>
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="col-md-8 mb-0">
			<!-- Detail Data -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-center">Permohonan Petugas Siaran Keagamaan</h6>
				</div>
				<div class="card-body">
					<table class="table-hover table-responsive">
						<tbody>
							<?php if ($detail->no_surat != null) { ?>
								<tr>
									<td><b>Nomor Surat</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= $detail->no_surat ?></td>
								</tr>
							<?php } ?>
							<?php if ($detail->no_id_masjid != null) { ?>
								<tr>
									<td><b>Nomor ID Masjid</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= $detail->no_id_masjid ?></td>
								</tr>
							<?php } ?>
							<tr>
								<td><b>Nama Masjid</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td> </td>
								<td><?= $detail->nama_masjid ?></td>
							</tr>
							<tr>
								<td><b>Tipologi </b> </td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td> </td>
								<td><?= $detail->tipologi ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td> </td>
								<td><?= $detail->alamat ?></td>
							</tr>
							<tr>
								<td><b>No. HandPhone</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td> </td>
								<td><?= $detail->no_hp ?></td>
							</tr>
							<tr>
								<td><b>Tanggal Permohonan</b></td>
								<td> </td>
								<td> </td>
								<td>:</td>
								<td> </td>
								<td><?= format_indo(date($detail->tgl_permohonan)) ?></td>
							</tr>
							<?php if ($detail->tgl_persetujuan_fo != null) { ?>
								<tr>
									<td><b>Tanggal Persetujuan Front Office</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= format_indo(date($detail->tgl_persetujuan_fo)); ?></td>
								</tr>
							<?php } ?>
							<?php if ($detail->tgl_persetujuan_bo != null) { ?>
								<tr>
									<td><b>Tanggal Persetujuan Back Office</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= format_indo(date($detail->tgl_persetujuan_bo)); ?></td>
								</tr>
							<?php } ?>
							<?php if ($detail->tgl_persetujuan_tim_teknis != null) { ?>
								<tr>
									<td><b>Tanggal Persetujuan Tim Teknis</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= format_indo(date($detail->tgl_persetujuan_tim_teknis)); ?></td>
								</tr>
							<?php } ?>
							<?php if ($detail->tgl_persetujuan_kasi != null) { ?>
								<tr>
									<td><b>Tanggal Persetujuan Kasi</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= format_indo(date($detail->tgl_persetujuan_kasi)); ?></td>
								</tr>
							<?php } ?>
							<?php if ($detail->tgl_persetujuan_kasubag != null) { ?>
								<tr>
									<td><b>Tanggal Persetujuan Kasubag</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= format_indo(date($detail->tgl_persetujuan_kasubag)); ?></td>
								</tr>
							<?php } ?>
							<?php if ($detail->keterangan != null && $detail->status != 'Selesai') { ?>
								<tr>
									<td><b>Keterangan Permohonan Pending</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= $detail->keterangan; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<div class="float-right">
						<?php if ($detail->status == 'Proses Kasubag') { ?>
						<a href="<?= base_url() ?>dashboard/aksi_setujui_permohonan/<?= $detail->id_permohonan_ptsp ?>">
							<button id="btn_terima" class="btn btn-sm btn-primary" type="submit">
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
	<?php }?>
	<!--End Content Profile-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
