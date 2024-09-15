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
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 150px); /* Adjust height based on sidebar, topbar, and footer height */
            padding: 1rem;
            text-align: center;
        }
        .center-content img {
            max-width: 100%;
            height: auto;
            max-height: 300px; /* Adjust as needed */
        }
        .center-content .welcome-text {
            font-size: 1.25rem; /* Adjust font size for better responsiveness */
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
                font-size: 1rem; /* Smaller font size for small screens */
            }
            .center-content .buttons .btn {
                font-size: 0.875rem; /* Adjust button font size for small screens */
                padding: 0.5rem 1rem;
            }
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Include Sidebar -->
        <?php 
            if (str_contains($_SERVER['SCRIPT_NAME'],'index.php')){
                include './layout/sidebar.php';
            }
            else{
                include '../layout/sidebar.php';
            }
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Include Topbar -->
                <?php 
            if (str_contains($_SERVER['SCRIPT_NAME'],'index.php')){
                include './layout/topbar.php';
            }
            else{
                include '../layout/topbar.php';
            }
        ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Centered Content -->
                    <div class="center-content">
                        <img src="img/undraw_website.svg" alt="Welcome Image">
                        <div class="welcome-text">
                            <h2>Hallo, Asep</h2>
                            <p>Selamat datang di panel LPKS Sukses Abadi Jaya. Semoga harimu menyenangkan.</p>
                            <p id="dateTime"></p>
                        </div>
                        <div class="buttons">
                            <a href="biodata/fdw_singapore" class="btn btn-primary">TKW Singapore</a>
                            <a href="biodata/fdw_hongkong" class="btn btn-secondary">TKW Hongkong</a>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php 
            if (str_contains($_SERVER['SCRIPT_NAME'],'index.php')){
                include './layout/footer.php';
            }
            else{
                include '../layout/footer.php';
            }
        ?>

            <!-- Logout -->
            <?php 
            if (str_contains($_SERVER['SCRIPT_NAME'],'index.php')){
                include './layout/logout_modal.php';
            }
            else{
                include '../layout/logout_modal.php';
            }
        ?>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function() {
            // Display current date and time
            function updateDateTime() {
                var now = new Date();
                var options = { year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
                $('#dateTime').text(now.toLocaleDateString('id-ID', options));
            }
            updateDateTime();
            setInterval(updateDateTime, 1000); // Update every second
        });
    </script>

</body>

</html>
