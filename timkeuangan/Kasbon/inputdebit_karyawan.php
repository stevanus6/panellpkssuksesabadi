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

        .row {
            display: flex;
            justify-content: space-between;
        }

        .col-md-6 {
            width: 48%;
        }

        .form-section .form-group {
            margin-bottom: 1rem;
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

                    <!-- Pencatatan Hutang Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pencatatan Hutang Karyawan ke Perusahaan</h6>
                        </div>
                        <div class="card-body">
                            <form action="process_debt.php" method="post" enctype="multipart/form-data">

                                <!-- Hutang Form Fields -->
                                <fieldset class="form-section">
                                    <h5>Informasi Hutang</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- ID Staff -->
                                            <div class="form-group">
                                                <label for="staff-id">ID Staff:</label>
                                                <input type="text" class="form-control" id="staff-id" name="staff_id" placeholder="Masukkan ID Staff">
                                            </div>

                                            <!-- Nama Staff -->
                                            <div class="form-group">
                                                <label for="staff-name">Nama Staff:</label>
                                                <input type="text" class="form-control" id="staff-name" name="staff_name" placeholder="Masukkan Nama Staff">
                                            </div>

                                            <!-- Jumlah Hutang -->
                                            <div class="form-group">
                                                <label for="debt-amount">Jumlah Hutang:</label>
                                                <input type="number" class="form-control" id="debt-amount" name="debt_amount" placeholder="Masukkan Jumlah Hutang">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Status Pembayaran -->
                                            <div class="form-group">
                                                <label for="payment-status">Status Hutang:</label>
                                                <select class="form-control" id="payment-status" name="payment_status">
                                                    <option value="">Pilih Status</option>
                                                    <option value="paid">Lunas</option>
                                                    <option value="unpaid">Belum Lunas</option>
                                                </select>
                                            </div>

                                            <!-- Keterangan Pembayaran -->
                                            <div class="form-group">
                                                <label for="payment-description">Keterangan Hutang:</label>
                                                <textarea class="form-control" id="payment-description" name="payment_description" rows="3" placeholder="Masukkan Keterangan Hutang"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <hr>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <a href="debit_karyawan" class="btn btn-danger" role="button">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan Hutang</button>
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
      <!-- Include Footer -->
      <?php include '../layout/footer.php'; ?>

<!-- Logout Modal-->
<?php include '../layout/logout_modal.php'; ?>
    </body>

</html>