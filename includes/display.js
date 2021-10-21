function displayVariant(nama, deskripsi, harga, foto) {
    document.getElementById("title").innerHTML = nama;
    document.getElementById("nama").innerHTML = nama;
    document.getElementById("deskripsi").innerHTML = deskripsi;
    document.getElementById("harga").innerHTML = harga;
    document.getElementById("foto").src = foto;
}