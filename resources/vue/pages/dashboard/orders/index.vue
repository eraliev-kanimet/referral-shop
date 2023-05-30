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
                <h1>Orders</h1>
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
