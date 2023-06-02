<script setup lang="ts">

</script>

<template>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="password">{{ $t('common.password') }}:</label>
        <div class="position-relative">
            <input type="password" class="form-control" id="password">
            <i class="show-password icon-eye-off"></i>
        </div>
    </div>
    <div class="form-group">
        <div class="row justify-content-sm-between">
            <div class="col-12 col-sm-auto mb-2 mb-sm-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="agree">
                    <label class="custom-control-label" for="agree">
                        {{ $t('common.remember_me') }}
                    </label>
                </div>
            </div>
            <div class="col-12 col-sm-auto">
                <router-link :to="{name: 'forgot'}">{{ $t('common.forgot_password') }}?</router-link>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary w-100">{{ $t('common.login') }}</button>
    </div>
</template>
