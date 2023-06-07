<script setup lang="ts">

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
                    <li class="active"><router-link :to="{name: 'home'}">{{ $t('common.home_') }}</router-link></li>
                    <li><router-link :to="{name: 'products'}">{{ $t('common.products') }}</router-link></li>
                    <li><router-link :to="{name: 'about'}">{{ $t('common.about_us') }}</router-link></li>
                    <li><router-link :to="{name: 'articles'}">{{ $t('common.articles_') }}</router-link></li>
                    <li><router-link :to="{name: 'video'}">{{ $t('common.video_') }}</router-link></li>
                    <li><router-link :to="{name: 'faq'}">{{ $t('common.faq') }}</router-link></li>
                    <li><router-link :to="{name: 'policy'}">{{ $t('common.policy') }}</router-link></li>
                    <li><router-link :to="{name: 'testimonials'}">{{ $t('common.testimonials') }}</router-link></li>
                    <li><router-link :to="{name: 'contact_us'}">{{ $t('common.contact_us') }}</router-link></li>
                </ul>
                <div class="header-buttons d-none d-xl-block">
                    <router-link class="btn btn-link" :to="{name: 'login'}">{{ $t('common.login') }}</router-link>
                    <router-link class="btn btn-primary" :to="{name: 'sign_up'}">{{ $t('common.sign_up') }}</router-link>
                </div>
            </div>
        </div>
    </header>
</template>
