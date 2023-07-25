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
                <b>Detil Data Rekrutment</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <tbody>
                        <?php foreach ($detil as $detil) { ?>
                            <tr>
                                <?php if ($detil['jenis_attr'] == 'url_file') { ?>
                                    <th>Link File</th>
                                    <th><a class="btn btn-primary" href="<?= $detil['value']; ?>" target="_blank" rel="noopener noreferrer">Download</a></th>
                                <?php } else { ?>
                                    <th><?= $detil['jenis_attr']; ?> : </th>
                                    <th><?= $detil['value']; ?></th>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>