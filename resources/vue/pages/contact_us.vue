<script setup lang="ts">

import ContactUsForm from "../components/site/contact-us-form.vue";
</script>

<template>
    <div class="contacts pt-5">
        <div class="container">
            <div class="container-small mb-5">
                <div class="contacts-wrapper bg-light">
                    <div class="contacts-info">
                        <h1 class="text-white">{{ $t('common.contact_us_page.text1') }}</h1>
                        <p>{{ $t('common.contact_us_page.text2') }}</p>
                        <h2 class="h3 mt-4 text-white">{{ $t('common.contact_us_page.text3') }}</h2>
                        <ul class="list-unstyled mt-3 contacts-info-list">
                            <li><img src="" alt=""><span>US: +1 (888) 243-74-06</span></li>
                            <li><img src="" alt=""><span>GB: +44 (800) 041-87-44</span></li>
                            <li class="mt-3"><i class="icon-envelope"></i><a href="mailto:inbox@hfs-pharm.com">inbox@hfs-pharm.com</a></li>
                        </ul>
                        <h2 class="h3 mt-4 text-white">{{ $t('common.address') }}</h2>
                        <ul class="list-unstyled mt-3 contacts-info-list">
                            <li>
                                <i class="icon-point align-self-start"></i>
                                <span>
                                    {{ $t('common.address_text.text1') }}, <br>
                                    {{ $t('common.address_text.text1') }}
                                </span>
                            </li>
                        </ul>
                        <h2 class="h3 mt-4 text-white">{{ $t('common.follow_us') }}</h2>
                        <div class="contacts-info-social mt-3">
                            <a href=""><i class="icon-fb"></i></a>
                            <a href=""><i class="icon-ig"></i></a>
                            <a href=""><i class="icon-in"></i></a>
                            <a href=""><i class="icon-tw"></i></a>
                            <a href=""><i class="icon-yt"></i></a>
                        </div>
                    </div>
                    <contact-us-form/>
                </div>
            </div>
        </div>
    </div>
</template>
