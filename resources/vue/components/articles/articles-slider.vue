<script setup>
import VueTinySlider from '@mentorkadriu/vue-tiny-slider'
import ArticlesItem from "./articles-item.vue";

import {useArticleStore} from "../../stores/article.ts";

const articleStore = useArticleStore()

const options = {
    items: 1,
    gutter: 30,
    prevButton: '.blog-slider-prev',
    nextButton: '.blog-slider-next',
    nav: false,
    loop: false,
    lazyload: true,
    responsive: {
        768: {
            items: 2
        },
        992: {
            items: 3
        },
        1200: {
            items: 4
        }
    }
}

defineProps({
    name: String
})
</script>

<template>
    <div class="d-flex flex-wrap align-items-center justify-content-between">
        <h2 class="h1">{{ name }}</h2>
        <div>
            <i class="blog-slider-prev icon-arrow-left"></i>
            <i class="blog-slider-next icon-arrow-right"></i>
        </div>
    </div>
    <vue-tiny-slider class="blog-slider my-1 my-md-4" :options="options">
        <div v-for="article in articleStore.articles" :key="article.id">
            <articles-item :article="article"/>
        </div>
    </vue-tiny-slider>
</template>
