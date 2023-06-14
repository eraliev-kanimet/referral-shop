<script setup lang="ts">
import {useSiteStore} from "../../stores/site";
import {useArticleStore} from "../../stores/article";

import Categories from "../../components/products/categories.vue";
import ArticlesSlider from "../../components/articles/articles-slider.vue";

const siteStore = useSiteStore()
const articleStore = useArticleStore()
</script>

<template>
    <div class="container">
        <div class="my-4">
            <img class="d-block" src="../../assets/tmp/post-image.jpg" alt="">
        </div>
        <div class="row">
            <div class="col-12 col-lg-9 mb-4 mb-lg-0">
                <div class="post">
                    <h1>New Subgroups for Prostate Cancer Found</h1>
                    <div class="post-meta my-3 text-muted">
                        <div class="post-date">Posted on: <span>14-oct-2020</span></div>
                        <div class="post-tags">Tags: <a href="">Medicine</a> <a href="">Prostate</a></div>
                    </div>
                    <p>Research at Weill Cornell Medicine on two new prostate cancer subtypes could lead to new treatments that can help many men falling into these identifiable groups.</p>
                    <h2>News of the discovery was released on May 31</h2>
                    <p>It was a mixed bag of news as these two newly identified subgroups are resistant to treatment. However, identifying them and their characteristics will inevitably lead to new and different treatments, according to scientists.</p>
                    <blockquote class="blockquote">
                        <p class="mb-0">This offers a lot of hope for many men who are diagnosed with prostate cancer. New treatments can soon increase the odds for those who are carrying cancer cells with the two subgroups, which are resistant to treatment.</p>
                    </blockquote>
                    <h2>About Prostate Cancers</h2>
                    <p>Prostate cancer is one of the slower-growing types and already has many treatment options. These types of cancers need male hormones like testosterone to grow so reducing those can help fight the disease. Then, some resist current treatments.</p>
                    <h3>Two New Subgroups</h3>
                    <p>The two newly identified cancer subtypes are SCL and WNT. Researchers studied the RNA and DNA of 40 tumor samples, along with their chromatin. Chromatin is a mix of proteins and DNA that wraps up chromosomes in a cell. Looking at the chromatin helped the researchers identify the four types of prostate cancer cells, including the two new varieties. The scientists then looked at treatment resistance and saw SCL was in 22 to 30 percent of cases. WNT was only five to seven percent.</p>
                    <p>Share with your friends! (paste AddThis code below)</p>
                    <img src="" alt="">
                    <div class="post-nav mt-4 pt-3 border-top">
                        <div class="row row-cols-2">
                            <div class="col post-nav-prev text-left">
                                <a href=""><i class="icon-arrow-left mr-1"></i>{{ $t('common.prev_post') }}</a>
                            </div>
                            <div class="col post-nav-next text-right">
                                <a href="">{{ $t('common.next_post') }}<i class="icon-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <h2>{{ $t('common.popular_articles') }}</h2>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-1 mb-4">
                    <div class="col" v-for="article in articleStore.articles">
                        <div class="post-widget row no-gutters py-4 border-bottom">
                            <div class="col-5 pr-3">
                                <router-link :to="article.route">
                                    <img :src="article.image" alt="">
                                </router-link>
                            </div>
                            <div class="col-7">
                                <router-link :to="article.route" class="post-widget-title text-dark">
                                    {{ article.name }}
                                </router-link>
                                <span class="post-widget-date text-muted">{{ article.date }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="product-preview mt-4 p-3 border d-flex align-items-center" href="">
                    <div class="product-preview-image pr-2"><img src="../../assets/tmp/viagra.jpg" alt=""></div>
                    <div class="product-preview-content">
                        <div class="product-preview-title text-secondary text-uppercase"></div>
                        <div class="product-preview-description text-dark my-3"></div>
                        <div class="btn btn-primary">{{ $t('common.shop_now') }}</div>
                    </div>
                </a>
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
