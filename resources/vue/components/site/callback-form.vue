<script setup lang="ts">
import {reactive, Ref} from "vue";
import {useI18n} from "vue-i18n";

import Btn from "../ui/btn.vue";

import {useSiteStore} from "../../stores/site";
import {Errors} from "../../types";
import {useVuelidate, Validation} from "@vuelidate/core";
import {helpers, required} from "@vuelidate/validators";
import {Callback} from "../../api/site";
import {Country} from "../../stores/types";

const {t} = useI18n()
const siteStore = useSiteStore()

const data = reactive({
    is_loading: false,
    success: false,
    error: false,
})
const form = reactive<{
    phone: string,
    country: Country|null
}>({
    phone: '',
    country: null,
})
const errors = reactive<Errors>({
    phone: '',
    country: '',
})

const v = useVuelidate({
    phone: {
        required: helpers.withMessage(t('validation.required'), required)
    },
    country: {
        required: helpers.withMessage(t('validation.required'), required)
    },
}, form) as Ref<Validation>

const submit = async (e: Event) => {
    e.preventDefault()

    Object.keys(errors).map(key => errors[key] = '')

    v.value.$touch()

    if (v.value.$invalid) {
        v.value.$errors.map(error => errors[error.$property] = error.$message)
    } else {
        data.is_loading = true

        await Callback(form?.country?.dial_code + form.phone)
            .then(() => {
                reset()

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

const reset = () => {
    form.phone = ''
    form.country = null

    clear('phone')
    clear('country')
}
</script>

<template>
    <div
        class="modal fade"
        id="callbackModal"
        data-backdrop="static"
        data-keyboard="false"
        tabindex="-1"
        aria-labelledby="callbackModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-5 py-3">
                <div class="d-flex align-items-center" v-if="data.success || data.error">
                    <div
                        class="alert mt-3 w-100 text-center"
                        :class="{'alert-success': data.success, 'alert-danger': data.error}"
                    >{{ data.success ? $t('common.request_sent_successfully') : $t('common.server_error') }}</div>
                </div>
                <form class="d-flex flex-column" v-else>
                    <div class="h2 text-center">{{ $t('common.callback_request_form') }}</div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="callback_country">{{ $t('common.country') }}</label>
                                <select
                                    class="form-control"
                                    id="callback_country"
                                    v-model="form.country"
                                    @input="clear('country')"
                                    :class="{'is-invalid': errors.country.length}"
                                >
                                    <option value="" selected>{{ $t('common.select') }}...</option>
                                    <option
                                        :value="country.code"
                                        v-for="country in siteStore.countries"
                                    >{{ country.name[siteStore.lang] }}</option>
                                </select>
                                <span class="error" v-show-error="errors.country"></span>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="callback_phone">{{ $t('common.phone_number') }}</label>
                                <input
                                    :class="{'is-invalid': errors.phone.length}"
                                    v-model="form.phone"
                                    type="text"
                                    class="form-control"
                                    id="callback_phone"
                                    @input="clear('phone')"
                                >
                                <span class="error" v-show-error="errors.phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="w-100 btn btn-secondary" data-dismiss="modal" @click="reset">{{ $t('common.close') }}</div>
                        </div>
                        <div class="col-6">
                            <btn
                                @click="submit"
                                :is_loading="data.is_loading"
                                type="submit"
                                class="w-100 btn btn-primary"
                            >{{ $t('common.submit') }}</btn>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
