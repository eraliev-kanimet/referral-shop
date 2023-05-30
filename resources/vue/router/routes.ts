import {RouteRecordRaw} from "vue-router";

import defaultLayout from "../layouts/default.vue";

const routes: RouteRecordRaw[] = [
    {
        path: '/',
        component: defaultLayout,
        children: [
            {
                path: '',
                name: 'home',
                component: () => import('../pages/home.vue')
            }
        ]
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'error',
        component: () => import('../pages/error.vue')
    }
]

export default routes
