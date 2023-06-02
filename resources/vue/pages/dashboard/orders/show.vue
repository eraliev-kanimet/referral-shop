<script setup lang="ts">

</script>

<template>
    <h1>{{ $t('common.order') }} #1234567890</h1>
    <div class="table-responsive my-3">
        <table class="table">
            <thead>
            <tr>
                <th>{{ $t('common.product') }}</th>
                <th>{{ $t('common.per_pack') }}</th>
                <th>{{ $t('common.qty') }}</th>
                <th class="text-right">{{ $t('common.total') }}</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a class="product-table" href="">
                        <div class="product-table-image border"><img src="../../../assets/tmp/pills-2.png" alt=""></div>
                        <div class="product-table-content">Cialis 60 Pills x 60mg</div>
                    </a>
                </td>
                <td>1</td>
                <td>$33.59</td>
                <td class="font-weight-bold text-right">$33.59</td>
            </tr>
            <tr>
                <td class="font-weight-bold">{{ $t('common.order') }} ID:</td>
                <td colspan="3" class="text-right">1234567890</td>
            </tr>
            <tr>
                <td class="font-weight-bold">{{ $t('common.order_date') }}:</td>
                <td colspan="3" class="text-right">14.07.2022 11:52 PM</td>
            </tr>
            <tr>
                <td class="font-weight-bold">{{ $t('common.order_status') }}:</td>
                <td colspan="3" class="text-success text-nowrap text-right"><i class="icon-approved icon-inline icon-sm"></i> {{ $t('common.approved') }}</td>
            </tr>
            <tr>
                <td class="font-weight-bold">{{ $t('common.shipping_to') }}:</td>
                <td colspan="3" class="text-right">Canada, Montreal, Awesome street, 7 bld, 6 apt.</td>
            </tr>
            <tr>
                <td class="font-weight-bold">{{ $t('common.description') }}:</td>
                <td colspan="3" class="text-right"></td>
            </tr>
            <tr>
                <td class="font-weight-bold">{{ $t('common.tracking_number') }}:</td>
                <td colspan="3" class="text-right">1234567890 (<a href="">{{ $t('common.track') }}</a>)</td>
            </tr>
            <tr>
                <td class="font-weight-bold">{{ $t('common.orders_page.text2') }}:</td>
                <td colspan="3" class="text-right"><a href="">{{ $t('common.orders_page.text1') }}</a></td>
            </tr>
            <tr class="bg-light">
                <td class="font-weight-bold">{{ $t('common.total_spent') }}:</td>
                <td colspan="3" class="text-right font-weight-bold">$180.90</td>
            </tr>
            </tbody>
        </table>
    </div>
    <a class="btn btn-primary" href="">{{ $t('common.back_to_orders') }}</a>
    <a class="btn btn-light" href="">{{ $t('common.repeat_order') }}</a>
</template>
