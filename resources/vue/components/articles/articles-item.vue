<script setup lang="ts">
import {Article} from "../../stores/types";

defineProps<{
    article: Article,
    lang: string
}>()
</script>

<template>
    <div class="blog-card">
        <router-link class="blog-card-image" :to="{name: 'article', params: {slug: article.slug}}">
            <img :src="article.image" alt="">
        </router-link>
        <div class="blog-card-meta text-muted">
            {{ $t('common.posted_on') }}: <span>{{ article.date }}</span>
        </div>
        <div class="blog-card-excerpt">{{ article.name[lang] }}</div>
        <router-link class="blog-card-more" :to="{name: 'article', params: {slug: article.slug}}">
            <i class="icon-plus"></i>{{ $t('common.read_more') }}
        </router-link>
    </div>
</template>
