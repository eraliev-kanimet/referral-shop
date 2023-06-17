<script setup lang="ts">
import {onMounted, ref, watch} from "vue";
import {useRoute, useRouter} from "vue-router";
import {useSiteStore} from "../../stores/site";

import Categories from "../../components/products/categories.vue";
import ArticlesSlider from "../../components/articles/articles-slider.vue";

import {ApiArticle, ArticleShow} from "../../api/articles";

const route = useRoute()
const router = useRouter()
const siteStore = useSiteStore()

const article = ref<ArticleShow>({
    id: 0,
    name: {en: '', de: '', fr: '', es: '', it: ''},
    slug: '',
    image: '',
    date: '',
    content: {en: '', de: '', fr: '', es: '', it: ''},
    tags: [],
    prev_article_slug: '',
    next_article_slug: '',
})

const setArticle = async () => {
    await ApiArticle(route.params.slug as string).then(response => {
        article.value = response.data
    }).catch(() => {
        router.push({name: 'error'})
    })
}

watch(() => route.params.slug, async () => {
    await setArticle()
})

onMounted(async () => {
    await setArticle()
})
</script>

<template>
    <div class="container">
        <div class="my-4 d-flex justify-content-center">
            <img class="d-block" :src="article.image" alt="">
        </div>
        <div class="row">
            <div class="col-12 col-lg-9 mb-4 mb-lg-0">
                <div class="post">
                    <h1>{{ article.name[siteStore.lang] }}</h1>
                    <div class="post-meta my-3 text-muted">
                        <div class="post-date">{{ $t('common.posted_on') }}: <span>{{ article.date }}</span></div>
                        <div class="post-tags">
                            {{ $t('common.tags') }}: <a class="ml-1" role="button" v-for="tag in article.tags">{{ tag }}</a>
                        </div>
                    </div>
                    <div v-html="article.content[siteStore.lang]"></div>
                    <div class="post-nav mt-4 pt-3 border-top">
                        <div class="row row-cols-2">
                            <div class="col post-nav-prev text-left">
                                <router-link
                                    v-if="article.prev_article_slug"
                                    :to="{name: 'article', params: {slug: article.prev_article_slug}}"
                                >
                                    <i class="icon-arrow-left mr-1"></i>{{ $t('common.prev_post') }}
                                </router-link>
                            </div>
                            <div class="col post-nav-next text-right">
                                <router-link
                                    v-if="article.next_article_slug"
                                    :to="{name: 'article', params: {slug: article.next_article_slug}}"
                                >
                                    {{ $t('common.next_post') }}<i class="icon-arrow-right ml-1"></i>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <h2>{{ $t('common.popular_articles') }}</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-1 mb-4">
                    <div class="col" v-for="article in siteStore.articles">
                        <div class="post-widget row no-gutters py-4 border-bottom">
                            <div class="col-5 pr-3">
                                <router-link :to="{name: 'article', params: {slug: article.slug}}">
                                    <img :src="article.image" alt="">
                                </router-link>
                            </div>
                            <div class="col-7">
                                <router-link
                                    :to="{name: 'article', params: {slug: article.slug}}"
                                    class="post-widget-title text-dark"
                                >
                                    {{ article.name[siteStore.lang] }}
                                </router-link>
                                <span class="post-widget-date text-muted">{{ article.date }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <router-link class="product-preview mt-4 p-3 border d-flex align-items-center" :to="{name: 'products'}">
                    <div class="product-preview-image pr-2"><img src="../../assets/tmp/viagra.jpg" alt=""></div>
                    <div class="product-preview-content">
                        <div class="product-preview-title text-secondary text-uppercase"></div>
                        <div class="product-preview-description text-dark my-3"></div>
                        <div class="btn btn-primary">{{ $t('common.shop_now') }}</div>
                    </div>
                </router-link>
            </div>
        </div>
        <div class="my-4 my-lg-5">
            <articles-slider :name="$t('common.related_articles')"/>
        </div>
        <div class="my-4 my-lg-5">
            <h2 class="h1">{{ $t('common.shop_by_categories') }}</h2>
            <categories :data="siteStore.some_categories" :lang="siteStore.lang"/>
        </div>
    </div>
</template>
