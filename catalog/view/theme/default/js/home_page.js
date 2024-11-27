let slidesPerViewProduct = 2.7;
const swiper = new Swiper(".mySwiper", {
  slidesPerView: slidesPerViewProduct,
  spaceBetween: 10,
  freeMode: true,
  navigation: {
    nextEl: ".swiper-button-next-type1",
    prevEl: ".swiper-button-prev-type1",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

function updateValueBasedOnWidth() {

  if (window.innerWidth < 1200) {
    slidesPerViewProduct = 1.5;
  } else if (window.innerWidth < 1500) {
    slidesPerViewProduct = 2.4;
  } else {
    slidesPerViewProduct = 2.7;
  }

  swiper.params.slidesPerView = slidesPerViewProduct;
  swiper.update();
}

updateValueBasedOnWidth();

window.addEventListener('resize', updateValueBasedOnWidth);