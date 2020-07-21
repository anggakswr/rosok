// collapse menu di nav
const tombolnav = document.querySelector('.tombolnav');

// nav menu
const navmenu = document.querySelector('.navmenu');

// jika tombolnav diklik
tombolnav.onclick = function () {
    navmenu.classList.toggle('hidden');
}