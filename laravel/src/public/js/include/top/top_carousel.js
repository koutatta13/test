export function swiperInit() {

  const defaultOptions = {
    // ドットインジケーターの表示
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    // 前後スライドボタンを表示
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true, // ループの有効化
    speed: 300,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    loopedSlides: 6,
    centeredSlides: true,
    loop: true,
    spaceBetween: 30,
  }
  // デフォルトの表示
  const swiper = new Swiper(".sample-swiper .swiper-container", {
    ...defaultOptions,
  });
  return;
}

