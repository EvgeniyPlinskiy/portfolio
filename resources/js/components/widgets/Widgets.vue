<template>
  <Cards />
  <InfoBox />
  <SmallBox />
</template>


<script>
import Cards from "./components/MainCards.vue";
import InfoBox from "./components/InfoBox.vue";
import SmallBox from "./components/SmallBox.vue";


export default {
  components: {
    Cards,
    InfoBox,
    SmallBox
  },
};
</script>
