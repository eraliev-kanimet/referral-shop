<script setup lang="ts">

import Categories from "../../components/products/categories.vue";
import ProductsSearch from "../../components/products/products-search.vue";
</script>

<template>
    <div class="container">
        <div class="my-4 my-md-5">
            <products-search/>
            <categories/>
        </div>
    </div>
</template>
