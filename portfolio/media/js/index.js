/*Header mobile*/

let menuHeader = document.querySelector(".menu-header");
let logo = document.querySelector(".logo");

function openClose() {
    if (window.innerWidth <= 460) {
        if (menuHeader.classList.contains('menu-open')) {
            menuHeader.classList.remove('menu-open');
            logo.style.opacity = '1'; 
            setTimeout(() => {
                logo.style.opacity = '1'; 
            }, 50);
            logo.style.position = 'relative';
        } else {
            menuHeader.classList.add('menu-open');
            logo.style.opacity = '0';
            setTimeout(() => {
                logo.style.opacity = '0';
            }, 50);
            logo.style.position = 'absolute';
        }
    } else {
        menuHeader.classList.remove('menu-open');
        logo.style.opacity = '1';
        logo.style.position = 'relative';
    }
}

window.addEventListener('resize', openClose);
