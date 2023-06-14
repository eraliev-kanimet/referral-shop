<script setup lang="ts">
import {Category, useSiteStore} from "../../stores/site";

import ProductItem from "../../components/products/product-item.vue";
import Categories from "../../components/products/categories.vue";
import ProductsSearch from "../../components/products/products-search.vue";
import Paginator from "../paginator.vue";

import {Product} from "../../api/products";

const siteStore = useSiteStore()

defineProps<{
    products: Product[],
    category: Category|null,
    page: number,
    total: number,
}>()

const emit = defineEmits<{
    'set-page': [page: number]
}>()

const setPage = (page) => {
    emit('set-page', page)
}
</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <div class="dashboard-sidebar d-none d-xl-block">
                <ul class="dashboard-nav mt-3 mb-4">
                    <li
                        class="dashboard-nav-item"
                        :class="{active: item.slug == category?.slug}" v-for="item in siteStore.categories"
                    >
                        <router-link class="dashboard-nav-link" :to="{name: 'category', params: {slug: item.slug}}">
                            {{ item.name[siteStore.lang] }}
                        </router-link>
                    </li>
                </ul>
            </div>
            <div class="dashboard-content">
                <products-search :title="category ? category.name[siteStore.lang] : $t('common.categories')"/>
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 no-gutters my-4">
                    <product-item :lang="siteStore.lang" v-for="product in products" :key="product.id" :product="product"/>
                </div>
                <paginator :total="total" :page="page" @set-page="setPage" :display="5"/>
                <div class="row row-cols-1 row-cols-md-2 my-4">
                    <div class="col">
                        <div class="referral-item referral-item-1 bg-primary mb-2 mb-md-0">
                            <div class="referral-item-heading">
                                <div class="referral-item-title">{{ $t('common.products_page.text1') }}</div>
                                <div class="referral-item-num">15%</div>
                                <a class="btn btn-secondary w-100" href="">{{ $t('common.read_more') }}</a>
                            </div>
                            <div class="referral-item-content">{{ $t('common.products_page.text2') }}</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="referral-item referral-item-2">
                            <div class="referral-item-heading">
                                <div class="referral-item-title">{{ $t('common.products_page.text3') }}</div>
                                <div class="referral-item-num text-secondary">20%</div>
                                <a class="btn btn-primary w-100" href="">{{ $t('common.read_more') }}</a>
                            </div>
                            <div class="referral-item-content">{{ $t('common.products_page.text4') }}</div>
                        </div>
                    </div>
                </div>
                <div class="my-4 my-lg-5">
                    <h2 class="h1">{{ $t('common.shop_by_categories') }}</h2>
                    <categories :data="siteStore.some_categories" :lang="siteStore.lang"/>
                    <div class="text-center mb-4 mb-md-5">
                        <router-link class="btn btn-primary btn-lg" :to="{name: 'categories'}">
                            {{ $t('common.view_all_categories') }}
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
