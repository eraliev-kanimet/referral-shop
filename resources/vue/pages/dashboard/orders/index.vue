<script setup lang="ts">

import DashboardSidebar from "../../../components/dashboard/dashboard-sidebar.vue";
</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <dashboard-sidebar/>
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
