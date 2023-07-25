<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->
<link rel="stylesheet" href=".<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekrutmen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data 1</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIP</th>
                    <th>SATUAN KERJA</th>
                    <th>POSISI</th>
                    <th>SKILL</th>
                    <th>MOBILE APP</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 0;
                                    foreach ($datas as $data) { 
                                        $no++;
                                        ?>
                                        
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= (isset($data['nama'])) ? $data['nama'] : ""; ?></td>
                                            <td><?= (isset($data['nip'])) ? $data['nip'] : ""; ?></td>
                                            <td><?= (isset($data['satuan_kerja'])) ? $data['satuan_kerja'] : ""; ?></td>
                                            <td><?= (isset($data['posisi_yang_dipilih'])) ? $data['posisi_yang_dipilih'] : ""; ?></td>
                                            <td><?= (isset($data['bahasa_pemrograman_yang_dikuasai'])) ? $data['bahasa_pemrograman_yang_dikuasai'] : ""; ?></BR>
                                            <?= (isset($data['framework_bahasa_pemrograman_yang_dikuasai'])) ? $data['framework_bahasa_pemrograman_yang_dikuasai'] : ""; ?></BR>
                                            <?= (isset($data['database_yang_dikuasai'])) ? $data['database_yang_dikuasai'] : ""; ?></BR>
                                            <?= (isset($data['tools_yang_dikuasai'])) ? $data['tools_yang_dikuasai'] : ""; ?></td>
                                            <td><?= (isset($data['pernah_membuat_mobile_apps'])) ? $data['pernah_membuat_mobile_apps'] : ""; ?></td>
                                        </tr>
                        <?php } ?>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>