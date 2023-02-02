const navtel = document.querySelector('.onglets_tel');
const navlink = document.querySelector('nav');

let menuOpen = false;
navtel.addEventListener('click', () => {
    if (!menuOpen) {
        navlink.classList.add('menu-tel');
        menuOpen = true;
    } else {
        navlink.classList.remove('menu-tel');
        menuOpen = false;
    }
});