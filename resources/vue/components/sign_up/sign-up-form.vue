<script setup lang="ts">

</script>

<template>
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
</template>
