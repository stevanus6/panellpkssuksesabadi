// sweetalert-utils.js
function showAlert(type, title, text) {
    let icon;
    switch(type) {
        case 'success':
            icon = 'success';
            break;
        case 'error':
            icon = 'error';
            break;
        case 'info':
            icon = 'info';
            break;
        default:
            icon = 'info';
    }

    Swal.fire({
        icon: icon,
        title: title,
        text: text,
        confirmButtonText: 'OK'
    });
}

// Fungsi-fungsi spesifik
function dataSaved() {
    showAlert('success', 'Berhasil', 'Data telah berhasil disimpan.');
}

function dataDeleted() {
    showAlert('success', 'Berhasil', 'Data telah berhasil dihapus.');
}

function showError() {
    showAlert('error', 'Error', 'Terjadi kesalahan saat menyimpan data.');
}

// Export functions jika menggunakan module system
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { dataSaved, dataDeleted, showError };
}
