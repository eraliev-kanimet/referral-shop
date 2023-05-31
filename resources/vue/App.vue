<script setup lang="ts">

import CFooter from "./components/layouts/c-footer.vue";
import CHeader from "./components/layouts/c-header.vue";
import MobileMenu from "./components/layouts/mobile-menu.vue";
import Preloader from "./components/layouts/preloader.vue";
import Breadcrumb from "./components/layouts/breadcrumb.vue";
</script>

<template>
    <c-header/>
    <breadcrumb/>
    <main class="main">
        <router-view/>
    </main>
    <c-footer/>
    <mobile-menu/>
    <preloader v-if="false"/>
</template>
