document.addEventListener('DOMContentLoaded', function () {
    // Ambil tombol submit
    const submitButton = document.getElementById('submit-button');

    // Tambahkan event listener untuk tombol
    submitButton.addEventListener('click', function (event) {
        event.preventDefault(); // Mencegah form dikirim

        // Tampilkan SweetAlert2
        Swal.fire({
            title: 'Konfirmasi Pengiriman',
            text: 'Apakah Anda yakin ingin mengirim data ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Kirim!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika diklik "Ya, Kirim!", submit form
                document.querySelector('form').submit();
            }
        });
    });
});
