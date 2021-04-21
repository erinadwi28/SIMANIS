<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between">
		<h3 class="judullist py-3">Form Permohonan</h3>
		<nav aria-label="breadcrumb" class="nav-breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="<?= base_url('dashboard/sop_ptsp05') ?>">SOP</a></li>
				<li class="breadcrumb-item active" aria-current="page">Form Permohonan</li>
			</ol>
		</nav>
	</div>

	<!--Begin Content Profile-->
	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
			<div class="col-xs col-sm-8">
				<div class="card shadow mb-5">
					<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-center">Permohonan Rekomendasi Izin Perpanjang Operasional <br>
					Penyelengara Perjalanan Ibadah Umroh (PPIU) dan Perjalanan Ibadah Haji Khusus (PIHK)
				</h6>
					</div>
					<div class="card-body">
						<button class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#sopModal"><i class="fas fa-info-circle"></i></button>
						<br>
						<form class="form-horizontal mt-4" id="form_ptsp10" enctype="multipart/form-data" action="<?= base_url('dashboard/aksi_pengajuan_ptsp05') ?>" method="POST">
							<div class="form-group row">
								<label for="nama_pemohon" class="col-sm-3 col-form-label">Nama Pemohon</label>
								<div class="col-sm-9">
									<div class="form-line focused">
										<input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" value=""	placeholder="masukkan nama pemohon disini..." required>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_pt" class="col-sm-3 col-form-label">Nama PT</label>
								<div class="col-sm-9">
									<div class="form-line focused">
										<input type="text" class="form-control" id="nama_pt" name="nama_pt" value="" placeholder="masukkan nama pt disini..." required>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_kantor_cabang" class="col-sm-3 col-form-label">Nama Kantor Cabang</label>
								<div class="col-sm-9">
									<div class="form-line focused">
										<input type="text" class="form-control" id="nama_kantor_cabang" name="nama_kantor_cabang" value="" placeholder="masukkan nama kantor cabang disini..." required>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="alamat_kantor_cabang" class="col-sm-3 col-form-label">Alamat Kantor Cabang</label>
								<div class="col-sm-9">
									<div class="form-line focused">
										<textarea type="text" class="form-control" id="alamat_kantor_cabang" name="alamat_kantor_cabang" value="" placeholder="masukkan alamat kantor cabang disini..."
										required></textarea>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="no_hp" class="col-sm-3 col-form-label">No. HandPhone</label>
								<div class="col-sm-9">
									<div class="form-line focused">
										<input type="text" class="form-control" id="no_hp" name="no_hp" value=""
										placeholder="masukkan no hp disini..." 
										required data-parsley-type="number" minlength="11">
									</div>
								</div>
							</div>
							
					</div>
				<div class="card-footer">
					<div class="float-right">
						<a href="#">
							<button id="btn_simpan" class="btn btn-sm btn-primary" type="submit">
								<i class="far fa-save nav-icon">
								</i> Simpan
							</button>
						</a>
					</div>
				</div>
				</form>
				</div>
			</div>
	</div>
	<!--End Content Profile-->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="sopModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Standar Operasional Prosedur</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h6 class="modal-title-syarat"><b>Persyaratan :</b></h6>
				<p class="modal-content-syarat mb-0">
				<ol type="1" class="ml-0 list-syarat modal-content-syarat">
					<li>Pemohon Mengunduh Surat Permohonan ditujukan kepada Kepala Kantor Kemenag Klaten yang bisa di dowload <b><a href="<?= base_url() ?>assets/pemohon/sop/ptsp05/srt_permohonan.pdf" target="_blank">[di sini]</a></b></li>
					<li>Pemohon Mengunduh Surat Pernyataan Pergi Haji Pertama Bermatrai Rp.10.000 yang bisa di dowload <b><a href="<?= base_url() ?>assets/pemohon/sop/ptsp05/srt_pernyataan.pdf" target="_blank">[di sini]</a></b></li>
					<li>Pemohon Mengisi Surat Permohonan ditujukan kepada Kepala Kantor Kemenag Klaten.</li>
					<li>Pemohon Mengisi Surat Pernyataan Pergi Haji Pertama Bermatrai Rp.10.000.</li>
					<li>Pemohon Mengunggah Surat Permohonan dan Surat Pernyataan pada form pengajuan.</li>
					<li>Pemohon Mengisi dan Menlengkapi form pengajuan yang telah disediakan.</li>
					<li>Pemohon Menunggu Informasi dari Kemenag terkait proses pengajuan permohonan.</li>
				</ol>
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
