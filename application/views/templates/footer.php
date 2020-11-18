
<footer class="main-footer" class="footer-1" style="background:#191970; !important;color:#fff !important;box-shadow: 0px 0px 0px #222;">
    <strong>JogjaWebCom &copy; 2019-2020 <a href="">JWCom</a>.</strong> All rights reserved.<br>
<p><font color="gray">Rosa Arimbi Pramesti</font></p>
</footer>


  <script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>