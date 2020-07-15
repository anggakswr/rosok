// inisialisasi select2
$(document).ready(function () {
    $(".js-example-basic-multiple").select2();
});

// tangkap elemen
const imgPreview = document.getElementsByClassName('mb1');
const inputFotos = document.querySelectorAll("input[type=file]");
const spanClose = document.getElementsByClassName("close");

// jika tdk ada gambar, hilangkan tombol close
function aturClose() {
    for (let j = 0; j < 5; j++) {
        if (imgPreview[j].src == 'http://localhost:8080/img/icon/plus.png') {
            spanClose[j].style.display = 'none';
        } else {
            spanClose[j].style.display = 'inline';
        }
    }
}
window.onload = aturClose();

for (let i = 0; i < 5; i++) {
    // ganti image preview dg image yg mau diupload
    inputFotos[i].onchange = function () {
        for (let k = 0; k < inputFotos.length; k++) {
            const fileFoto = new FileReader();

            // jika file foto di load, maka imgPreview akan berubah
            fileFoto.onload = function (e) {
                imgPreview[k].src = e.target.result;
                aturClose();
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

    // jika span close diklik, ganti gambar plus.png
    spanClose[i].onclick = function () {
        imgPreview[i].src = '/img/icon/plus.png';
        inputFotos[i].value = "";

        // jika tdk ada gambar, hilangkan tombol close
        aturClose();
    }
}