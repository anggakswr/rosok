// inisialisasi select2
$(document).ready(function () {
    $(".js-example-basic-multiple").select2();
});

// deklarasi variabel
const imgPreview = document.getElementsByClassName('mb1');
const inputFotos = document.querySelectorAll("input[type=file]");

// ganti image preview dg image yg mau diupload
function previewImg() {
    for (let i = 0; i < inputFotos.length; i++) {
        const fileFoto = new FileReader();
        fileFoto.readAsDataURL(inputFotos[i].files[0]);
        // jika file foto di load, maka imgPreview akan berubah
        fileFoto.onload = function (e) {
            imgPreview[i].src = e.target.result;
        }
    }
}

// jika tombol plus diklik, maka gambar akan muncul
for (let i = 0; i < imgPreview.length; i++) {
    // function klikImg() {
    //     inputFotos[i].click();
    // }
    imgPreview[i].addEventListener("click", function () {
        inputFotos[i].click();
    })
}