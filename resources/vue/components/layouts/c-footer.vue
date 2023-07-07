<script setup lang="ts">

import SubscribeForm from "../site/subscribe-form.vue";
</script>

<template>
    <footer class="footer">
        <div class="container">
            <div class="pros border mb-4 mb-md-5">
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col d-flex justify-content-md-center">
                        <div class="pros-item">
                            <div class="pros-item-icon"><i class="icon-truck"></i></div>
                            <div class="pros-item-content">
                                <div class="pros-item-title">{{ $t('common.footer.text1_1') }}</div>
                                <div class="pros-item-description">{{ $t('common.footer.text1_2') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-center">
                        <div class="pros-item">
                            <div class="pros-item-icon"><i class="icon-dollar"></i></div>
                            <div class="pros-item-content">
                                <div class="pros-item-title">{{ $t('common.footer.text2_1') }}</div>
                                <div class="pros-item-description">{{ $t('common.footer.text2_2') }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-center">
                        <div class="pros-item">
                            <div class="pros-item-icon"><i class="icon-h"></i></div>
                            <div class="pros-item-content">
                                <div class="pros-item-title">{{ $t('common.footer.text3_1') }}</div>
                                <div class="pros-item-description">{{ $t('common.footer.text3_2') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-main my-4 my-md-5">
                <div class="footer-left mt-3 mt-lg-0">
                    <router-link class="logo" :to="{name: 'home'}">
                        <img src="../../assets/images/logo.svg" alt="">
                    </router-link>
                    <p class="footer-address my-3">{{ $t('common.address_text.text1') }} <br> {{ $t('common.address_text.text2') }}</p>
                    <div class="footer-secure">
                        <img src="../../assets/images/geotrust.png" srcset="../../assets/images/geotrust.png 1x, ../../assets/images/geotrust@2x.png 2x" alt="">
                        <img src="../../assets/images/visa-verified.png" srcset="../../assets/images/visa-verified.png 1x, ../../assets/images/visa-verified@2x.png 2x" alt="">
                        <img src="../../assets/images/ssl.png" srcset="../../assets/images/ssl.png 1x, ../../assets/images/ssl@2x.png 2x" alt="">
                        <img src="../../assets/images/mcafee.png" srcset="../../assets/images/mcafee.png 1x, ../../assets/images/mcafee@2x.png 2x" alt="">
                    </div>
                    <div class="footer-social mt-5">
                        <a href=""><i class="icon-fb"></i></a>
                        <a href=""><i class="icon-ig"></i></a>
                        <a href=""><i class="icon-in"></i></a>
                        <a href=""><i class="icon-tw"></i></a>
                        <a href=""><i class="icon-yt"></i></a>
                    </div>
                </div>
                <div class="footer-right w-100">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-3 mb-md-0">
                            <h4 class="footer-title">{{ $t('common.need_help') }}</h4>
                            <ul class="footer-support">
                                <li>
                                    <span class="flag-icon flag-icon-US mr-1"></span>
                                    <strong>US: +1 (888) 243-74-06</strong>
                                </li>
                                <li>
                                    <span class="flag-icon flag-icon-GB mr-1"></span>
                                    <span>GB: +44 (800) 041-87-44</span>
                                </li>
                            </ul>
                            <ul class="footer-support">
                                <li><i class="icon-h"></i><a href="mailto:inbox@hfs-pharm.com">{{ $t('common.customer_support') }}</a></li>
                                <li><i class="icon-envelope"></i><a href="mailto:inbox@hfs-pharm.com">inbox@hfs-pharm.com</a></li>
                            </ul>
                        </div>
                        <div class="col mb-3 mb-md-0">
                            <h4 class="footer-title">{{ $t('common.information') }}</h4>
                            <ul class="footer-menu">
                                <li><router-link :to="{name: 'products'}">Erectile Dysfunction</router-link></li>
                                <li><router-link :to="{name: 'products'}">Man's Health</router-link></li>
                                <li><router-link :to="{name: 'products'}">Antibiotics</router-link></li>
                                <li><router-link :to="{name: 'products'}">Weight Loss</router-link></li>
                                <li>
                                    <router-link :to="{name: 'contact_us'}">{{ $t('common.contact_us') }}</router-link>
                                </li>
                                <li>
                                    <router-link :to="{name: 'testimonials'}">
                                        {{ $t('common.testimonials') }}
                                    </router-link>
                                </li>
                                <li><router-link :to="{name: 'home'}">{{ $t('common.home_') }}</router-link></li>
                                <li>
                                    <router-link :to="{name: 'products'}">{{ $t('common.bestsellers') }}</router-link>
                                </li>
                            </ul>
                            <subscribe-form/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <span v-html="$t('common.copyright')"></span>
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
    </footer>
</template>

