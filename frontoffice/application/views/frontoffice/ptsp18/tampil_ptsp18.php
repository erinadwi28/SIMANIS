<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-2 judullist mt-4">
		<h3>Preview Surat</h3>
		<a href="<?= base_url('warga') ?>">
			<button id="btn_kembali" class="btn btn-sm btn-warning" type="submit">
				<i class="fa fa-arrow-left">
				</i> Kembali
			</button>
		</a>
	</div>

	<!-- Content Row line 1-->
	<div class="row">
		<div class="col-md-2 mb-4"></div>
		<div class="col-md-8 mb-4">
			<!-- Detail Data -->
			<div class="row">
				<div class="col-md-12 mb-3">
					<!-- Detail Data -->
					<div class="card shadow mb-3">
						<div class="card-header">
							<center>
								<h6 class="m-0 font-weight-bold">Surat Rekomendasi Permohonan Bantuan Masjid</h6>
							</center>
						</div>
						<div class="card-body card-preview">
							<div class="kopsurat row">
								<div class="col-md-12 mb-3">
									<object data="" type="image">
										<img class="img-fluid" alt="logo_kop_surat" src="<?= base_url('../assets/dashboard/') ?>images/kop_surat.png">
									</object>
								</div>
							</div>
							<div class="no_surat">
								<center>
									<?php foreach ($detail_ptsp as $detail) { ?>
										<p><b>REKOMENDASI</b><br>
											<b>Nomor : <?= $detail->no_surat ?></b>
										</p>
									<?php } ?>
								</center>
							</div>
							<div class="isi_surat">
								<?php foreach ($detail_ptsp as $detail) { ?>
									<p class="text-justify">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Berdasarkan surat dari Takmir Masjid <?= $detail->nama_masjid ?> Nomor :
										<?= $detail->no_surat_permohonan ?>
										tanggal <?= $detail->tgl_surat_permohonan ?> perihal Permohonan Surat Rekomendasi dan
										memperhatikan kelengkapan
										proposal yang diajukan, dengan ini kami memberikan rekomendasi kepada :
									</p>
								<?php } ?>
							</div>
							<div class="isi_surat identitas ml-5">
								<center>
									<?php foreach ($detail_ptsp as $detail) { ?>
										<table class="table-responsive">
											<tbody>
												<tr>
													<td>Nama Masjid</td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td><?= $detail->nama_masjid ?></td>
												</tr>
												<tr>
													<td>Nama Ketua Takmir</td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td><?= $detail->nama_ketua_takmir ?></td>
												</tr>
												<tr>
													<td>Alamat Masjid</td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td><?= $detail->alamat_masjid ?></td>
												</tr>
												<tr>
													<td>Nomor ID Masjid</td>
													<td> </td>
													<td>:</td>
													<td> </td>
													<td><?= $detail->no_id_masjid ?></td>
												</tr>
											</tbody>
										</table>
									<?php } ?>
								</center>
							</div>
							<br>
							<div class="isi_surat paragraf">
								<p>untuk mendapatkan bantuan renovasi masjid dari Gubernur Jawa Tengah.</p>
								<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Demikian rekomendasi ini kami buat untuk dipergunakan sebagimana mestinya.</p>
							</div>

							<div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6">
									<div class="badan_surat isi_surat">
										<center>

											Klaten, 03 Maret 2020<br>
											Kepala
										</center>
									</div>
								</div>
							</div>
							<div class="row ttd_kades">
								<div class="col-md-6 ">
								</div>
								<div class="col-md-6">

								</div>
							</div>
							<br> <br>
							<div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6">
									<div class="badan_surat isi_surat">
										<center>
											<u><b>H. Anif Solikhin, S.Ag. MSI</b></u><br>
											NIP. 197004201995031003
										</center>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<center>
								<a href="<?= base_url() ?>dashboard/cetak_ptsp18/<?php foreach ($detail_ptsp as $detail) { ?><?= $detail->id_permohonan_ptsp ?> <?php } ?>">
									<button class="btn btn-sm btn-success" type="submit"><i class="fa fa-print"></i>
										Cetak</button>
								</a>
							</center>
						</div>

					</div>

				</div>
			</div>
		</div>
		<div class="col-md-2 mb-4"></div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->