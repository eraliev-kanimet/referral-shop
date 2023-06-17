<script setup lang="ts">
import {onMounted, reactive} from "vue";
import {useRoute, useRouter} from "vue-router";

import ArticlesItem from "../../components/articles/articles-item.vue";
import Paginator from "../../components/paginator.vue";

import {Article} from "../../stores/types";

import {ApiArticles} from "../../api/articles";
import {useSiteStore} from "../../stores/site";

const route = useRoute()
const router = useRouter()
const siteStore = useSiteStore()

const data = reactive<{
    articles: Article[],
    total: number,
    page: number,
    loading: boolean
}>({
    articles: [],
    total: 0,
    page: route.query.page ? Number(route.query.page) : 1,
    loading: true
})

const setArticles = async (page: number) => {
    await ApiArticles(page).then(response => {
        data.articles = response.data
        data.total = response.last_page
        data.loading = false
        data.page = page
    })
}

const setPage = async (page) => {
    if (!data.loading) {
        data.loading = true

        router.push({
            name: 'articles',
            query: {
                page: page
            }
        }).then(async () => {
            console.log(page)
            await setArticles(page)
        })
    }
}

onMounted(async () => {
    await setArticles(data.page)
})
</script>

<template>
    <div class="container">
        <div class="my-4 my-lg-5">
            <div class="heading-short">
                <h1>{{ $t('common.articles.text1') }}</h1>
            </div>
            <p v-html="$t('common.articles.text2')"></p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 my-4">
                <div class="col mb-4" v-for="article in data.articles">
                    <articles-item :article="article" :lang="siteStore.lang"/>
                </div>
            </div>
            <paginator class="my-4" :total="data.total" :page="data.page" @set-page="setPage" :display="5"/>
        </div>
    </div>
</template>
