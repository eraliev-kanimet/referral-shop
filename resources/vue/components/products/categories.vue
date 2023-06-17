<script setup lang="ts">
import {Category} from "../../stores/types";

defineProps<{
    data: Category[],
    lang: string
}>()
</script>

<template>
    <div class="categories my-3 my-md-4 row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 no-gutters">
        <router-link
            v-for="item in data" :to="{name: 'category', params: {slug: item.slug}}"
            class="categories-item"
            :key="item.id"
        >
            <div class="categories-item-content">
                <div class="categories-item-image">
                    <img :src="item.image" alt="">
                </div>
                <div class="categories-item-title">{{ item.name[lang] }}</div>
                <div class="categories-item-amount text-muted">
                    {{ item.products }} {{ $t('common.products').toLowerCase() }}
                </div>
            </div>
        </router-link>
    </div>
</template>
