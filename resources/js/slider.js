import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

const swiper = new Swiper(".swiper.home-slide", {
    // Optional parameters
    spaceBetween: 30,
    centeredSlides: true,
    effect: "fade",
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    on: {
        slideChangeTransitionStart: function () {
            // This event will be triggered at the start of the slide change
            let activeSlide = document.querySelector('.swiper-slide-active');
            let images = document.querySelectorAll('.slide-image');
            let texts = document.querySelectorAll('.slide-text');

            images.forEach(image => image.style.transform = 'scale(1.3)');
            texts.forEach(text => text.style.opacity = '0');

            if (activeSlide) {
                let activeImage = activeSlide.querySelector('.slide-image');
                let activeText = activeSlide.querySelector('.slide-text');
                if (activeImage) activeImage.style.transform = 'scale(1)';
                if (activeText) activeText.style.opacity = '1';
            }
        }
    }
});

const swiper_bank = new Swiper(".swiper-bank", {
    autoplay: {
        enabled: true,
        delay: 0,
        pauseOnMouseEnter: false,
        disableOnInteraction: true,
    },
    centeredSlides: true,
    loop: true,
    navigation: false,
    noSwipingClass: "swiper-slide",
    slidesPerView: 3,
    spaceBetween: 15,
    speed: 5000,
    breakpoints: {
        1024: {
            slidesPerView: 5,
        },
    },
});

const swiper_archievement = new Swiper(".swiper_archievement", {
    autoplay: {
        enabled: true,
        delay: 0,
        pauseOnMouseEnter: false,
        disableOnInteraction: true,
    },
    centeredSlides: true,
    loop: true,
    navigation: false,
    noSwipingClass: "swiper-slide",
    slidesPerView: 3,
    speed: 5000,
    breakpoints: {
        1024: {
            slidesPerView: 5,
        },
    },
});

const swiper_recruiment = new Swiper(".swiper-recruitment", {
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 150,
        modifier: 2.5,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    // autoplay:{
    //   delay:3000,
    //   disableOnInteraction:false,
    // }
});

const swiper_gd = new Swiper(".swiper.swiper-gd-about", {
    spaceBetween: 6,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
