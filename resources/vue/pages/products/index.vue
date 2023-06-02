<script setup lang="ts">

import ProductItem from "../../components/products/product-item.vue";
import Categories from "../../components/products/categories.vue";
import ProductsSearch from "../../components/products/products-search.vue";
</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <div class="dashboard-sidebar d-none d-xl-block">
                <ul class="dashboard-nav mt-3 mb-4">
                    <li class="dashboard-nav-item" v-for="i in 20"><a class="dashboard-nav-link" href="">Cialis Super Active</a></li>
                </ul>
            </div>
            <div class="dashboard-content">
                <products-search/>
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 no-gutters my-4">
                    <product-item v-for="i in 16"/>
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
                <div class="row row-cols-1 row-cols-md-2 my-4">
                    <div class="col">
                        <div class="referral-item referral-item-1 bg-primary mb-2 mb-md-0">
                            <div class="referral-item-heading">
                                <div class="referral-item-title">{{ $t('common.products_page.text1') }}</div>
                                <div class="referral-item-num">15%</div>
                                <a class="btn btn-secondary w-100" href="">{{ $t('common.read_more') }}</a>
                            </div>
                            <div class="referral-item-content">{{ $t('common.products_page.text2') }}</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="referral-item referral-item-2">
                            <div class="referral-item-heading">
                                <div class="referral-item-title">{{ $t('common.products_page.text3') }}</div>
                                <div class="referral-item-num text-secondary">20%</div>
                                <a class="btn btn-primary w-100" href="">{{ $t('common.read_more') }}</a>
                            </div>
                            <div class="referral-item-content">{{ $t('common.products_page.text4') }}</div>
                        </div>
                    </div>
                </div>
                <div class="my-4 my-lg-5">
                    <h2 class="h1">{{ $t('common.shop_by_categories') }}</h2>
                    <categories/>
                    <div class="text-center mb-4 mb-md-5">
                        <router-link class="btn btn-primary btn-lg" :to="{name: 'categories'}">
                            {{ $t('common.view_all_categories') }}
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
