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
                        <h1>Products</h1>
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
                <div class="categories my-3 my-md-4 row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 no-gutters">
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-13.png" alt=""></div>
                            <div class="categories-item-title">Anti Viral</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-7.png" alt=""></div>
                            <div class="categories-item-title">Anti-Acidity</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-2.png" alt=""></div>
                            <div class="categories-item-title">Anti-Allergic/Asthma</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-8.png" alt=""></div>
                            <div class="categories-item-title">Anti-Deppresant</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-3.png" alt=""></div>
                            <div class="categories-item-title">Anti-Diabetic</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-9.png" alt=""></div>
                            <div class="categories-item-title">Anti-Fungus</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-4.png" alt=""></div>
                            <div class="categories-item-title">Anti-Herpes</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-10.png" alt=""></div>
                            <div class="categories-item-title">Antibiotics</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-5.png" alt=""></div>
                            <div class="categories-item-title">Blood Pressure</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-11.png" alt=""></div>
                            <div class="categories-item-title">Cholesterol</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-1.png" alt=""></div>
                            <div class="categories-item-title">Erectile Dysfunction</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-6.png" alt=""></div>
                            <div class="categories-item-title">Gastrointestinal</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-12.png" alt=""></div>
                            <div class="categories-item-title">General Health</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-14.png" alt=""></div>
                            <div class="categories-item-title">Hair Loss</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-15.png" alt=""></div>
                            <div class="categories-item-title">Healthy Bones</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-16.png" alt=""></div>
                            <div class="categories-item-title">Heart Disease</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-17.png" alt=""></div>
                            <div class="categories-item-title">Herbal</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-18.png" alt=""></div>
                            <div class="categories-item-title">Men`s Health</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-19.png" alt=""></div>
                            <div class="categories-item-title">Other</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-20.png" alt=""></div>
                            <div class="categories-item-title">Pain Relief</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-21.png" alt=""></div>
                            <div class="categories-item-title">Skin Care</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-22.png" alt=""></div>
                            <div class="categories-item-title">Sleep Aid</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-23.png" alt=""></div>
                            <div class="categories-item-title">Stop Smoking</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-24.png" alt=""></div>
                            <div class="categories-item-title">Weight Loss</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                    <a class="categories-item" href="">
                        <div class="categories-item-content">
                            <div class="categories-item-image"><img src="tmp/cat-25.png" alt=""></div>
                            <div class="categories-item-title">Women's Health</div>
                            <div class="categories-item-amount text-muted">4 products</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
