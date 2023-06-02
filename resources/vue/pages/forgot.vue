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
                    <h1>{{ $t('common.forgot_password') }}?</h1>
                    <p>{{ $t('common.send_link_to_your_email') }}</p>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100">{{ $t('common.send_reset_link') }}</button>
                    </div>
                </div>
            </div>
            <div class="acc-info acc-info-image">
                <img class="acc-info-image-main" src="../assets/images/acc-forgot.svg" alt="">
            </div>
        </div>
    </div>
</template>
