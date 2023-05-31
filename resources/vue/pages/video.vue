<script setup lang="ts">

</script>

<template>
    <div class="container">
        <div class="my-4 my-lg-5">
            <div class="container-small text-center">
                <h1>This video will explain everything you need to know about our shop and why we are best</h1>
                <div class="my-4 embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/G1hKzCkywM8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h2>No Subscriptions - No Monthly Billing - Buy What You Need When You Need It!</h2>
                <p class="my-3">Men 30 to 90+ Do You Want to Obtain Optimal Health? Now You Can Get the Highest Strength and Quality Supplements Online With No Prescription Needed. Treatments for Weight Loss, Libido, Energy, Muscle, Vision, Prostate, Joint and More Shipped Direct to You.</p>
                <a class="btn btn-primary btn-lg" href="">Sign up now!</a>
            </div>
        </div>
        <div class="testimonials my-4 my-lg-5">
            <h2 class="h1">Check out what people say about our solution!</h2>
            <div class="testimonials-slider mt-4 mt-lg-5">
                <div v-for="i in 6">
                    <div class="testimonials-item">
                        <p class="testimonials-item-text">Your service is amazing! I have never dealt with another company with this great service! I only hope the package makes it through to the United States! :)</p>
                        <img class="testimonials-item-image" src="tmp/author-1.png" alt="">
                        <div class="testimonials-item-author">James Morris</div>
                        <div class="testimonials-item-origin text-muted">Kentucky</div>
                        <img class="testimonials-item-rating" src="images/stars.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
