import {RouteRecordRaw} from "vue-router";

const routes: RouteRecordRaw[] = [
    {
        path: '/',
        name: 'home',
        component: () => import('../pages/home.vue')
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'error',
        component: () => import('../pages/error.vue')
    }
]

export default routes
