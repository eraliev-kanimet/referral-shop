import {RouteRecordRaw} from "vue-router";

import unauthorized from "../middleware/unauthorized";

const route: RouteRecordRaw = {
    path: '/dashboard',
    component: () => import('../../layouts/dashboard.vue'),
    meta: {
        middleware: [unauthorized]
    },
    children: [
        {
            path: '',
            name: 'dashboard',
            component: () => import('../../pages/dashboard/index.vue'),
        },
        {
            path: 'tickets',
            name: 'tickets',
            component: () => import('../../pages/dashboard/tickets/index.vue'),
        },
        {
            path: 'tickets/create',
            name: 'tickets-create',
            component: () => import('../../pages/dashboard/tickets/create.vue'),
        },
        {
            path: 'tickets/:id',
            name: 'ticket',
            component: () => import('../../pages/dashboard/tickets/show.vue'),
        },
        {
            path: 'orders',
            name: 'orders',
            component: () => import('../../pages/dashboard/orders/index.vue'),
        },
        {
            path: 'orders/:id',
            name: 'order',
            component: () => import('../../pages/dashboard/orders/show.vue'),
        },
        {
            path: 'profile',
            name: 'profile',
            component: () => import('../../pages/dashboard/profile.vue'),
        },
        {
            path: 'referrals',
            name: 'referrals',
            component: () => import('../../pages/dashboard/referrals.vue'),
        },
    ]
}

export default route
