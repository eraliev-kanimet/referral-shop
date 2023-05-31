<script setup lang="ts">

import DashboardSidebar from "../../components/dashboard/dashboard-sidebar.vue";
</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <dashboard-sidebar/>
            <div class="dashboard-content">
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
                            <tr>
                                <td>1234567890</td>
                                <td class="text-nowrap">14.07.2022 11:52 PM</td>
                                <td class="text-nowrap">Viagra 1mg x 30, Cialis 1mg x 60, etc...</td>
                                <td class="font-weight-bold">$180.90</td>
                                <td class="text-warning text-nowrap"><i class="icon-waiting icon-inline icon-sm"></i> Waiting</td>
                                <td><a class="text-decoration-none" href=""><i class="icon-edit"></i></a></td>
                            </tr>
                            <tr>
                                <td>1234567890</td>
                                <td class="text-nowrap">14.07.2022 11:52 PM</td>
                                <td class="text-nowrap">Viagra 1mg x 30, Cialis 1mg x 60, etc...</td>
                                <td class="font-weight-bold">$180.90</td>
                                <td class="text-danger text-nowrap"><i class="icon-cancel icon-inline icon-sm"></i> Canceled</td>
                                <td><span class="text-muted"><i class="icon-edit"></i></span></td>
                            </tr>
                            <tr>
                                <td>1234567890</td>
                                <td class="text-nowrap">14.07.2022 11:52 PM</td>
                                <td class="text-nowrap">Viagra 1mg x 30, Cialis 1mg x 60, etc...</td>
                                <td class="font-weight-bold">$180.90</td>
                                <td class="text-muted text-nowrap"><i class="icon-truck icon-inline icon-sm"></i> Shipping</td>
                                <td><a class="text-decoration-none" href=""><i class="icon-edit"></i></a></td>
                            </tr>
                            <tr>
                                <td>1234567890</td>
                                <td class="text-nowrap">14.07.2022 11:52 PM</td>
                                <td class="text-nowrap">Viagra 1mg x 30, Cialis 1mg x 60, etc...</td>
                                <td class="font-weight-bold">$180.90</td>
                                <td class="text-primary text-nowrap"><i class="icon-star icon-inline icon-sm"></i> Delivered</td>
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
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-1.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-2.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-3.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-4.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-5.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-6.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-7.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-1.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-2.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-3.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-4.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-single">
                                <a class="product-single-image" href=""><img src="tmp/pills-5.png" alt=""></a>
                                <div class="product-single-info">Erectile Dysfunction</div>
                                <div class="product-single-title">Super ED Trial Pack</div>
                                <div class="product-single-price">$3.21 <small>per pill</small></div>
                                <div class="product-single-buttons">
                                    <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                    <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="">See all products</a>
                </div>
                <div class="mb-4 mb-lg-5">
                    <div class="h1">You should read this</div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 my-4">
                        <div class="col mb-4">
                            <div class="blog-card">
                                <a class="blog-card-image" href=""><img src="tmp/blog-preview-1.jpg" alt=""></a>
                                <div class="blog-card-meta text-muted">Posted on: <span>14-oct-2020</span></div>
                                <div class="blog-card-excerpt">Thyroid in Kids: Everything You Need to Know</div>
                                <a class="blog-card-more" href=""><i class="icon-plus"></i>Read more</a>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="blog-card">
                                <a class="blog-card-image" href=""><img src="tmp/blog-preview-2.jpg" alt=""></a>
                                <div class="blog-card-meta text-muted">Posted on: <span>14-oct-2020</span></div>
                                <div class="blog-card-excerpt">Thyroid in Kids: Everything You Need to Know</div>
                                <a class="blog-card-more" href=""><i class="icon-plus"></i>Read more</a>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="blog-card">
                                <a class="blog-card-image" href=""><img src="tmp/blog-preview-3.jpg" alt=""></a>
                                <div class="blog-card-meta text-muted">Posted on: <span>14-oct-2020</span></div>
                                <div class="blog-card-excerpt">Thyroid in Kids: Everything You Need to Know</div>
                                <a class="blog-card-more" href=""><i class="icon-plus"></i>Read more</a>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="blog-card">
                                <a class="blog-card-image" href=""><img src="tmp/blog-preview-4.jpg" alt=""></a>
                                <div class="blog-card-meta text-muted">Posted on: <span>14-oct-2020</span></div>
                                <div class="blog-card-excerpt">Thyroid in Kids: Everything You Need to Know</div>
                                <a class="blog-card-more" href=""><i class="icon-plus"></i>Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
