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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
        <?php include 'sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Include Topbar -->
                <?php include 'topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Pencatatan Pembayaran FDW Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pencatatan Pembayaran dari Pemotongan Gaji TKW</h6>
                        </div>
                        <div class="card-body">
                            <form action="process_financial.php" method="post" enctype="multipart/form-data">

                                <!-- Pembayaran Form Fields -->
                                <fieldset class="form-section">
                                    <h5>Informasi Pembayaran TKW</h5>
                                    <div class="form-row">
                                        <div class="form-column">
                                            <!-- Nama FDW -->
                                            <div class="form-group">
                                                <label for="fdw-name">Nama TKW:</label>
                                                <input type="text" class="form-control" id="fdw-name" name="fdw_name" placeholder="Masukkan Nama FDW">
                                            </div>

                                            <!-- Gaji FDW -->
                                            <div class="form-group">
                                                <label for="fdw-salary">Gaji TKW:</label>
                                                <input type="number" class="form-control" id="fdw-salary" name="fdw_salary" placeholder="Masukkan Gaji FDW">
                                            </div>

                                            <!-- Biaya Pendaftaran -->
                                            <div class="form-group">
                                                <label for="registration-fee">Biaya Pendaftaran:</label>
                                                <input type="number" class="form-control" id="registration-fee" name="registration_fee" placeholder="Masukkan Biaya Pendaftaran">
                                            </div>
                                        </div>
                                        <div class="form-column">
                                            <!-- Biaya Penempatan -->
                                            <div class="form-group">
                                                <label for="placement-fee">Biaya Penempatan:</label>
                                                <input type="number" class="form-control" id="placement-fee" name="placement_fee" placeholder="Masukkan Biaya Penempatan">
                                            </div>

                                            <!-- Biaya Lain-lain -->
                                            <div class="form-group">
                                                <label for="other-fees">Biaya Lain-lain:</label>
                                                <input type="number" class="form-control" id="other-fees" name="other_fees" placeholder="Masukkan Biaya Lain-lain">
                                            </div>

                                            <!-- Total Biaya -->
                                            <div class="form-group">
                                                <label for="total-fee">Total Biaya:</label>
                                                <input type="number" class="form-control" id="total-fee" name="total_fee" placeholder="Total Biaya" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <hr>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <a href="debit_fdw.php" class="btn btn-danger" role="button">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan Pembayaran</button>
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
        <?php include 'footer.php'; ?>

        <!-- Logout Modal-->
        <?php include 'logout_modal.php'; ?>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/sweetalert-utils.js" defer></script>
        <script src="js/sweetalert-handler.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

        <!-- Script to calculate total fee -->
        <script>
            document.addEventListener('input', function() {
                var fdwSalary = parseFloat(document.getElementById('fdw-salary').value) || 0;
                var registrationFee = parseFloat(document.getElementById('registration-fee').value) || 0;
                var placementFee = parseFloat(document.getElementById('placement-fee').value) || 0;
                var otherFees = parseFloat(document.getElementById('other-fees').value) || 0;
                var totalFee = fdwSalary - (registrationFee + placementFee + otherFees);
                document.getElementById('total-fee').value = totalFee;
            });
        </script>

    </body>

</html>
