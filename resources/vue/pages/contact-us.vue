<script setup lang="ts">

</script>

<template>
    <div class="contacts pt-5">
        <div class="container">
            <div class="container-small mb-5">
                <div class="contacts-wrapper bg-light">
                    <div class="contacts-info">
                        <h1 class="text-white">Contact Information</h1>
                        <p>Ask us any questions using contact details below</p>
                        <h2 class="h3 mt-4 text-white">Customer support</h2>
                        <ul class="list-unstyled mt-3 contacts-info-list">
                            <li><img src="images/flags/flag-us.svg" alt=""><span>US: +1 (888) 243-74-06</span></li>
                            <li><img src="images/flags/flag-gb.svg" alt=""><span>GB: +44 (800) 041-87-44</span></li>
                            <li class="mt-3"><i class="icon-envelope"></i><a href="mailto:inbox@hfs-pharm.com">inbox@hfs-pharm.com</a></li>
                        </ul>
                        <h2 class="h3 mt-4 text-white">Address</h2>
                        <ul class="list-unstyled mt-3 contacts-info-list">
                            <li><i class="icon-point align-self-start"></i><span>70 Washington Square South, <br>New York, NY 10012, United States</span></li>
                        </ul>
                        <h2 class="h3 mt-4 text-white">Follow us</h2>
                        <div class="contacts-info-social mt-3">
                            <a href=""><i class="icon-fb"></i></a>
                            <a href=""><i class="icon-ig"></i></a>
                            <a href=""><i class="icon-in"></i></a>
                            <a href=""><i class="icon-tw"></i></a>
                            <a href=""><i class="icon-yt"></i></a>
                        </div>
                    </div>
                    <div class="contacts-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label>Category:</label>
                            <select class="custom-select">
                                <option selected>Select...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="question">Question:</label>
                            <textarea class="form-control" id="question" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="agree">
                                <label class="custom-control-label" for="agree">I agree to the <a class="font-weight-bold" href="">Terms and Conditions</a> and <a class="font-weight-bold" href="">Privacy Policy</a></label>
                            </div>
                        </div>
                        <button class="btn btn-primary px-5">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
