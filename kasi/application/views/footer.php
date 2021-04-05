  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Tekan Logout untuk melanjutkan <br>
          Tekan Cancel untuk membatalkan
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancel
          </button>
          <a class="btn btn-primary" href="<?= base_url('masuk/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('../assets/dashboard/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('../assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('../assets/dashboard/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('../assets/dashboard/js/sb-admin-2.min.js') ?>"></script>
  
  <!-- Page level plugins -->
  <script src="<?= base_url('../assets/dashboard/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('../assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url('../assets/dashboard/js/demo/datatables-demo.js') ?>"></script>

</body>

  </html>