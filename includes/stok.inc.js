// ambil elemen2 yang dibutuhkan
var stokInput = document.getElementById('stok');
var stokTombol = document.getElementById('tombol-stok');
var container = document.getElementById('container');

// sementara event nya pake change atau input (input bs cover semua)
// bisa jadi template buat ajax di fungsi lain
stokInput.addEventListener('input', function() {
    
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id')

    // buat objek ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
        // nilai ready state itu antara 0 - 4
        // 0: inisialisasi
        // 1: membuka koneksi
        // 2: dst
        // 4: sumber sudah ready (sudah oke dah)

        // status 404: file not found

    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ) {

            // set max stok
            stokInput.setAttribute("max",xhr.responseText)
            
            // debug
            container.innerHTML = stokInput.value;

        }
    }

    // eksekusi ajax
    xhr.open('GET', 'includes/maxStok.php?id=' + id, true);
    xhr.send();

})