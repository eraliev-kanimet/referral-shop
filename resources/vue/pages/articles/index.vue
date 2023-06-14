<script setup lang="ts">
import ArticlesItem from "../../components/articles/articles-item.vue";
import {useArticleStore} from "../../stores/article";

const articleStore = useArticleStore()
</script>

<template>
    <div class="container">
        <div class="my-4 my-lg-5">
            <div class="heading-short">
                <h1>{{ $t('common.articles.text1') }}</h1>
            </div>
            <p v-html="$t('common.articles.text2')"></p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 my-4">
                <div class="col mb-4" v-for="article in articleStore.articles">
                    <articles-item :article="article"/>
                </div>
            </div>
            <ul class="paginator my-4">
                <li><a class="btn btn-lg active" href="">1</a></li>
                <li><a class="btn btn-lg" href="">2</a></li>
                <li><a class="btn btn-lg" href="">3</a></li>
                <li><a class="btn btn-lg" href="">4</a></li>
                <li><a class="btn btn-lg" href="">5</a></li>
                <li>...</li>
                <li><a class="btn btn-lg" href="">10</a></li>
                <li><a class="btn btn-lg" href="">Next</a></li>
            </ul>
        </div>
    </div>
</template>
