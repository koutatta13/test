<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
<link rel="stylesheet" href="/css/include/top/top_carousel.css">
<div class="sample-swiper carousel">
    <div class="swiper-container swiper-initialized swiper-horizontal swiper-pointer-events">
        <!-- Additional required wrapper -->
        <div id="js-slideInclude" class="swiper-wrapper">
            {!! $carouselHTML !!}
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-91c17c82fb55224e"></div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-91c17c82fb55224e"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    <!-- Slider main container -->
</div>

<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-firestore.js"></script>
<script type="module" src="/js/include/top/top_carousel_getData.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script type="module" src="/js/include/top/top_carousel.js"></script>