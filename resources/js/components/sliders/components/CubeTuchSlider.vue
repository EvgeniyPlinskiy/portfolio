<template>
  <div class="info-box-title">
    <h3>Cube slider</h3>
  </div>
  <div class="cube-slider-box">
    <swiper
      :modules="modules"
      @swiper="setFirstSwiper"
      :controller="{ control: firstSwiper }"
      :effect="'cube'"
      :grabCursor="true"
      :cubeEffect="{
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      }"
      :pagination="true"
      class="mySwiper"
    >
      <swiper-slide>
        <div class="cobe-slider-imgBox">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>
        <div class="cube-slider-content">
          <h2>Ottem in Russia <br><span> 2022 year</span></h2>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="cobe-slider-imgBox">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>
        <div class="cube-slider-content">
          <h2>Ottem in Russia <br><span> 2022 year</span></h2>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="cobe-slider-imgBox">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="cube-slider-content">
          <h2>Ottem in Russia <br><span> 2022 year</span></h2>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="cobe-slider-imgBox">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="cube-slider-content">
          <h2>Ottem in Russia <br><span> 2022 year</span></h2>
        </div>
      </swiper-slide>
    </swiper>
  </div>
</template>
<script>
 import { ref } from 'vue';

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";
// import required modules
import { EffectCube, Pagination, Controller } from "swiper";

// Import Swiper styles
import "swiper/css";
import "swiper/css/effect-cube";
import "swiper/css/pagination";

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const firstSwiper = ref(null);
    const setFirstSwiper = (swiper) => {
        firstSwiper.value = swiper;
      };
    return {
      Controller,
      firstSwiper,
      setFirstSwiper,
      modules: [EffectCube, Pagination, Controller],
    };
  },
};
</script>
