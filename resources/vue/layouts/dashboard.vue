<script setup lang="ts">

import CHeader from "../components/layouts/c-header.vue";
import Breadcrumb from "../components/layouts/breadcrumb.vue";
import CFooter from "../components/layouts/c-footer.vue";
import MobileMenu from "../components/layouts/mobile-menu.vue";
import DashboardSidebar from "../components/dashboard/dashboard-sidebar.vue";
import CallbackForm from "../components/site/callback-form.vue";
</script>

<template>
    <c-header/>
    <breadcrumb/>
    <main class="main">
        <div class="container">
            <div class="dashboard my-4 my-lg-5">
                <dashboard-sidebar/>
                <div class="dashboard-content">
                    <router-view/>
                </div>
            </div>
        </div>
    </main>
    <c-footer/>
    <mobile-menu/>
    <callback-form/>
</template>
