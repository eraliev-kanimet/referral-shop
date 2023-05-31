<script setup lang="ts">

import Categories from "../../components/products/categories.vue";
</script>

<template>
    <div class="container">
        <div class="my-4 my-md-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col">
                    <h1>Product categories</h1>
                </div>
                <div class="col">
                    <form class="row no-gutters dashboard-product-search" action="">
                        <div class="col-9 pr-3 position-relative">
                            <input type="text" class="form-control dashboard-product-search-input" placeholder="Search">
                            <i class="icon-search dashboard-product-search-icon"></i>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary w-100">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <categories/>
        </div>
    </div>
</template>

<style scoped>

</style>
