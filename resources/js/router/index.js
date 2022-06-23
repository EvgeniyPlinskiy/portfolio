import { createRouter, createWebHistory } from "vue-router";


const routes = [

  {
    path: '/',
    name: 'main',
    meta: {layout: 'MainLayout'},
    component: () => import('../components/main/Index.vue')
  },
  {
    path: '/widgets',
    name: 'widgets',
    meta: {layout: 'MainLayout'},
    component: () => import('../components/widgets/Widgets.vue')
  },
  {
    path: '/create',
    name: 'second',
    meta: {layout: 'SecondLayout'},
    component: () => import('../components/second/Index.vue')
  },
  {
    path: '/new',
    name: 'create',
    component: () => import('../components/main/Index.vue')
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'notFound',
    component: () => import('../components/main/Index.vue')
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
