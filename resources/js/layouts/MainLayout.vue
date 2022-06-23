<template>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <div class="navigation" :class="{ active: active }">
        <ul>
          <li>
            <a href="#">
              <span class="icon">
                <ion-icon name="logo-apple"></ion-icon>
              </span>
              <span class="title">Brand name</span>
            </a>
          </li>
          <li v-for="(item, index) in MENU"
            :key="item.id"
            :class="{ link: true, hovered: activeItem === index}"
            @mouseover="activeItem = index"
            @click.prevent="activeItem = index"
          >
            <a @click="$router.push({path: item.route})">
              <span class="icon">
                <ion-icon :name='item.icon'></ion-icon>
              </span>
              <span class="title">{{ item.title }}</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- /Sidebar -->

      <div class="main" :class="{ active: active }">
        <!-- Navbar -->
        <div class="topbar">
          <div
            class="toggle"
            :class="{ active: active }"
            @click.prevent="active = !active"
          >
            <ion-icon name="menu-outline"></ion-icon>
          </div>
          <!-- Search -->
          <div class="search">
            <label for="search">
              <input type="text" placeholder="Search here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>
          <!-- /Search -->
          <!-- User img -->
          <div class="user">
            <img src="user.jpg" alt="" />
          </div>
          <!-- /User img -->
        </div>
        <!-- /Navbar -->
        <!-- Content -->
        <router-view />
      </div>
    </div>
  </body>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';
export default {
  name: "mainLayout",
  data() {
    return {
      active: false,
      hovered: false,
      activeItem: null,
    }
  },
   computed: {
    ...mapGetters(["MENU"]),
  },
  methods: {
    ...mapActions(["GET_MENU"]),
  },
   mounted() {
    this.GET_MENU();
  },
}
</script>






