<script setup lang="ts">

</script>

<template>
    <div class="offcanvas offcanvas-nav">
        <div class="offcanvas-title bg-light">{{ $t('common.main_menu') }}</div>
        <i class="offcanvas-close icon-close"></i>
        <div class="offcanvas-content">
            <ul class="offcanvas-menu">
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
        </div>
        <div class="offcanvas-bottom">
            <ul class="offcanvas-menu offcanvas-user">
                <li><router-link :to="{name: 'login'}">{{ $t('common.login') }}</router-link></li>
                <li><router-link :to="{name: 'sign_up'}">{{ $t('common.sign_up') }}</router-link></li>
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
