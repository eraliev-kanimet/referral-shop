<script setup lang="ts">
import {reactive, Ref} from "vue";
import {useI18n} from "vue-i18n";

import Btn from "../ui/btn.vue";

import {useVuelidate, Validation} from "@vuelidate/core";
import {Errors} from "../../types";
import {email, helpers, required, sameAs} from "@vuelidate/validators";
import {ContactUs} from "../../api/site";

const {t} = useI18n()

const categories = [
    t('common.contact_us_status.g'),
    t('common.contact_us_status.pm'),
    t('common.contact_us_status.dog'),
    t('common.contact_us_status.rac'),
    t('common.contact_us_status.gog'),
    t('common.contact_us_status.os'),
]

const data = reactive({
    is_loading: false,
    success: false,
    error: false,
})
const form = reactive({
    name: '',
    email: '',
    category: '',
    message: '',
    agree: false
})
const errors = reactive<Errors>({
    name: '',
    email: '',
    category: '',
    message: '',
    agree: ''
})

const v = useVuelidate({
    name: {
        required: helpers.withMessage(t('validation.required'), required)
    },
    email: {
        required: helpers.withMessage(t('validation.required'), required),
        email: helpers.withMessage(t('validation.email'), email),
    },
    category: {
        required: helpers.withMessage(t('validation.required'), required)
    },
    message: {
        required: helpers.withMessage(t('validation.required'), required)
    },
    agree: {
        same: sameAs(true)
    }
}, form) as Ref<Validation>

const submit = async () => {
    Object.keys(errors).map(key => errors[key] = '')

    v.value.$touch()

    if (v.value.$invalid) {
        v.value.$errors.map(error => errors[error.$property] = error.$message)
    } else {
        data.is_loading = true

        await ContactUs(form)
            .then(() => {
                form.name = ''
                form.email = ''
                form.category = ''
                form.message = ''
                form.agree = false
                data.success = true

                setTimeout(() => {
                    data.success = false
                }, 3000)
            })
            .catch(error => {
                const response = error.response

                if (response) {
                    if (response.status == 422) {
                        Object.keys(response.data.errors).map(key => {
                            errors[key] = response.data.errors[key][0]
                        })
                    } else {
                        data.error = true

                        setTimeout(() => {
                            data.error = false
                        }, 3000)
                    }
                }
            })
            .finally(() => {
                data.is_loading = false
            })
    }
}

const clear = (name: string) => {
    errors[name] = ''
}
</script>

<template>
    <div class="contacts-form d-flex align-items-center" v-if="data.success || data.error">
        <div
            class="alert mt-3 w-100 text-center"
            :class="{'alert-success': data.success, 'alert-danger': data.error}"
        >{{ data.success ? $t('common.request_sent_successfully') : $t('common.server_error') }}</div>
    </div>
    <div class="contacts-form" v-else>
        <div class="form-group">
            <label for="name">{{ $t('common.name') }}:</label>
            <input
                :class="{'is-invalid': errors.name.length}"
                v-model="form.name"
                type="text"
                class="form-control"
                id="name"
                @input="clear('name')"
            >
            <span class="error" v-show-error="errors.name"></span>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input
                :class="{'is-invalid': errors.email.length}"
                v-model="form.email"
                type="email"
                class="form-control"
                id="email"
                @input="clear('email')"
            >
            <span class="error" v-show-error="errors.email"></span>
        </div>
        <div class="form-group">
            <label>{{ $t('common.category') }}:</label>
            <select
                :class="{'is-invalid': errors.category.length}"
                v-model="form.category"
                class="custom-select"
                @input="clear('category')"
            >
                <option value="" selected>{{ $t('common.select') }}...</option>
                <option :value="category" v-for="category in categories">{{ category }}</option>
            </select>
            <span class="error" v-show-error="errors.category"></span>
        </div>
        <div class="form-group">
            <label for="question">{{ $t('common.question') }}:</label>
            <textarea
                :class="{'is-invalid': errors.message.length}"
                v-model="form.message"
                class="form-control"
                id="question"
                rows="3"
                @input="clear('message')"
            ></textarea>
            <span class="error" v-show-error="errors.message"></span>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input
                    :class="{'is-invalid': errors.agree.length}"
                    v-model="form.agree"
                    type="checkbox"
                    class="custom-control-input"
                    id="agree"
                    @input="clear('agree')"
                >
                <label :class="{'is-invalid': errors.agree.length}" class="custom-control-label" for="agree">
                    {{ $t('common.agree_text.text1') }}
                    <router-link
                        class="font-weight-bold"
                        :to="{name: 'faq'}"
                    >{{ $t('common.agree_text.text2') }}
                    </router-link>
                    {{ $t('common.agree_text.text3') }}
                    <router-link
                        class="font-weight-bold"
                        :to="{name: 'policy'}"
                    >{{ $t('common.agree_text.text4') }}
                    </router-link>
                </label>
            </div>
        </div>
        <btn
            :is_loading="data.is_loading"
            class="btn btn-primary px-5"
            @click="submit"
        >{{ $t('common.send') }}
        </btn>
    </div>
</template>
