<?php
// Define the base path depending on the current script location
$basePath = str_contains($_SERVER['SCRIPT_NAME'], 'index') ? 'suksesabadi/' : '../suksesabadi/';
?>

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
    <link href="<?= $basePath ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= $basePath ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= $basePath ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= $basePath ?>vendor/datatables/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sticky" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" style="height: 80px;">
            <div class="sidebar-brand-icon">
                <img src="<?= $basePath ?>img/digitalkreasi.png" alt="Logo" style="width: 60px; height: auto; object-fit: contain;">
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $basePath ?>index">
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

        <!-- Nav Item - Tracking Files Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'tracking_berkas') ? "#" : $basePath . "Trackingberkas/tracking_berkas" ?>">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Tracking Files</span>
            </a>
        </li>

        <!-- Nav Item - Pembayaran Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePembayaran"
                aria-expanded="true" aria-controls="collapsePembayaran">
                <i class="fas fa-money-bill-wave"></i>
                <span>Pembayaran</span>
            </a>
            <div id="collapsePembayaran" class="collapse" aria-labelledby="headingPembayaran"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'pembayaran_agency') ? "#" : $basePath . "Pembayaran/pembayaran_agency" ?>">
                        <i class="fas fa-building fa-sm fa-fw mr-2"></i>
                        Pembayaran Agency
                    </a>
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'pembayaran_pl') ? "#" : $basePath . "Pembayaran/pembayaran_pl" ?>">
                        <i class="fas fa-user-tie fa-sm fa-fw mr-2"></i>
                        Pembayaran PL
                    </a>
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'bayargaji') ? "#" : $basePath . "Pembayaran/bayargaji" ?>">
                        <i class="fas fa-money-bill fa-sm fa-fw mr-2"></i>
                        Pembayaran Gaji
                    </a>
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'bayarfdw') ? "#" : $basePath . "Pembayaran/bayarfdw" ?>">
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
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Kasbon</span>
            </a>
            <div id="collapseDebt" class="collapse" aria-labelledby="headingDebt"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'debit_pl') ? "#" : $basePath . "Kasbon/debit_pl" ?>">
                        <i class="fas fa-money-bill fa-sm fa-fw mr-2"></i>
                        Kasbon PL
                    </a>
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'debit_karyawan') ? "#" : $basePath . "Kasbon/debit_karyawan" ?>">
                        <i class="fas fa-user-tie fa-sm fa-fw mr-2"></i>
                        Kasbon Karyawan
                    </a>
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'debit_fdw') ? "#" : $basePath . "Kasbon/debit_fdw" ?>">
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
                <i class="fas fa-wallet"></i>
                <span>Keuangan</span>
            </a>
            <div id="collapseCash" class="collapse" aria-labelledby="headingCash"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= str_contains($_SERVER['SCRIPT_NAME'], 'laporan_keuangan') ? "#" : $basePath . "Keuangan/laporan_keuangan" ?>">
                        <i class="fas fa-money-bill fa-sm fa-fw mr-2"></i>
                        Laporan Keuangan
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
</body>
</html>
