<script setup lang="ts">
import Preloader from "./components/layouts/preloader.vue";

import {useSiteStore} from "./stores/site";

const siteStore = useSiteStore()
</script>

<template>
    <preloader v-if="siteStore.is_loading"/>
    <router-view v-else/>
</template>
