<template>
    <div class="preloader-wrapper">
        <div class="preloader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <img src="../../assets/images/icon.svg" alt="Loading...">
        </div>
    </div>
</template>

<style scoped>
body {
    margin: 0;
    padding: 0;
}

.preloader-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.preloader {
    display: inline-block;
    position: relative;
}

.preloader div {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    transform: translate(-50%, -50%);
    border: 4px solid #e6edfa;
    opacity: 1;
    border-radius: 50%;
    animation: preloader 2s cubic-bezier(0, 0.2, 0.8, 1) infinite;
    z-index: -1;
}

.preloader div:nth-of-type(2) {
    animation-delay: -0.5s;
}

.preloader div:nth-of-type(3) {
    animation-delay: -1s;
}

.preloader div:nth-of-type(4) {
    animation-delay: -1.5s;
}

@keyframes preloader {
    0% {
        opacity: 0;
    }
    4.9% {
        opacity: 0;
    }
    5% {
        opacity: 1;
    }
    100% {
        width: 100%;
        height: 100%;
        opacity: 0;
    }
}
</style>
