<script setup lang="ts">

</script>

<template>
    <div class="offcanvas offcanvas-nav">
        <div class="offcanvas-title bg-light">Main menu</div>
        <i class="offcanvas-close icon-close"></i>
        <div class="offcanvas-content">
            <ul class="offcanvas-menu">
                <li class="active"><a href="">Home</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Articles</a></li>
                <li><a href="">Video</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Policy</a></li>
                <li><a href="">Testimonials</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </div>
        <div class="offcanvas-bottom">
            <ul class="offcanvas-menu offcanvas-user">
                <li><a href="">Log in</a></li>
                <li><a href="">Sign up</a></li>
            </ul>
            <div class="offcanvas-currency">
                <label>Select currency:</label>
                <select class="form-control">
                    <option>USD</option>
                    <option>AUD</option>
                    <option>BGN</option>
                    <option>CAD</option>
                    <option>CHF</option>
                </select>
            </div>
            <div class="offcanvas-lang">
                <label>Select language:</label>
                <div class="offcanvas-flags">
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                    <a href=""><img src="" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</template>
