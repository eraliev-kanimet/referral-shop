<script setup lang="ts">

import Categories from "../components/products/categories.vue";
</script>

<template>
    <div class="container">
        <div class="intro">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <div class="intro-content">
                        <h1 class="intro-title"><span>We guarantee</span> that our prices are 20% lower than in other stores</h1>
                        <p class="intro-description lead">We guarantee that our prices are 20% lower than in other stores</p>
                        <div class="intro-buttons">
                            <a class="btn btn-primary btn-lg" href="">Sign up now!</a>
                            <a class="btn btn-secondary btn-lg" href="">Why prices so low?</a>
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
                        <div class="features-item-title">15% refferal comission</div>
                        <div class="features-item-description">Refer friends and get 15% from their orders on internal wallet</div>
                        <a class="features-item-btn btn btn-light" href="">More info</a>
                    </div>
                </div>
                <div class="col mb-3 mb-lg-0">
                    <div class="features-item features-item-2">
                        <div class="features-item-title">Absolute privacy is our priority</div>
                        <div class="features-item-description">Your order will be carefully packaged and delivered in a regular box</div>
                        <a class="features-item-btn btn btn-light" href="">More info</a>
                    </div>
                </div>
                <div class="col">
                    <div class="features-item features-item-3">
                        <div class="features-item-title">Realtime order tracking</div>
                        <div class="features-item-description">Our tracking system lets you know where your package is</div>
                        <a class="features-item-btn btn btn-light" href="">More info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light my-4 my-md-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                <div class="col mt-5 mb-0 mb-lg-5">
                    <div class="pretitle">Welcome to Happy Family store!</div>
                    <h2 class="h1">Chat with our specialists using our tickets system</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <a class="btn btn-primary btn-lg mt-4 d-none d-lg-inline-block" href="">Try by yourself</a>
                </div>
                <div class="col d-flex flex-column align-items-center">
                    <img class="d-block" src="../assets/images/image-tickets.png" srcset="../assets/images/image-tickets.png 1x, ../assets/images/image-tickets@2x.png 2x" alt="">
                    <a class="btn btn-primary btn-lg mb-5 d-lg-none" href="">Try by yourself</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="h1">Shop by categories</h2>
        <categories/>
        <div class="text-center mb-4 mb-md-5">
            <a class="btn btn-primary btn-lg" href="">View all products</a>
        </div>
        <div class="lovelife my-4 my-md-5 text-center">
            <a class="d-none d-sm-block mx-auto" href=""><img class="d-block mx-auto" src="../assets/images/lovelife.png" alt=""></a>
            <a class="d-block d-sm-none mx-auto" href=""><img class="d-block mx-auto" src="../assets/images/lovelife-vertical.png" alt=""></a>
        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <h2 class="h1">From our blog</h2>
            <div>
                <i class="blog-slider-prev icon-arrow-left"></i>
                <i class="blog-slider-next icon-arrow-right"></i>
            </div>
        </div>
        <div class="blog-slider my-1 my-md-4">
            <div v-for="i in 6">
                <div class="blog-card">
                    <a class="blog-card-image" href=""><img src="tmp/blog-preview-1.jpg" alt=""></a>
                    <div class="blog-card-meta text-muted">Posted on: <span>14-oct-2020</span></div>
                    <div class="blog-card-excerpt">Thyroid in Kids: Everything You Need to Know</div>
                    <a class="blog-card-more" href=""><i class="icon-plus"></i>Read more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials bg-light my-4 my-md-5 py-5">
        <div class="container">
            <div class="pretitle">Testimonials</div>
            <div class="row row-cols-1 row-cols-lg-2 align-items-center">
                <div class="col">
                    <h2 class="h1 testimonials-heading">Check out what people say about our solution!</h2>
                </div>
                <div class="col d-flex justify-content-lg-end">
                    <div class="testimonials-heading">People love our products and 70% our customers are returned customers.</div>
                </div>
            </div>
            <div class="testimonials-slider mt-5">
                <div>
                    <div class="testimonials-item">
                        <p class="testimonials-item-text">Your service is amazing! I have never dealt with another company with this great service! I only hope the package makes it through to the United States! :)</p>
                        <img class="testimonials-item-image" src="tmp/author-1.png" alt="">
                        <div class="testimonials-item-author">James Morris</div>
                        <div class="testimonials-item-origin text-muted">Kentucky</div>
                        <img class="testimonials-item-rating" src="../assets/images/stars.svg" alt="">
                    </div>
                </div>
                <div>
                    <div class="testimonials-item">
                        <p class="testimonials-item-text">Captchabot enabled us to scale up our data collection of potential trafficking victims and helped identify 14,874 child victims of human trafficking</p>
                        <img class="testimonials-item-image" src="tmp/author-2.png" alt="">
                        <div class="testimonials-item-author">Bria King</div>
                        <div class="testimonials-item-origin text-muted">Pennsylvania</div>
                        <img class="testimonials-item-rating" src="../assets/images/stars.svg" alt="">
                    </div>
                </div>
                <div>
                    <div class="testimonials-item">
                        <p class="testimonials-item-text">Your service is amazing! I have never dealt with another company with this great service! I only hope the package makes it through to the United States! :)</p>
                        <img class="testimonials-item-image" src="tmp/author-2.png" alt="">
                        <div class="testimonials-item-author">Bernie McAllister</div>
                        <div class="testimonials-item-origin text-muted">Australia</div>
                        <img class="testimonials-item-rating" src="../assets/images/stars.svg" alt="">
                    </div>
                </div>
                <div>
                    <div class="testimonials-item">
                        <p class="testimonials-item-text">Your service is amazing! I have never dealt with another company with this great service! I only hope the package makes it through to the United States! :)</p>
                        <img class="testimonials-item-image" src="tmp/author-1.png" alt="">
                        <div class="testimonials-item-author">James Morris</div>
                        <div class="testimonials-item-origin text-muted">Kentucky</div>
                        <img class="testimonials-item-rating" src="../assets/images/stars.svg" alt="">
                    </div>
                </div>
                <div>
                    <div class="testimonials-item">
                        <p class="testimonials-item-text">Captchabot enabled us to scale up our data collection of potential trafficking victims and helped identify 14,874 child victims of human trafficking</p>
                        <img class="testimonials-item-image" src="tmp/author-2.png" alt="">
                        <div class="testimonials-item-author">Bria King</div>
                        <div class="testimonials-item-origin text-muted">Pennsylvania</div>
                        <img class="testimonials-item-rating" src="../assets/images/stars.svg" alt="">
                    </div>
                </div>
                <div>
                    <div class="testimonials-item">
                        <p class="testimonials-item-text">Your service is amazing! I have never dealt with another company with this great service! I only hope the package makes it through to the United States! :)</p>
                        <img class="testimonials-item-image" src="tmp/author-2.png" alt="">
                        <div class="testimonials-item-author">Bernie McAllister</div>
                        <div class="testimonials-item-origin text-muted">Australia</div>
                        <img class="testimonials-item-rating" src="../assets/images/stars.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
