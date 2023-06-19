<script setup lang="ts">
import {onMounted, reactive, ref, watch} from "vue";
import {useRoute, useRouter} from "vue-router";

import {useSiteStore} from "../../stores/site";
import {ApiProduct} from "../../api/products";
import {ProductShow} from "../../stores/types";

import Preloader from "../../components/layouts/preloader.vue";

const route = useRoute()
const router = useRouter()
const siteStore = useSiteStore()

const product = ref<ProductShow>({
    id: 0,
    name: {en: '', de: '', fr: '', es: '', it: ''},
    slug: '',
    images: [],
    price: 0,
    category: {
        id: 0,
        name: {en: '', de: '', fr: '', es: '', it: ''},
        slug: '',
        image: '',
        products: 0
    },
    short_desc: {en: '', de: '', fr: '', es: '', it: ''},
    desc: {en: '', de: '', fr: '', es: '', it: ''},
    seo: {
        title: {en: '', de: '', fr: '', es: '', it: ''},
        desc: {en: '', de: '', fr: '', es: '', it: ''},
    },
    active_ingredients: [],
    extra_other_names: [],
    packs: [],
})

const data = reactive<{
    loading: boolean,
    dose: number,
}>({
    loading: true,
    dose: 0,
})

const setProduct = async () => {
    await ApiProduct(route.params.slug as string)
        .then(response => {
            product.value = response.data
            data.dose = product.value.packs[0]?.dose ?? 0

            data.loading = false
        }).catch(() => {
            router.push({name: 'error'})
        })
}

const setDose = (dose: number) => {
    data.dose = dose
}

watch(() => route.params.slug, async () => {
    if (route.name == 'product') {
        data.loading = true

        await setProduct()
    }
})

