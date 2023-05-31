<script setup lang="ts">

import ProductItem from "../components/products/product-item.vue";
</script>

<template>
    <h1>Favorites</h1>
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 no-gutters my-4">
        <product-item v-for="i in 12"/>
    </div>
<!--    paginator-->
</template>

<style scoped>

</style>
