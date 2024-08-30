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
</head>
<body>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sticky" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15"></div>
        <div class="sidebar-brand-text mx-3">SUKSES ABADI JAYA<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
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
                <a class="collapse-item" href="daftar_fdw">
                    <i class="fas fa-list-ul fa-sm fa-fw mr-2"></i>
                    Daftar TKW
                </a>
                <a class="collapse-item" href="fdw_singapore">
                    <i class="fas fa-plus-circle fa-sm fa-fw mr-2"></i>
                    Tambah TKW
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tracking Files Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTrackingFiles"
            aria-expanded="true" aria-controls="collapseTrackingFiles">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Tracking Berkas</span>
        </a>
        <div id="collapseTrackingFiles" class="collapse" aria-labelledby="headingTrackingFiles"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="in-progress.html">
                    <i class="fas fa-hourglass-half fa-sm fa-fw mr-2"></i>
                    Diproses
                </a>
                <a class="collapse-item" href="in-progress.html">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2"></i>
                    Dikerjakan
                </a>
                <a class="collapse-item" href="completed.html">
                    <i class="fas fa-check-circle fa-sm fa-fw mr-2"></i>
                    Selesai
                </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pembayaran Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePembayaran"
            aria-expanded="true" aria-controls="collapsePembayaran">
            <i class="fas fa-money-bill-wave"></i> <!-- Changed icon to credit card for payment section -->
            <span>Pembayaran</span>
        </a>
        <div id="collapsePembayaran" class="collapse" aria-labelledby="headingPembayaran"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="pembayaran_agency">
                    <i class="fas fa-building fa-sm fa-fw mr-2"></i>
                    Pembayaran Agency
                </a>
                <a class="collapse-item" href="pembayaran_pl">
                    <i class="fas fa-user-tie fa-sm fa-fw mr-2"></i>
                    Pembayaran PL
                </a>
                <a class="collapse-item" href="bayargaji">
                    <i class="fas fa-money-bill fa-sm fa-fw mr-2"></i>
                    Pembayaran Gaji
                </a>
                <a class="collapse-item" href="bayarfdw">
                    <i class="fas fa-hand-holding-usd fa-sm fa-fw mr-2"></i>
                    Pembayaran TKW
                </a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Debt Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDebt"
            aria-expanded="true" aria-controls="collapseDebt">
            <i class="fas fa-fw fa-credit-card"></i> <!-- Changed icon to credit card for payment section -->
            <span>Kasbon</span>
        </a>
        <div id="collapseDebt" class="collapse" aria-labelledby="headingDebt"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="debit_pl">
                    <i class="fas fa-money-bill fa-sm fa-fw mr-2"></i>
                    Kasbon PL
                </a>
                <a class="collapse-item" href="debit_karyawan">
                    <i class="fas fa-user-tie fa-sm fa-fw mr-2"></i>
                    Kasbon Karyawan 
                </a>
                <a class="collapse-item" href="debit_fdw">
                    <i class="fas fa-hand-holding-usd fa-sm fa-fw mr-2"></i>
                    Kasbon TKW
                </a>
            </div>
        </div>
    </li>

<!-- Nav Item - Cash Flow Collapse Menu -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCash"
            aria-expanded="true" aria-controls="collapseCash">
            <i class="fas fa-wallet"></i> <!-- Changed icon to credit card for payment section -->
            <span>Keuangan</span>
        </a>
        <div id="collapseCash" class="collapse" aria-labelledby="headingCash"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="laporankeuangan.php">
                    <i class="fas fa-money-bill fa-sm fa-fw mr-2"></i>
                    Laporan Keuangan
                </a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

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
            <a class="collapse-item" href="hr">
                <i class="fas fa-fw fa-user"></i> Data Karyawan
            </a>
            <a class="collapse-item" href="gajiharian">
                <i class="fas fa-fw fa-dollar-sign"></i> Gaji Harian
            </a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePickets"
        aria-expanded="true" aria-controls="#collapsePickets">
        <i class="fas fa-fw fa-calendar"></i>
        <span>Jadwal Piket</span>
    </a>
    <div id="collapsePickets" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="jadwalpiket.php">
                <i class="fas fa-fw fa-calendar-day"></i> Jadwal Piket
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