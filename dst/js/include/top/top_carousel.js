
(function(){
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
    speed: 600,
    autoplay: {
        delay: 300,
        disableOnInteraction: false,
      },
      slidesPerView: "auto",
      loopedSlides: 6,
      centeredSlides: true,
      loop:true,
      spaceBetween: 30,
}

// デフォルトの表示
const swiper = new Swiper(".sample-swiper .swiper-container", {
    ...defaultOptions,
});
})();