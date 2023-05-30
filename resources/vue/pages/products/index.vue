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
                <div class="alert alert-primary my-4">
                    Your account is not verified. Please visit <a href="profile.html#profile-verification">this page</a> to verify it.
                </div>
            </div>
            <div class="dashboard-content">
                <div class="row row-cols-1 row-cols-md-2 align-items-center">
                    <div class="col">
                        <h1>Erectile Dysfunction</h1>
                    </div>
                    <div class="col">
                        <form class="row no-gutters dashboard-product-search" action="">
                            <div class="col-9 pr-3 position-relative">
                                <input type="text" class="form-control dashboard-product-search-input" placeholder="Search">
                                <i class="icon-search dashboard-product-search-icon"></i>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary w-100">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 no-gutters my-4">
                    <div class="col">
                        <div class="product-single">
                            <a class="product-single-image" href=""><img src="tmp/pills-1.png" alt=""></a>
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
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
                            <div class="product-single-title">Super ED Trial Pack</div>
                            <div class="product-single-info">Active ingredient: <span class="text-primary">Sildenafil</span></div>
                            <div class="product-single-price">$3.21 <small>per pill</small></div>
                            <div class="product-single-buttons">
                                <a class="product-single-add btn btn-primary show-cart" href="">Add to cart</a>
                                <a class="product-single-fav btn btn-secondary" href=""><i class="icon-heart icon-inline"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="paginator my-4">
                    <li><a class="btn btn-lg active" href="">1</a></li>
                    <li><a class="btn btn-lg" href="">2</a></li>
                    <li><a class="btn btn-lg" href="">3</a></li>
                    <li><a class="btn btn-lg" href="">4</a></li>
                    <li><a class="btn btn-lg" href="">5</a></li>
                    <li>...</li>
                    <li><a class="btn btn-lg" href="">10</a></li>
                    <li><a class="btn btn-lg" href="">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
