// tangkap elemen
const imgPreview = document.getElementsByClassName('foto-kecil');
const inputFotos = document.querySelectorAll("input[type=file]");

for (let i = 0; i < 5; i++) {
    // ganti image preview dg image yg mau diupload
    inputFotos[i].onchange = function () {
        for (let k = 0; k < inputFotos.length; k++) {
            const fileFoto = new FileReader();

            // jika file foto di load, maka imgPreview akan berubah
            fileFoto.onload = function (e) {
                imgPreview[k].style.backgroundImage = 'url(' + e.target.result + ')';
            }

            // ini code dr mozilla
            if (inputFotos[k].files[0]) {
                fileFoto.readAsDataURL(inputFotos[k].files[0]);
            }
        }
    }

    // jika tombol plus diklik, maka gambar akan muncul
    imgPreview[i].onclick = function () {
        inputFotos[i].click();
    }
}