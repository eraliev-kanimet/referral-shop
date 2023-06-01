<script setup lang="ts">
import ProductItem from "../../components/products/product-item.vue";
import ArticlesItem from "../../components/articles/articles-item.vue";
import DashboardStatistics from "../../components/dashboard/dashboard-statistics.vue";

import {useArticlesStore} from "../../stores/articles";

const articlesStore = useArticlesStore()
</script>

<template>
    <div class="mb-4 mb-lg-5">
        <h1>{{ $t('common.latest_orders') }}</h1>
        <div class="table-responsive my-3">
            <table class="table">
                <thead>
                <tr>
                    <th>{{ $t('common.order') }} #</th>
                    <th>{{ $t('common.date') }}</th>
                    <th>{{ $t('common.products') }}</th>
                    <th>{{ $t('common.price') }}</th>
                    <th>{{ $t('common.status') }}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1234567890</td>
                    <td class="text-nowrap">14.07.2022 11:52 PM</td>
                    <td class="text-nowrap">Viagra 1mg x 30, Cialis 1mg x 60, etc...</td>
                    <td class="font-weight-bold">$180.90</td>
                    <td class="text-success text-nowrap"><i class="icon-approved icon-inline icon-sm"></i> Approved</td>
                    <td><a class="text-decoration-none" href=""><i class="icon-edit"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <router-link class="btn btn-primary" :to="{name: 'orders'}">{{ $t('common.see_all_orders') }}</router-link>
    </div>
    <div class="mb-4 mb-lg-5">
        <div class="h1">{{ $t('common.referral_statistics') }}</div>
        <dashboard-statistics/>
    </div>
    <div class="mb-4 mb-lg-5">
        <div class="h1">{{ $t('common.today_top_offers') }}</div>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 no-gutters my-4">
            <product-item v-for="i in 10"/>
        </div>
        <router-link class="btn btn-primary" :to="{name: 'products'}">
            {{ $t('common.see_all_products') }}
        </router-link>
    </div>
    <div class="mb-4 mb-lg-5">
        <div class="h1">{{ $t('common.you_should_read_this') }}</div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 my-4">
            <div class="col mb-4" v-for="article in articlesStore.articles">
                <articles-item :article="article"/>
            </div>
        </div>
    </div>
</template>
