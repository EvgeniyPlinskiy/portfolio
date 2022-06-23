<template>
  <component :is="layout">
    <router-view></router-view>
  </component>
</template>

<script>
import MainLayout from './layouts/MainLayout.vue';
import SecondLayout from './layouts/SecondLayout.vue';
export default {
  computed: {
    layout() {
      return this.$route.meta.layout
    },
  },
  components: {
    MainLayout,
    SecondLayout
  }
};
</script>
