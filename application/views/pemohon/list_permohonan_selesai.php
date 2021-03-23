<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 judullist">
        <h3>Data Permohonan Surat Selesai</h3>
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
                            <th>Tgl Permohonan</th>
                            <th>Tgl Disetujui</th>
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
                                <td><?= $no ?></td>
                                <td><?= $permohonan->nama_layanan ?></td>
                                <td><?= $permohonan->tgl_permohonan ?></td>
                                <td><?= $permohonan->tgl_persetujuan_fo ?></td>
                                <td><label class="badge badge-success"><i class="far fa-times-cicrle"><?= $permohonan->status ?></i></label></td>
                                <td>
                                    <form role="form" action="<?= base_url() ?>warga/lihat_surat/<?= $permohonan->id_permohonan_ptsp ?>/<?= $permohonan->id_layanan ?>" method="post" id="formUbah">
                                        <div>
                                            <div class="float-right">
                                                <a href="">
                                                    <button id="btn_simpan" class="btn btn-sm btn-info" type="submit">
                                                        <i class="far fa-eye nav-icon"></i>
                                                        Lihat Surat
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control form-user-input " name="notif" id="notif" value="Dibaca">
                                    </form>
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