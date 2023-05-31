<script setup lang="ts">
const items = [
    {
        id: 1,
        name: 'Bernie McAllister',
        address: 'Australia',
        avatar: '',
        initial: 'BM',
        content: 'Thank you for the fantastic customer service.'
    },
    {
        id: 2,
        name: 'James Morris',
        address: 'Canada',
        avatar: 'tmp/author-1.png',
        initial: '',
        content: 'Just letting you know that HFS112787 has finally arrived and all contents within on May 1st. It was order on April 2 and it made it to the States on April 17th then was mis-routed for almost two weeks. The delay was a mistake with the USPS service not yours. Just letting you know. Thank you for your product. I will be ordering again.'
    },
    {
        id: 3,
        name: 'Darrell Clinard',
        address: 'Kentucky',
        avatar: 'tmp/author-2.png',
        initial: '',
        content: 'Your service is amazing! I have never dealt with another company with this great service! I only hope the package makes it through to the United States! :)'
    },
    {
        id: 4,
        name: 'Bernie McAllister',
        address: 'Australia',
        avatar: '',
        initial: 'BM',
        content: 'Thank you for the fantastic customer service.'
    },
    {
        id: 5,
        name: 'James Morris',
        address: 'Canada',
        avatar: 'tmp/author-1.png',
        initial: '',
        content: 'Just letting you know that HFS112787 has finally arrived and all contents within on May 1st. It was order on April 2 and it made it to the States on April 17th then was mis-routed for almost two weeks. The delay was a mistake with the USPS service not yours. Just letting you know. Thank you for your product. I will be ordering again.'
    },
    {
        id: 6,
        name: 'James Morris',
        address: 'Canada',
        avatar: 'tmp/author-2.png',
        initial: '',
        content: 'Just letting you know that HFS112787 has finally arrived and all contents within on May 1st. It was order on April 2 and it made it to the States on April 17th then was mis-routed for almost two weeks. The delay was a mistake with the USPS service not yours. Just letting you know. Thank you for your product. I will be ordering again.'
    },
]
</script>

<template>
<div class="container">
    <h1>Testimonials</h1>
    <div class="testimonials-list my-4">
        <div class="testimonials-list-item border mb-3" v-for="item in items">
            <div class="row">
                <div class="col-12 col-md-3 mb-3 mb-md-0">
                    <div class="testimonials-list-author">
                        <div class="testimonials-list-author-avatar">
                            <img v-if="item.avatar" :src="item.avatar" alt="">
                            <span v-else>{{ item.initial }}</span>
                        </div>
                        <div class="testimonials-list-author-content">
                            <div class="testimonials-list-author-name">{{ item.name }}</div>
                            <div class="testimonials-list-author-origin text-muted">{{ item.address }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="testimonials-list-content">{{ item.content }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style scoped>

</style>
