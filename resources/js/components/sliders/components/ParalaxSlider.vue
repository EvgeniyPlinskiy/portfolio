<template>
  <div class="info-box-title">
    <h3>Paralax slider</h3>
  </div>
  <div class="paralax-slider-box">
    <swiper
    :modules="modules"
    @swiper="setSecondSwiper"
    :controller="{ control: secondSwiper}"
    :style="{
      '--swiper-navigation-color': '#fff',
      '--swiper-pagination-color': '#fff',
    }"
    :speed="600"
    :parallax="true"
    :pagination="{
      clickable: true,
    }"
    :navigation="true"
    class="mySwiper"
  >
    <div
      slot="container-start"
      class="parallax-bg"
      :style="{
        'background-image':
          'url(https://swiperjs.com/demos/images/nature-1.jpg)',
      }"
      data-swiper-parallax="-23%"
    ></div>
    <swiper-slide>
      <div class="title" data-swiper-parallax="-300">Slide 1</div>
      <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
      <div class="text" data-swiper-parallax="-100">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper
          velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut
          libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div> </swiper-slide
    ><swiper-slide>
      <div class="title" data-swiper-parallax="-300">Slide 2</div>
      <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
      <div class="text" data-swiper-parallax="-100">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper
          velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut
          libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div> </swiper-slide
    ><swiper-slide>
      <div class="title" data-swiper-parallax="-300">Slide 3</div>
      <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
      <div class="text" data-swiper-parallax="-100">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper
          velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut
          libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div>
    </swiper-slide>
  </swiper>
  </div>
</template>

<script>
  import { ref } from 'vue';

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";
// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";
import "swiper/css/navigation";
// import required modules
import { Parallax, Pagination, Navigation, Controller} from "swiper";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const secondSwiper = ref(null);
    const setSecondSwiper = (swiper) => {
        secondSwiper.value = swiper;
      };
    return {
      Controller,
      secondSwiper,
      setSecondSwiper,
      modules: [Parallax, Pagination, Navigation, Controller],
    };
  },
};
</script>
