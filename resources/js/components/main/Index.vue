<template>
  <Cards />
  <div class="details">
    <Table />
    <User />
  </div>
</template>


<script>
import Cards from "./components/Cards.vue";
import Table from "./components/TableComponent.vue";
import User from "./components/UserComponent.vue";

export default {
  components: {
    Cards,
    Table,
    User,
  },
};
</script>

