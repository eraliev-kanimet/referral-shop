<script setup lang="ts">

</script>

<template>
    <div class="dashboard-stats mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <div class="col mb-3 mb-lg-0">
                <div class="dashboard-stats-item bg-primary">
                    <div class="dashboard-stats-icon text-primary"><i class="icon-referrals"></i></div>
                    <div class="dashboard-stats-content">
                        <div class="dashboard-stats-title">{{ $t('common.referrals') }}</div>
                        <div class="dashboard-stats-num">23</div>
                    </div>
                </div>
            </div>
            <div class="col mb-3 mb-lg-0">
                <div class="dashboard-stats-item">
                    <div class="dashboard-stats-icon"><i class="icon-wallet"></i></div>
                    <div class="dashboard-stats-content">
                        <div class="dashboard-stats-title">{{ $t('common.total_earnings') }}</div>
                        <div class="dashboard-stats-num">$380.90</div>
                    </div>
                </div>
            </div>
            <div class="col mb-3 mb-lg-0">
                <div class="dashboard-stats-item bg-info">
                    <div class="dashboard-stats-icon text-info"><i class="icon-earnings"></i></div>
                    <div class="dashboard-stats-content">
                        <div class="dashboard-stats-title">{{ $t('common.available') }}</div>
                        <div class="dashboard-stats-num">$280.90</div>
                    </div>
                </div>
            </div>
            <div class="col mb-3 mb-lg-0">
                <div class="dashboard-stats-item bg-secondary">
                    <div class="dashboard-stats-icon text-secondary"><i class="icon-spent"></i></div>
                    <div class="dashboard-stats-content">
                        <div class="dashboard-stats-title">{{ $t('common.spent') }}</div>
                        <div class="dashboard-stats-num">$0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
