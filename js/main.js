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
let overlay = document.querySelector('.overlay');

document.addEventListener('click', getActive);

function getActive(event) {
    if (event.target.closest('.header__burger-menu')) {
        mobileMenu.classList.toggle('mobile-menu_active');
    } else if (
            event.target.closest('.header__appointment-btn') ||
            event.target.closest('.mobile-menu__appointment-btn') ||
            event.target.closest('.main__order-btn')
        ) {
        overlay.classList.toggle('overlay_active');
    } else if (event.target.closest('.overlay') && !event.target.closest('.appointment')) {
        document.querySelector('.overlay').classList.remove('overlay_active')
    }
}