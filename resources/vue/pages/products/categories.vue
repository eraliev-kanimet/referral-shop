<script setup lang="ts">
import {useSiteStore} from "../../stores/site";

import Categories from "../../components/products/categories.vue";
import ProductsSearch from "../../components/products/products-search.vue";

const siteStore = useSiteStore()
</script>

<template>
    <div class="container">
        <div class="my-4 my-md-5">
            <products-search :title="$t('common.categories')"/>
            <categories :data="siteStore.categories" :lang="siteStore.lang"/>
        </div>
    </div>
</template>
