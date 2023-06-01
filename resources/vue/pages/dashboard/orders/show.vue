<script setup lang="ts">

</script>

<template>
    <h1>Order #1234567890</h1>
    <div class="table-responsive my-3">
        <table class="table">
            <thead>
            <tr>
                <th>Product</th>
                <th>QTY</th>
                <th>Per pack</th>
                <th class="text-right">Total</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a class="product-table" href="">
                        <div class="product-table-image border"><img src="tmp/pills-2.png" alt=""></div>
                        <div class="product-table-content">Cialis 60 Pills x 60mg</div>
                    </a>
                </td>
                <td>1</td>
                <td>$33.59</td>
                <td class="font-weight-bold text-right">$33.59</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Order ID:</td>
                <td colspan="3" class="text-right">1234567890</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Order date:</td>
                <td colspan="3" class="text-right">14.07.2022 11:52 PM</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Order status:</td>
                <td colspan="3" class="text-success text-nowrap text-right"><i class="icon-approved icon-inline icon-sm"></i> Approved</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Shipping to:</td>
                <td colspan="3" class="text-right">Canada, Montreal, Awesome street, 7 bld, 6 apt.</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Description:</td>
                <td colspan="3" class="text-right">Some description should be placed here</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Tracking number:</td>
                <td colspan="3" class="text-right">1234567890 (<a href="">track</a>)</td>
            </tr>
            <tr>
                <td class="font-weight-bold">Referral balance deduction:</td>
                <td colspan="3" class="text-right"><a href="">No, how to get referrals?</a></td>
            </tr>
            <tr class="bg-light">
                <td class="font-weight-bold">Total spent:</td>
                <td colspan="3" class="text-right font-weight-bold">$180.90</td>
            </tr>
            </tbody>
        </table>
    </div>
    <a class="btn btn-primary" href="">Repeat order</a>
    <a class="btn btn-light" href="">Back to orders</a>
</template>
