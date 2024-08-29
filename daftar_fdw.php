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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-wrap: wrap;
            gap: 15px;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
            text-align: center;
        }

        .card h3,
        .employee-name {
            font-size: 1.2rem;
            margin: 0 0 10px;
            font-weight: bold;
        }

        .card p,
        .status,
        .berkas {
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .red-line {
            height: 2px;
            background-color: #ff0000;
            margin-bottom: 20px;
        }

        .button-container {
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            max-height: 0;
        }

        .button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 7px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .button-yellow {
            background-color: #ffd700;
            color: black;
        }

        .button-green {
            background-color: #28a745;
            color: white;
        }

        .button-red {
            background-color: #dc3545;
            color: white;
        }

        .toggle-buttons {
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-top: 15px solid #888;
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .toggle-buttons.collapsed {
            transform: translateX(-50%) rotate(180deg);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
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
                <div class="container">
                    <div class="card">
                        <img src="https://i.ibb.co/n8r11sW/IMG-20230417-WA0003.jpg" alt="Profile Picture">
                        <div class="card-content">
                            <div class="employee-name">NAMA: YUYUN NUR SAFITRI</div>
                            <div class="status">STATUS BERKAS: BELUM LENGKAP</div>
                            <div class="berkas">BERKAS <span>14/15</span></div>
                            <div class="red-line"></div>
                            <div class="button-container">
                                <button class="button button-yellow" onclick="window.location.href='editdata_fdw.php'">PERBAIKI DATA</button>
                                <button class="button button-green" onclick="window.location.href='editberkas_fdw.php'">LENGKAPI BERKAS</button>
                                <button class="button button-red" onclick="window.location.href='MD.php'">MD</button>
                            </div>
                            <div class="toggle-buttons" onclick="toggleButtons(this)"></div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="https://i.ibb.co/n8r11sW/IMG-20230417-WA0003.jpg" alt="Profile Picture">
                        <div class="card-content">
                            <div class="employee-name">NAMA: YUYUN NUR SAFITRI</div>
                            <div class="status">STATUS BERKAS: LENGKAP</div>
                            <div class="berkas">BERKAS <span>15/15</span></div>
                            <div class="red-line"></div>
                            <div class="button-container">
                                <button class="button button-yellow" onclick="window.location.href='editdata_fdw.php'">PERBAIKI DATA</button>
                                <button class="button button-green" onclick="window.location.href='editberkas_fdw.php'">LENGKAPI BERKAS</button>
                                <button class="button button-red" onclick="window.location.href='MD.php'">MD</button>
                            </div>
                            <div class="toggle-buttons" onclick="toggleButtons(this)"></div>
                        </div>
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
    <?php include 'footer.php'; ?>

    <!-- Include Logout Modal -->
    <?php include 'logout_modal.php'; ?>

</body>

</html>
a