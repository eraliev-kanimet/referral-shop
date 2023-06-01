<script setup lang="ts">
import Categories from "../components/products/categories.vue";
import ArticlesSlider from "../components/articles/articles-slider.vue";
import TestimonialsSlider from "../components/testimonials/testimonials-slider.vue";
</script>

<template>
    <div class="container">
        <div class="intro">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="intro-content">
                        <h1 class="intro-title">
                            <span>{{ $t('common.home.text1') }}</span> {{ $t('common.home.text2') }}
                        </h1>
                        <p class="intro-description lead">{{ $t('common.home.text3') }}</p>
                        <div class="intro-buttons">
                            <router-link class="btn btn-primary btn-lg" :to="{name: 'signup'}">
                                {{ $t('common.sign_up_now') }}
                            </router-link>
                            <router-link class="btn btn-secondary btn-lg" :to="{name: 'faq'}">
                                {{ $t('common.home.text10') }}
                            </router-link>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <div class="intro-image">
                        <img class="intro-image-main" src="../assets/images/main.svg" alt="">
                        <span class="intro-image-text intro-image-text-1">Erectile Dysfunction</span>
                        <span class="intro-image-text intro-image-text-2">Anti Viral</span>
                        <span class="intro-image-text intro-image-text-3">Anti-Acidity</span>
                        <span class="intro-image-text intro-image-text-4">Anti-Depressant</span>
                        <span class="intro-image-text intro-image-text-5">Hair Loss</span>
                        <img class="intro-image-pill-1" src="../assets/images/pill-1.png" alt="">
                        <img class="intro-image-pill-2" src="../assets/images/pill-2.png" alt="">
                        <img class="intro-image-pill-3" src="../assets/images/pill-3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="features my-4 my-lg-5">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col mb-3 mb-lg-0">
                    <div class="features-item features-item-1">
                        <div class="features-item-title">{{ $t('common.home.text4') }}</div>
                        <div class="features-item-description">{{ $t('common.home.text5') }}</div>
                        <router-link :to="{name: 'faq'}" class="features-item-btn btn btn-light">
                            {{ $t('common.more_info') }}
                        </router-link>
                    </div>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <div class="features-item features-item-2">
                        <div class="features-item-title">{{ $t('common.home.text6') }}</div>
                        <div class="features-item-description">{{ $t('common.home.text7') }}</div>
                        <router-link :to="{name: 'faq'}" class="features-item-btn btn btn-light">
                            {{ $t('common.more_info') }}
                        </router-link>
                    </div>
                </div>
                <div class="col">
                    <div class="features-item features-item-3">
                        <div class="features-item-title">{{ $t('common.home.text8') }}</div>
                        <div class="features-item-description">{{ $t('common.home.text9') }}</div>
                        <router-link :to="{name: 'faq'}" class="features-item-btn btn btn-light">
                            {{ $t('common.more_info') }}
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light my-4 my-md-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                <div class="col mt-5 mb-0 mb-lg-5">
                    <div class="pretitle">{{ $t('common.home.welcome_to_site') }}</div>
                    <h2 class="h1">{{ $t('common.home.text11') }}</h2>
                    <p>{{ $t('common.home.text12') }}</p>
                </div>
                <div class="col d-flex flex-column align-items-center">
                    <img
                        class="d-block"
                        src="../assets/images/image-tickets.png"
                        srcset="../assets/images/image-tickets.png 1x, ../assets/images/image-tickets@2x.png 2x"
                        alt=""
                    >
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="h1">{{ $t('common.shop_by_categories') }}</h2>
        <categories/>
        <div class="text-center mb-4 mb-md-5">
            <router-link class="btn btn-primary btn-lg" :to="{name: 'products'}">
                {{ $t('common.view_all_products') }}
            </router-link>
        </div>
        <div class="lovelife my-4 my-md-5 text-center">
            <a class="d-none d-sm-block mx-auto" href="">
                <img class="d-block mx-auto" src="../assets/images/lovelife.png" alt="">
            </a>
            <a class="d-block d-sm-none mx-auto" href="">
                <img class="d-block mx-auto" src="../assets/images/lovelife-vertical.png" alt="">
            </a>
        </div>
        <articles-slider :name="$t('common.from_our_blog')"/>
    </div>
    <div class="testimonials bg-light my-4 my-md-5 py-5">
        <div class="container">
            <div class="pretitle">{{ $t('common.testimonials') }}</div>
            <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                <div class="col">
                    <h2 class="h1 testimonials-heading">{{ $t('common.home.text13') }}</h2>
                </div>
                <div class="col d-flex justify-content-lg-end">
                    <div class="testimonials-heading">{{ $t('common.home.text14') }}</div>
                </div>
            </div>
            <testimonials-slider class="mt-5"/>
        </div>
    </div>
</template>
