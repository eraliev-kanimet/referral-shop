<script setup lang="ts">

</script>

<template>
    <div class="container">
        <div class="acc my-5 bg-light">
            <div class="acc-info acc-info-success">
                <img class="acc-info-success-main" src="../assets/images/acc-error.svg" alt="">
            </div>
            <div class="acc-form">
                <div class="acc-content">
                    <div class="h1 mb-0 text-danger">{{ $t('common.error') }} 404</div>
                    <h1>{{ $t('common.error_page.text1') }}</h1>
                    <p>{{ $t('common.error_page.text2') }}</p>
                    <router-link class="btn btn-primary" :to="{name: 'home'}">
                        {{ $t('common.error_page.text3') }}
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>
