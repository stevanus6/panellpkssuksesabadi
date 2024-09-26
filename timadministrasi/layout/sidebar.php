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
    <link href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'index') ? 'vendor/fontawesome-free/css/all.min.css' : '../vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=<?= str_contains($_SERVER['SCRIPT_NAME'], 'index') ? "css/sb-admin-2.min.css" : "../css/sb-admin-2.min.css" ?> rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href=<?= str_contains($_SERVER['SCRIPT_NAME'], 'index') ? "vendor/datatables/dataTables.bootstrap4.min.css" : "../vendor/datatables/dataTables.bootstrap4.min.css" ?> rel="stylesheet">
    <link href=<?= str_contains($_SERVER['SCRIPT_NAME'], 'index') ? "vendor/datatables/dataTables.bootstrap5.min.css" : "../vendor/datatables/dataTables.bootstrap5.min.css" ?> rel="stylesheet">
</head>

<body>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sticky" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" style="height: 80px;">
            <div class="sidebar-brand-icon">
                <img src="../img/digitalkreasi.png" alt="Logo" style="width: 60px; height: auto; object-fit: contain;">
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="../index">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            PAGE
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBiodata"
                aria-expanded="true" aria-controls="collapseBiodata">
                <i class="fas fa-fw fa-cog"></i>
                <span>Biodata</span>
            </a>
            <div id="collapseBiodata" class="collapse" aria-labelledby="headingBiodata" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'index.php') ? "./Biodata/daftar_fdw" : (str_contains($_SERVER['SCRIPT_NAME'], 'daftar_fdw') ? "#" : "../Biodata/daftar_fdw") ?>">
                        <i class="fas fa-list-ul fa-sm fa-fw mr-2"></i>
                        Daftar TKW
                    </a>
                    <a class="collapse-item"
                        href=<?= str_contains($_SERVER['SCRIPT_NAME'], 'index') ? "./Biodata/fdw" : (str_contains($_SERVER['SCRIPT_NAME'], '../Biodata/fdw_singapore') ? "#" : "../Biodata/fdw_singapore") ?> >
                        <i class="fas fa-plus-circle fa-sm fa-fw mr-2"></i>
                        Tambah TKW
                    </a>

                </div>
            </div>
        </li>

        <!-- Nav Item - Tracking Files Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'index') ? "./Trackingberkas/tracking_berkas" : (str_contains($_SERVER['SCRIPT_NAME'], 'tracking_berkas') ? "#" : "../Trackingberkas/tracking_berkas") ?>">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Tracking Files</span>
            </a>
        </li>

        <!-- Heading -->
        <div class="sidebar-heading">
            Other Page
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-users"></i>
                <span>HR</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'index') ? "./Karyawan/hr" : (str_contains($_SERVER['SCRIPT_NAME'], 'hr') ? "#" : "../Karyawan/hr") ?>">
                        <i class="fas fa-fw fa-user"></i> Data Karyawan
                    </a>
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'index') ? "./Karyawan/gajiharian" : (str_contains($_SERVER['SCRIPT_NAME'], 'gajiharian') ? "#" : "../Karyawan/gajiharian") ?>">
                        <i class="fas fa-fw fa-dollar-sign"></i> Gaji Harian
                    </a>
                </div>
            </div>
        </li>

        

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

</body>

</html>
