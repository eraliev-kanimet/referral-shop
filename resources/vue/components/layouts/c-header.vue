<script setup lang="ts">

</script>

<template>
    <header class="header">
        <div class="header-top bg-light">
            <div class="container">
                <div class="header-top-phone">
                    <div class="header-top-phone-item">
                        <img class="d-none d-sm-block" src="" alt="">
                        <a href="tel:+18882437406">US: <span>+1 (888) 243-74-06</span></a>
                    </div>
                    <div class="header-top-phone-item">
                        <img class="d-none d-sm-block" src="" alt="">
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
                <a class="logo" href=""><img src="../../assets/images/logo.svg" alt=""></a>
                <i class="nav-toggle icon-menu d-xl-none"></i>
                <ul class="header-menu d-none d-xl-flex">
                    <li class="active"><a href="">{{ $t('common.home_') }}</a></li>
                    <li><a href="">{{ $t('common.products') }}</a></li>
                    <li><a href="">{{ $t('common.about_us') }}</a></li>
                    <li><a href="">{{ $t('common.articles_') }}</a></li>
                    <li><a href="">{{ $t('common.video_') }}</a></li>
                    <li><a href="">{{ $t('common.faq') }}</a></li>
                    <li><a href="">{{ $t('common.policy') }}</a></li>
                    <li><a href="">{{ $t('common.testimonials') }}</a></li>
                    <li><a href="">{{ $t('common.contact_us') }}</a></li>
                </ul>
                <div class="header-buttons d-none d-xl-block">
                    <a class="btn btn-link" href="">{{ $t('common.login') }}</a>
                    <a class="btn btn-primary" href="">{{ $t('common.sign_up') }}</a>
                </div>
            </div>
        </div>
    </header>
</template>
