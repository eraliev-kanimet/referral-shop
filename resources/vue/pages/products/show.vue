<script setup lang="ts">

</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <div class="dashboard-sidebar d-none d-xl-block">
                <div class="dashboard-userbar border-bottom pb-3 mb-3">
                    <a class="dashboard-userbar-avatar" href=""><img src="tmp/author-1.png" alt=""></a>
                    <div class="dashboard-userbar-content">
                        <a class="dashboard-userbar-name" href="">ad***@gmail.com</a>
                        <div class="dashboard-userbar-links">
                            <a href="profile.html">Edit profile</a>
                            <a href="">Logout</a>
                        </div>
                    </div>
                </div>
                <ul class="dashboard-nav mt-3 mb-4">
                    <li class="dashboard-nav-item active"><a class="dashboard-nav-link" href="dashboard.html"><i class="dashboard-nav-icon icon-dashboard"></i>Dashboard</a></li>
                    <li class="dashboard-nav-item">
                        <a class="dashboard-nav-link" href="products.html"><i class="dashboard-nav-icon icon-products"></i>Products</a>
                        <button class="dashboard-nav-collapse btn btn-sm collapsed" data-toggle="collapse" data-target="#categories" aria-expanded="false"><i class="icon-dropdown"></i></button>
                        <ul class="dashboard-subnav collapse" id="categories">
                            <li><a href="">Anti Viral</a></li>
                            <li><a href="">Anti-Acidity</a></li>
                            <li><a href="">Anti-Allergic/Asthma</a></li>
                            <li><a href="">Anti-Depressant</a></li>
                            <li><a href="">Anti-Diabetic</a></li>
                            <li><a href="">Anti-Fungus</a></li>
                            <li><a href="">Anti-Herpes</a></li>
                            <li><a href="">Antibiotics</a></li>
                            <li><a href="">Blood Pressure</a></li>
                            <li><a href="">Cholesterol</a></li>
                            <li><a href="">View all categories</a></li>
                        </ul>
                    </li>
                    <li class="dashboard-nav-item"><a class="dashboard-nav-link" href="orders.html"><i class="dashboard-nav-icon icon-orders"></i>Orders</a></li>
                    <li class="dashboard-nav-item"><a class="dashboard-nav-link" href="tickets.html"><i class="dashboard-nav-icon icon-tickets"></i>Tickets</a></li>
                    <li class="dashboard-nav-item"><a class="dashboard-nav-link" href="referrals.html"><i class="dashboard-nav-icon icon-referrals"></i>Referrals</a></li>
                </ul>
                <div class="my-4">
                    <div class="dashboard-nav-search">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <button class="dashboard-nav-search-btn"><i class="icon-search"></i></button>
                    </div>
                </div>
                <div class="alert alert-primary my-4">
                    Your account is not verified. Please visit <a href="profile.html#profile-verification">this page</a> to verify it.
                </div>
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
                                <span class="product-prop-label text-muted">Active ingerient</span>
                                <a href="">Sildenafil</a>
                            </div>
                            <div class="product-prop my-2">
                                <span class="product-prop-label text-muted">Availability</span>
                                <span class="text-success">In Stock (64 packs)</span>
                            </div>
                            <div class="product-prop my-2">
                                <span class="product-prop-label text-muted">Other names for this medication:</span>
                                <div class="product-tags">
                                    <div class="product-tags-content collapse" id="productTags">
                                        <a href="">L Aurogra</a>
                                        <a href="">brand viagra</a>
                                        <a href="">Caverta</a>
                                        <a href="">Female viagra</a>
                                        <a href="">Extra Super Viagra</a>
                                        <a href="">Kamagra</a>
                                        <a href="">L Aurogra</a>
                                        <a href="">brand viagra</a>
                                        <a href="">Caverta</a>
                                        <a href="">Female viagra</a>
                                        <a href="">Extra Super Viagra</a>
                                        <a href="">Kamagra</a>
                                    </div>
                                    <button class="btn btn-primary product-tags-btn collapsed" data-toggle="collapse" data-target="#productTags" aria-expanded="false" aria-controls="productTags"><i class="icon-minus icon-inline"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-description border-top pt-3 my-3">
                            Viagra Professional - Advantage of Professional Viagra from usual Viagra is that it works twice longer (6 - 8 hours) and has a stronger effect. Strengthens desire, improves brightness of sexual feelings and increases duration of sexual intercourse.
                        </div>
                        <div class="h2">We accept</div>
                        <div class="footer-payment">
                            <div><img src="images/visa.svg" alt=""></div>
                            <div><img src="images/mastercard.svg" alt=""></div>
                            <div><img src="images/discover.svg" alt=""></div>
                            <div><img src="images/amex.svg" alt=""></div>
                            <div><img src="images/sepa.svg" alt=""></div>
                            <div><img src="images/paypal.svg" alt=""></div>
                            <div><img src="images/bitcoin.svg" alt=""></div>
                            <div><img src="images/tether.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="h2">Delivery options</div>
                <div class="table-responsive my-3">
                    <table class="table table-xs">
                        <tbody>
                        <tr>
                            <td><img src="images/airmail.svg" style="min-width: 24px;" alt=""></td>
                            <td><img src="images/flags/flag-gb.svg" style="min-width: 16px;" alt=""></td>
                            <td>$12.95</td>
                            <td>Delivery period: <strong>14-21 Days</strong></td>
                            <td>Tracking # available in 14 days</td>
                        </tr>
                        <tr>
                            <td><img src="images/ems.svg" style="min-width: 24px;" alt=""></td>
                            <td><img src="images/flags/flag-gb.svg" style="min-width: 16px;" alt=""></td>
                            <td>$12.95</td>
                            <td>Delivery period: <strong>14-21 Days</strong></td>
                            <td>Tracking # available in 14 days</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="h2">Viagra Professional 200mg</div>
                <div class="table-responsive my-3">
                    <table class="table table-hoverable table-xs">
                        <thead>
                        <th>Package</th>
                        <th>Per pill</th>
                        <th>Total price</th>
                        <th>Save</th>
                        <th class="text-right">Order</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td>-</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td class="text-secondary">$1.60 USD</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td class="text-secondary">$1.60 USD</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td class="text-secondary">$1.60 USD</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td class="text-secondary">$1.60 USD</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="h2">Viagra Professional 100mg</div>
                <div class="table-responsive my-3">
                    <table class="table table-hoverable table-xs">
                        <thead>
                        <th>Package</th>
                        <th>Per pill</th>
                        <th>Total price</th>
                        <th>Save</th>
                        <th class="text-right">Order</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td>-</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td class="text-secondary">$1.60 USD</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td class="text-secondary">$1.60 USD</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td class="text-secondary">$1.60 USD</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">100mg x 10 pills</td>
                            <td>$2.75 USD</td>
                            <td><strong>$27.45 USD</strong><span class="d-block text-success">+ Bonus - 4 Pills</span></td>
                            <td class="text-secondary">$1.60 USD</td>
                            <td class="text-right"><a class="btn btn-primary show-cart" href=""><i class="icon-cart icon-inline d-md-none"></i><span class="d-none d-md-block">Add to cart</span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row my-3">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <div class="h2">Package example</div>
                        Your order will be packed safe and secure and dispatched within 24 hours. This is exactly how your parcel will look like (pictures of a real shipping item). It has a size and a look of a regular private letter (9.4x4.3x0.3 inches or 24x11x0.7cm) and it does not disclose its contents.
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-package">
                            <div class="product-package-title">Front view</div>
                            <div class="product-package-image bg-light"><img src="images/package-front.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-package">
                            <div class="product-package-title">Side view</div>
                            <div class="product-package-image bg-light"><img src="images/package-side.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-package">
                            <div class="product-package-title">Back view</div>
                            <div class="product-package-image bg-light"><img src="images/package-back.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="product-description">
                    <div class="h2">Product description</div>
                    <p>One of the most popular substitutes for Viagra today is Viagra Professional.</p>
                    <p>This product is a full-fledged analogue of branded blue tablets, which contains the same active substance - sildenafil citrate 100 mg, which belongs to the group of phosphodiesterase inhibitors. Viagra Professional is designed for the treatment of men suffering from erectile dysfunction. The drug successfully copes with manifestations of impotence and quickly restores sexual force, bringing back every man his self-confidence.</p>
                    <p>If we talk about the benefits of Viagra Professional, then it's worth emphasizing the following features:</p>
                    <ul>
                        <li>Rapid action of the active component;</li>
                        <li>Ease of use;</li>
                        <li>Pleasant taste qualities;</li>
                        <li>A minimum of side effects;</li>
                        <li>Affordable cost in comparison with brand sildenafil;</li>
                        <li>Minimum of contraindications to admission;</li>
                        <li>High stable result.</li>
                    </ul>
                    <div class="h2">Safety information</div>
                    <p>The advantage of the drug lays in a fact that it can be combined with the use of moderate portions of alcohol. Alcoholic beverages do not reduce the effectiveness of the active ingredient due to the fact that the tablet is taken under the tongue, not swallowed, so it does not mix up with the contents of the stomach.</p>
                    <p>Viagra Professional is prescribed for men with signs of impotence, caused by both organic and psychological factors.</p>
                    <p>Tablets that enhance the erection, can not be taken by men with severe heart disease, priapism, myeloma, penile deformities, acute kidney or liver failure.</p>
                    <div class="h2">Side effects</div>
                    <p>Viagra Professional is easy to use, as it has a more refined formula.</p>
                    <p>The drug demonstrates the effect faster than brand Viagra due to the fact that it is taken not inside, but is dissolved under the tongue. The active components immediately penetrate into the blood flow system and the capsule starts to act in 10-15 minutes after the dissolution of the tablet. The product has a pleasant taste, it does not cause nausea and other undesirable reactions when it comes into contact with the oral cavity receptors. Viagra Professional is taken to enhance the erection approximately half an hour before intimacy.</p>
                    <p>The use of Viagra Professional sometimes can cause unwanted reactions on the part of the body, the same as with the usual Viagra, but they are mild and the likelihood of their manifestation is much lower.</p>
                </div>
            </div>
        </div>
    </div>
</template>
