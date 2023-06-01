<script setup lang="ts">

import Preloader from "./components/layouts/preloader.vue";
</script>

<template>
    <preloader v-if="false"/>
    <router-view v-else/>
</template>
