<script setup lang="ts">
import {reactive, Ref} from "vue";
import {useI18n} from "vue-i18n";

import Btn from "../ui/btn.vue";

import {useVuelidate, Validation} from "@vuelidate/core";
import {helpers, required, email} from "@vuelidate/validators";
import {Subscribe} from "../../api/site";

const {t} = useI18n()

const data = reactive({
    email: '',
    is_loading: false,
    success: false,
    error: ''
})

const v = useVuelidate({
    email: {
        required: helpers.withMessage(t('validation.required'), required),
        email: helpers.withMessage(t('validation.email'), email)
    },
}, data) as Ref<Validation>

const submit = async (e: Event) => {
    e.preventDefault()

    data.success = false
    data.error = ''

    v.value.$touch()

    if (v.value.$invalid) {
        data.error = v.value.$errors[0].$message as string
    } else {
        data.is_loading = true

        await Subscribe(data.email)
            .then(() => {
                data.email = ''
                data.success = true

                setTimeout(() => {
                    data.success = false
                }, 3000)
            }).catch(error => {
                const response = error.response

                if (response) {
                    data.error = response.data.message
                }
            }).finally(() => {
                data.is_loading = false
            })
    }
}
</script>

<template>
    <form action="" class="footer-subscribe">
        <div class="row no-gutters">
            <div class="col-8 pr-2">
                <input
                    id="footer-subscribe"
                    type="email"
                    v-model="data.email"
                    class="form-control"
                    :class="{'is-invalid': data.error.length}"
                >
            </div>
            <div class="col-4">
                <btn
                    @click="submit"
                    type="submit"
                    class="btn-secondary w-100"
                    :is_loading="data.is_loading"
                >{{ $t('common.subscribe') }}</btn>
            </div>
        </div>
        <div
            class="mt-1 alert alert-danger"
            v-show-error="data.error"
        ></div>
        <div
            class="mt-1 alert alert-success"
            v-show="data.success"
        >{{ $t('common.request_sent_successfully') }}</div>
    </form>
</template>
