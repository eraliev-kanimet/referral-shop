<script setup>
import VueTinySlider from '@mentorkadriu/vue-tiny-slider'

import {useSiteStore} from "../../stores/site.ts";

const options = {
    items: 1,
    gutter: 30,
    controls: false,
    nav: true,
    navPosition: 'bottom',
    loop: false,
    responsive: {
        768: {
            items: 2
        },
        992: {
            items: 3
        }
    }
}

const siteStore = useSiteStore()
</script>

<template>
    <vue-tiny-slider class="testimonials-slider" :options="options">
        <div v-for="item in siteStore.testimonials">
            <div class="testimonials-item">
                <p class="testimonials-item-text">{{ item.content }}</p>
                <img v-if="item.avatar" class="testimonials-item-image" :src="item.avatar" alt="">
                <div v-else class="testimonials-list-author-avatar mr-0">{{ item.initial }}</div>
                <div class="testimonials-item-author">{{ item.name }}</div>
                <div class="testimonials-item-origin text-muted">{{ item.address }}</div>
                <img class="testimonials-item-rating" src="../../assets/images/stars.svg" alt="">
            </div>
        </div>
    </vue-tiny-slider>
</template>
