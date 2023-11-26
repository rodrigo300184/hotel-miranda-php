const roomsSwiper = new Swiper(".rooms-swiper", {
  spaceBetween: 20,
  centeredSlides: true,
  // autoplay: {
  //   delay: 3000,
  //   disableOnInteraction: false,
  // },
  navigation: {
    nextEl: ".swiper-btn-next",
    prevEl: ".swiper-btn-prev",
  },
});

var flkty = new Flickity('.carousel', {
  autoPlay: true
});

const menuSwiper = new Swiper(".menu-swiper", {
  spaceBetween: 20,
  grid: {
    fill: "row",
    rows: 3,
  },
  navigation: {
    nextEl: ".menu-swiper-btn-next",
    prevEl: ".menu-swiper-btn-prev",
  },
  autoplay: {
    delay: 5000,
  },
});

const foodImageSwiper = new Swiper(".food-images-swiper", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 25,
  loop: true,
  autoplay: {
    delay: 5000,
  },
  // If we need pagination
  pagination: {
    el: "#food-swiper-pagination",
    clickable: true,
  },
});

const factsSwiper = new Swiper(".facts-swiper", {
  // Optional parameters
  direction: "horizontal",
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 16,
  loop: true,
  autoplay: {
    delay: 2000,
  },

  // If we need pagination
  pagination: {
    el: ".facts-swiper-pagination",
    clickable: true,
  },
});

const roomsPageSwiper = new Swiper(".rooms-page-swiper", {
  spaceBetween: 16,
  slidesPerView:1,
  grid: {
    fill: "row",
    rows: 6,
  },
  pagination: {
    el: ".rooms-page-swiper-pagination",
    clickable: true,
    renderBullet(index) {
      return `<span class="swiper-pagination-bullet swiper-pagination-bullet--square">${
        index + 1
      }</span>`;
    },
  },
  navigation: {
    nextEl: ".rooms-page-swiper__button--next ",
    prevEl: ".rooms-page-swiper__button--prev ",
  },
});
