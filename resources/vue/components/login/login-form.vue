<script setup lang="ts">
import {reactive, Ref} from "vue";
import {useI18n} from "vue-i18n";
import {useRouter} from "vue-router";

import Btn from "../ui/btn.vue";
import {useVuelidate, Validation} from "@vuelidate/core"
import {helpers, required, email} from "@vuelidate/validators";

import showPassword from "../../helpers/show-password";
import {OAuthLogin} from "../../api/user";
import {useUserStore} from "../../stores/user";
import {Errors} from "../../types";

const {t} = useI18n()
const router = useRouter()

const data = reactive({
    email: '',
    password: '',
    remember: true,
    is_loading: false
})

const errors = reactive<Errors>({
    email: '',
    password: ''
})

const v = useVuelidate({
    email: {
        required: helpers.withMessage(t('validation.required'), required),
        email: helpers.withMessage(t('validation.email'), email)
    },
    password: {
        required: helpers.withMessage(t('validation.required', {
            attribute: t('common.password').toLowerCase()
        }), required),
    }
}, data) as Ref<Validation>;

const submit = async () => {
    Object.keys(errors).map(key => errors[key] = '')

    v.value.$touch()

    if (v.value.$invalid) {
        v.value.$errors.map(error => errors[error.$property] = error.$message)
    } else {
        data.is_loading = true

        await OAuthLogin(data)
            .then(response => {
                useUserStore().setUser(response.user, response.token, data.remember)

                router.push({name: 'dashboard'})
            }).catch(error => {
                const response = error.response

                if (response) {
                    Object.keys(response.data.errors).map(key => {
                        errors[key] = response.data.errors[key][0]
                    })
                }
            }).finally(() => {
                data.is_loading = false
            })
    }
}
</script>

<template>
    <div class="form-group">
        <label for="email">Email:</label>
        <input
            id="email"
            type="email"
            class="form-control"
            :class="{'is-invalid': errors.email.length}"
            v-model="data.email"
        >
        <span class="error" v-show-error="errors.email"></span>
    </div>
    <div class="form-group">
        <label for="password">{{ $t('common.password') }}:</label>
        <div class="position-relative">
            <input
                id="password"
                type="password"
                class="form-control"
                :class="{'is-invalid': errors.password.length}"
                v-model="data.password"
            >
            <i
                class="show-password icon-eye-off"
                @click="showPassword"
            ></i>
        </div>
        <span class="error" v-show-error="errors.password"></span>
    </div>
    <div class="form-group">
        <div class="row justify-content-sm-between">
            <div class="col-12 col-sm-auto mb-2 mb-sm-0">
                <div class="custom-control custom-checkbox">
                    <input v-model="data.remember" type="checkbox" class="custom-control-input" id="agree">
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
        <btn class="btn-primary w-100" :is_loading="data.is_loading" @click="submit">{{ $t('common.login') }}</btn>
    </div>
</template>
