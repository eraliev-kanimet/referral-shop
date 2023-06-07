<script setup lang="ts">
import {useUserStore} from "../../stores/user";
import {useRoute} from "vue-router";

const userStore = useUserStore()
const route = useRoute()
</script>

<template>
    <div class="dashboard-sidebar d-none d-xl-block">
        <div class="dashboard-userbar border-bottom pb-3 mb-3">
            <div class="dashboard-userbar-avatar"><img src="" alt=""></div>
            <div class="dashboard-userbar-content">
                <div class="dashboard-userbar-name">ad***@gmail.com</div>
                <div class="dashboard-userbar-links">
                    <router-link :to="{name: 'profile'}">{{ $t('common.edit_profile') }}</router-link>
                    <a href="/logout" @click.prevent="userStore.logout()">{{ $t('common.logout') }}</a>
                </div>
            </div>
        </div>
        <ul class="dashboard-nav mt-3 mb-4">
            <li class="dashboard-nav-item" :class="{active: route.name === 'dashboard'}">
                <router-link class="dashboard-nav-link" :to="{name: 'dashboard'}">
                    <i class="dashboard-nav-icon icon-dashboard"></i>{{ $t('common.dashboard') }}
                </router-link>
            </li>
            <li class="dashboard-nav-item" :class="{active: route.name === 'orders'}">
                <router-link class="dashboard-nav-link" :to="{name: 'orders'}">
                    <i class="dashboard-nav-icon icon-orders"></i>{{ $t('common.orders') }}
                </router-link>
            </li>
            <li class="dashboard-nav-item" :class="{active: route.name === 'tickets'}">
                <router-link class="dashboard-nav-link" :to="{name: 'tickets'}">
                    <i class="dashboard-nav-icon icon-tickets"></i>{{ $t('common.tickets') }}
                </router-link>
            </li>
            <li class="dashboard-nav-item" :class="{active: route.name === 'referrals'}">
                <router-link class="dashboard-nav-link" :to="{name: 'referrals'}">
                    <i class="dashboard-nav-icon icon-referrals"></i>{{ $t('common.referrals') }}
                </router-link>
            </li>
        </ul>
        <div class="alert alert-primary my-4">
            {{ $t('common.profile_verification.text1') }}
            {{ $t('common.profile_verification.text2') }}
            <a href="/profile-verification">{{ $t('common.profile_verification.text3') }}</a>
            {{ $t('common.profile_verification.text4') }}
        </div>
    </div>
</template>
