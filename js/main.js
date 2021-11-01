new Swiper(".swiper", {
    navigation: {
        nextEl: ".main__arrow_right",
        prevEl: ".main__arrow_left",
        disabledClass: "main__arrow_disable"
    },
    // breakpoints: {
    //     480: {
    //         grid: {
    //             fill: "row",
    //             rows: 2
    //         }
    //     },
    //     768: {
    //         slidesPerView: 2,
    //         grid: {
    //             fill: "row",
    //             rows: 2
    //         }
    //     }
    // }
});

if (window.innerWidth >= 1140) {
    document.querySelector('.main__container').classList.remove('container')
    document.querySelector('.main__content').classList.add('main__content_container')
}

let mobileMenu = document.querySelector('.mobile-menu');
document.addEventListener('click', getMenu);

function getMenu(event) {
    if (event.target.closest('.header__burger-menu')) {
        mobileMenu.classList.toggle('mobile-menu_active');
    }
}