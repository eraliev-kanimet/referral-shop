<script setup lang="ts">

</script>

<template>
    <div class="offcanvas offcanvas-nav">
        <div class="offcanvas-title bg-light">{{ $t('common.main_menu') }}</div>
        <i class="offcanvas-close icon-close"></i>
        <div class="offcanvas-content">
            <ul class="offcanvas-menu">
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
        </div>
        <div class="offcanvas-bottom">
            <ul class="offcanvas-menu offcanvas-user">
                <li><a href="">{{ $t('common.login') }}</a></li>
                <li><a href="">{{ $t('common.sign_up') }}</a></li>
            </ul>
            <div class="offcanvas-currency">
                <label>{{ $t('common.select_currency') }}:</label>
                <select class="form-control">
                    <option>USD</option>
                    <option>AUD</option>
                    <option>BGN</option>
                    <option>CAD</option>
                    <option>CHF</option>
                </select>
            </div>
            <div class="offcanvas-lang">
                <label>{{ $t('common.select_language') }}:</label>
                <div class="offcanvas-flags">
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</template>
