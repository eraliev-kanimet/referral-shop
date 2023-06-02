<script setup lang="ts">

import CHeader from "../components/layouts/c-header.vue";
import Breadcrumb from "../components/layouts/breadcrumb.vue";
import CFooter from "../components/layouts/c-footer.vue";
import MobileMenu from "../components/layouts/mobile-menu.vue";
</script>

<template>
    <c-header/>
    <breadcrumb/>
    <main class="main">
        <router-view/>
    </main>
    <c-footer/>
    <mobile-menu/>
</template>

<style scoped>

</style>
