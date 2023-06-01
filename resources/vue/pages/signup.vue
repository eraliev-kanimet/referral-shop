<script setup lang="ts">

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
                    <div class="acc-social my-4">
                        <div class="font-weight-bold text-dark mb-3">{{ $t('common.signup_text.text8') }}</div>
                        <a class="btn btn-primary" href=""><i class="icon-fb"></i></a>
                        <a class="btn btn-primary" href=""><i class="icon-gg"></i></a>
                        <a class="btn btn-primary" href=""><i class="icon-in"></i></a>
                    </div>
                    <div class="separator text-muted my-3">{{ $t('common.signup_text.text9') }}</div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ $t('common.phone_number') }}:</label>
                        <input type="email" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="password1">{{ $t('common.password') }}:</label>
                        <div class="position-relative">
                            <input type="password" class="form-control" id="password1">
                            <i class="show-password icon-eye-off"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password2">{{ $t('common.password_again') }}:</label>
                        <div class="position-relative">
                            <input type="password" class="form-control" id="password2">
                            <i class="show-password icon-eye-off"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="agree">
                            <label class="custom-control-label" for="agree">
                                {{ $t('common.agree_text.text1') }}
                                <a href="">{{ $t('common.agree_text.text2') }}</a>
                                {{ $t('common.agree_text.text3') }}
                                <a href="">{{ $t('common.agree_text.text4') }}</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100">{{ $t('common.sign_up') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
