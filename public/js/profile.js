// tangkap elemen
const imgPreview = document.querySelector('.foto-kecil');
const inputFoto = document.querySelector('input[type=file]');

// ganti image preview dg image yg mau diupload
inputFoto.onchange = function () {
    const fileFoto = new FileReader();

    // jika file foto di load, maka imgPreview akan berubah
    fileFoto.onload = function (e) {
        imgPreview.style.backgroundImage = 'url(' + e.target.result + ')';
    }

    // ini code dr mozilla
    if (inputFoto.files[0]) {
        fileFoto.readAsDataURL(inputFoto.files[0]);
    }
}

// jika tombol plus diklik, maka gambar akan muncul
imgPreview.onclick = function () {
    inputFoto.click();
}