<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between">
		<h3 class="judullist py-3">Standar Operasional Prosedur</h1>
			<nav aria-label="breadcrumb" class="nav-breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
					<li class="breadcrumb-item active" aria-current="page">SOP</li>
				</ol>
			</nav>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-md-8 mb-4">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-center">Permohonan Surat Keterangan Haji Pertama</h6>
				</div>
				<div class="card-body ">
					<h6><b>Persyaratan :</b></h6>
					<p class="persyaratan mb-0">
					<ol type="1" class="ml-0 list-syarat">
						<li>Pemohon Mengunduh Surat Permohonan ditujukan kepada Kepala Kantor Kemenag Klaten yang bisa di dowload <b><a href="<?= base_url() ?>assets/pemohon/sop/ptsp05/srt_permohonan.pdf" target="_blank">[di sini]</a></b></li>
						<li>Pemohon Mengunduh Surat Pernyataan Pergi Haji Pertama Bermatrai Rp.10.000 yang bisa di download <b><a href="<?= base_url() ?>assets/pemohon/sop/ptsp05/srt_pernyataan.pdf" target="_blank">[di sini]</a></b></li>
						<li>Pemohon Mengisi Surat Permohonan ditujukan kepada Kepala Kantor Kemenag Klaten.</li>
						<li>Pemohon Mengisi Surat Pernyataan Pergi Haji Pertama Bermatrai Rp.10.000.</li>
						<li>Pemohon Mengunggah Surat Permohonan dan Surat Pernyataan pada form pengajuan.</li>
						<li>Pemohon Mengisi dan Menlengkapi form pengajuan yang telah disediakan.</li>
						<li>Pemohon Menunggu Informasi dari Kemenag terkait proses pengajuan permohonan.</li>
					</ol>
					</p>
				</div>
				<div class="card-footer">
					<a href="<?= base_url('dashboard/form_ptsp05') ?>">
						<button id="btn_kembali" class="btn btn-sm btn-primary float-right" type="submit">
							<i class="far fa-edit nav-icon">
							</i> Buat
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->