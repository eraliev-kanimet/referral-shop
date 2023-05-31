<script setup lang="ts">

import DashboardSidebar from "../../../components/dashboard/dashboard-sidebar.vue";
</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <dashboard-sidebar/>
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
