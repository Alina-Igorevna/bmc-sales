const swiper = new Swiper('.swiper-container', {
  slidesPerView: 4,
  spaceBetween: 30,
  slidesPerGroup: 4,
  loop: true,
  loopFillGroupWithBlank: true,
  
  navigation: {
    nextEl: '.services__swiper-button-next',
    prevEl: '.services__swiper-button-prev',
  },
});