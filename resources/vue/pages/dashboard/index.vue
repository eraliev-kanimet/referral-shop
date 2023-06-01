<script setup lang="ts">
import ProductItem from "../../components/products/product-item.vue";
import ArticlesItem from "../../components/articles/articles-item.vue";

import {useArticlesStore} from "../../stores/articles";

const articlesStore = useArticlesStore()
</script>

<template>
    <div class="mb-4 mb-lg-5">
        <h1>Latest orders</h1>
        <div class="table-responsive my-3">
            <table class="table">
                <thead>
                <tr>
                    <th>Order #</th>
                    <th>Date</th>
                    <th>Products</th>
                    <th>Price</th>
                    <th>Status</th>
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
        <a class="btn btn-primary" href="">See all orders</a>
    </div>
    <div class="mb-4 mb-lg-5">
        <div class="h1">Referral statistics</div>
        <div class="dashboard-stats mt-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col mb-3 mb-lg-0">
                    <div class="dashboard-stats-item bg-primary">
                        <div class="dashboard-stats-icon text-primary"><i class="icon-referrals"></i></div>
                        <div class="dashboard-stats-content">
                            <div class="dashboard-stats-title">Referrals</div>
                            <div class="dashboard-stats-num">23</div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <div class="dashboard-stats-item">
                        <div class="dashboard-stats-icon"><i class="icon-wallet"></i></div>
                        <div class="dashboard-stats-content">
                            <div class="dashboard-stats-title">Total earnings</div>
                            <div class="dashboard-stats-num">$380.90</div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <div class="dashboard-stats-item bg-info">
                        <div class="dashboard-stats-icon text-info"><i class="icon-earnings"></i></div>
                        <div class="dashboard-stats-content">
                            <div class="dashboard-stats-title">Available</div>
                            <div class="dashboard-stats-num">$280.90</div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <div class="dashboard-stats-item bg-secondary">
                        <div class="dashboard-stats-icon text-secondary"><i class="icon-spent"></i></div>
                        <div class="dashboard-stats-content">
                            <div class="dashboard-stats-title">Spent</div>
                            <div class="dashboard-stats-num">$0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4 mb-lg-5">
        <div class="h1">Today top offers</div>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 no-gutters my-4">
            <product-item v-for="i in 10"/>
        </div>
        <a class="btn btn-primary" href="">See all products</a>
    </div>
    <div class="mb-4 mb-lg-5">
        <div class="h1">You should read this</div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 my-4">
            <div class="col mb-4" v-for="article in articlesStore.articles">
                <articles-item :article="article"/>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
