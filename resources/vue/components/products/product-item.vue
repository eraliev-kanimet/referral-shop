<script setup lang="ts">
import {Product} from "../../stores/types";

const {product} = defineProps<{
    product: Product,
    lang: string
}>()

const route = {
    name: 'product', params: {
        slug: product.slug
    }
}
</script>

<template>
    <div class="col">
        <div class="product-single">
            <router-link class="product-single-image" :to="route">
                <img :src="product.images[0]" alt="">
            </router-link>
            <div class="product-single-info">{{ product.category.name[lang] }}</div>
            <div class="product-single-title">{{ product.name[lang] }}</div>
            <div class="product-single-price">${{ product.price }} <small>per pill</small></div>
            <div class="product-single-buttons">
                <router-link class="product-single-add btn btn-primary show-cart" :to="route">
                    {{ $t('common.add_to_cart') }}
                </router-link>
                <a class="product-single-fav btn btn-secondary" role="button">
                    <i class="icon-heart icon-inline"></i>
                </a>
            </div>
        </div>
    </div>
</template>
