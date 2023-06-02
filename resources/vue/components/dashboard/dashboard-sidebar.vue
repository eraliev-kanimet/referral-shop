<script setup lang="ts">

</script>

<template>
    <div class="dashboard-sidebar d-none d-xl-block">
        <div class="dashboard-userbar border-bottom pb-3 mb-3">
            <a class="dashboard-userbar-avatar" href=""><img src="" alt=""></a>
            <div class="dashboard-userbar-content">
                <a class="dashboard-userbar-name" href="">ad***@gmail.com</a>
                <div class="dashboard-userbar-links">
                    <a href="">{{ $t('common.edit_profile') }}</a>
                    <a href="">{{ $t('common.logout') }}</a>
                </div>
            </div>
        </div>
        <ul class="dashboard-nav mt-3 mb-4">
            <li class="dashboard-nav-item active"><a class="dashboard-nav-link" href=""><i class="dashboard-nav-icon icon-dashboard"></i>{{ $t('common.dashboard') }}</a></li>
            <li class="dashboard-nav-item">
                <a class="dashboard-nav-link" href=""><i class="dashboard-nav-icon icon-products"></i>{{ $t('common.products') }}</a>
                <button class="dashboard-nav-collapse btn btn-sm collapsed" data-toggle="collapse" data-target="#categories" aria-expanded="false"><i class="icon-dropdown"></i></button>
                <ul class="dashboard-subnav collapse" id="categories">
                    <li><a href="">Anti Viral</a></li>
                    <li><a href="">Anti-Acidity</a></li>
                    <li><a href="">Cholesterol</a></li>
                    <li><a href="">{{ $t('common.view_all_categories') }}</a></li>
                </ul>
            </li>
            <li class="dashboard-nav-item"><a class="dashboard-nav-link" href=""><i class="dashboard-nav-icon icon-orders"></i>{{ $t('common.orders') }}</a></li>
            <li class="dashboard-nav-item"><a class="dashboard-nav-link" href=""><i class="dashboard-nav-icon icon-tickets"></i>{{ $t('common.tickets') }}</a></li>
            <li class="dashboard-nav-item"><a class="dashboard-nav-link" href=""><i class="dashboard-nav-icon icon-referrals"></i>{{ $t('common.referrals') }}</a></li>
        </ul>
        <div class="alert alert-primary my-4">
            {{ $t('common.profile_verification.text1') }}
            {{ $t('common.profile_verification.text2') }}
            <a href="/profile-verification">{{ $t('common.profile_verification.text3') }}</a>
            {{ $t('common.profile_verification.text4') }}
        </div>
    </div>
</template>
