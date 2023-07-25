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
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama Peserta</th>
                        <th>Asal Satker</th>
                        <th>Posisi Yang Dilamar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="showdata">
                </tbody>
            </table>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            showdata();

            function showdata() {

                $("#showdata").html("");

                $.ajax({
                    type: "GET",
                    url: "<?= base_url('rekrutment/getData'); ?>",
                    dataType: "json",
                    success: function(data) {
                        hasil = JSON.parse(data);
                        alert();
                        var nourut = 1;
                        let idx = 0;
                        $.each(hasil, function(index, val) {
                            alert(val[idx].nip);
                            var nip = val[idx].nip;
                            var nama = val[idx].nama;
                            var satker = val[idx].satuan_kerja;
                            var posisi = val[idx].posisi_yang_dipilih;

                            var html = `
                                                    <tr>
                                                        <td>${nourut}</td>
                                                        <td>${nip}</td>
                                                        <td>${nama}</td>
                                                        <td>${satker}</td>
                                                        <td>${posisi}</td>
                                                        <td></td>
                                                    </tr>
                                                `;
                            nourut = nourut + 1;
                            idx = idx + 1;
                            $("#showdata").append(html);
                        })
                    },
                });
            };
        });
    </script>

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