<script setup lang="ts">

import SignUpForm from "../components/sign_up/sign-up-form.vue";
</script>

<template>
    <div class="container">
        <div class="acc my-5 bg-light">
            <div class="acc-info bg-double">
                <div class="acc-content">
                    <div class="acc-info-title">
                        <span>{{ $t('common.signup_text.text1') }}</span> {{ $t('common.signup_text.text2') }}
                    </div>
                    <div class="acc-info-description lead my-4">{{ $t('common.signup_text.text3') }}</div>
                    <div class="acc-users">
                        <div class="acc-users-description">
                            {{ $t('common.signup_text.text4') }} <br> {{ $t('common.signup_text.text5') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="acc-form">
                <div class="acc-content">
                    <h1>{{ $t('common.sign_up') }}</h1>
                    <p>
                        {{ $t('common.signup_text.text6') }}
                        <router-link :to="{name: 'login'}">{{ $t('common.click_here') }}</router-link>
                        {{ $t('common.signup_text.text7') }}
                    </p>
                    <sign-up-form/>
                </div>
            </div>
        </div>
    </div>
</template>

<!--  <div class="acc-social my-4">-->
<!--      <div class="font-weight-bold text-dark mb-3">{{ $t('common.signup_text.text8') }}</div>-->
<!--      <a class="btn btn-primary" href=""><i class="icon-fb"></i></a>-->
<!--      <a class="btn btn-primary" href=""><i class="icon-gg"></i></a>-->
<!--      <a class="btn btn-primary" href=""><i class="icon-in"></i></a>-->
<!--  </div>-->
<!--  <div class="separator text-muted my-3">{{ $t('common.signup_text.text9') }}</div>-->
