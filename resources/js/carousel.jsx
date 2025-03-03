
// carousel JS
import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/pagination';
import { Autoplay, Pagination } from 'swiper/modules';

document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".progress-slide-carousel", {
        loop: true,
        autoplay: {
            delay: 2000, // Increased delay for better visibility
            disableOnInteraction: false,
        },
        pagination: {
            el: ".progress-slide-carousel .swiper-pagination",
            clickable: true,
            type: "bullets",
            color: "##4338ca;",
        },
        modules: [Autoplay, Pagination], // Ensure autoplay is loaded
    });
});


