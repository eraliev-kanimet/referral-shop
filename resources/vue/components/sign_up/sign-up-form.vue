<script setup lang="ts">
import {computed, reactive, Ref} from "vue";
import {useI18n} from "vue-i18n";
import {useRouter} from "vue-router";

import Btn from "../ui/btn.vue";
import {useVuelidate, Validation} from "@vuelidate/core"
import {helpers, required, email, sameAs, minLength} from "@vuelidate/validators";

import showPassword from "../../helpers/show-password";
import {OAuthRegister} from "../../api/user";
import {useUserStore} from "../../stores/user";

interface Errors {
    [key: string]: any;
}

const {t} = useI18n()
const router = useRouter()

const data = reactive({
    email: '',
    phone: '',
    password: '',
    password_confirmation: '',
    agree: false,
    is_loading: false
})

const errors = reactive<Errors>({
    email: '',
    phone: '',
    password: '',
    password_confirmation: '',
    agree: ''
})

const v = useVuelidate({
    email: {
        required: helpers.withMessage(t('validation.required'), required),
        email: helpers.withMessage(t('validation.email'), email)
    },
    phone: {
        required: helpers.withMessage(t('validation.required'), required)
    },
    password: {
        required: helpers.withMessage(t('validation.required', {
            attribute: t('common.password').toLowerCase()
        }), required),
        minLength: helpers.withMessage(t('validation.min.string', {
            attribute: t('common.password').toLowerCase(),
            min: 8
        }), minLength(8))
    },
    password_confirmation: {
        sameAs: helpers.withMessage(t('validation.confirmed', {
            attribute: t('common.password').toLowerCase()
        }), sameAs(computed(() => data.password))),
    },
    agree: {
        sameAs: sameAs(true)
    }
}, data) as Ref<Validation>;

const submit = async () => {
    Object.keys(errors).map(key => errors[key] = '')

    v.value.$touch()

    if (v.value.$invalid) {
        v.value.$errors.map(error => errors[error.$property] = error.$message)
    } else {
        data.is_loading = true

        await OAuthRegister(data)
            .then(response => {
                useUserStore().setUser(response.user, response.token)

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
        <label for="phone">{{ $t('common.phone_number') }}:</label>
        <input
            id="phone"
            type="text"
            class="form-control"
            :class="{'is-invalid': errors.phone.length}"
            v-model="data.phone"
        >
        <span class="error" v-show-error="errors.phone"></span>
    </div>
    <div class="form-group">
        <label for="password1">{{ $t('common.password') }}:</label>
        <div class="position-relative">
            <input
                id="password1"
                type="password"
                class="form-control"
                :class="{'is-invalid': errors.password.length}"
                v-model="data.password"
            >
            <i class="show-password icon-eye-off" @click="showPassword"></i>
        </div>
        <span class="error" v-show-error="errors.password"></span>
    </div>
    <div class="form-group">
        <label for="password2">{{ $t('common.password_again') }}:</label>
        <div class="position-relative">
            <input
                id="password2"
                type="password"
                class="form-control"
                :class="{'is-invalid': errors.password_confirmation.length}"
                v-model="data.password_confirmation"
            >
            <i class="show-password icon-eye-off" @click="showPassword"></i>
        </div>
        <span class="error" v-show-error="errors.password_confirmation"></span>
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input
                id="agree"
                type="checkbox"
                class="custom-control-input"
                :class="{'is-invalid': errors.agree.length}"
                v-model="data.agree"
            >
            <label
                for="agree"
                class="custom-control-label"
                :class="{'is-invalid': errors.agree.length}"
            >
                {{ $t('common.agree_text.text1') }}
                <a href="">{{ $t('common.agree_text.text2') }}</a>
                {{ $t('common.agree_text.text3') }}
                <a href="">{{ $t('common.agree_text.text4') }}</a>
            </label>
        </div>
    </div>
    <div class="form-group">
        <btn @click="submit" class="btn-primary w-100" :is_loading="data.is_loading">{{ $t('common.sign_up') }}</btn>
    </div>
</template>
