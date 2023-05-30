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
                <div class="mb-4 mb-lg-5">
                    <h1>Tickets</h1>
                    <div class="row my-4">
                        <div class="col-auto flex-grow">
                            <div class="alert alert-primary py-2">Have any question? Create ticket and we will help!</div>
                        </div>
                        <div class="col-auto"><a class="btn btn-primary" href="">Open ticket</a></div>
                    </div>
                    <div class="filter my-4">
                        <div class="row align-items-end">
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <label for="">Order ID:</label>
                                <input type="text" class="form-control" placeholder="Order ID">
                            </div>
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <label for="">Status:</label>
                                <select class="custom-select">
                                    <option selected>Select</option>
                                    <option value="1">Open</option>
                                    <option value="2">Closed</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <button class="btn btn-light px-4">Filter</button>
                            </div>
                        </div>
                    </div>
                    <div class="tickets border rounded">
                        <div class="tickets-item">
                            <div class="row align-items-lg-center">
                                <div class="col-12 mb-2 mb-lg-0 col-lg-9">
                                    <div class="tickets-item-title mb-1"><a href="">Some ticket title should be placed here</a></div>
                                    <div class="tickets-item-info">
                                        <div class="badge badge-success">Open</div>
                                        <div>ID: <strong>12345</strong></div>
                                        <div>Category: <strong>General</strong></div>
                                        <div>Date: <strong>11.08.2022</strong></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-lg-right">
                                    <a class="btn tickets-btn text-primary" href="">View</a>
                                    <a class="btn tickets-btn text-secondary" href="">Close</a>
                                </div>
                            </div>
                        </div>
                        <div class="tickets-item">
                            <div class="row align-items-lg-center">
                                <div class="col-12 mb-2 mb-lg-0 col-lg-9">
                                    <div class="tickets-item-title mb-1"><a href="">Some ticket title should be placed here</a></div>
                                    <div class="tickets-item-info">
                                        <div class="badge badge-secondary">Closed</div>
                                        <div>ID: <strong>12345</strong></div>
                                        <div>Category: <strong>General</strong></div>
                                        <div>Order ID: <a href="">#12345</a></div>
                                        <div>Date: <strong>11.08.2022</strong></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-lg-right">
                                    <a class="btn tickets-btn text-primary" href="">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="tickets-item">
                            <div class="row align-items-lg-center">
                                <div class="col-12 mb-2 mb-lg-0 col-lg-9">
                                    <div class="tickets-item-title mb-1"><a href="">Some ticket title should be placed here</a></div>
                                    <div class="tickets-item-info">
                                        <div class="badge badge-secondary">Closed</div>
                                        <div>ID: <strong>12345</strong></div>
                                        <div>Category: <strong>General</strong></div>
                                        <div>Date: <strong>11.08.2022</strong></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-lg-right">
                                    <a class="btn tickets-btn text-primary" href="">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="tickets-item">
                            <div class="row align-items-lg-center">
                                <div class="col-12 mb-2 mb-lg-0 col-lg-9">
                                    <div class="tickets-item-title mb-1"><a href="">Some ticket title should be placed here</a></div>
                                    <div class="tickets-item-info">
                                        <div class="badge badge-secondary">Closed</div>
                                        <div>ID: <strong>12345</strong></div>
                                        <div>Category: <strong>General</strong></div>
                                        <div>Date: <strong>11.08.2022</strong></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-lg-right">
                                    <a class="btn tickets-btn text-primary" href="">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="tickets-item">
                            <div class="row align-items-lg-center">
                                <div class="col-12 mb-2 mb-lg-0 col-lg-9">
                                    <div class="tickets-item-title mb-1"><a href="">Some ticket title should be placed here</a></div>
                                    <div class="tickets-item-info">
                                        <div class="badge badge-secondary">Closed</div>
                                        <div>ID: <strong>12345</strong></div>
                                        <div>Category: <strong>General</strong></div>
                                        <div>Date: <strong>11.08.2022</strong></div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 text-lg-right">
                                    <a class="btn tickets-btn text-primary" href="">View</a>
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
    </div>
</template>

<style scoped>

</style>
