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
    <link href="../css/fdw_hongkong.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
       
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
                            <h6 class="m-0 font-weight-bold text-primary">Biodata Diri TKW Hongkong</h6>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pilih Negara
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="./fdw_singapore" id="singapore">TKW Singapore</a>
                                    <a class="dropdown-item" href="./fdw_hongkong" id="hongkong">TKW Hongkong</a>
                                    <!-- Tambahkan item dropdown lainnya jika diperlukan -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="process_biodata.php" method="post" enctype="multipart/form-data">

                        <!-- Singapore Form -->
                        <div id="singapore-form">
                            <!-- Informasi Pribadi -->
                            <fieldset class="form-section">
                                <fieldset>
                                    <!-- <legend>Identitas PL FDW</legend> -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="pl_name">Nama PL TKW</label>
                                            <select class="form-control" id="pl_name" name="pl_name" aria-label="Search and select a name">
                                                <option value="">Select a name...</option>
                                            </select>
                                        </div>
                                    </div>
                        </div>
                        <fieldset class="form-section">
                            <h5>1. Informasi Pribadi</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Nama -->
                                    <div class="form-group">
                                        <label for="name">Nama:</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap Calon TKW">
                                    </div>

                                    <!-- Kebangsaan -->
                                    <div class="form-group">
                                        <label for="nationality">Kebangsaan:</label>
                                        <input type="text" class="form-control" id="nationality" name="nationality" value="INDONESIA" readonly>
                                    </div>

                                    <!-- Umur -->
                                    <div class="form-group">
                                        <label for="age">Umur:</label>
                                        <input type="number" class="form-control" id="age" name="age" placeholder="Masukkan umur Calon TKW">
                                    </div>

                                    <!-- Tanggal/Bulan/Tahun Lahir -->
                                    <div class="form-group">
                                        <label for="dob">Tanggal/Bulan/Tahun Lahir:</label>
                                        <input type="date" class="form-control" id="dob" name="dob">
                                    </div>

                                    <!-- Tempat Lahir -->
                                    <div class="form-group">
                                        <label for="pob">Tempat Lahir:</label>
                                        <input type="text" class="form-control" id="pob" name="pob" placeholder="Masukkan tempat lahir Calon TKW">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Tinggi -->
                                    <div class="form-group">
                                        <label for="height">Tinggi (cm):</label>
                                        <input type="number" class="form-control" id="height" name="height" placeholder="Masukkan tinggi badan Calon TKW">
                                    </div>

                                    <!-- Berat -->
                                    <div class="form-group">
                                        <label for="weight">Berat (kg):</label>
                                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Masukkan berat badan Calon TKW">
                                    </div>

                                    <!-- Status -->
                                    <div class="form-group">
                                        <label for="status">Status:</label>
                                        <select class="form-control" id="status" name="status">
                                            <option value="" disabled selected>Pilih Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="JCalon TKW/Duda">JCalon TKW/Duda</option>
                                        </select>
                                    </div>

                                    <!-- Agama -->
                                    <div class="form-group">
                                        <label for="religion">Agama:</label>
                                        <select class="form-control" id="religion" name="religion">
                                            <option value="" disabled selected>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <!-- Nomor HP -->
                                    <div class="form-group">
                                        <label for="contact">Nomor HP:</label>
                                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Masukkan nomor HP Calon TKW">
                                    </div>
                                    <!-- Alamat -->
                                    <div class="form-group">
                                        <label for="address">Alamat:</label>
                                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Masukkan alamat lengkap Calon TKW"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <hr>
                        <fieldset class="form-section">
                            <h5>2. Informasi Keluarga</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Nama Ayah -->
                                    <div class="form-group">
                                        <label for="father-name">Nama Ayah:</label>
                                        <input type="text" class="form-control" id="father-name" name="father_name" placeholder="Masukkan nama ayah Calon TKW">
                                    </div>

                                    <!-- Pekerjaan Ayah -->
                                    <div class="form-group">
                                        <label for="father-job">Pekerjaan Ayah:</label>
                                        <input type="text" class="form-control" id="father-job" name="father_job" placeholder="Masukkan pekerjaan ayah Calon TKW">
                                    </div>

                                    <!-- Umur Ayah -->
                                    <div class="form-group">
                                        <label for="father-age">Umur Ayah:</label>
                                        <input type="number" class="form-control" id="father-age" name="father_age" placeholder="Masukkan umur ayah Calon TKW">
                                    </div>

                                    <!-- Nama Ibu -->
                                    <div class="form-group">
                                        <label for="mother-name">Nama Ibu:</label>
                                        <input type="text" class="form-control" id="mother-name" name="mother_name" placeholder="Masukkan nama ibu Calon TKW">
                                    </div>

                                    <!-- Pekerjaan Ibu -->
                                    <div class="form-group">
                                        <label for="mother-job">Pekerjaan Ibu:</label>
                                        <input type="text" class="form-control" id="mother-job" name="mother_job" placeholder="Masukkan pekerjaan ibu Calon TKW">
                                    </div>

                                    <!-- Umur Ibu -->
                                    <div class="form-group">
                                        <label for="mother-age">Umur Ibu:</label>
                                        <input type="number" class="form-control" id="mother-age" name="mother_age" placeholder="Masukkan umur ibu Calon TKW">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Jumlah Saudara -->
                                    <div class="form-group">
                                        <label for="siblings">Jumlah Saudara:</label>
                                        <input type="number" class="form-control" id="siblings" name="siblings" placeholder="Masukkan jumlah saudara Calon TKW">
                                    </div>

                                    <!-- Status Keluarga -->
                                    <div class="form-group">
                                        <label for="family-status">Status Keluarga:</label>
                                        <select class="form-control" id="family-status" name="family_status">
                                            <option value="" disabled selected>Pilih Status Keluarga</option>
                                            <option value="Lengkap">Lengkap</option>
                                            <option value="Kurang Lengkap">Kurang Lengkap</option>
                                            <option value="Berkebutuhan Khusus">Berkebutuhan Khusus</option>
                                        </select>
                                    </div>

                                    <!-- Alamat Keluarga -->
                                    <div class="form-group">
                                        <label for="family-address">Alamat Keluarga:</label>
                                        <textarea class="form-control" id="family-address" name="family_address" rows="3" placeholder="Masukkan alamat keluarga Calon TKW"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <hr>
                        <fieldset class="form-section">
                            <h5>3. Riwayat Pendidikan</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Pendidikan SD -->
                                    <div class="form-group">
                                        <label for="education_primary">SD:</label>
                                        <input type="text" class="form-control" id="education_primary" name="education_primary" placeholder="Nama Sekolah Dasar">
                                    </div>
                                    <div class="form-group">
                                        <label for="education_primary_location">Lokasi Sekolah SD:</label>
                                        <input type="text" class="form-control" id="education_primary_location" name="education_primary_location" placeholder="Lokasi Sekolah Dasar">
                                    </div>
                                    <div class="form-group">
                                        <label for="education_primary_year">Tahun Lulus SD:</label>
                                        <input type="number" class="form-control" id="education_primary_year" name="education_primary_year" placeholder="Tahun Lulus">
                                    </div>

                                    <!-- Pendidikan SMP -->
                                    <div class="form-group">
                                        <label for="education_secondary">SMP:</label>
                                        <input type="text" class="form-control" id="education_secondary" name="education_secondary" placeholder="Nama Sekolah Menengah Pertama">
                                    </div>
                                    <div class="form-group">
                                        <label for="education_secondary_location">Lokasi Sekolah SMP:</label>
                                        <input type="text" class="form-control" id="education_secondary_location" name="education_secondary_location" placeholder="Lokasi Sekolah Menengah Pertama">
                                    </div>
                                    <div class="form-group">
                                        <label for="education_secondary_year">Tahun Lulus SMP:</label>
                                        <input type="number" class="form-control" id="education_secondary_year" name="education_secondary_year" placeholder="Tahun Lulus">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Pendidikan SMA -->
                                    <div class="form-group">
                                        <label for="education_high">SMA:</label>
                                        <input type="text" class="form-control" id="education_high" name="education_high" placeholder="Nama Sekolah Menengah Atas">
                                    </div>
                                    <div class="form-group">
                                        <label for="education_high_location">Lokasi Sekolah SMA:</label>
                                        <input type="text" class="form-control" id="education_high_location" name="education_high_location" placeholder="Lokasi Sekolah Menengah Atas">
                                    </div>
                                    <div class="form-group">
                                        <label for="education_high_year">Tahun Lulus SMA:</label>
                                        <input type="number" class="form-control" id="education_high_year" name="education_high_year" placeholder="Tahun Lulus">
                                    </div>

                                    <!-- Pendidikan Perguruan Tinggi -->
                                    <div class="form-group">
                                        <label for="education_college">Perguruan Tinggi:</label>
                                        <input type="text" class="form-control" id="education_college" name="education_college" placeholder="Nama Perguruan Tinggi (Opsional)">
                                    </div>
                                    <div class="form-group">
                                        <label for="education_college_location">Lokasi Perguruan Tinggi:</label>
                                        <input type="text" class="form-control" id="education_college_location" name="education_college_location" placeholder="Lokasi Perguruan Tinggi (Opsional)">
                                    </div>
                                    <div class="form-group">
                                        <label for="education_college_year">Tahun Lulus Perguruan Tinggi:</label>
                                        <input type="number" class="form-control" id="education_college_year" name="education_college_year" placeholder="Tahun Lulus (Opsional)">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <hr>

                        <fieldset class="form-section">
                            <h5>4. Pengalaman Kerja</h5>

                            <!-- Pengalaman Kerja Detail -->
                            <div id="work-experience-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Majikan Pertama -->
                                        <h5>Majikan Pertama</h5>
                                        <div class="form-group">
                                            <label for="first_employer">Nama Majikan:</label>
                                            <input type="text" class="form-control" id="first_employer" name="first_employer" placeholder="Nama Majikan Pertama">
                                        </div>
                                        <div class="form-group">
                                            <label for="first_employer_period">Periode Tahun Kerja:</label>
                                            <input type="text" class="form-control" id="first_employer_period" name="first_employer_period" placeholder="Periode Kerja">
                                        </div>
                                        <div class="form-group">
                                            <label for="first_employer_reason">Alasan Keluar:</label>
                                            <input type="text" class="form-control" id="first_employer_reason" name="first_employer_reason" placeholder="Alasan Keluar">
                                        </div>
                                        <div class="form-group">
                                            <label for="first_employer_country">Negara:</label>
                                            <input type="text" class="form-control" id="first_employer_country" name="first_employer_country" placeholder="Negara Kerja">
                                        </div>
                                        <div class="form-group">
                                            <label for="first_employer_info">Keterangan Kerja:</label>
                                            <textarea class="form-control" id="first_employer_info" name="first_employer_info" rows="3" placeholder="Deskripsi Pekerjaan"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Majikan Kedua -->
                                        <h5>Majikan Kedua</h5>
                                        <div class="form-group">
                                            <label for="second_employer">Nama Majikan:</label>
                                            <input type="text" class="form-control" id="second_employer" name="second_employer" placeholder="Nama Majikan Kedua">
                                        </div>
                                        <div class="form-group">
                                            <label for="second_employer_period">Periode Tahun Kerja:</label>
                                            <input type="text" class="form-control" id="second_employer_period" name="second_employer_period" placeholder="Periode Kerja">
                                        </div>
                                        <div class="form-group">
                                            <label for="second_employer_reason">Alasan Keluar:</label>
                                            <input type="text" class="form-control" id="second_employer_reason" name="second_employer_reason" placeholder="Alasan Keluar">
                                        </div>
                                        <div class="form-group">
                                            <label for="second_employer_country">Negara:</label>
                                            <input type="text" class="form-control" id="second_employer_country" name="second_employer_country" placeholder="Negara Kerja">
                                        </div>
                                        <div class="form-group">
                                            <label for="second_employer_info">Keterangan Kerja:</label>
                                            <textarea class="form-control" id="second_employer_info" name="second_employer_info" rows="3" placeholder="Deskripsi Pekerjaan"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" formaction="wawancara.php">Simpan</button>
                            </div>
                        </fieldset>

                        <hr>


                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

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
    <script>
        // Mendapatkan URL saat ini
        var currentUrl = window.location.pathname;

        // Membandingkan URL saat ini dengan tautan dropdown
        if (currentUrl.includes("fdw_singapore.php")) {
            document.getElementById("singapore").classList.add("active");
            document.getElementById("dropdownMenuButton").innerText = "TKW Singapore";
        } else if (currentUrl.includes("fdw_hongkong.php")) {
            document.getElementById("hongkong").classList.add("active");
            document.getElementById("dropdownMenuButton").innerText = "TKW Hongkong";
        }
    </script>

</body>

</html>

