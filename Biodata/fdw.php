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
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/fdw_singapore.css">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 150px);
            /* Adjust height based on sidebar, topbar, and footer height */
            padding: 1rem;
            text-align: center;
        }

        .center-content .welcome-text {
            font-size: 1.25rem;
            margin-top: 1rem;
        }

        .center-content .buttons {
            margin-top: 1.5rem;
        }

        .center-content .buttons .btn {
            margin: 0.5rem;
        }

        @media (max-width: 576px) {
            .center-content .welcome-text {
                font-size: 1rem;
            }

            .center-content .buttons .btn {
                font-size: 0.875rem;
                padding: 0.5rem 1rem;
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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Silahkan Pilih Negara Tujuan TKW</h6>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pilih Negara
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./fdw_singapore" id="singapore">TKW Singapore</a>
                                    <a class="dropdown-item" href="./fdw_hongkong" id="hongkong">TKW Hongkong</a>
                                    <!-- Add more dropdown items if needed -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Centered Content to display welcome and date information -->
                    <div class="center-content">
                        <div class="welcome-text">
                            <h2>Formulir Data Calon Tenaga Kerja Wanita (TKW)</h2>
                            <p>Silakan pilih negara tujuan untuk melanjutkan pengisian data.</p>
                            <p id="dateTime"></p>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include '../layout/footer.php'; ?>
            <!-- Logout Modal-->
            <?php include '../layout/logout_modal.php'; ?>

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

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            // Display current date and time
            function updateDateTime() {
                var now = new Date();
                var options = {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                };
                $('#dateTime').text(now.toLocaleDateString('id-ID', options));
            }
            updateDateTime();
            setInterval(updateDateTime, 1000); // Update every second

            // Highlight the active dropdown item based on the URL
            var currentUrl = window.location.pathname;
            if (currentUrl.includes("fdw_singapore")) {
                document.getElementById("singapore").classList.add("active");
                document.getElementById("dropdownMenuButton").innerText = "TKW Singapore";
            } else if (currentUrl.includes("fdw_hongkong")) {
                document.getElementById("hongkong").classList.add("active");
                document.getElementById("dropdownMenuButton").innerText = "TKW Hongkong";
            }
        });
    </script>

</body>

</html>