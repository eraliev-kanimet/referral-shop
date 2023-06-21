<script setup lang="ts">
import {onMounted, reactive, watch} from "vue";
import {useRoute, useRouter} from "vue-router";

import ProductsPage from "../../components/products/products-page.vue";

import {ApiProducts} from "../../api/products";
import {Product} from "../../stores/types";

const route = useRoute()
const router = useRouter()

const data = reactive<{
    products: Product[],
    total: number,
    page: number,
    query: string,
    loading: boolean
}>({
    products: [],
    total: 0,
    page: route.query.page ? Number(route.query.page) : 1,
    query: route.query.q as string ?? '',
    loading: true
})

const setProducts = async (page: number) => {
    await ApiProducts({
        page: page,
        q: data.query
    }).then(response => {
        data.products = response.data
        data.total = response.last_page
        data.loading = false
        data.page = page
    })
}

watch(() => route.query.q, async () => {
    if (route.name == 'products') {
        data.query = route.query.q as string
        data.page = 1

        await setProducts(data.page)
    }
})

onMounted(async () => {
    await setProducts(data.page)
})

const setPage = async (page) => {
    if (!data.loading) {
        data.loading = true

        router.push({
            name: 'products',
            query: {
                page: page,
                q: data.query
            }
        }).then(async () => {
            await setProducts(page)
        })
    }
}
</script>

<template>
    <products-page
        @set-page="setPage"
        :page="data.page"
        :total="data.total"
        :category="null"
        :products="data.products"
    />
</template>
