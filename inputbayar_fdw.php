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

        #result {
            padding: 15px;
            border-radius: 5px;
            background: #d1ecf1;
            color: #0c5460;
        }

        /* Form layout for two columns */
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .form-column {
            flex: 1;
            min-width: 0;
            padding-right: 15px;
            padding-left: 15px;
        }

        .form-column>.form-group {
            margin-bottom: 1rem;
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
                            <h6 class="m-0 font-weight-bold text-primary">Pencatatan Pemotongan Gaji TKW</h6>
                        </div>
                        <div class="card-body">
                            <form id="salary-form" action="#" method="post" enctype="multipart/form-data">

                                <!-- Pembayaran Form Fields -->
                                <fieldset class="form-section">
                                    <h5>Informasi Pemotongan Gaji</h5>
                                    <div class="form-row">
                                        <!-- Left Column -->
                                        <div class="form-column col-md-6">
                                            <!-- Nama FDW -->
                                            <div class="form-group">
                                                <label for="employee-name">Nama TKW:</label>
                                                <input type="text" class="form-control" id="employee-name" name="employee_name" placeholder="Masukkan Nama FDW">
                                                <datalist id="employee-list">
                                                    <!-- Options will be dynamically populated with JavaScript -->
                                                </datalist>
                                            </div>

                                            <!-- Total Gaji FDW -->
                                            <div class="form-group">
                                                <label for="total-salary">Total Gaji TKW (IDR):</label>
                                                <input type="text" class="form-control" id="total-salary" name="total_salary" placeholder="Masukkan Total Gaji FDW" value="0">
                                            </div>

                                            <!-- Potongan Gaji -->
                                            <div class="form-group">
                                                <label for="salary-deduction">Potongan Gaji (IDR):</label>
                                                <input type="text" class="form-control" id="salary-deduction" name="salary_deduction" placeholder="Masukkan Potongan Gaji" value="0">
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="form-column col-md-6">
                                            <!-- Gaji Bersih -->
                                            <div class="form-group">
                                                <label for="net-salary">Gaji Bersih Setelah Potongan (IDR):</label>
                                                <input type="text" class="form-control" id="net-salary" name="net_salary" placeholder="Gaji Bersih Akan Ditampilkan" readonly>
                                            </div>

                                            <!-- Tanggal Pemotongan -->
                                            <div class="form-group">
                                                <label for="deduction-date">Tanggal Pemotongan:</label>
                                                <input type="date" class="form-control" id="deduction-date" name="deduction_date">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <hr>

                                <!-- Buttons -->
                                <div class="form-group">
                                    <a href="bayarfdw.php" class="btn btn-danger" role="button">Kembali</a>
                                    <button type="button" class="btn btn-primary" id="calculate-btn">Hitung Gaji Bersih</button>
                                    <button type="button" class="btn btn-success" id="save-btn">Simpan</button>
                                </div>

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
    <?php include 'logout_modal.php'; ?>
    <!-- Include Footer -->
    <?php include 'footer.php'; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/sweetalert-utils.js" defer></script>
    <script src="js/sweetalert-handler.js"></script>

    <script>
        function handleCurrencyInput(input) {
            let numericValue = parseInt(input.value.replace(/[^0-9]/g, ''), 10) || 0;
            if (numericValue) {
                input.value = numericValue.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                });
            } else {
                input.value = '';
            }
        }

        document.getElementById('total-salary').addEventListener('input', function() {
            handleCurrencyInput(this);
        });

        document.getElementById('salary-deduction').addEventListener('input', function() {
            handleCurrencyInput(this);
        });

        // Handle calculate button click
        document.getElementById('calculate-btn').addEventListener('click', function() {
            const employeeName = document.getElementById('employee-name').value;
            const totalSalaryStr = document.getElementById('total-salary').value;
            const salaryDeductionStr = document.getElementById('salary-deduction').value;
            const totalSalary = parseCurrency(totalSalaryStr);
            const salaryDeduction = parseCurrency(salaryDeductionStr);

            const netSalary = totalSalary - salaryDeduction;

            document.getElementById('net-salary').value = netSalary.toLocaleString('id-ID', {
                style: 'currency',
                currency: 'IDR'
            });

            const resultDiv = document.getElementById('result');
            resultDiv.style.display = 'block';
            resultDiv.innerHTML = `<strong>Nama FDW:</strong> ${employeeName}<br>
                                   <strong>Gaji Bersih Setelah Potongan:</strong> ${netSalary.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' })}<br>
                                   <strong>Tanggal Pemotongan:</strong> ${document.getElementById('deduction-date').value}`;
        });

        // Parse currency formatted strings into integer values
        function parseCurrency(value) {
            return parseInt(value.replace(/[^0-9]/g, ''), 10) || 0;
        }

        // Handle save button click
        document.getElementById('save-btn').addEventListener('click', function() {
            Swal.fire({
                icon: 'success',
                title: 'Data berhasil disimpan',
                showConfirmButton: false,
                timer: 1500
            });
        });

        // // Handle view invoice button click
        // document.getElementById('view-invoice-btn').addEventListener('click', function() {
        //     window.open('invoice.php', '_blank');
        // });
    </script>

</body>

</html>