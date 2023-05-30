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
                <h1>Order #1234567890</h1>
                <div class="table-responsive my-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>QTY</th>
                            <th>Per pack</th>
                            <th class="text-right">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a class="product-table" href="">
                                    <div class="product-table-image border"><img src="tmp/pills-1.png" alt=""></div>
                                    <div class="product-table-content">Viagra Professional 20 Pills x 50mg</div>
                                </a>
                            </td>
                            <td>1</td>
                            <td>$33.59</td>
                            <td class="font-weight-bold text-right">$33.59</td>
                        </tr>
                        <tr>
                            <td>
                                <a class="product-table" href="">
                                    <div class="product-table-image border"><img src="tmp/pills-2.png" alt=""></div>
                                    <div class="product-table-content">Cialis 60 Pills x 60mg</div>
                                </a>
                            </td>
                            <td>1</td>
                            <td>$33.59</td>
                            <td class="font-weight-bold text-right">$33.59</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Order ID:</td>
                            <td colspan="3" class="text-right">1234567890</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Order date:</td>
                            <td colspan="3" class="text-right">14.07.2022 11:52 PM</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Order status:</td>
                            <td colspan="3" class="text-success text-nowrap text-right"><i class="icon-approved icon-inline icon-sm"></i> Approved</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Shipping to:</td>
                            <td colspan="3" class="text-right">Canada, Montreal, Awesome street, 7 bld, 6 apt.</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Description:</td>
                            <td colspan="3" class="text-right">Some description should be placed here</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Tracking number:</td>
                            <td colspan="3" class="text-right">1234567890 (<a href="">track</a>)</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Referral balance deduction:</td>
                            <td colspan="3" class="text-right"><a href="">No, how to get referrals?</a></td>
                        </tr>
                        <tr class="bg-light">
                            <td class="font-weight-bold">Total spent:</td>
                            <td colspan="3" class="text-right font-weight-bold">$180.90</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="">Repeat order</a>
                <a class="btn btn-light" href="">Back to orders</a>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
