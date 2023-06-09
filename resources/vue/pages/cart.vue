<script setup lang="ts">

</script>

<template>
    <div class="container">
        <div class="dashboard my-4 my-lg-5">
            <div class="dashboard-content">
                <div class="d-flex flex-wrap align-items-center">
                    <h1 class="m-0 mr-auto">{{ $t('common.checkout') }}</h1>
                    <div class="mr-md-3 pr-md-3 border-md border-left-0 border-bottom-0 border-top-0">
                        <a href=""><i class="icon-arrow-left icon-inline mr-1"></i>{{ $t('common.back_to_main') }}</a>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="my-1 mr-3 d-none d-md-block">{{ $t('common.secure_checkout') }}</div>
                        <div class="footer-secure mt-2 mb-0 my-md-1">
                            <img src="../assets/images/geotrust.png" srcset="../assets/images/geotrust.png 1x, ../assets/images/geotrust@2x.png 2x" alt="">
                            <img src="../assets/images/visa-verified.png" srcset="../assets/images/visa-verified.png 1x, ../assets/images/visa-verified@2x.png 2x" alt="">
                            <img src="../assets/images/ssl.png" srcset="../assets/images/ssl.png 1x, ../assets/images/ssl@2x.png 2x" alt="">
                            <img src="../assets/images/mcafee.png" srcset="../assets/images/mcafee.png 1x, ../assets/images/mcafee@2x.png 2x" alt="">
                        </div>
                    </div>
                </div>
                <div class="mb-3 mb-lg-4 mt-3">
                    <div class="m-0 px-2 py-2 px-md-4 py-md-3 bg-primary text-white h2">{{ $t('common.products') }}</div>
                    <div class="px-2 px-md-4 pt-1 pb-3 py-md-3 border border-primary border-top-0">
                        <div class="row">
                            <div class="col-12 col-lg-9">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>{{ $t('common.product') }}</th>
                                            <th>{{ $t('common.price') }}</th>
                                            <th>{{ $t('common.qty') }}</th>
                                            <th>{{ $t('common.subtotal') }}</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a class="product-table" href="">
                                                    <div class="product-table-image border d-none d-sm-flex"><img src="" alt=""></div>
                                                    <div class="product-table-content">Viagra Professional <span class="d-block d-sm-inline">20 Pills x 50mg</span></div>
                                                </a>
                                            </td>
                                            <td>$33.59</td>
                                            <td>
                                                <div class="d-flex flex-column flex-sm-row align-items-center">
                                                    <button class="btn btn-sm px-1 border order-3 order-md-1"><i class="icon-minus icon-inline icon-sm"></i></button>
                                                    <input class="table-qty mx-1 form-control form-control-sm border-0 text-center order-2" type="text" value="1">
                                                    <button class="btn btn-sm px-1 border order-1 order-md-3"><i class="icon-plus icon-inline icon-sm"></i></button>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">$33.59</td>
                                            <td><a class="text-muted" href=""><i class="icon-trash icon-inline"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>{{ $t('common.internal_balance') }}</td>
                                            <td>-$100</td>
                                            <td></td>
                                            <td><span class="font-weight-bold">-$100</span></td>
                                            <td><a class="text-muted" href=""><i class="icon-trash icon-inline"></i></a></td>
                                        </tr>
                                        <tr class="bg-light">
                                            <td colspan="3"><strong class="h3">{{ $t('common.subtotal') }}:</strong></td>
                                            <td colspan="2"><span class="h3 text-primary">$36.65</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <table class="table mb-1">
                                    <thead>
                                    <tr>
                                        <th>{{ $t('common.select_free_bonus') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-radio my-2">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">{{ $t('common.no_bonus') }}</label>
                                            </div>
                                            <div class="custom-control custom-radio my-2">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Cialis 8 Pills x 20mg</label>
                                            </div>
                                            <div class="custom-control custom-radio my-2">
                                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Viagra 8 Pills x 100mg</label>
                                            </div>
                                            <div class="custom-control custom-radio my-2">
                                                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4">Levitra 8 Pills x 10mg</label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>{{ $t('common.coupon_code') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody class="border-0">
                                    <tr>
                                        <td class="p-0 border-0">
                                            <div class="d-flex">
                                                <input type="text" class="form-control mr-2" :placeholder="$t('common.coupon_code')">
                                                <button class="btn btn-light">{{ $t('common.apply') }}</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3 my-lg-4">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 mb-lg-4">
                                <div class="m-0 px-2 py-2 px-md-4 py-md-3 bg-primary text-white h2">{{ $t('common.shipping_address') }}</div>
                                <div class="px-3 px-md-4 pt-1 pb-3 py-md-3 border border-primary border-top-0">
                                    <div class="mb-3 mt-3 mt-lg-0">
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="">{{ $t('common.full_name') }}: <span>*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="">{{ $t('common.country') }}: <span>*</span></label>
                                                    <select class="custom-select">
                                                        <option selected>{{ $t('common.select') }}</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="">{{ $t('common.state') }}: <span>*</span></label>
                                                    <select class="custom-select">
                                                        <option selected>{{ $t('common.select') }}</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="">{{ $t('common.city') }}: <span>*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="">{{ $t('common.zip') }}: <span>*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="">{{ $t('common.address') }}: <span>*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="">{{ $t('common.phone_number') }}: <span>*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="">Email: <span>*</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="h2">{{ $t('common.billing_address') }}</div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="billingAddressSame" checked>
                                            <label class="custom-control-label" for="billingAddressSame" data-toggle="collapse" data-target="#billing" aria-expanded="false" aria-controls="billing">{{ $t('common.same_billing_address') }}</label>
                                        </div>
                                        <div class="collapse pt-3" id="billing">
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">{{ $t('common.full_name') }}: <span>*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">{{ $t('common.country') }}: <span>*</span></label>
                                                        <select class="custom-select">
                                                            <option selected>{{ $t('common.select') }}</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">{{ $t('common.state') }}: <span>*</span></label>
                                                        <select class="custom-select">
                                                            <option selected>{{ $t('common.select') }}</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">{{ $t('common.city') }}: <span>*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">{{ $t('common.zip') }}: <span>*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">{{ $t('common.address') }}: <span>*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">{{ $t('common.phone_number') }}: <span>*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="">Email: <span>*</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mb-lg-4">
                                <div class="m-0 px-2 py-2 px-md-4 py-md-3 bg-primary text-white h2">{{ $t('common.shipping_options') }}</div>
                                <div class="px-3 px-md-4 pt-1 pb-3 py-md-3 border border-primary border-top-0">
                                    <div class="d-md-none">
                                        <div class="border rounded p-3 my-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio111" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio111">
                                                    <img src="../assets/images/airmail.svg" class="icon-inline" alt="">
                                                    <strong>AirMail - </strong><span class="text-primary">$12.95</span>
                                                    <small class="text-muted d-block mt-1">
                                                        <span>{{ $t('common.cart_page.text1') }}</span>
                                                        <span class="text-danger">{{ $t('common.cart_page.text2') }}</span>
                                                    </small>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 my-4">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio222" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio222">
                                                    <img src="../assets/images/ems.svg" class="icon-inline" alt="">
                                                    <strong>EMS - </strong><span class="text-primary">$12.95</span>
                                                    <small class="text-muted d-block mt-1">
                                                        <span>{{ $t('common.cart_page.text3') }}</span>
                                                        <span class="text-danger">{{ $t('common.cart_page.text4') }}</span>
                                                    </small>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-3 mt-md-0 d-none d-md-block">
                                        <label class="form-label">{{ $t('common.shipping_type') }}:</label>
                                        <select class="custom-select">
                                            <option selected="">{{ $t('common.cart_page.text5') }}</option>
                                            <option>{{ $t('common.cart_page.text6') }}</option>
                                        </select>
                                        <div class="mt-3">
                                            <div>{{ $t('common.text3') }}</div>
                                            <div class="text-danger">{{ $t('common.text4') }}</div>
                                        </div>
                                    </div>
                                    <div class="h2">{{ $t('common.shipping_insurance') }}</div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="shippingInsurance" checked>
                                        <label class="custom-control-label" for="shippingInsurance">{{ $t('common.add_insurance') }} - <strong>$6.82</strong></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mb-3 mb-lg-4">
                                <div class="m-0 px-2 py-2 px-md-4 py-md-3 bg-primary text-white h2">{{ $t('common.payment_information') }}</div>
                                <div class="px-3 px-md-4 pt-1 pb-3 py-md-3 border border-primary border-top-0">
                                    <div class="mt-3 mt-lg-0">
                                        <div class="form-group">
                                            <label for="">{{ $t('common.select_payment_type') }}:</label>
                                            <select class="custom-select payment-methods-select">
                                                <option selected value="0">{{ $t('common.pay_with_card') }}</option>
                                                <option value="1">{{ $t('common.pay_with') }} Crypto</option>
                                                <option value="2">{{ $t('common.pay_with') }} PayPal</option>
                                                <option value="3">{{ $t('common.pay_with') }} {{ $t('common.internal_balance') }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">{{ $t('common.available_payment_methods') }}:</label>
                                            <div class="footer-payment">
                                                <div><img src="../assets/images/visa.svg" alt=""></div>
                                                <div><img src="../assets/images/mastercard.svg" alt=""></div>
                                                <div><img src="../assets/images/discover.svg" alt=""></div>
                                                <div><img src="../assets/images/amex.svg" alt=""></div>
                                                <div><img src="../assets/images/sepa.svg" alt=""></div>
                                                <div><img src="../assets/images/paypal.svg" alt=""></div>
                                                <div><img src="../assets/images/bitcoin.svg" alt=""></div>
                                                <div><img src="../assets/images/tether.svg" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="payment-methods">
                                            <div class="" id="pm-0">
                                                <div class="cc">
                                                    <div class="cc-front">
                                                        <div class="cc-heading">
                                                            <div class="cc-title">{{ $t('common.card_details') }}</div>
                                                            <div class="cc-type"></div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <label class="form-label text-white">{{ $t('common.card_number') }}: <span>*</span></label>
                                                            <input type="text" class="form-control cc-number" placeholder="0000 0000 0000 0000">
                                                        </div>
                                                        <div class="row no-gutters">
                                                            <div class="col-12 col-sm-6 mb-2 mb-sm-0 pr-sm-2">
                                                                <label class="form-label text-white">{{ $t('common.cardholder_name') }}: <span>*</span></label>
                                                                <input type="text" class="form-control" placeholder="John Doe">
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <label class="form-label text-white">{{ $t('common.expiration_date') }}: <span>*</span></label>
                                                                <div class="row no-gutters">
                                                                    <div class="col-6 pr-1">
                                                                        <select class="custom-select">
                                                                            <option value="">01</option>
                                                                            <option value="">02</option>
                                                                            <option value="">03</option>
                                                                            <option value="">04</option>
                                                                            <option value="">05</option>
                                                                            <option value="">06</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-6 pl-1">
                                                                        <select class="custom-select">
                                                                            <option value="">2022</option>
                                                                            <option value="">2023</option>
                                                                            <option value="">2024</option>
                                                                            <option value="">2025</option>
                                                                            <option value="">2026</option>
                                                                            <option value="">2027</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cc-back">
                                                        <div class="cc-back-content">
                                                            <label class="form-label text-white">CVV: <span>*</span></label>
                                                            <input type="text" class="form-control" placeholder="***">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 alert alert-primary d-none" id="pm-1">{{ $t('common.alter_payment') }}</div>
                                            <div class="d-none" id="pm-3">
                                                <div class="form-group">
                                                    <label for="">{{ $t('common.internal_balance') }}</label>
                                                    <input type="text" class="form-control" style="width: 120px;" value="$87" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button class="btn btn-secondary px-5">{{ $t('common.complete_order') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
