// menyeleksi container dr gambar yg akan di slide
const slide = document.getElementsByClassName("slide")[0];

// ambil elemen input dg type radio
const radios = document.querySelectorAll("input[type=radio]");

const labels = Array.from(document.getElementsByTagName("label"));

// deklarasi variabel utk looping
let i = 0;

// function utk slide gambar
function slideOtomatis() {
  // remove class active di smua label
  labels.forEach((label) => {
    label.classList.remove("active");
  });

  radios[i].click();

  // jika i = 5 - 1
  if (i < radios.length - 1) {
    // 1 + 1
    i++;
  } else {
    // i direset jd 0
    i = 0;
  }
  // berjalan setiap 3 detik
  setTimeout("slideOtomatis()", 3000);
}

// jalankan function
window.onload = slideOtomatis();

// looping radios
for (let i = 0; i < radios.length; i++) {
  // jika radio button diklik
  radios[i].addEventListener("click", function () {
    slide.style.transform = "translateX(-" + i * 20 + "%)";
    labels[i].classList.add("active");
  });
}
