<!DOCTYPE html>
<html lang="en">

<?php include '../layout/header.php'; ?>
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
                <div class="container d-flex justify-content-start">
                    <div class="card">
                        <img src="https://i.ibb.co/n8r11sW/IMG-20230417-WA0003.jpg" alt="Profile Picture">
                        <div class="card-content">
                            <div class="employee-name">NAMA: YUYUN NUR SAFITRI</div>
                            <div class="status">STATUS BERKAS: BELUM LENGKAP</div>
                            <div class="berkas">
                                <span>BERKAS</span>
                                <span>14/15</span>
                            </div>
                            <div class="red-line"></div>
                            <div class="button-container">
                                <button class="button button-yellow" onclick="window.location.href='editdata_fdw.php'">PERBAIKI DATA</button>
                                <button class="button button-green" onclick="window.location.href='editberkas_fdw.php'">LENGKAPI BERKAS</button>
                                <!-- <button class="button button-red" onclick="window.location.href='MD.php'">MD</button> -->
                                <button class="button button-red" onclick="md()">MD</button>
                            </div>
                            <div class="toggle-buttons"></div>
                        </div>
                    </div>

                    <div class="card">
                        <img src="https://i.ibb.co/n8r11sW/IMG-20230417-WA0003.jpg" alt="Profile Picture">
                        <div class="card-content">
                            <div class="employee-name">NAMA: YUYUN NUR SAFITRI</div>
                            <div class="status">STATUS BERKAS: LENGKAP</div>
                            <div class="berkas">BERKAS <span>15/15</span></div>
                            <div class="green-line"></div>
                            <div class="button-container">
                                <button class="button button-yellow" onclick="window.location.href='editdata_fdw.php'">PERBAIKI DATA</button>
                                <button class="button button-green" onclick="window.location.href='editberkas_fdw.php'">LENGKAPI BERKAS</button>
                                <!-- <button class="button button-red" onclick="window.location.href='MD.php'">MD</button> -->
                                <button class="button button-red" onclick="md()">MD</button>
                            </div>
                            <div class="toggle-buttons"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://i.ibb.co/n8r11sW/IMG-20230417-WA0003.jpg" alt="Profile Picture">
                        <div class="card-content">
                            <div class="employee-name">NAMA: YUYUN NUR SAFITRI</div>
                            <div class="status">STATUS BERKAS: LENGKAP</div>
                            <div class="berkas">BERKAS <span>15/15</span></div>
                            <div class="green-line"></div>
                            <div class="button-container">
                                <button class="button button-yellow" onclick="window.location.href='editdata_fdw.php'">PERBAIKI DATA</button>
                                <button class="button button-green" onclick="window.location.href='editberkas_fdw.php'">LENGKAPI BERKAS</button>
                                <!-- <button class="button button-red" onclick="window.location.href='MD.php'">MD</button> -->
                                <button class="button button-red" onclick="md()">MD</button>
                            </div>
                            <div class="toggle-buttons"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://i.ibb.co/n8r11sW/IMG-20230417-WA0003.jpg" alt="Profile Picture">
                        <div class="card-content">
                            <div class="employee-name">NAMA: YUYUN NUR SAFITRI</div>
                            <div class="status">STATUS BERKAS: LENGKAP</div>
                            <div class="berkas">BERKAS <span>15/15</span></div>
                            <div class="green-line"></div>
                            <div class="button-container">
                                <button class="button button-yellow" onclick="window.location.href='editdata_fdw.php'">PERBAIKI DATA</button>
                                <button class="button button-green" onclick="window.location.href='editberkas_fdw.php'">LENGKAPI BERKAS</button>
                                <!-- <button class="button button-red" onclick="window.location.href='MD.php'">MD</button> -->

                            </div>
                            <div class="toggle-buttons"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://i.ibb.co/n8r11sW/IMG-20230417-WA0003.jpg" alt="Profile Picture">
                        <div class="card-content">
                            <div class="employee-name">NAMA: YUYUN NUR SAFITRI</div>
                            <div class="status">STATUS BERKAS: LENGKAP</div>
                            <div class="berkas">BERKAS <span>15/15</span></div>
                            <div class="green-line"></div>
                            <div class="button-container">
                                <button class="button button-yellow" onclick="window.location.href='editdata_fdw.php'">PERBAIKI DATA</button>
                                <button class="button button-green" onclick="window.location.href='editberkas_fdw.php'">LENGKAPI BERKAS</button>
                                <!-- <button class="button button-red" onclick="window.location.href='MD.php'">MD</button> -->
                                <button class="button button-red" onclick="md()">MD</button>
                            </div>
                            <div class="toggle-buttons"></div>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="../js/sb-admin-2.min.js"></script>     
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // function toggleButtons(button) {
        //     const buttonContainer = button.previousElementSibling;
        //     const isShown = buttonContainer.style.maxHeight !== '0px';
        //     // document.querySelectorAll('.button-container').forEach(container => {
        //     //     container.style.maxHeight = '0px';
        //     //     // container.nextElementSibling.classList.add('collapsed');
        //     // });

        //     buttonContainer.style.maxHeight = isShown ? '160px' : '0px';
        //     button.classList.toggle('collapsed', isShown);
        //     console.log(document.querySelectorAll('.container'));
        // }
// console.log();
// });

$(document).on('click', '.card', function() {
  const $this = $(this);
  const toggleButtons = $('.toggle-buttons', $this);

  // Toggle 'coleps' class for the clicked card
  $this.toggleClass('coleps').siblings().removeClass('coleps');
  $('.toggle-buttons').not(toggleButtons).removeClass('collapsed');

  // Toggle 'collapsed' class for the clicked card's buttons
  toggleButtons.toggleClass('collapsed');
});

function md(){
    Swal.fire({
  title: "Yakin?",
  text: "Data yang dihapus tidak bisa dikembalikan.",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Ya, hapus saja",
  cancelButtonText: "Tidak"
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "Berhasil!",
      text: "Data berhasil dihapus.",
      icon: "success"
    });
  }
});
}
    </script>
    
    <!-- Include Footer -->
    <?php include '../layout/footer.php'; ?>

    <!-- Include Logout Modal -->
    <?php include '../layout/logout_modal.php'; ?>

</body>

</html>
