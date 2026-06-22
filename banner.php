<div class="px-4 py-6 md:py-8 bg-[#F8F8F5]">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="assets/img/promo1.png" alt="" class="img"></div>
            <div class="swiper-slide"><img src="assets/img/promo2.png" alt="" class="img"></div>
            <div class="swiper-slide"><img src="assets/img/promo3.png" alt="" class="img"></div>
            <div class="swiper-slide"><img src="assets/img/promo4.png" alt="" class="img"></div>
            <div class="swiper-slide"><img src="assets/img/promo1.png" alt="" class="img"></div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 30,
        speed: 8000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        allowTouchMove: false,
    });
</script>