<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script src="js/swiper.min.js"></script>
<!-- <script src="js/easyzoom.js"></script> -->
<script src="js/jquery.magnifier.min.js"></script>
<script src="js/script.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('#banner', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var swiper2 = new Swiper('#item', {
        // direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
         autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },
    });
    var swiper2 = new Swiper('#loginBanner', {
        // direction: 'vertical',
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
         autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },
    });
  </script>