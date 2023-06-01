<script setup lang="ts">
import {ArticlesItem} from "../../stores/types";

defineProps<{
    article: ArticlesItem
}>()
</script>

<template>
    <div class="blog-card">
        <router-link class="blog-card-image" :to="article.route">
            <img :src="article.image" alt="">
        </router-link>
        <div class="blog-card-meta text-muted">
            {{ $t('common.posted_on') }}: <span>{{ article.date }}</span>
        </div>
        <div class="blog-card-excerpt">{{ article.name }}</div>
        <router-link class="blog-card-more" :to="article.route">
            <i class="icon-plus"></i>{{ $t('common.read_more') }}
        </router-link>
    </div>
</template>
