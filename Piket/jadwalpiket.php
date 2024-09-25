<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LPKS SUKSES ABADI JAYA">
    <meta name="author" content="">

    <title>LPKS SUKSES ABADI JAYA</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include '../layout/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include '../layout/topbar.php'; ?>

                <!-- Page Content -->
                <div class="container py-4">
                    <div class="row">
                        <?php
                        // Dummy data array with dates for each employee
                        $employees = [
                            [
                                'name' => 'YUYUN NUR SAFITRI',
                                'schedule_date' => '2024-09-17',
                                'image' => 'http://103.127.134.131/lpks/fixlpks/upload/berkas/foto/YUYUN.png'
                            ],
                            [
                                'name' => 'RIZKY ADITYA',
                                'schedule_date' => '2024-09-18',
                                'image' => 'http://103.127.134.131/lpks/fixlpks/upload/berkas/foto/YUYUN.png'
                            ],
                            [
                                'name' => 'AYU SULISTIANINGSIH',
                                'schedule_date' => '2024-09-19',
                                'image' => 'http://103.127.134.131/lpks/fixlpks/upload/berkas/foto/YUYUN.png'
                            ],
                            [
                                'name' => 'AYU SULISTIANINGSIH',
                                'schedule_date' => '2024-09-20',
                                'image' => 'http://103.127.134.131/lpks/fixlpks/upload/berkas/foto/YUYUN.png'
                            ]
                        ];

                        // Loop through employees array to generate cards
                        foreach ($employees as $employee) {
                            echo '
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img src="' . $employee['image'] . '" class="card-img-top mt-3" style="width: 150px; height: 200px; display: block; margin: 0 auto; border-radius: 15px;" alt="Profile Picture">
                <div class="card-body text-center">
                    <h5 class="card-title">' . $employee['name'] . '</h5>
                    <p class="card-text" style="position: absolute; top: 10px; right: 10px;">' . $employee['schedule_date'] . '</p>
                </div>
                <div class="mx-3 text-center">
                    <a href="lihat_jadwal.php?name=' . urlencode($employee['name']) . '" class="btn btn-primary w-100 mb-5">View Full Schedule</a>
                </div>
            </div>
        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include '../layout/footer.php'; ?>
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

    <!-- Sidebar JavaScript initialization -->
    <script>
        $(document).ready(function() {
            // Fix sidebar navigation issue
            $('.sidebar .nav-item').on('click', function() {
                $('.sidebar .nav-item').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

    <!-- Include Logout Modal -->
    <?php include '../layout/logout_modal.php'; ?>

</body>

</html>