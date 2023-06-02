<script setup lang="ts">

</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <div class="dashboard-sidebar d-none d-xl-block">
                <div class="mb-4">
                    <div class="dashboard-nav-search">
                        <input
                            type="text"
                            class="form-control"
                            :placeholder="$t('common.search_for_products')"
                            value="Viagra"
                        >
                        <button class="dashboard-nav-search-btn"><i class="icon-search"></i></button>
                        <div class="dropdown-menu w-100">
                            <a class="dropdown-item" href="#"><strong>Viagra</strong></a>
                        </div>
                    </div>
                </div>
                <ul class="dashboard-nav mt-3 mb-4">
                    <li class="dashboard-nav-item"><a class="dashboard-nav-link" href="">{{ $t('common.bestsellers') }}</a></li>
                    <li class="dashboard-nav-item" v-for="i in 10"><a class="dashboard-nav-link" href="">Cialis Super Active</a></li>
                </ul>
            </div>
            <div class="dashboard-content">
                <div class="row mb-4 mb-lg-5">
                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <div class="product-gallery">
                            <div class="product-gallery-preview border rounded">
                                <div class="product-gallery-image">
                                    <div><img src="tmp/pills-1.png" alt=""></div>
                                </div>
                            </div>
                            <div class="product-gallery-nav">
                                <div class="product-gallery-thumbnails">
                                    <div class="border rounded cursor-pointer" data-toggle="modal" data-target="#zoomModal"><img src="tmp/pills-1.png" alt=""></div>
                                </div>
                            </div>
                            <div class="modal fade" id="zoomModal" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content position-relative">
                                        <div class="modal-body d-flex align-items-center justify-content-center">
                                            <img src="tmp/pills-1.png" alt="">
                                        </div>
                                        <div class="position-absolute w-100 pt-2 pr-2 d-flex justify-content-end">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <h1>Viagra Professional</h1>
                        <div class="my-3">
                            <div class="product-prop my-2">
                                <span class="product-prop-label text-muted">{{ $t('common.product_page.text1') }}</span>
                                <a href="">Sildenafil</a>
                            </div>
                            <div class="product-prop my-2">
                                <span class="product-prop-label text-muted">{{ $t('common.product_page.text2') }}</span>
                                <span class="text-success">{{ $t('common.product_page.text3') }} (64 {{ $t('common.product_page.text4') }})</span>
                            </div>
                            <div class="product-prop my-2">
                                <span class="product-prop-label text-muted">{{ $t('common.product_page.text5') }}:</span>
                                <div class="product-tags">
                                    <div class="product-tags-content collapse" id="productTags">
                                        <a href="">L Aurogra</a>
                                        <a href="">brand viagra</a>
                                    </div>
                                    <button class="btn btn-primary product-tags-btn collapsed" data-toggle="collapse" data-target="#productTags" aria-expanded="false" aria-controls="productTags"><i class="icon-minus icon-inline"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-description border-top pt-3 my-3">
                        <!--             short desc               -->
                        </div>
                        <div class="h2">{{ $t('common.product_page.text6') }}</div>
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
                <div class="h2">{{ $t('common.product_page.text7') }}</div>
                <div class="table-responsive my-3">
                    <table class="table table-xs">
                        <tbody>
                        <tr>
                            <td><img src="../../assets/images/airmail.svg" style="min-width: 24px;" alt=""></td>
                            <td><img src="" style="min-width: 16px;" alt=""></td>
                            <td>$12.95</td>
                            <td>{{ $t('common.product_page.text8') }}: <strong>14-21 {{ $t('common.product_page.text10') }}</strong></td>
                            <td>{{ $t('common.product_page.text9') }}</td>
                        </tr>
                        <tr>
                            <td><img src="../../assets/images/ems.svg" style="min-width: 24px;" alt=""></td>
                            <td><img src="" style="min-width: 16px;" alt=""></td>
                            <td>$12.95</td>
                            <td>{{ $t('common.product_page.text8') }}: <strong>14-21 {{ $t('common.product_page.text10') }}</strong></td>
                            <td>{{ $t('common.product_page.text9') }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="h2">Viagra Professional 200mg</div>
                <div class="table-responsive my-3">
                    <table class="table table-hoverable table-xs">
                        <thead>
                            <tr>
                                <th>Package</th>
                                <th>Per pill</th>
                                <th>Total price</th>
                                <th>Save</th>
                                <th class="text-right">Order</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td>-</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="h2">Viagra Professional 100mg</div>
                <div class="table-responsive my-3">
                    <table class="table table-hoverable table-xs">
                        <thead>
                            <tr>
                                <th>Package</th>
                                <th>Per pill</th>
                                <th>Total price</th>
                                <th>Save</th>
                                <th class="text-right">Order</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td>-</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        </tbody>
                    </table>
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
                <div class="product-description">
                    <!--             desc               -->
                </div>
            </div>
        </div>
    </div>
</template>
