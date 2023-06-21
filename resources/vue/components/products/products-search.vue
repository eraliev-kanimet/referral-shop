<script setup lang="ts">
import {useRouter} from "vue-router";
import {ref} from "vue";

defineProps<{
    title: string
}>()

const router = useRouter()

const value = ref('')

const search = async () => {
    if (value.value.length) {
        await router.push({
            name: 'products',
            query: {
                q: value.value
            }
        })
    }
}
</script>

<template>
    <div class="row row-cols-1 row-cols-md-2 align-items-center">
        <div class="col">
            <h1>{{ title }}</h1>
        </div>
        <div class="col">
            <form class="row no-gutters dashboard-product-search" action="">
                <div class="col-9 pr-3 position-relative">
                    <input
                        v-model="value"
                        type="text"
                        class="form-control dashboard-product-search-input"
                        :placeholder="$t('common.search')"
                    >
                    <i class="icon-search dashboard-product-search-icon"></i>
                </div>
                <div class="col-3">
                    <button
                        type="submit"
                        class="btn btn-primary w-100"
                        @click.prevent="search"
                    >{{ $t('common.search') }}</button>
                </div>
            </form>
        </div>
    </div>
</template>
