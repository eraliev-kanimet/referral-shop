<script setup lang="ts">
import {onMounted, reactive, watch} from "vue";
import {useRoute, useRouter} from "vue-router";

import ProductsPage from "../../components/products/products-page.vue";

import {Category} from "../../stores/types";

import {ApiCategory, Product} from "../../api/products";

const route = useRoute()
const router = useRouter()

const data = reactive<{
    slug: string
    category: Category|null,
    products: Product[],
    total: number,
    page: number,
    loading: boolean
}>({
    slug: route.params.slug as string,
    category: null,
    products: [],
    total: 0,
    page: route.query.page ? Number(route.query.page) : 1,
    loading: true
})

const setProducts = async (page: number) => {
    await ApiCategory(data.slug, page).then(response => {
        data.category = response.category
        data.products = response.products.data
        data.total = response.products.last_page
        data.loading = false
        data.page = page
    })
}

const setPage = async (page) => {
    if (!data.loading) {
        data.loading = true

        router.push({
            name: 'category',
            params: {
                slug: data.slug
            },
            query: {
                page: page
            }
        }).then(async () => {
            await setProducts(page)
        })
    }
}

watch(() => route.params.slug, async () => {
    data.page = 1
    data.slug = route.params.slug as string

    await setProducts(data.page)
})

onMounted(async () => {
    await setProducts(data.page)
})
</script>

<template>
    <products-page
        @set-page="setPage"
        :page="data.page"
        :total="data.total"
        :category="data.category"
        :products="data.products"
    />
</template>
