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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .form-section {
            margin-bottom: 20px;
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

        /* Ensure the footer sticks to the bottom */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        #content-wrapper {
            flex: 1;
        }

        footer {
            background: #f1f1f1;
            padding: 20px;
            text-align: center;
        }

        #result {
            padding: 15px;
            border-radius: 5px;
            background: #d1ecf1;
            color: #0c5460;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-column {
            flex: 1;
        }

        .btn-container {
            text-align: left;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
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

                    <!-- Pembayaran Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pencatatan Pembayaran Gaji</h6>
                        </div>
                        <div class="card-body">
                            <form id="salary-form" action="#" method="post" enctype="multipart/form-data">

                                <!-- Pembayaran Form Fields -->
                                <fieldset class="form-section">
                                    <h5>Informasi Slip Gaji</h5>
                                    <div class="form-row">
                                        <!-- Nama PL (Dropdown) -->
                                        <div class="form-column">
                                            <div class="form-group">
                                                <label for="pl-name">Nama PL:</label>
                                                <select class="form-control" id="pl-name" name="pl_name">
                                                    <!-- Options will be dynamically populated with JavaScript -->
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Kasbon -->
                                        <div class="form-column">
                                            <div class="form-group">
                                                <label for="loan">Kasbon (IDR):</label>
                                                <input type="text" class="form-control" id="loan" name="loan" placeholder="Masukkan Kasbon">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gaji Harian -->
                                    <div class="form-row">
                                        <div class="form-column">
                                            <div class="form-group">
                                                <label for="daily-wage">Nominal Pembayaran PL (IDR):</label>
                                                <input type="text" class="form-control" id="daily-wage" name="daily_wage" placeholder="Masukkan Gaji Harian">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- Buttons -->
                                <div class="form-group btn-container">
                                    <a href="debit_pl.php" class="btn btn-danger">Kembali</a>
                                    <button type="button" class="btn btn-primary" id="calculate-btn">Simpan Kasbon</button>
                                </div>
                                <hr>

                                <!-- Result Display -->
                                <div class="form-group">
                                    <div id="result" class="alert alert-info" style="display: none;"></div>
                                </div>
                            </form>
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
    <!-- Include Footer -->
    <?php include '../layout/logout_modal.php'; ?>
    <?php include '../layout/footer.php'; ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Helper functions and event listeners as before
        document.addEventListener('DOMContentLoaded', function() {
            populateDropdowns(); // Dummy function for dropdown population
        });
    </script>

</body>

</html>
