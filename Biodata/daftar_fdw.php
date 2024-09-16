<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LPKS SUKSES ABADI JAYA</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


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
                <div class="container py-4">
                    <div class="row">
                        <?php
                        // Dummy data array
                        $employees = [
                            [
                                'name' => 'YUYUN NUR SAFITRI',
                                'status' => 'BELUM LENGKAP',
                                'berkas' => '14/15',
                                'image' => 'http://103.127.134.131/lpks/fixlpks/upload/berkas/foto/YUYUN.png'
                            ],
                            [
                                'name' => 'RIZKY ADITYA',
                                'status' => 'LENGKAP',
                                'berkas' => '15/15',
                                'image' => 'http://103.127.134.131/lpks/fixlpks/upload/berkas/foto/YUYUN.png'
                            ],
                            [
                                'name' => 'AYU SULISTIANINGSIH',
                                'status' => 'BELUM LENGKAP',
                                'berkas' => '1/15',
                                'image' => 'http://103.127.134.131/lpks/fixlpks/upload/berkas/foto/YUYUN.png'
                            ],
                            [
                                'name' => 'AYU SULISTIANINGSIH',
                                'status' => 'BELUM LENGKAP',
                                'berkas' => '1/15',
                                'image' => 'http://103.127.134.131/lpks/fixlpks/upload/berkas/foto/YUYUN.png'
                            ]
                        ];

                        // Loop through employees array to generate cards
                        foreach ($employees as $employee) {
                            $berkas = explode('/', $employee['berkas']);
                            $current = intval($berkas[0]);
                            $total = intval($berkas[1]);
                            $percentage = ($current / $total) * 100;

                            // Determine the progress bar color
                            $progressClass = $employee['status'] === 'LENGKAP' ? 'background-color: green;' : 'background-color: red;';

                            // Determine if buttons should be disabled
                            $isDisabled = ($employee['status'] === 'LENGKAP') ? 'disabled' : '';
                            $buttonStyle = ($employee['status'] === 'LENGKAP') ? 'background-color: gray; color: white;' : '';

                            echo '
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img src="' . $employee['image'] . '" class="card-img-top mt-3" style="width: 150px; height: 200px; display: block; margin: 0 auto; border-radius: 15px;" alt="Profile Picture">
                <div class="card-body text-center">
                    <h5 class="card-title">' . $employee['name'] . '</h5>
                    <p class="card-text">STATUS BERKAS: ' . $employee['status'] . '</p>
                    <p class="card-text">BERKAS: ' . $employee['berkas'] . '</p>
                </div>
                <div class="mx-3 text-center">
                    <div class="progress mt-2 mb-5" style="height: 20px; margin: 10px 0;">
                        <div class="progress-bar" role="progressbar" style="width: ' . $percentage . '%; ' . $progressClass . '" aria-valuenow="' . $percentage . '" aria-valuemin="0" aria-valuemax="100">' . round($percentage) . '%</div>
                    </div>
                    <a href="editdata_fdw" class="btn btn-warning w-100 mb-2" style="' . $buttonStyle . '" ' . $isDisabled . '>PERBAIKI DATA</a>
                    <a href="editberkas_fdw" class="btn btn-success w-100 mb-2" style="' . $buttonStyle . '" ' . $isDisabled . '>LENGKAPI BERKAS</a>
                    <a href="MD" class="btn btn-danger mb-5 w-100">MD</a>
                </div>
            </div>
        </div>';
                        }
                        ?>

                    </div>
                </div>
                <!-- /.container -->

            </div>
            <!-- End of Main Content -->

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

    <script>
        function toggleButtons(button) {
            const buttonContainer = button.previousElementSibling;
            const isShown = buttonContainer.style.maxHeight !== '0px';
            document.querySelectorAll('.button-container').forEach(container => {
                container.style.maxHeight = '0px';
                container.nextElementSibling.classList.add('collapsed');
            });

            buttonContainer.style.maxHeight = isShown ? '0px' : '150px';
            button.classList.toggle('collapsed', isShown);
        }
    </script>

    <!-- Include Footer -->
    <?php include '../layout/footer.php'; ?>

    <!-- Include Logout Modal -->
    <?php include '../layout/logout_modal.php'; ?>

</body>

</html>