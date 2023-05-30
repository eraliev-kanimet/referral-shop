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
                    <h1>Some ticket title should be placed here.</h1>
                    <div class="tickets-item-info">
                        <div class="badge badge-success">Open</div>
                        <div>ID: <strong>12345</strong></div>
                        <div>Category: <strong>General</strong></div>
                        <div>Date: <strong>11.08.2022</strong></div>
                    </div>
                    <div class="my-4">
                        <div class="tickets-post border rounded mb-2">
                            <div class="tickets-post-avatar"><img src="tmp/author-1.png" alt=""></div>
                            <div class="tickets-post-content">
                                <div class="tickets-post-info">
                                    <div class="tickets-post-author">You</div>
                                    <div class="tickets-post-date">15.07.2022 15:11:01</div>
                                </div>
                                <div class="tickets-post-body">Best allergy pills ever! They work great and the price is Awesome! Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            </div>
                        </div>
                        <div class="tickets-post border rounded mb-2 bg-light ml-md-5">
                            <div class="tickets-post-avatar">AD</div>
                            <div class="tickets-post-content">
                                <div class="tickets-post-info">
                                    <div class="tickets-post-author">Admin</div>
                                    <div class="tickets-post-date">15.07.2022 15:11:01</div>
                                </div>
                                <div class="tickets-post-body">Best allergy pills ever! They work great and the price is Awesome! Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <div class="container-xsmall">
                            <div class="h2">Add message</div>
                            <div class="mt-3">
                                <div class="form-group">
                                    <label for="">Your comment: <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="4" placeholder="Comment"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-3">
                                        <div class="input-group">
                                            <div class="form-control bg-light border-0 rounded"><a class="font-weight-bold" href="">some-file.pdf</a></div>
                                            <div class="input-group-append"><a class="btn" href=""><i class="icon-close icon-inline"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Upload file:</label>
                                    <div class="custom-upload">
                                        <div class="d-inline-block mb-3">
                                            <div class="border rounded d-flex align-items-center p-1 pr-5">
                                                <input type="file" class="custom-upload-input d-none">
                                                <button class="custom-upload-btn btn btn-light btn-sm mr-2">Choose file...</button>
                                                <span class="custom-upload-filename text-muted">No file choosen</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-submit">
                                <button class="btn btn-primary">Submit</button>
                                <button class="btn btn-light">Cancel</button>
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