onMounted(async () => {
    await setProduct()
})
</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <div class="dashboard-sidebar d-none d-xl-block">
                <div class="mb-4 h3">{{ $t('common.categories') }}:</div>
                <ul class="dashboard-nav mt-3 mb-4">
                    <li class="dashboard-nav-item">
                        <router-link class="dashboard-nav-link" :to="{name: 'products'}">
                            {{ $t('common.bestsellers') }}
                        </router-link>
                    </li>
                    <li class="dashboard-nav-item" :key="category.id" v-for="category in siteStore.categories">
                        <router-link class="dashboard-nav-link" :to="{name: 'category', params: {slug: category.slug}}">
                            {{ category.name[siteStore.lang] }}
                        </router-link>
                    </li>
                </ul>
            </div>
            <preloader class="dashboard-content" v-if="data.loading"/>
            <div class="dashboard-content" v-else>
                <div class="row mb-4 mb-lg-5">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="product-gallery">
                            <div class="product-gallery-preview border rounded">
                                <div class="product-gallery-image">
                                    <div><img :src="product.images[0]" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <h1>{{ product.name[siteStore.lang] }}</h1>
                        <div class="my-3">
                            <div class="product-prop my-2">
                                <span class="product-prop-label text-muted">
                                    {{ $t('common.product_page.text1') }}:
                                </span>
                                <a role="button" class="ml-1"
                                   v-for="ingredient in product.active_ingredients">{{ ingredient }}</a>
                            </div>
                            <div class="product-prop my-2">
                                <span class="product-prop-label text-muted">
                                    {{ $t('common.product_page.text2') }}:
                                </span>
                                <span class="text-success ml-1">
                                    {{ $t('common.product_page.text3') }}
                                    ({{ product.packs.length }} {{ $t('common.product_page.text4') }})
                                </span>
                            </div>
                            <div class="product-prop my-2">
                                <span class="product-prop-label text-muted">
                                    {{ $t('common.product_page.text5') }}:
                                </span>
                                <div class="product-tags">
                                    <div class="product-tags-content collapse" id="productTags">
                                        <a
                                            role="button"
                                            class="mr-1"
                                            v-for="extra_other_name in product.extra_other_names"
                                        >{{ extra_other_name }}</a>
                                    </div>
                                    <button
                                        class="btn btn-primary product-tags-btn collapsed"
                                        data-toggle="collapse"
                                        data-target="#productTags"
                                        aria-expanded="false"
                                        aria-controls="productTags"
                                    ><i class="icon-minus icon-inline"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-description border-top pt-3 my-3"
                             v-html="product.short_desc[siteStore.lang]"></div>
                        <div class="product-payment">
                            <div class="product-prop-label text-muted mr-2">{{ $t('common.product_page.text6') }}:</div>
                            <div class="footer-payment">
                                <div><img src="../../assets/images/visa.svg" alt=""></div>
                                <div><img src="../../assets/images/mastercard.svg" alt=""></div>
                                <div><img src="../../assets/images/discover.svg" alt=""></div>
                                <div><img src="../../assets/images/amex.svg" alt=""></div>
                                <div><img src="../../assets/images/sepa.svg" alt=""></div>
                                <div><img src="../../assets/images/paypal.svg" alt=""></div>
                                <div><img src="../../assets/images/bitcoin.svg" alt=""></div>
                                <div><img src="../../assets/images/tether.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h2">{{ $t('common.product_page.text7') }}</div>
                <div class="table-responsive my-3">
                    <table class="table table-xs">
                        <tbody>
                        <tr>
                            <td><img src="../../assets/images/airmail.svg" style="min-width: 24px;" alt=""></td>
                            <td><span class="flag-icon" :class="`flag-icon-${siteStore.country}`"></span></td>
                            <td>$12.95</td>
                            <td>
                                {{ $t('common.product_page.text8') }}:
                                <strong>14-21 {{ $t('common.product_page.text10') }}</strong>
                            </td>
                            <td>{{ $t('common.product_page.text9') }}</td>
                        </tr>
                        <tr>
                            <td><img src="../../assets/images/ems.svg" style="min-width: 24px;" alt=""></td>
                            <td><span class="flag-icon" :class="`flag-icon-${siteStore.country}`"></span></td>
                            <td>$29.95</td>
                            <td>
                                {{ $t('common.product_page.text8') }}:
                                <strong>3-8 {{ $t('common.product_page.text10') }}</strong>
                            </td>
                            <td>{{ $t('common.product_page.text9') }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tabs product-tabs my-3">
                    <div class="d-flex flex-wrap mb-lg-3">
                        <div class="pr-2 d-block">
                            <div class="h2 mt-2 mb-1">{{ product.name[siteStore.lang] }},
                                {{ $t('common.select_dosage') }}:
                            </div>
                        </div>
                        <ul class="tabs-nav tabs-nav-pills">
                            <li
                                v-for="group in product.packs"
                                :class="{'active': data.dose == group.dose}"
                                @click="setDose(group.dose)"
                            >
                                <a
                                    class="btn btn-light"
                                >{{ group.dose }}{{ group.measure }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tabs-panels">
                        <div
                            v-for="group in product.packs"
                            :id="group.dose"
                            :class="{'active': data.dose == group.dose}"
                            class="tabs-panel"
                        >
                            <div class="table-responsive">
                                <table class="table table-product table-hoverable table-xs">
                                    <thead>
                                    <tr>
                                        <th class="text-nowrap">{{ $t('common.package') }}</th>
                                        <th class="text-nowrap">{{ $t('common.per_pill') }}</th>
                                        <th class="text-nowrap">{{ $t('common.total_price') }}</th>
                                        <th class="text-nowrap">{{ $t('common.save') }}</th>
                                        <th class="text-nowrap text-right">{{ $t('common.action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="pack in group.items">
                                        <td class="font-weight-bold text-lowercase">
                                            {{ pack.dose + pack.measure }} x
                                            {{ pack.quantity + ' ' + $t('common.pills') }}
                                        </td>
                                        <td>${{ (pack.price / pack.quantity).toFixed(2) }}</td>
                                        <td>
                                            <div><strong>${{ pack.price }}</strong></div>
                                        </td>
                                        <td :class="{'text-secondary': Number(pack.save) !== 0}">
                                            {{ Number(pack.save) === 0 ? '-' : '$' + pack.save }}
                                        </td>
                                        <td class="text-right">
                                            <a class="btn btn-primary px-2 px-lg-3" role="button">
                                                <i class="icon-cart icon-inline d-md-none"></i>
                                                <span class="d-none d-md-block">{{ $t('common.add_to_cart') }}</span>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <div class="h2">{{ $t('common.product_page.text11') }}</div>
                        {{ $t('common.product_page.text12') }}
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-package">
                            <div class="product-package-title">{{ $t('common.front_view') }}</div>
                            <div class="product-package-image bg-light">
                                <img src="../../assets/images/package-front.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-package">
                            <div class="product-package-title">{{ $t('common.side_view') }}</div>
                            <div class="product-package-image bg-light">
                                <img src="../../assets/images/package-side.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-package">
                            <div class="product-package-title">{{ $t('common.back_view') }}</div>
                            <div class="product-package-image bg-light">
                                <img src="../../assets/images/package-back.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-description" v-html="product.desc[siteStore.lang]"></div>
            </div>
        </div>
    </div>
</template>
