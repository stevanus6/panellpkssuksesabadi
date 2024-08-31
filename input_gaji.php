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
                                        <!-- Left Column -->
                                        <div class="form-column col-md-6">
                                            <!-- Nama Karyawan -->
                                            <div class="form-group">
                                                <label for="employee-name">Nama Karyawan:</label>
                                                <input type="text" class="form-control" id="employee-name" name="employee_name" placeholder="Masukkan Nama Karyawan">
                                                <datalist id="employee-list">
                                                    <!-- Options will be dynamically populated with JavaScript -->
                                                </datalist>
                                            </div>

                                            <!-- Hari Masuk Kerja -->
                                            <div class="form-group">
                                                <label for="work-days">Hari Masuk Kerja:</label>
                                                <input type="number" class="form-control" id="work-days" name="work_days" placeholder="Masukkan Hari Masuk Kerja">
                                            </div>

                                            <!-- Hari Ijin -->
                                            <div class="form-group">
                                                <label for="leave-days">Hari Ijin:</label>
                                                <input type="number" class="form-control" id="leave-days" name="leave_days" placeholder="Masukkan Hari Ijin">
                                            </div>
                                        </div>

                                        <!-- Right Column -->
                                        <div class="form-column col-md-6">
                                            <!-- Cuti -->
                                            <div class="form-group">
                                                <label for="vacation-days">Cuti:</label>
                                                <input type="number" class="form-control" id="vacation-days" name="vacation_days" placeholder="Masukkan Cuti">
                                            </div>

                                            <!-- Tanpa Keterangan -->
                                            <div class="form-group">
                                                <label for="unexcused-days">Tanpa Keterangan:</label>
                                                <input type="number" class="form-control" id="unexcused-days" name="unexcused_days" placeholder="Masukkan Tanpa Keterangan">
                                            </div>

                                            <!-- Gaji Harian -->
                                            <div class="form-group">
                                                <label for="daily-wage">Nominal Gaji Harian (IDR):</label>
                                                <input type="text" class="form-control" id="daily-wage" name="daily_wage" placeholder="Masukkan Gaji Harian">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <hr>

                                <!-- Buttons -->
                                <div class="form-group">
                                    <a href="bayargaji.php" class="btn btn-danger" role="button">Kembali</a>
                                    <button type="button" class="btn btn-primary" id="calculate-btn">Hitung Gaji</button>
                                    <button type="button" class="btn btn-info" id="view-invoice-btn">Lihat Invoice</button>
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
    <script src="js/sweetalert-utils.js" defer></script>
    <script src="js/sweetalert-handler.js"></script>

    <!-- <script>
        // // Helper function to parse currency input and return a number
        // function parseCurrency(value) {
        //     return parseFloat(value.replace(/[^0-9.,]/g, '').replace(',', '.')) || 0;
        // }

        // // Helper function to format number as currency
        // function formatCurrency(value) {
        //     return new Intl.NumberFormat('id-ID', {
        //         style: 'currency',
        //         currency: 'IDR',
        //         minimumFractionDigits: 0,
        //         maximumFractionDigits: 0
        //     }).format(value);
        // }

        // // Event listener for input field
        // document.getElementById('daily-wage').addEventListener('input', function() {
        //     let inputValue = this.value;
        //     let numericValue = parseCurrency(inputValue);
        //     let formattedValue = formatCurrency(numericValue);
        //     this.value = formattedValue;
        // });

        // // Handle calculate button click
        // document.getElementById('calculate-btn').addEventListener('click', function() {
        //     const employeeName = document.getElementById('employee-name').value;
        //     const workDays = parseInt(document.getElementById('work-days').value) || 0;
        //     const leaveDays = parseInt(document.getElementById('leave-days').value) || 0;
        //     const vacationDays = parseInt(document.getElementById('vacation-days').value) || 0;
        //     const unexcusedDays = parseInt(document.getElementById('unexcused-days').value) || 0;
        //     const dailyWageStr = document.getElementById('daily-wage').value;
        //     const dailyWage = parseCurrency(dailyWageStr);

        //     // Calculate salary
        //     const totalDays = workDays - (leaveDays + vacationDays + unexcusedDays);
        //     const totalSalary = totalDays * dailyWage;

        //     // Display result
        //     const resultDiv = document.getElementById('result');
        //     resultDiv.style.display = 'block';
        //     resultDiv.innerHTML = `<strong>Nama Karyawan:</strong> ${employeeName}<br>
        //                            <strong>Total Gaji Diterima:</strong> ${formatCurrency(totalSalary)}<br>
        //                            <strong>Nominal Gaji Harian:</strong> ${formatCurrency(dailyWage)}<br>
        //                            <strong>Hari Kerja yang Dihitung:</strong> ${totalDays}`;

        //     // Store the result in a global variable for further use
        //     window.invoiceData = {
        //         employeeName: employeeName,
        //         totalSalary: totalSalary,
        //         dailyWage: dailyWage,
        //         totalDays: totalDays
        //     };
        // });

        // // Handle view invoice button click
        // document.getElementById('view-invoice-btn').addEventListener('click', function() {
        //     if (!window.invoiceData) {
        //         Swal.fire('Please calculate the salary first!');
        //         return;
        //     }

        //     const {
        //         employeeName,
        //         totalSalary,
        //         dailyWage,
        //         totalDays
        //     } = window.invoiceData;
        //     const invoiceWindow = window.open('', '_blank');
        //     invoiceWindow.document.write(`
        //         <html>
        //         <head>
        //             <title>LPKS SUKSES ABADI JAYA</title>
        //             <style>
        //                 body { font-family: Arial, sans-serif; }
        //                 .invoice { margin: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        //                 .invoice h1 { text-align: center; }
        //                 .invoice-table { width: 100%; border-collapse: collapse; }
        //                 .invoice-table th, .invoice-table td { border: 1px solid #ddd; padding: 8px; }
        //                 .invoice-table th { background-color: #f2f2f2; }
        //             </style>
        //         </head>
        //         <body>
        //             <div class="invoice">
        //                 <h1>Invoice</h1>
        //                 <table class="invoice-table">
        //                     <tr>
        //                         <th>Nama Karyawan</th>
        //                         <td>${employeeName}</td>
        //                     </tr>
        //                     <tr>
        //                         <th>Total Gaji Diterima</th>
        //                         <td>${formatCurrency(totalSalary)}</td>
        //                     </tr>
        //                     <tr>
        //                         <th>Nominal Gaji Harian</th>
        //                         <td>${formatCurrency(dailyWage)}</td>
        //                     </tr>
        //                     <tr>
        //                         <th>Hari Kerja yang Dihitung</th>
        //                         <td>${totalDays}</td>
        //                     </tr>
        //                 </table>
        //             </div>
        //         </body>
        //         </html>
        //     `);
        // });
        <script> -->
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

    // Module to manage invoice data
    const invoiceModule = (function() {
        let invoiceData = null;
        return {
            setInvoiceData: function(data) {
                invoiceData = data;
            },
            getInvoiceData: function() {
                return invoiceData;
            }
        };
    })();

    // Ensure the DOM is fully loaded before adding event listeners
    document.addEventListener('DOMContentLoaded', function() {
        const dailyWageInput = document.getElementById('daily-wage');

        // Store the raw input to handle continuous typing
        dailyWageInput.addEventListener('input', function() {
            let numericValue = parseCurrency(this.value.replace(/\./g, '')); // Remove dots before parsing
            this.setAttribute('data-raw', numericValue); // Store the raw numeric value
            this.value = numericValue.toLocaleString('id-ID'); // Show the raw input with thousand separators
        });

        // Format the value as IDR when the input loses focus
        dailyWageInput.addEventListener('blur', function() {
            let numericValue = parseFloat(this.getAttribute('data-raw'));
            let formattedValue = formatCurrency(numericValue);
            this.value = formattedValue;
        });

        // Handle calculate button click
        document.getElementById('calculate-btn').addEventListener('click', function() {
            const employeeName = document.getElementById('employee-name').value;
            const workDays = parseInt(document.getElementById('work-days').value) || 0;
            const leaveDays = parseInt(document.getElementById('leave-days').value) || 0;
            const vacationDays = parseInt(document.getElementById('vacation-days').value) || 0;
            const unexcusedDays = parseInt(document.getElementById('unexcused-days').value) || 0;
            const dailyWageStr = document.getElementById('daily-wage').getAttribute('data-raw');
            const dailyWage = parseFloat(dailyWageStr) || 0; // Parse raw input as float

            // Calculate salary
            const totalDays = Math.max(0, workDays - (leaveDays + vacationDays + unexcusedDays));
            const totalSalary = totalDays * dailyWage;

            // Display result
            const resultDiv = document.getElementById('result');
            resultDiv.style.display = 'block';
            resultDiv.innerHTML = `<strong>Nama Karyawan:</strong> ${employeeName}<br>
                                   <strong>Total Gaji Diterima:</strong> ${formatCurrency(totalSalary)}<br>
                                   <strong>Nominal Gaji Harian:</strong> ${formatCurrency(dailyWage)}<br>
                                   <strong>Hari Kerja yang Dihitung:</strong> ${totalDays}`;

            // Store the result in the module
            invoiceModule.setInvoiceData({
                employeeName: employeeName,
                totalSalary: totalSalary,
                dailyWage: dailyWage,
                totalDays: totalDays
            });
        });

        // Handle view invoice button click
        document.getElementById('view-invoice-btn').addEventListener('click', function() {
            const invoiceData = invoiceModule.getInvoiceData();
            if (!invoiceData) {
                Swal.fire('Please calculate the salary first!');
                return;
            }

            const {
                employeeName,
                totalSalary,
                dailyWage,
                totalDays
            } = invoiceData;

            const invoiceWindow = window.open('', '_blank');
            invoiceWindow.document.open(); // Ensure the document is open
            invoiceWindow.document.write(`
                <html>
                <head>
                    <title>LPKS SUKSES ABADI JAYA</title>
                    <style>
                        body { font-family: Arial, sans-serif; }
                        .invoice { margin: 20px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
                        .invoice h1 { text-align: center; }
                        .invoice-table { width: 100%; border-collapse: collapse; }
                        .invoice-table th, .invoice-table td { border: 1px solid #ddd; padding: 8px; }
                        .invoice-table th { background-color: #f2f2f2; }
                    </style>
                </head>
                <body>
                    <div class="invoice">
                        <h1>Invoice</h1>
                        <table class="invoice-table">
                            <tr>
                                <th>Nama Karyawan</th>
                                <td>${employeeName}</td>
                            </tr>
                            <tr>
                                <th>Total Gaji Diterima</th>
                                <td>${formatCurrency(totalSalary)}</td>
                            </tr>
                            <tr>
                                <th>Nominal Gaji Harian</th>
                                <td>${formatCurrency(dailyWage)}</td>
                            </tr>
                            <tr>
                                <th>Hari Kerja yang Dihitung</th>
                                <td>${totalDays}</td>
                            </tr>
                        </table>
                    </div>
                </body>
                </html>
            `);
            invoiceWindow.document.close(); // Ensure the document is closed
        });
    });
</script>

</body>

</html>