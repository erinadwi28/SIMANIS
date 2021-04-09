<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4 judullist">
		<h3>Form Ubah Permohonan</h3>
				<!-- <a href="<?= base_url('warga') ?>"> -->
				<button id="btn_kembali" class="btn btn-sm btn-warning" type="">
					<i class="fa fa-arrow-left">
					</i> Kembali
				</button>
				<!-- </a> -->
	</div>

	<div class="row clearfix">
		<div class="col-xs-12 col-sm-2"></div>
		<?php foreach ($detail_ptsp as $detail) { ?>
		<div class="col-xs-12 col-sm-8">
			<div class="card shadow mb-5">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-center">Legalisir Ijazah</h6>
				</div>
				<div class="card-body">
					<form class="form-horizontal" id="form3" enctype="multipart/form-data"
						action="<?= base_url() ?>dashboard/aksi_update_pengajuan_ptsp03/<?= $detail->id_permohonan_ptsp ?>"
						method="POST">
						<div class="form-group row">
							<label for="Nama" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm-9">
								<div class="form-line focused">
									<input type="text" class="form-control" id="nama" name="nama"
										value="<?= $detail->nama ?>">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="no_hp" class="col-sm-3 col-form-label">No. Handphone</label>
							<div class="col-sm-9">
								<div class="form-line">
									<textarea class="form-control" id="no_hp" name="no_hp" rows="1"
										placeholder="masukkan nomor yang dapat dihubungi"><?= $detail->no_hp ?></textarea>
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
		<?php } ?>
		<div class="col-xs-12 col-sm-2"></div>
	</div>
</div>
<!--End Content Profile-->
</div>
<!-- /.container-fluid -->
