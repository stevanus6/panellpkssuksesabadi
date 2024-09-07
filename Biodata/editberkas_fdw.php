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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .hidden {
            display: none;
        }

        fieldset {
            margin-bottom: 30px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        legend {
            font-weight: bold;
            padding: 0 10px;
            border-bottom: 2px solid #007bff;
            margin-bottom: 15px;
        }

        hr.category-divider {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 15px 0;
        }

        .btn-secondary {
            margin-right: 10px;
        }

        /* Flexbox for two-column layout */
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            /* Optional: space between columns */
        }

        .form-column {
            flex: 1;
            min-width: 300px;
            /* Minimum width of columns */
        }

        .form-column label {
            display: block;
            margin-bottom: 5px;
        }

        .form-column .form-group {
            margin-bottom: 15px;
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
                    <!-- Upload Form Section -->
                    <div class="form-section">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Berkas Calon Pekerja</h6>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <!-- <fieldset>
                                <legend>Identitas PL FDW</legend>
                                <div class="form-row">
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="pl_name">Nama PL FDW</label>
                                            <input type="text" class="form-control" id="pl_name" name="pl_name">
                                        </div>
                                    </div>
                                </div>
                                <hr class="category-divider">
                            </fieldset> -->

                            <fieldset>
                                <legend>Dokumen Kesehatan</legend>
                                <div class="form-row">
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="file_up">Upload Hasil Cek UP</label>
                                            <input type="file" class="form-control-file" id="file_up" name="file_up">
                                        </div>
                                    </div>
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="fit_unfit">Keterangan FIT/UNFIT</label>
                                            <input type="text" class="form-control" id="fit_unfit" name="fit_unfit">
                                        </div>
                                    </div>
                                </div>
                                <hr class="category-divider">
                            </fieldset>

                            <fieldset>
                                <legend>Dokumen Pribadi</legend>
                                <div class="form-row">
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="file_ijazah">Upload Ijazah</label>
                                            <input type="file" class="form-control-file" id="file_ijazah" name="file_ijazah">
                                        </div>
                                        <div class="form-group">
                                            <label for="file_ktp">Upload KTP</label>
                                            <input type="file" class="form-control-file" id="file_ktp" name="file_ktp">
                                        </div>
                                    </div>
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="file_kk">Upload KK</label>
                                            <input type="file" class="form-control-file" id="file_kk" name="file_kk">
                                        </div>
                                        <div class="form-group">
                                            <label for="file_akte_kelahiran">Upload Akte Kelahiran</label>
                                            <input type="file" class="form-control-file" id="file_akte_kelahiran" name="file_akte_kelahiran">
                                        </div>
                                    </div>
                                </div>
                                <hr class="category-divider">
                            </fieldset>

                            <fieldset>
                                <legend>Dokumen Pernikahan</legend>
                                <div class="form-row">
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="file_buku_nikah">Upload Buku Nikah (Jika Sudah)</label>
                                            <input type="file" class="form-control-file" id="file_buku_nikah" name="file_buku_nikah">
                                        </div>
                                        <div class="form-group">
                                            <label for="file_akte_cerai">Upload Akte Cerai (Jika Ada)</label>
                                            <input type="file" class="form-control-file" id="file_akte_cerai" name="file_akte_cerai">
                                        </div>
                                    </div>
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="file_akte_kematian">Upload Akte Kematian (Jika Ada)</label>
                                            <input type="file" class="form-control-file" id="file_akte_kematian" name="file_akte_kematian">
                                        </div>
                                    </div>
                                </div>
                                <hr class="category-divider">
                            </fieldset>

                            <fieldset>
                                <legend>Dokumen Tambahan</legend>
                                <div class="form-row">
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="file_sertif_kompetensi">Upload Sertifikat Kompetensi</label>
                                            <input type="file" class="form-control-file" id="file_sertif_kompetensi" name="file_sertif_kompetensi">
                                        </div>
                                        <div class="form-group">
                                            <label for="file_paspor">Upload Paspor (Jika Ex)</label>
                                            <input type="file" class="form-control-file" id="file_paspor" name="file_paspor">
                                        </div>
                                    </div>
                                    <div class="form-column">
                                        <div class="form-group">
                                            <label for="file_surat_ijin_keluarga">Upload Surat Ijin Keluarga</label>
                                            <input type="file" class="form-control-file" id="file_surat_ijin_keluarga" name="file_surat_ijin_keluarga">
                                        </div>
                                        <div class="form-group">
                                            <label for="file_surat_hasil_wawancara">Upload Berkas Hasil Wawancara</label>
                                            <input type="file" class="form-control-file" id="file_surat_hasil_wawancara" name="file_surat_hasil_wawancara">
                                        </div>
                                    </div>

                                </div>
                                <hr class="category-divider">
                                <button class="btn btn-secondary" onclick="window.location.href='fdw_singapore.php';">Kembali</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->
        <!-- Include Footer -->
        <?php include '../layout/footer.php'; ?>

        <!-- Include Logout -->
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