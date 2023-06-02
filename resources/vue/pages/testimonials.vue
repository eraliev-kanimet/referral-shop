<script setup lang="ts">
import {useSiteStore} from "../stores/site";

const siteStore = useSiteStore()
</script>

<template>
<div class="container my-4 my-lg-5">
    <h1>{{ $t('common.testimonials') }}</h1>
    <div class="testimonials-list my-4">
        <div class="testimonials-list-item border mb-3" v-for="item in siteStore.testimonials">
            <div class="row">
                <div class="col-12 col-md-3 mb-3 mb-md-0">
                    <div class="testimonials-list-author">
                        <div class="testimonials-list-author-avatar">
                            <img v-if="item.avatar" :src="item.avatar" alt="">
                            <span v-else>{{ item.initial }}</span>
                        </div>
                        <div class="testimonials-list-author-content">
                            <div class="testimonials-list-author-name">{{ item.name }}</div>
                            <div class="testimonials-list-author-origin text-muted">{{ item.address }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="testimonials-list-content">{{ item.content }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
