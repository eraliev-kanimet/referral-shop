<script setup lang="ts">

</script>

<template>
    <h1>{{ $t('common.profile') }}</h1>
    <div class="tabs mt-4 mb-4 mb-lg-5">
        <ul class="tabs-nav">
            <li class="active"><a href="#profile-edit">{{ $t('common.edit_profile') }}</a></li>
            <li><a href="#profile-shipay">{{ $t('common.shipping_and_payment') }}</a></li>
            <li><a href="#profile-verification">{{ $t('common.verification') }}</a></li>
        </ul>
        <div class="tabs-panels container-xsmall my-4">
            <div class="tabs-panel active" id="profile-edit">
                <div class="d-flex align-items-center mb-3">
                    <div class="dashboard-userbar-avatar mr-3">AD</div>
                    <div class="profile-avatar-form">
                        <div class="form-group mb-0">
                            <label for="">{{ $t('common.avatar') }}:</label>
                            <div class="d-flex w-100 align-items-start">
                                <div class="custom-upload w-100 pr-3">
                                    <div class="d-block">
                                        <div class="border rounded d-flex align-items-center p-1 pr-5">
                                            <input type="file" class="custom-upload-input d-none">
                                            <button class="custom-upload-btn btn btn-light btn-sm mr-2">
                                                {{ $t('common.choose_file') }}...
                                            </button>
                                            <span class="custom-upload-filename text-muted">
                                                {{ $t('common.no_file_chosen') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary px-4">{{ $t('common.upload') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">{{ $t('common.edit_email') }}:</label>
                    <input type="text" class="form-control" value="email@domain.com">
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <div class="form-group">
                            <label for="">{{ $t('common.new_password') }}:</label>
                            <div class="position-relative">
                                <input type="password" class="form-control">
                                <i class="show-password icon-eye-off"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">{{ $t('common.confirm') }}:</label>
                            <div class="position-relative">
                                <input type="password" class="form-control">
                                <i class="show-password icon-eye-off"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">{{ $t('common.phone_number') }}:</label>
                    <input type="text" class="form-control" placeholder="+1(---)-------">
                </div>
                <div class="form-group">
                    <a data-toggle="collapse" href="#verify" aria-expanded="false" aria-controls="verify">
                        {{ $t('common.send_verification_message') }}
                    </a>
                </div>
                <div class="collapse" id="verify">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="form-group">
                                <label for="">{{ $t('common.verification_number') }}:</label>
                                <input type="text" class="form-control" :placeholder="$t('common.number')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-submit">
                    <button class="btn btn-primary px-4">{{ $t('common.save') }}</button>
                </div>
            </div>
            <div class="tabs-panel" id="profile-shipay">
                <div class="mb-4 mb-lg-5">
                    <div class="h2">Shipping address</div>
                    <div class="form-group">
                        <label for="">Full name:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Country:</label>
                                <select class="custom-select">
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">State / Province:</label>
                                <select class="custom-select">
                                    <option selected>Select</option>
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
                                <label for="">City:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">ZIP / Postal code:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Address:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Apt, suite etc.:</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 mb-lg-5">
                    <div class="h2">Billing address</div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="billingAddressSame" checked>
                        <label class="custom-control-label" for="billingAddressSame" data-toggle="collapse" data-target="#billing" aria-expanded="false" aria-controls="billing">Same as billing address</label>
                    </div>
                    <div class="collapse pt-3" id="billing">
                        <div class="form-group">
                            <label for="">Full name:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Country:</label>
                                    <select class="custom-select">
                                        <option selected>Select</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">State / Province:</label>
                                    <select class="custom-select">
                                        <option selected>Select</option>
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
                                    <label for="">City:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">ZIP / Postal code:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Address:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Apt, suite etc.:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 mb-lg-5">
                    <div class="h2">Payment information</div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Add new or edit existent card:</label>
                                <select class="custom-select">
                                    <option selected>Add new</option>
                                    <option value="1">Edit **** **** **** 1234</option>
                                    <option value="2">Edit **** **** **** 5678</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="creditcard my-2">
                        <div class="creditcard-front">
                            <div class="h2">Card details</div>
                            <div class="form-group">
                                <label for="">Your card number: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control creditcard-number" placeholder="0000 0000 0000 0000" maxlength="19">
                            </div>
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-6 pr-sm-2">
                                    <div class="form-group">
                                        <label for="">Cardholder name: <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label for="">Expiry date: <span class="text-danger">*</span></label>
                                        <div class="row no-gutters">
                                            <div class="col pr-2">
                                                <select class="custom-select">
                                                    <option selected="">Month</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="custom-select">
                                                    <option selected="">Year</option>
                                                    <option value="1">2022</option>
                                                    <option value="2">2023</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="creditcard-back">
                            <div class="form-group creditcard-back-cvv">
                                <label for="">CVV: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-submit">
                    <button class="btn btn-primary px-4">{{ $t('common.save') }}</button>
                </div>
            </div>
            <div class="tabs-panel" id="profile-verification">
                <div class="my-4 my-lg-5">
                    <div class="input-group mb-4">
                        <div class="form-control bg-light border-0 rounded"><a class="font-weight-bold" href="">some-photo.jpg</a></div>
                        <div class="input-group-append"><a class="btn" href=""><i class="icon-close icon-inline"></i></a></div>
                    </div>
                    <div class="id">
                        <div class="id-preview bg-light p-3 rounded"><img src="../../assets/images/id.svg" alt=""></div>
                        <div class="id-content">
                            <p>{{ $t('common.profile_page.text1') }}</p>
                            <div class="form-group mb-0">
                                <label for="">{{ $t('common.photo_id') }}:</label>
                                <div class="custom-upload">
                                    <div class="d-inline-block mb-3">
                                        <div class="border rounded d-flex align-items-center p-1 pr-5">
                                            <input type="file" class="custom-upload-input d-none">
                                            <button class="custom-upload-btn btn btn-light btn-sm mr-2">{{ $t('common.choose_file') }}...</button>
                                            <span class="custom-upload-filename text-muted">{{ $t('common.no_file_chosen') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-submit">
                    <button class="btn btn-primary px-4">{{ $t('common.save') }}</button>
                </div>
            </div>
        </div>
    </div>
</template>
