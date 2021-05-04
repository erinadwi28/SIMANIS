<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<?php foreach ($detail_ptsp as $detail) { ?>
		<div class="d-sm-flex align-items-center justify-content-between">
			<h3 class="judullist py-3">Detail Permohonan</h3>
			<nav aria-label="breadcrumb" class="nav-breadcrumb">
				<ol class="breadcrumb">
					<?php if ($detail->status != 'Pending' && $detail->status != 'Selesai') { ?>
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard/list_permohonan_validasi_kemenag') ?>">Permohonan Proses Kemenag</a></li>
						<li class="breadcrumb-item active" aria-current="page">Detail Permohonan</li>
					<?php } elseif ($detail->status == 'Selesai') { ?>
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard/list_permohonan_selesai') ?>">Permohonan Selesai</a></li>
						<li class="breadcrumb-item active" aria-current="page">Detail Permohonan</li>
					<?php } else { ?>
						<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						<li class="breadcrumb-item active" aria-current="page">SOP</li>
						<li class="breadcrumb-item active" aria-current="page">Form Permohonan</li>
						<li class="breadcrumb-item active" aria-current="page">Detail Permohonan</li>
					<?php } ?>
				</ol>
			</nav>
		</div>

		<!-- Detail input -->
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-2"></div>
			<div class="col-md-8 mb-2">
				<!-- Detail Data -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-center">Permohonan Rekomendasi Izin Pendirian KBIHU</h6>
					</div>
					<div class="card-body">
						<table class="table-hover table-responsive">
							<tbody>
								<?php if ($detail->no_surat != null && $detail->status == 'Selesai') { ?>
									<tr>
										<td><b>Nomor Surat</b></td>
										<td> </td>
										<td> </td>
										<td>:</td>
										<td> </td>
										<td><?= $detail->no_surat ?></td>
									</tr>
								<?php } ?>
								<tr>
									<td><b>Nama Pemohon</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= $detail->nama_pemohon ?></td>
								</tr>
								<tr>
									<td><b>Nama Yayasan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= $detail->nama_yayasan ?></td>
								</tr>
								<tr>
									<td><b>Nama Kelompok Bimbingan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= $detail->nama_kelompok_bimbingan ?></td>
								</tr>
								<tr>
									<td><b>Domisili Kelompok Bimbingan</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= $detail->domisili_kelompok_bimbingan ?></td>
								</tr>
								<tr>
									<td><b>Alamat Kantor</b></td>
									<td> </td>
									<td> </td>
									<td>:</td>
									<td> </td>
									<td><?= $detail->alamat_kantor ?></td>
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
								<?php if ($detail->keterangan != null && $detail->status == 'Pending') { ?>
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
						<?php if ($detail->status == 'Pending') { ?>
							<em class="small text-danger float-right mt-2 mb-0">*Pastikan data benar dan Unggah semua dokumen dibawah</em>
						<?php } ?>
					</div>

					<?php if ($detail->status == 'Pending') { ?>
						<div class="card-footer">
							<div class="float-right">
								<a href="<?= base_url() ?>dashboard/form_ubah_ptsp07/<?= $detail->id_permohonan_ptsp ?>">
									<button id="btn_ubah" class="btn btn-sm btn-warning" type="submit">
										<i class="fa fa-edit nav-icon">
										</i> Ubah
									</button>
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-2"></div>
		</div>

		<!-- Unggah dokumen -->
		<div class="row clearfix">
			<!-- Surat Permohonan -->
			<div class="col-xs-12 col-sm-3">
				<div class="card shadow mb-4">
					<div class="card-header">
						<center>
							<h6 class="m-0 font-weight-bold">Surat Permohonan</h6>
						</center>
					</div>

					<div class="card-body">
						<center>
							<?php if ($detail->srt_permohonan != null) { ?>
								<p><?= $detail->srt_permohonan; ?></p>
								<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>./assets/dashboard/pemohon/ptsp/ptsp07/srt_permohonan/<?= $detail->srt_permohonan ?>" target="_blank">
									<i class="fa fa-download nav-icon">
									</i> Klik untuk melihat
								</a>
							<?php } elseif ($detail->srt_permohonan == null) { ?>
								<p class="mb-0">Belum ada lampiran <br> Silahkan unggah terlebih dahulu</p>
							<?php } ?>

						</center>
					</div>
					<?php if ($detail->status == 'Pending') { ?>
						<div class="card-footer">
							<form action="<?= base_url('dashboard/update_srt_permohonan_ptsp07/' . $detail->id_ptsp) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="formupload_ptsp07_1">
								<div class="form-group">
									<div class="input-group">
										<div class="form-group-upload">
											<div class="custom-file">
												<label class="custom-file-label" for="file-upload">pilih
													file...</label>
												<input type="file" class="custom-file-input" id="file-upload" name="srt_permohonan" value="<?= $detail->srt_permohonan ?>" required>
												<input type="hidden" class="form-control form-user-input" name="id_permohonan_ptsp" id="file-upload" value="<?= $detail->id_permohonan_ptsp ?>">
											</div>
										</div>
									</div>
								</div>
								<center>
									<button class="btn btn-sm btn-primary" type="submit">
										<i class="fa fa-upload"></i>
									</button>
								</center>
							</form>
						</div>
					<?php } ?>
				</div>
			</div>

			<!-- Akte Notaris -->
			<div class="col-xs-12 col-sm-3">
				<div class="card shadow mb-4">
					<div class="card-header">
						<center>
							<h6 class="m-0 font-weight-bold">Akte Notaris</h6>
						</center>
					</div>
					<div class="card-body">
						<center>
							<?php if ($detail->akte_notaris != null) { ?>
								<p><?= $detail->akte_notaris; ?></p>
								<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>./assets/dashboard/pemohon/ptsp/ptsp07/akte_notaris/<?= $detail->akte_notaris ?>" target="_blank">
									<i class="fa fa-download nav-icon">
									</i> Klik untuk melihat
								</a>
							<?php } elseif ($detail->akte_notaris == null) { ?>
								<p class="mb-0">Belum ada lampiran <br> Silahkan unggah terlebih dahulu</p>
							<?php } ?>

						</center>
					</div>
					<?php if ($detail->status == 'Pending') { ?>
						<div class="card-footer">
							<form action="<?= base_url('dashboard/update_akte_notaris_ptsp07/' . $detail->id_ptsp) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="formupload_ptsp07_2">
								<div class="form-group">
									<div class="input-group">
										<div class="form-group-upload">
											<div class="custom-file">
												<label class="custom-file-label" for="file-upload-2">pilih
													file...</label>
												<input type="file" class="custom-file-input" id="file-upload-2" name="akte_notaris" value="<?= $detail->akte_notaris ?>" required>
												<input type="hidden" class="form-control form-user-input" name="id_permohonan_ptsp" id="file-upload-2" value="<?= $detail->id_permohonan_ptsp ?>">
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

			<!-- Bukti foto kantor -->
			<div class="col-xs-12 col-sm-3">
				<div class="card shadow mb-4">
					<div class="card-header">
						<center>
							<h6 class="m-0 font-weight-bold">Bukti Kantor Sekretariat</h6>
						</center>
					</div>

					<div class="card-body">
						<center>
							<?php if ($detail->foto_kantor != null) { ?>
								<p><?= $detail->foto_kantor; ?></p>
								<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>./assets/dashboard/pemohon/ptsp/ptsp07/foto_kantor/<?= $detail->foto_kantor ?>" target="_blank">
									<i class="fa fa-download nav-icon">
									</i> Klik untuk melihat
								</a>
							<?php } elseif ($detail->foto_kantor == null) { ?>
								<p class="mb-0">Belum ada lampiran <br> Silahkan unggah terlebih dahulu</p>
							<?php } ?>

						</center>
					</div>
					<?php if ($detail->status == 'Pending') { ?>
						<div class="card-footer">
							<form action="<?= base_url('dashboard/update_foto_kantor_ptsp07/' . $detail->id_ptsp) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="formupload_ptsp07_3">
								<div class="form-group">
									<div class="input-group">
										<div class="form-group-upload">
											<div class="custom-file">
												<label class="custom-file-label" for="file-upload-3">pilih file...</label>
												<input type="file" class="custom-file-input" id="file-upload-3" name="foto_kantor" value="<?= $detail->foto_kantor ?>" required>
												<input type="hidden" class="form-control form-user-input" name="id_permohonan_ptsp" id="file-upload-3" value="<?= $detail->id_permohonan_ptsp ?>">
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

			<!-- Dokumen susunan pengurus -->
			<div class="col-xs-12 col-sm-3">
				<div class="card shadow mb-4">
					<div class="card-header">
						<center>
							<h6 class="m-0 font-weight-bold">Dokumen Susunan Pengurus</h6>
						</center>
					</div>

					<div class="card-body">
						<center>
							<?php if ($detail->susunan_pengurus != null) { ?>
								<p><?= $detail->susunan_pengurus; ?></p>
								<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>./assets/dashboard/pemohon/ptsp/ptsp07/susunan_pengurus/<?= $detail->susunan_pengurus ?>" target="_blank">
									<i class="fa fa-download nav-icon">
									</i> Klik untuk melihat
								</a>
							<?php } elseif ($detail->susunan_pengurus == null) { ?>
								<p class="mb-0">Belum ada lampiran <br> Silahkan unggah terlebih dahulu</p>
							<?php } ?>
						</center>
					</div>
					<?php if ($detail->status == 'Pending') { ?>
						<div class="card-footer">
							<form action="<?= base_url('dashboard/update_susunan_pengurus_ptsp07/' . $detail->id_ptsp) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="formupload_ptsp07_4">
								<div class="form-group">
									<div class="input-group">
										<div class="form-group-upload">
											<div class="custom-file">
												<label class="custom-file-label" for="file-upload-4">pilih
													file...</label>
												<input type="file" class="custom-file-input" id="file-upload-4" name="susunan_pengurus" value="<?= $detail->susunan_pengurus ?>" required>
												<input type="hidden" class="form-control form-user-input" name="id_permohonan_ptsp" id="file-upload-4" value="<?= $detail->id_permohonan_ptsp ?>">
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
		</div>

		<div class="row clearfix">
			<!-- Sertifikat pembimbing -->
			<div class="col-xs-12 col-sm-3">
				<div class="card shadow mb-4">
					<div class="card-header">
						<center>
							<h6 class="m-0 font-weight-bold">Sertifikat Pembimbing</h6>
						</center>
					</div>

					<div class="card-body">
						<center>
							<?php if ($detail->sertifikat_pembimbing != null) { ?>
								<p><?= $detail->sertifikat_pembimbing; ?></p>
								<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>./assets/dashboard/pemohon/ptsp/ptsp07/sertifikat_pembimbing/<?= $detail->sertifikat_pembimbing ?>" target="_blank">
									<i class="fa fa-download nav-icon">
									</i> Klik untuk melihat
								</a>
							<?php } elseif ($detail->sertifikat_pembimbing == null) { ?>
								<p class="mb-0">Belum ada lampiran <br> Silahkan unggah terlebih dahulu</p>
							<?php } ?>

						</center>
					</div>
					<?php if ($detail->status == 'Pending') { ?>
						<div class="card-footer">
							<form action="<?= base_url('dashboard/update_sertifikat_pembimbing_ptsp07/' . $detail->id_ptsp) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="formupload_ptsp07_5">
								<div class="form-group">
									<div class="input-group">
										<div class="form-group-upload">
											<div class="custom-file">
												<label class="custom-file-label" for="file-upload-5">pilih
													file...</label>
												<input type="file" class="custom-file-input" id="file-upload-5" name="sertifikat_pembimbing" value="<?= $detail->sertifikat_pembimbing ?>" required>
												<input type="hidden" class="form-control form-user-input" name="id_permohonan_ptsp" id="file-upload" value="<?= $detail->id_permohonan_ptsp ?>">
											</div>
										</div>
									</div>
								</div>
								<center>
									<button class="btn btn-sm btn-primary" type="submit">
										<i class="fa fa-upload"></i>
									</button>
								</center>
							</form>
						</div>
					<?php } ?>
				</div>
			</div>

			<!-- Dokumen rencana program manasik -->
			<div class="col-xs-12 col-sm-3">
				<div class="card shadow mb-4">
					<div class="card-header">
						<center>
							<h6 class="m-0 font-weight-bold">Rencana Program Manasik</h6>
						</center>
					</div>
					<div class="card-body">
						<center>
							<?php if ($detail->program_manasik != null) { ?>
								<p><?= $detail->program_manasik; ?></p>
								<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>./assets/dashboard/pemohon/ptsp/ptsp07/program_manasik/<?= $detail->program_manasik ?>" target="_blank">
									<i class="fa fa-download nav-icon">
									</i> Klik untuk melihat
								</a>
							<?php } elseif ($detail->program_manasik == null) { ?>
								<p class="mb-0">Belum ada lampiran <br> Silahkan unggah terlebih dahulu</p>
							<?php } ?>
						</center>
					</div>
					<?php if ($detail->status == 'Pending') { ?>
						<div class="card-footer">
							<form action="<?= base_url('dashboard/update_program_manasik_ptsp07/' . $detail->id_ptsp) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" id="formupload_ptsp07_6">
								<div class="form-group">
									<div class="input-group">
										<div class="form-group-upload">
											<div class="custom-file">
												<label class="custom-file-label" for="file-upload-6">pilih
													file...</label>
												<input type="file" class="custom-file-input" id="file-upload-6" name="program_manasik" value="<?= $detail->program_manasik ?>" required>
												<input type="hidden" class="form-control form-user-input" name="id_permohonan_ptsp" id="file-upload-2" value="<?= $detail->id_permohonan_ptsp ?>">
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

			<!-- Berita Acara -->
			<?php if ($detail->berita_acara != null) { ?>
				<div class="col-xs-12 col-sm-3">
					<div class="card shadow mb-4">
						<div class="card-header">
							<center>
								<h6 class="m-0 font-weight-bold">Berita Acara</h6>
							</center>
						</div>
						<div class="card-body">
							<center>

								<p><?= $detail->berita_acara; ?></p>
								<a id="btn_upload" class="btn btn-sm btn-primary" href="<?= base_url() ?>./assets/dashboard/pemohon/ptsp/ptsp07/berita_acara/<?= $detail->berita_acara ?>" target="_blank">
									<i class="fa fa-download nav-icon">
									</i> Klik untuk melihat
								</a>

							</center>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>

		<!-- Button Selesai -->
		<div class="row clearfix float-right px-2">
			<?php if ($detail->status == 'Pending') { ?>
				<a href="<?= base_url() ?>dashboard/aksi_update_status_permohonan/<?= $detail->id_permohonan_ptsp ?>">
					<button id="btn_selesai" class="btn btn-sm btn-primary" type="submit">
						<i class="far fa-save nav-icon">
						</i> Selesai
					</button>
				</a>
			<?php } ?>
		</div>
	<?php } ?>
	<!--End Content-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->