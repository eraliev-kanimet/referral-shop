<script setup lang="ts">

import DashboardStatistics from "../../components/dashboard/dashboard-statistics.vue";
</script>

<template>
    <h1>Referrals</h1>
    <div class="my-4 alert alert-primary">Your referral ID is: <strong class="text-primary">12345</strong></div>
    <p>Use referral links to recommend our website and earn <strong class="text-secondary">15% comission</strong> from all their orders.</p>
    <div class="tabs mb-4 mb-lg-5">
        <ul class="tabs-nav">
            <li class="active"><a href="#referral-link">Copy link</a></li>
            <li><a href="#referral-email">Send email</a></li>
            <li><a href="#referral-sms">Send SMS</a></li>
            <li><a href="#referral-qr">Get QR code</a></li>
        </ul>
        <div class="tabs-panels container-xsmall my-4">
            <div class="tabs-panel active" id="referral-link">
                <div class="form-group">
                    <label for="">Referral link:</label>
                    <div class="d-flex">
                        <input type="text" class="form-control mr-2" value="https://domain.com/join/?ref=1">
                        <button class="btn btn-primary px-2"><span class="icon-copy icon-inline"></span></button>
                    </div>
                </div>
            </div>
            <div class="tabs-panel" id="referral-email">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Send to:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Subject:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Body:</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="dashboard-submit">
                    <button class="btn btn-primary px-4">Send</button>
                </div>
            </div>
            <div class="tabs-panel" id="referral-sms">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Send to:</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Body:</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="dashboard-submit">
                    <button class="btn btn-primary px-4">Send</button>
                </div>
            </div>
            <div class="tabs-panel" id="referral-qr">
                <div class="qr d-flex">
                    <div class="qr-image p-3 mr-4 border rounded"><img src="../../assets/tmp/QR.png" alt=""></div>
                    <div class="qr-links">
                        <label for="">Download</label>
                        <div class="d-flex">
                            <a class="mr-2" href=""><img src="../../assets/images/ext-png.png" alt=""></a>
                            <a class="mr-2" href=""><img src="../../assets/images/ext-pdf.png" alt=""></a>
                            <a class="mr-2" href=""><img src="../../assets/images/ext-svg.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-4 mb-lg-5">
        <div class="h1">Referral statistics</div>
        <dashboard-statistics/>
    </div>
    <div class="table-responsive my-3">
        <table class="table">
            <thead>
            <tr>
                <th>Date</th>
                <th>Event</th>
                <th class="text-right">Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-nowrap">14.07.2022</td>
                <td class="text-nowrap">Referral order</td>
                <td class="font-weight-bold text-right">+$180.90</td>
            </tr>
            </tbody>
        </table>
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
</template>
