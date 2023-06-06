<script setup lang="ts">
defineProps({
    is_loading: {
        type: Boolean,
        default: false
    }
})
</script>

<template>
    <button class="btn" :disabled="is_loading" :class="{'is_loading': is_loading}">
    <span>
      <slot/>
    </span>
    </button>
</template>

<style scoped lang="scss">
.btn {
    position: relative;

    &:before {
        content: '';
        -webkit-animation-duration: 0.75s;
        -moz-animation-duration: 0.75s;
        animation-duration: 0.75s;
        -webkit-animation-iteration-count: infinite;
        -moz-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-name: rotate-forever;
        -moz-animation-name: rotate-forever;
        animation-name: rotate-forever;
        -webkit-animation-timing-function: linear;
        -moz-animation-timing-function: linear;
        animation-timing-function: linear;
        display: inline-block;
        position: absolute;
        top: 50%;
        right: 0;
        bottom: 0;
        opacity: 0;
        left: 50%;
        transform: translate(-50%);
        margin-top: -7px;
        margin-left: -7px;
        height: 15px;
        width: 15px;
        border: 3px solid #ffffff;
        border-right-color: transparent;
        border-radius: 50%;
    }

    &.is_loading {
        cursor: default;

        span {
            opacity: 0;
        }

        &:before {
            opacity: 1;
        }
    }
}

@-webkit-keyframes rotate-forever {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@-moz-keyframes rotate-forever {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

@keyframes rotate-forever {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
</style>
