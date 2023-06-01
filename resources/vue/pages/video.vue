<script setup lang="ts">
import TestimonialsSlider from "../components/testimonials/testimonials-slider.vue";
</script>

<template>
    <div class="container">
        <div class="my-4 my-lg-5">
            <div class="container-small text-center">
                <h1>{{ $t('common.video.text1') }}</h1>
                <div class="my-4 embed-responsive embed-responsive-16by9">
                    <iframe
                        class="embed-responsive-item"
                        width="560"
                        height="315"
                        src="https://www.youtube.com/embed/G1hKzCkywM8"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                    ></iframe>
                </div>
                <h2>{{ $t('common.video.text2') }}</h2>
                <p class="my-3">{{ $t('common.video.text3') }}</p>
                <router-link class="btn btn-primary btn-lg" :to="{name: 'signup'}">
                    {{ $t('common.sign_up_now') }}
                </router-link>
            </div>
        </div>
        <div class="testimonials my-4 my-lg-5">
            <h2 class="h1">{{ $t('common.video.text4') }}</h2>
            <testimonials-slider class="mt-4 mt-lg-5"/>
        </div>
    </div>
</template>
