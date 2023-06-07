<script setup lang="ts">
import {useRoute} from "vue-router";

import {useUserStore} from "../../stores/user";

const route = useRoute()
const userStore = useUserStore()
</script>

<template>
    <header class="header">
        <div class="header-top bg-light">
            <div class="container">
                <div class="header-top-phone">
                    <div class="header-top-phone-item">
                        <span class="flag-icon flag-icon-US mr-1"></span>
                        <a href="tel:+18882437406">US: <span>+1 (888) 243-74-06</span></a>
                    </div>
                    <div class="header-top-phone-item">
                        <span class="flag-icon flag-icon-GB  mr-1"></span>
                        <a href="tel:+448000418744">GB: <span>+44 (800) 041-87-44</span></a>
                    </div>
                    <div class="header-top-phone-item d-none d-md-flex">
                        <i class="icon-phone"></i>
                        <a href="">{{ $t('common.request_callback') }}</a>
                    </div>
                </div>
                <div class="header-top-lang dropdown d-none d-lg-block">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">English</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href=""><img src="" alt=""> En</a>
                        <a class="dropdown-item" href=""><img src="" alt=""> De</a>
                        <a class="dropdown-item" href=""><img src="" alt=""> Fr</a>
                        <a class="dropdown-item" href=""><img src="" alt=""> Es</a>
                        <a class="dropdown-item" href=""><img src="" alt=""> It</a>
                    </div>
                </div>
                <div class="header-top-currency dropdown d-none d-lg-block">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">USD</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">USD</a>
                        <a class="dropdown-item" href="">AUD</a>
                        <a class="dropdown-item" href="">BGN</a>
                        <a class="dropdown-item" href="">CAD</a>
                        <a class="dropdown-item" href="">CHF</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <router-link class="logo" :to="{name: 'home'}">
                    <img src="../../assets/images/logo.svg" alt="">
                </router-link>
                <i class="nav-toggle icon-menu d-xl-none"></i>
                <ul class="header-menu d-none d-xl-flex">
                    <li :class="{active: route.name === 'home'}">
                        <router-link :to="{name: 'home'}">{{ $t('common.home_') }}</router-link>
                    </li>
                    <li :class="{active: route.name === 'products'}">
                        <router-link :to="{name: 'products'}">{{ $t('common.products') }}</router-link>
                    </li>
                    <li :class="{active: route.name === 'about'}">
                        <router-link :to="{name: 'about'}">{{ $t('common.about_us') }}</router-link>
                    </li>
                    <li :class="{active: route.name === 'articles'}">
                        <router-link :to="{name: 'articles'}">{{ $t('common.articles_') }}</router-link>
                    </li>
                    <li :class="{active: route.name === 'video'}">
                        <router-link :to="{name: 'video'}">{{ $t('common.video_') }}</router-link>
                    </li>
                    <li :class="{active: route.name === 'faq'}">
                        <router-link :to="{name: 'faq'}">{{ $t('common.faq') }}</router-link>
                    </li>
                    <li :class="{active: route.name === 'policy'}">
                        <router-link :to="{name: 'policy'}">{{ $t('common.policy') }}</router-link>
                    </li>
                    <li :class="{active: route.name === 'testimonials'}">
                        <router-link :to="{name: 'testimonials'}">{{ $t('common.testimonials') }}</router-link>
                    </li>
                    <li :class="{active: route.name === 'contact_us'}">
                        <router-link :to="{name: 'contact_us'}">{{ $t('common.contact_us') }}</router-link>
                    </li>
                </ul>
                <div class="dashboard-buttons" v-if="userStore.isAuth">
                    <router-link class="dashboard-buttons-item" :to="{name: 'dashboard'}">
                        <div class="dashboard-buttons-icon">
                            <i class="icon-user"></i>
                        </div>
                    </router-link>
                    <router-link class="dashboard-buttons-item" :to="{name: 'favorites'}">
                        <div class="dashboard-buttons-icon">
                            <i class="icon-heart"></i><span class="badge badge-secondary">0</span>
                        </div>
                    </router-link>
                    <a class="dashboard-buttons-item dashboard-buttons-cart" href="">
                        <div class="dashboard-buttons-icon">
                            <i class="icon-cart"></i>
                            <span class="badge badge-secondary">0</span>
                        </div>
                        <div class="dashboard-buttons-cart-content">
                            {{ $t('common.total') }} <strong>$0.00</strong>
                        </div>
                    </a>
                </div>
                <div class="header-buttons d-none d-xl-block" v-else>
                    <router-link class="btn btn-link" :to="{name: 'login'}">
                        {{ $t('common.login') }}
                    </router-link>
                    <router-link class="btn btn-primary" :to="{name: 'sign_up'}">
                        {{ $t('common.sign_up') }}
                    </router-link>
                </div>
            </div>
        </div>
    </header>
</template>
