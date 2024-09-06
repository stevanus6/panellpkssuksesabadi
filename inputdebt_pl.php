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
                            <h6 class="m-0 font-weight-bold text-primary">Pencatatan Pembayaran Gaji</h6>
                        </div>
                        <div class="card-body">
                            <form id="salary-form" action="#" method="post" enctype="multipart/form-data">

                                <!-- Pembayaran Form Fields -->
                                <fieldset class="form-section">
                                    <h5>Informasi Slip Gaji</h5>
                                    <div class="form-row">
                                            <!-- Nama PL (Dropdown) -->
                                            <div class="form-group">
                                                <label for="pl-name">Nama PL:</label>
                                                <select class="form-control" id="pl-name" name="pl_name">
                                                    <!-- Options will be dynamically populated with JavaScript -->
                                                </select>
                                            </div>

                                            <!-- Kasbon -->
                                            <div class="form-group">
                                                <label for="loan">Kasbon (IDR):</label>
                                                <input type="text" class="form-control" id="loan" name="loan" placeholder="Masukkan Kasbon">
                                            </div>
                                        </div>

                                            <!-- Gaji Harian -->
                                            <div class="form-group">
                                                <label for="daily-wage">Nominal Pembayaran PL (IDR):</label>
                                                <input type="text" class="form-control" id="daily-wage" name="daily_wage" placeholder="Masukkan Gaji Harian">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group">
                                    <a href="debit_pl.php" class="btn btn-danger" role="button">Kembali</a>
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
    <script src="js/sweetalert-utils.js" defer></script>
    <script src="js/sweetalert-handler.js"></script>

    <script>
    // Helper function to parse currency input and return a number
    function parseCurrency(value) {
        return parseFloat(value.replace(/[^0-9.,]/g, '').replace(',', '.')) || 0;
    }

    // Helper function to format number as currency (IDR)
    function formatCurrency(value) {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        }).format(value);
    }

    // Dummy data for employees and PL names (Replace with actual data fetching)
    const employees = ['John Doe', 'Jane Smith', 'Alice Johnson'];
    const plNames = ['PL 1', 'PL 2', 'PL 3'];

    // Populate dropdowns with data
    function populateDropdowns() {
        const plDropdown = document.getElementById('pl-name');
        const employeeList = document.getElementById('employee-list');

        plNames.forEach(name => {
            const option = document.createElement('option');
            option.value = name;
            option.textContent = name;
            plDropdown.appendChild(option);
        });

        employees.forEach(name => {
            const option = document.createElement('option');
            option.value = name;
            employeeList.appendChild(option);
        });
    }

    // Event listener for form inputs
    document.addEventListener('DOMContentLoaded', function() {
        const dailyWageInput = document.getElementById('daily-wage');
        const loanInput = document.getElementById('loan');

        // Store the raw input to handle continuous typing
        dailyWageInput.addEventListener('input', function() {
            let numericValue = parseCurrency(this.value.replace(/\./g, '')); // Remove dots before parsing
            this.setAttribute('data-raw', numericValue); // Store the raw numeric value
            this.value = numericValue.toLocaleString('id-ID'); // Show the raw input with thousand separators
        });

        loanInput.addEventListener('input', function() {
            let numericValue = parseCurrency(this.value.replace(/\./g, '')); // Remove dots before parsing
            this.setAttribute('data-raw', numericValue); // Store the raw numeric value
            this.value = numericValue.toLocaleString('id-ID'); // Show the raw input with thousand separators
        });

        // Format the value as IDR when the input loses focus
        dailyWageInput.addEventListener('blur', function() {
            let numericValue = parseFloat(this.getAttribute('data-raw'));
            this.value = formatCurrency(numericValue);
        });

        loanInput.addEventListener('blur', function() {
            let numericValue = parseFloat(this.getAttribute('data-raw'));
            this.value = formatCurrency(numericValue);
        });

        // Handle calculate button click
        document.getElementById('calculate-btn').addEventListener('click', function() {
            const employeeName = document.getElementById('employee-name').value;
            const plName = document.getElementById('pl-name').value;
            const workDays = parseInt(document.getElementById('work-days').value) || 0;
            const leaveDays = parseInt(document.getElementById('leave-days').value) || 0;
            const vacationDays = parseInt(document.getElementById('vacation-days').value) || 0;
            const unexcusedDays = parseInt(document.getElementById('unexcused-days').value) || 0;
            const dailyWageStr = document.getElementById('daily-wage').getAttribute('data-raw');
            const loanStr = document.getElementById('loan').getAttribute('data-raw');
            const dailyWage = parseFloat(dailyWageStr) || 0;
            const loan = parseFloat(loanStr) || 0;

            // Calculate salary
            const totalDays = Math.max(0, workDays - (leaveDays + vacationDays + unexcusedDays));
            const totalSalary = totalDays * dailyWage;
            const netSalary = totalSalary - loan;


            // Store the result in the module
            invoiceModule.setInvoiceData({
                employeeName: employeeName,
                plName: plName,
                totalSalary: totalSalary,
                loan: loan,
                netSalary: netSalary,
                dailyWage: dailyWage,
                totalDays: totalDays
            });
        });

        // Populate dropdowns on page load
        populateDropdowns();
    });
    </script>
</body>

</html>
