<!DOCTYPE html>
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true ");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rekrutment</title>

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">


    <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
</head>

<body>
    <section class="content mt-4">
        <div class="container text-xs">
            <div class="card-header text-center bg-info" id="judul">
                <b>Data Rekrutment</b>
            </div>
            <table id="tblRekrutment" class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Nip</th>
                        <th>Satuan Kerja</th>
                        <th>Posisi Yang Dilamar</th>
                        <th>Skill</th>
                        <th>Mobile Apps</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="showdata">
                    <?php
                    $no = 1;
                    foreach ($rekrutment as $data) {
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
                            <td><a href="#!" data-toggle="modal" data-target="#detil<?= md5($data['id']); ?>">Detil</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>

    <?php foreach ($detil as $detil) : ?>
        <div class="modal fade" id="detil<?= md5($detil['id_pendaftar']); ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h6 class="modal-title"><i class="fas fa-user mr-2"></i>Detil Data Rekrutment</h6>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row mb-1">
                            <label class="col-sm-2 control-label">Nilai 1 : </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" value="<?= $detil['nilai1']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-1">
                            <label class="col-sm-2 control-label">Nilai 2 : </label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control form-control-sm" value="<?= $detil['nilai2']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>

    <script>
        $(function() {
            $('#tblRekrutment').DataTable({
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
</body>

</html>