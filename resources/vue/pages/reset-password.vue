<script setup lang="ts">

</script>

<template>
    <div class="container">
        <div class="acc my-5 bg-light">
            <div class="acc-form">
                <div class="acc-content">
                    <router-link class="font-weight-bold" :to="{name: 'login'}">
                        {{ $t('common.back_to_login') }}
                    </router-link>
                    <h1></h1>
                    <p>
                        {{ $t('common.reset_password.text1') }}
                        {{ $t('common.reset_password.text2') }}
                        {{ $t('common.reset_password.text3') }}
                        <router-link class="font-weight-bold" :to="{name: 'login'}">
                            {{ $t('common.login_page') }}
                        </router-link>
                        {{ $t('common.reset_password.text4') }}
                    </p>
                </div>
            </div>
            <div class="acc-info acc-info-image">
                <img class="acc-info-image-main" src="../assets/images/acc-reset.svg" alt="">
            </div>
        </div>
    </div>
</template>
