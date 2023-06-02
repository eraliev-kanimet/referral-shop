<script setup lang="ts">

</script>

<template>
    <div class="row row-cols-1 row-cols-md-2 align-items-center">
        <div class="col">
            <h1>{{ $t('common.categories') }}</h1>
        </div>
        <div class="col">
            <form class="row no-gutters dashboard-product-search" action="">
                <div class="col-9 pr-3 position-relative">
                    <input type="text" class="form-control dashboard-product-search-input" :placeholder="$t('common.search')">
                    <i class="icon-search dashboard-product-search-icon"></i>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary w-100">{{ $t('common.search') }}</button>
                </div>
            </form>
        </div>
    </div>
</template>
