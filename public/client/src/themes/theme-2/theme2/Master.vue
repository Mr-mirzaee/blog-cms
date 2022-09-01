<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "Master",
        components: {

        },
        beforeMount() {

        },
        mounted() {

        },
        methods : {

        }
    }
</script>

<style>
    @font-face {
        font-family: tanha;
        font-style: normal;
        font-weight: normal;
        src: url('assets/fonts/tanha/Tanha.woff') format('woff');
    }

    body {
        direction: rtl;
        text-align: right !important;
        font-family: tanha !important;
    }
</style>

<style lang="scss">
    @import "assets/plugins/tailwind/css/tailwind.min.css";
</style>
