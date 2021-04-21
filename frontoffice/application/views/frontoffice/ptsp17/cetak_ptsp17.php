<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SIMANIS - Dashboard</title>

	<!--Tittle Icon-->
	<link rel="shortcut icon" href="<?= base_url('../assets/landing/images/') ?>title.png" />

	<!-- Custom fonts for this template-->
	<link rel="stylesheet" href="<?= base_url('../assets/vendor/fontawesome-free/css/all.min.css') ?>" />
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link rel="stylesheet" href="<?= base_url('../assets/dashboard/css/sb-admin-2.min.css') ?>" />
	<style>
		.body {
			color: #000;
		}

		.logosurat {
			height: 130px;
			width: 130px;
			margin-top: -20px;
			margin-left: 15px;
		}

		.kopsurat p {
			font-weight: bold;
			line-height: 1em;

		}

		.card-body {
			padding: 5rem;
		}

		.badan_surat {
			color: #000;
		}

		.badan_surat .row {
			color: #000;
		}

		.badan_surat {
			font-family: 'Times New Roman';
			margin-left: 60px;
		}

		.kepala_sertifikat {
			font-weight: bold;
			font-size: 14pt;
		}

		.kepala_sertifikat p {
			margin-top: 3px;
		}
		.row{
			font-size: 14pt;
			font-family: 'Times New Roman';
		}
		.no_surat {
			font-size: 14pt;
		}

		.tujuan_surat{
			font-size: 14pt;
			font-family: 'Times New Roman';
		}

		.paragraf {
			/* text-indent: 2.8125em; */
			text-align: justify;
			font-family: 'Times New Roman';
			text-indent: 50px;
			font-size: 14pt;
		}

		.isi_surat {
			margin-left: 0.0375em;
			font-size: 14pt;
			line-height: 1.2em;
			font-family: 'Times New Roman';
		}

		.identitas {
			margin-left: 2.8125em;
			margin-bottom: 0.3125em;
		}

		.img_ttd {
			width: 200px;
			margin-right: 110px;
		}

		.ttd_kepala {
			display: block;
			position: absolute;
			float: left;
			margin-right: -400px;
		}

		.img-fluid {
			max-width: 100%;
			height: auto;
		}

		.container-fluid {
			width: 100%;
			padding-right: 0.75rem;
			padding-left: 0.75rem;
			margin-right: auto;
			margin-left: auto;
		}

		.bawah {
			display: block;
			position: absolute;
			float: right;
			margin-right: 160px;
		}

		.kepala {
			display: block;
			position: absolute;
			float: left;
			margin-top: 200px;
			margin-right: -500px;
		}

		.table {
			color: #000;
		}

		.table-bordered {
			border-width: 2px;
			border-color: #000;
			margin-left: 15px;
		}

	</style>

</head>

<body class="body" id="page-top">
	<!-- Begin Page Content -->
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="card shadow mb-4">
				<div class="card-body">

							<div class="kopsurat row">
								<div class="col-md-12 mb-3">
									<object data="" type="image">
										<img class="img-fluid" alt="logo_kop_surat"
											src="<?= base_url('../assets/dashboard/images/frontoffice/ptsp/kop_surat.png') ?>">
									</object>
								</div>
							</div>
							<div class="no_surat">
								<center>
									<p><b>SURAT TUGAS </b><br>
										<b>Nomor : ....../kK.11.10/1/kp.07/6/.../2021</b>
									</p>
								</center>
							</div>
							<div class="isi_surat">
								<p> Dengan ini Kepala Kantor Kementerian Agama Kbupaten Klaten berdasarkan surat
									permohonan Sdr........... tanggal ..................
									perihal Permohonan Tambahan Tugas Mengajar yang disetujui Pengawas Pendidikan Agama
									Islam Kec...... dan
									surat persetujuan Kepala SD Negeri 2 Demangan Kec. Karangdowo, memerintahkan kepada
									Pegawai Negeri Sipil :
								</p>
							</div>

							<div class="isi_surat identitas">
								<table>
									<tbody>
										<tr>
											<td>Nama</td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td> </td>
											<td>xx</td>
										</tr>
										<tr>
											<td>NIP</td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td> </td>
											<td>xx
											</td>
										</tr>
										<tr>
											<td>Pangkat/Gol. Ruang</td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td> </td>
											<td>xx</td>
										</tr>
										<tr>
											<td>Jabatan</td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td> </td>
											<td>xx</td>
										</tr>
										<tr>
											<td>Ditugaskan di</td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td> </td>
											<td>xx</td>
										</tr>
										<tr>
											<td>Terhitung mulai tanggal</td>
											<td> </td>
											<td> </td>
											<td>:</td>
											<td> </td>
											<td>xx</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="isi_surat">
								<p>untuk segera melaksanakan tugas sebagai Guru Muda pada Kantor Kementerian Agama
									Kab. Klaten ditugaskan di SD Negeri 3 Karangdowo Kec. Karangdowo dan SD Negeri 2
									Demangan Kec. Karngdowo Kabupaten Klaten
								</p>
							</div>
							<div class="isi_surat paragraf">
								<p>
									Demikian untuk maklum dan dilaksanakan sebagaimana mestinya
								</p>
							</div>
							<div class="row">
								<div class="col-md-9">
								</div>
								<div class="col-md-3">
									<div class="badan_surat isi_surat">
											<!-- untuk tanggal persetujuan semetrara statis, nanti ditambahkan filed di database dulu -->
											Klaten, ................... 2021<br>
											Kepala
									</div>
								</div>
							</div>
							<div class="row ttd_kepala">
								<div class="col-md-6 ">
								</div>
								<div class="col-md-6">

								</div>
							</div>
							<br> <br>
							<div class="row">
								<div class="col-md-9">
								</div>
								<div class="col-md-3">
									<div class="badan_surat isi_surat">
											<!-- untuk nama dan nip kepala semetrara statis, nanti ditambahkan filed di database dulu -->
											Anif Solikhin<br>
									</div>
								</div>
							</div>
							<div>
								Tempusan: <br>
								1. Kepala Seksi PAIS Kankemenag Kab. Klaten; <br>
								2. Korwil Pendidikan Kec. Karngdowo; <br>
								3. Kepala SD Negeri 2 Demangan Kec. Karangdowo <br>
								4. Kepala SD Negeri 3 Karangwungu Kec. Karangdowo <br>
								5. Sdr. M. Zajid, S.Ag. NIP. 19740512 200501 1 003; <br>
								6. Arsip
							</div>



						</div>
			</div>
		</div>
	</div>
	</div>
	<!-- /.container-fluid -->

	<!-- End of Main Content -->
</body>

</html>
