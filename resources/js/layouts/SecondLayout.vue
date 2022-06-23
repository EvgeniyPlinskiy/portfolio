<template>
  <body>
    <div class="container">
      <!-- Sidebar -->
      <div class="navigation-second" :class="{ active: active }">
        <ul>
          <li>
            <a href="#">
              <span class="icon-second">
                <ion-icon name="logo-apple"></ion-icon>
              </span>
              <span class="title">Brand name</span>
            </a>
          </li>
          <li v-for="(item, index) in menu"
            :key="item.id"
            :class="{ hovered: activeItem === index}"
            @mouseover="activeItem = index"
            @click.prevent="activeItem = index"
          >
            <a href="#">
              <span class="icon-second">
                <ion-icon :name='item.icon'></ion-icon>
              </span>
              <span class="title">{{ item.title }}</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- /Sidebar -->

      <div class="main-second" :class="{ active: active }">
        <!-- Navbar -->
        <div class="topbar-second">
          <div
            class="toggle-second"
            :class="{ active: active }"
            @click.prevent="active = !active"
          >
            <ion-icon name="menu-outline"></ion-icon>
          </div>
          <!-- Search -->
          <div class="search-second">
            <label for="search">
              <input type="text" placeholder="Search here" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>
          <!-- /Search -->
          <!-- User img -->
          <div class="user-second">
            <img src="user.jpg" alt="" />
          </div>
          <!-- /User img -->
        </div>
        <!-- /Navbar -->
        <router-view />
      </div>
    </div>
  </body>
</template>

<script>
export default {
  name: "main-secondLayout",
  data() {
    return {
      active: false,
      hovered: false,
      activeItem: null,
      menu: [
        {
          title: "Dashboard",
          icon: "home-outline",
        },
        {
          title: "Customers",
          icon: "people-outline",
        },
        {
          title: "Customers",
          icon: "chatbubble-outline",
        },
        {
          title: "Customers",
          icon: "help-outline",
        },
        {
          title: "Settings",
          icon: "settings-outline",
        },
        {
          title: "Password",
          icon: "lock-closed-outline",
        },
        {
          title: "Sign out",
          icon: "log-out-outline",
        },
      ],
    };
  },
};
</script>






