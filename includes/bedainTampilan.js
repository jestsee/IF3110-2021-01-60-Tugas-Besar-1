function hideAttributebyId(id) {
    var harga = document.getElementById(id);
    harga.style.display = 'none';

    console.log('test');
}

function attribute(id, value) {
    document.getElementById(id).innerHTML = value;
}
