import {RouteRecordRaw} from "vue-router";

import dashboard from "./dashboard";

import authorize from "../middleware/authorize";

const routes: RouteRecordRaw[] = [
    {
        path: '/',
        component: () => import('../../layouts/default.vue'),
        children: [
            {
                path: '',
                name: 'home',
                component: () => import('../../pages/home.vue')
            },
            {
                path: 'articles',
                name: 'articles',
                component: () => import('../../pages/articles/index.vue')
            },
            {
                path: 'articles/:slug',
                name: 'article',
                component: () => import('../../pages/articles/show.vue')
            },
            {
                path: 'products',
                name: 'products',
                component: () => import('../../pages/products/index.vue')
            },
            {
                path: 'categories',
                name: 'categories',
                component: () => import('../../pages/products/categories.vue')
            },
            {
                path: 'categories/:slug',
                name: 'category',
                component: () => import('../../pages/products/category.vue')
            },
            {
                path: 'products/:slug',
                name: 'product',
                component: () => import('../../pages/products/show.vue')
            },
            {
                path: 'about',
                name: 'about',
                component: () => import('../../pages/about.vue')
            },
            {
                path: 'cart',
                name: 'cart',
                component: () => import('../../pages/cart.vue')
            },
            {
                path: 'contact_us',
                name: 'contact_us',
                component: () => import('../../pages/contact_us.vue')
            },
            {
                path: 'faq',
                name: 'faq',
                component: () => import('../../pages/faq.vue')
            },
            {
                path: 'favorites',
                name: 'favorites',
                component: () => import('../../pages/favorites.vue')
            },
            {
                path: 'forgot',
                name: 'forgot',
                component: () => import('../../pages/forgot.vue')
            },
            {
                path: 'login',
                name: 'login',
                meta: {
                    middleware: [authorize]
                },
                component: () => import('../../pages/login.vue')
            },
            {
                path: 'policy',
                name: 'policy',
                component: () => import('../../pages/policy.vue')
            },
            {
                path: 'reset_password',
                name: 'reset_password',
                component: () => import('../../pages/reset_password.vue')
            },
            {
                path: 'sign_up',
                name: 'sign_up',
                meta: {
                    middleware: [authorize]
                },
                component: () => import('../../pages/sign_up.vue')
            },
            {
                path: 'testimonials',
                name: 'testimonials',
                component: () => import('../../pages/testimonials.vue')
            },
            {
                path: 'video',
                name: 'video',
                component: () => import('../../pages/video.vue')
            },
            {
                path: ':pathMatch(.*)*',
                name: 'error',
                component: () => import('../../pages/error.vue')
            }
        ]
    },
    dashboard,
]

export default routes
