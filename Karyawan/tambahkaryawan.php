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

        /* Ensure the submit and back buttons are displayed properly */
        .form-actions {
            text-align: right;
            margin-top: 15px;
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

                    <!-- Pendataan Karyawan Form -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Pendataan Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <form action="process_employee.php" method="post">

                                <!-- Pendataan Karyawan Form Fields -->
                                <fieldset class="form-section">
                                    <h5>Informasi Karyawan</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Nama Karyawan -->
                                            <div class="form-group">
                                                <label for="employee-name">Nama Karyawan:</label>
                                                <input type="text" class="form-control" id="employee-name" name="employee_name" placeholder="Masukkan Nama Karyawan" required>
                                            </div>

                                            <!-- Username -->
                                            <div class="form-group">
                                                <label for="username">Username:</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                                            </div>

                                            <!-- Password -->
                                            <div class="form-group">
                                                <label for="password">Password:</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                            </div>

                                            <!-- Role (Dropdown) -->
                                            <div class="form-group">
                                                <label for="role">Role:</label>
                                                <select class="form-control" id="role" name="role" required>
                                                    <option value="">Pilih Role</option>
                                                    <?php
                                                    // // Assuming you have a database connection named $conn
                                                    // include 'db_connection.php'; // Ensure the connection file is included
                                                    // $sql = "SELECT id, role_name FROM roles";
                                                    // $result = $conn->query($sql);
                                                    // if ($result->num_rows > 0) {
                                                    //     while ($row = $result->fetch_assoc()) {
                                                    //         echo "<option value='" . $row['id'] . "'>" . $row['role_name'] . "</option>";
                                                    //     }
                                                    // } else {
                                                    //     echo "<option value=''>No roles available</option>";
                                                    // }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit Button and Back Button -->
                                    <div class="form-actions d-flex justify-content-start">
                                        <a href="hr" class="btn btn-danger mr-2" role="button">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>

                                </fieldset>

                                <hr>

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

        <!-- Include Footer -->
        <?php include '../layout/footer.php'; ?>


        <!-- Logout Modal-->
        <?php include '../layout/logout_modal.php'; ?>

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

</body>

</html>