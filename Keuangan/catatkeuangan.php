<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LPKS SUKSES ABADI JAYA</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .hidden {
            display: none;
        }

        .form-section {
            margin-bottom: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-section h5 {
            margin-top: 0;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .form-section hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-column {
            flex: 1;
            min-width: 0;
        }

        @media (max-width: 768px) {
            .form-column {
                flex: 1 1 100%;
            }
        }
    </style>
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

                    <!-- Cash Flow Report Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cash Flow Report</h6>
                        </div>
                        <div class="card-body">
                            <form action="process_cashflow.php" method="post" enctype="multipart/form-data">

                                <!-- Outgoing Funds Section -->
                                <fieldset class="form-section">
                                    <h5>Pencatatan Uang Keluar</h5>
                                    <div class="form-row">
                                        <div class="form-column">
                                            <!-- Nama Pengeluaran -->
                                            <div class="form-group">
                                                <label for="nama-pengeluaran">Nama Pengeluaran:</label>
                                                <input type="text" class="form-control" id="nama-pengeluaran" name="nama_pengeluaran" placeholder="Masukkan Nama Pengeluaran">
                                            </div>

                                            <!-- Nama Bank -->
                                            <div class="form-group">
                                                <label for="nama-bank">Nama Bank:</label>
                                                <input type="text" class="form-control" id="nama-bank" name="nama_bank" placeholder="Masukkan Nama Bank">
                                            </div>
                                        </div>
                                        <div class="form-column">
                                            <!-- Tanggal -->
                                            <div class="form-group">
                                                <label for="tanggal-pengeluaran">Tanggal:</label>
                                                <input type="date" class="form-control" id="tanggal-pengeluaran" name="tanggal_pengeluaran">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- Incoming Funds Section -->
                                <fieldset class="form-section">
                                    <h5>Pencatatan Uang Masuk</h5>
                                    <div class="form-row">
                                        <div class="form-column">
                                            <!-- Penambahan Dana Cash -->
                                            <div class="form-group">
                                                <label for="penambahan-dana-cash">Penambahan Dana Cash:</label>
                                                <input type="number" class="form-control" id="penambahan-dana-cash" name="penambahan_dana_cash" placeholder="Masukkan Penambahan Dana Cash">
                                            </div>

                                            <!-- Dana Elektronik -->
                                            <div class="form-group">
                                                <label for="dana-elektronik">Dana Elektronik:</label>
                                                <input type="number" class="form-control" id="dana-elektronik" name="dana_elektronik" placeholder="Masukkan Dana Elektronik">
                                            </div>
                                        </div>
                                        <div class="form-column">
                                            <!-- Total Dana Cash -->
                                            <div class="form-group">
                                                <label for="total-dana-cash">Total Dana Cash:</label>
                                                <input type="number" class="form-control" id="total-dana-cash" name="total_dana_cash" placeholder="Total Dana Cash" readonly>
                                            </div>

                                            <!-- Total Dana Elektronik -->
                                            <div class="form-group">
                                                <label for="total-dana-elektronik">Total Dana Elektronik:</label>
                                                <input type="number" class="form-control" id="total-dana-elektronik" name="total_dana_elektronik" placeholder="Total Dana Elektronik" readonly>
                                            </div>

                                            <!-- Tanggal -->
                                            <div class="form-group">
                                                <label for="tanggal-masuk">Tanggal:</label>
                                                <input type="date" class="form-control" id="tanggal-masuk" name="tanggal_masuk">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <hr>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <a href="laporankeuangan.php" class="btn btn-danger" role="button">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </div>

                            </form>
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

        <!-- Logout Modal-->
        <?php include '../layout/logout_modal.php'; ?>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../js/sweetalert-utils.js" defer></script>
        <script src="../js/sweetalert-handler.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>

        <!-- Script to calculate total cash and electronic funds -->
        <script>
            document.addEventListener('input', function() {
                var penambahanDanaCash = parseFloat(document.getElementById('penambahan-dana-cash').value) || 0;
                var danaElektronik = parseFloat(document.getElementById('dana-elektronik').value) || 0;
                var totalDanaCash = penambahanDanaCash;
                var totalDanaElektronik = danaElektronik;
                document.getElementById('total-dana-cash').value = totalDanaCash;
                document.getElementById('total-dana-elektronik').value = totalDanaElektronik;
            });
        </script>

    </body>

</html>
