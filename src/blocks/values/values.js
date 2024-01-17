const swiper__values = new Swiper("#values__swiper", {

    speed: 2000,
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      414: {
        slidesPerView: 1.2 ,
        spaceBetween: 0
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 0
      }
    },
});