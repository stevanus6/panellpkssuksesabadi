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

                    <!-- Pembayaran Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pencatatan Pembayaran ke PL</h6>
                        </div>
                        <div class="card-body">
                            <form id="payment-form" action="process_payment.php" method="post" enctype="multipart/form-data">

                                <!-- Hidden field for record ID -->
                                <input type="hidden" id="record-id" name="record_id" value="<?php echo isset($record_id) ? htmlspecialchars($record_id) : ''; ?>">

                                <!-- Pembayaran Form Fields -->
                                <fieldset class="form-section">
                                    <h5>Informasi Pembayaran</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Nama PL -->
                                            <div class="form-group">
                                                <label for="pl-id">Nama PL:</label>
                                                <input type="text" class="form-control" id="pl-id" name="pl_id" placeholder="Masukkan Nama PL" list="pl-list" <?php echo isset($is_edit) && $is_edit ? 'disabled' : ''; ?>>
                                                <datalist id="pl-list">
                                                    <!-- Options will be dynamically populated with JavaScript -->
                                                </datalist>
                                            </div>

                                            <!-- Nama Agency Pengirim -->
                                            <div class="form-group">
                                                <label for="agency-name">Nama Agency Pengirim:</label>
                                                <input type="text" class="form-control" id="agency-name" name="agency_name" placeholder="Masukkan Nama Agency Pengirim" <?php echo isset($is_edit) && $is_edit ? 'disabled' : ''; ?>>
                                            </div>

                                            <!-- Jumlah Dibayarkan -->
                                            <div class="form-group">
                                                <label for="amount-paid">Jumlah Dibayarkan:</label>
                                                <input type="number" class="form-control" id="amount-paid" name="amount_paid" placeholder="Masukkan Jumlah Dibayarkan" <?php echo isset($is_edit) && $is_edit ? 'disabled' : ''; ?>>
                                            </div>

                                            <!-- Status Pembayaran -->
                                            <div class="form-group">
                                                <label for="payment-status">Status Pembayaran:</label>
                                                <select class="form-control" id="payment-status" name="payment_status">
                                                    <option value="" disabled selected>Pilih Status Pembayaran</option>
                                                    <option value="Sudah Dibayarkan" <?php echo isset($payment_status) && $payment_status == 'Sudah Dibayarkan' ? 'selected' : ''; ?>>Sudah Dibayarkan</option>
                                                    <option value="Kasbon" <?php echo isset($payment_status) && $payment_status == 'Kasbon' ? 'selected' : ''; ?>>Kasbon</option>
                                                    <option value="Belum Dibayarkan" <?php echo isset($payment_status) && $payment_status == 'Belum Dibayarkan' ? 'selected' : ''; ?>>Belum Dibayarkan</option>
                                                </select>
                                            </div>

                                            <!-- Upload Document -->
                                            <div class="form-group">
                                                <label for="upload-document">Upload Bukti Dokumen:</label>
                                                <input type="file" class="form-control-file" id="upload-document" name="upload_document" <?php echo isset($is_edit) && $is_edit ? 'disabled' : ''; ?>>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <hr>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" <?php echo isset($is_edit) && $is_edit ? 'disabled' : ''; ?>>Simpan Pembayaran</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Include Footer -->
        <?php include 'footer.php'; ?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

    <!-- Logout Modal-->
    <?php include 'logout_modal.php'; ?>

    <!-- JavaScript to handle disabling form fields -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if we are in edit mode (You should set this variable based on your backend logic)
            var isEdit = <?php echo isset($is_edit) && $is_edit ? 'true' : 'false'; ?>;
            
            if (isEdit) {
                document.querySelectorAll('#payment-form input, #payment-form select').forEach(function(element) {
                    if (element.id !== 'payment-status') {
                        element.disabled = true;
                    }
                });
            }
        });
    </script>

</body>

</html>
