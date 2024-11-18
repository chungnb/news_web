import './bootstrap';

import Alpine from 'alpinejs';
import Toastify from 'toastify-js'
import "./slider";
window.Toastify = Toastify;
document.addEventListener("DOMContentLoaded", function() {
    let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
    if ("IntersectionObserver" in window) {
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lazy");
                    lazyImage.classList.add("loaded"); // Thêm lớp loaded
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });

        lazyImages.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    } else {
        // Fallback for browsers that do not support IntersectionObserver
        let lazyLoad = function() {
            lazyImages.forEach(function(lazyImage) {
                if (lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0 && getComputedStyle(lazyImage).display !== "none") {
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lazy");
                    lazyImage.classList.add("loaded"); // Thêm lớp loadedb         
                }
            });
            if (lazyImages.length == 0) {
                document.removeEventListener("scroll", lazyLoad);
                window.removeEventListener("resize", lazyLoad);
                window.removeEventListener("orientationchange", lazyLoad);
            }
        };

        document.addEventListener("scroll", lazyLoad);
        window.addEventListener("resize", lazyLoad);
        window.addEventListener("orientationchange", lazyLoad);
    }
});

document.addEventListener("DOMContentLoaded", function() {
    let elements = document.querySelectorAll('.hidden-observe');

    let observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible-observe');
            } else {
                entry.target.classList.remove('visible-observe');
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(element => {
        observer.observe(element);
    });

});


window.Alpine = Alpine;

Alpine.start();