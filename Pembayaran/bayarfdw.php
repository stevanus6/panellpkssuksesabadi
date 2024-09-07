<!DOCTYPE html>
<html lang="en">

<?php 
// $chr = 65;
// for ($i = 0; $i < 26; $i++) {
//     echo $i+1 . " = " . (chr($chr+$i)) . "<br>";
//     $angka = $i + 1;
//     $huruf = chr($chr+$i);

// }
// die;

// $nama_file = basename($_SERVER['SCRIPT_NAME']);

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>LPKS SUKSES ABADI JAYA</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Include Sidebar -->
        <?php include '../layout/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Include Topbar -->
                <?php include '../layout/topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Tabel Pembayaran FDW</h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="form-group text-left">
                                <a href="inputbayar_fdw" class="btn btn-primary">Tambah Data</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>Nama Karyawan</th>
                                        <th>Total Gaji Diterima</th>
                                        <th>Hari Kerja yang Dihitung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for($i = 1; $i <= 26; $i++):?> 
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>Tabel <?= chr(64+$i) ?></td>
                                                <td>Deskripsi Tabel <?= chr(64+$i) ?></td>
                                                <td><?=$i?> hari</td>
                                            </tr>
                                        <?php endfor; ?>
                                        <!-- <tr>
                                            <td>1</td>
                                            <td>Tabel A</td>
                                            <td>Deskripsi Tabel A</td>
                                           <td></td>
                                           
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Tabel B</td>
                                            <td>Deskripsi Tabel B</td>
                                            <td></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Tabel C</td>
                                            <td>Deskripsi Tabel C</td>
                                            <td></td>
                                          
                                        </tr> -->

                                        <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
                
    <!-- Include Footer -->
    <?php include '../layout/footer.php'; ?>

    <!-- Include Logout Modal -->
    <?php include '../layout/logout_modal.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

    <script>
        $(document).ready(function() {
            // Check if DataTable is already initialized
            if (!$.fn.DataTable.isDataTable('#dataTable')) {
                // Initialize DataTable
                $('#dataTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "responsive": true
                });
            }
        });
    </script>

</body>

</html>
