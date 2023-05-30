<script setup lang="ts">

</script>

<template>
    <div class="container">
        <div class="acc my-5 bg-light">
            <div class="acc-form">
                <div class="acc-content">
                    <h1>Customer Login</h1>
                    <p>Don't have an account? <a href="">Click here</a> to create one!</p>
                    <div class="acc-social my-4">
                        <div class="font-weight-bold text-dark mb-3">Use social account to login</div>
                        <a class="btn btn-primary" href=""><i class="icon-fb"></i></a>
                        <a class="btn btn-primary" href=""><i class="icon-gg"></i></a>
                        <a class="btn btn-primary" href=""><i class="icon-in"></i></a>
                    </div>
                    <div class="separator text-muted my-3">or Login with Email</div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <div class="position-relative">
                            <input type="password" class="form-control" id="password">
                            <i class="show-password icon-eye-off"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row justify-content-sm-between">
                            <div class="col-12 col-sm-auto mb-2 mb-sm-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="agree">
                                    <label class="custom-control-label" for="agree">Remember me</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-auto">
                                <a href="">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100">Login</button>
                    </div>
                </div>
            </div>
            <div class="acc-info bg-double">
                <div class="acc-content">
                    <div class="acc-info-title"><span>Welcome back</span> to our community</div>
                    <div class="acc-info-description lead my-4">We are here to make you and your family fun and happy, hale and hearty, fresh and active. Shop for healthy lifestyle safe and easy!</div>
                    <div class="acc-users">
                        <div class="acc-users-avatar"><img src="tmp/author-1.png" alt=""></div>
                        <div class="acc-users-avatar"><img src="tmp/author-2.png" alt=""></div>
                        <div class="acc-users-avatar"><img src="tmp/author-1.png" alt=""></div>
                        <div class="acc-users-avatar"><img src="tmp/author-2.png" alt=""></div>
                        <div class="acc-users-description">More than 17k people joined us. <br> Now it's your turn...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
