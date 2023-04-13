<style>
  swiper-container {
    width: 100%;
    padding-top: 200px;
    overflow: visible !important;
    transform: translate3d(-300px, 0px, 0px);
  }

  swiper-slide {
    background-position: center;
    background-size: cover;
    width: 500px;
    height: 500px;
  }

  swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
  }
</style>


<swiper-container class="mySwiper" pagination="false" effect="coverflow" grab-cursor="true" centered-slides="true"
  slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
  coverflow-effect-modifier="1" coverflow-effect-slide-shadows="false">

  <swiper-slide>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/images_koukaki/Kawaneko.png"
      alt="Kawaneko"><span>kawaneko</span>
  </swiper-slide>
  <swiper-slide>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/images_koukaki/Orenjiiro-1.png"
      alt="Orenjiiro"><span>Orenjiiro</span>
  </swiper-slide>
  <swiper-slide>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/images_koukaki/Pinku-1.png" alt="Pinku"><span>Pinku</span>
  </swiper-slide>
  <swiper-slide>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/images_koukaki/Tenshi-1.png" alt="Tenshi"><span>Tenshi</span>
  </swiper-slide>
  <swiper-slide>
    <img src="<?php echo get_stylesheet_directory_uri() ?>/images_koukaki/Jaakuna-1.png"
      alt="Jaakuna"><span>Jaakuna</span>
  </swiper-slide>
</swiper-container>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>