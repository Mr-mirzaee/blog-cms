<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "Master",
        data() {
            return {
                loader: null
            }
        },
        created() {
            this.loader = this.$loading.show({
                loader: "dots",
            });
        },
        mounted() {
            this.loader.hide();
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
