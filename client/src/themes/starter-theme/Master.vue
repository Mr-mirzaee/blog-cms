<template>
    <div id="page-container">
        <Header></Header>
        <router-view></router-view>
        <Footer></Footer>
    </div>
</template>

<script>
    require('../starter-theme/assets/plugins/bootstrap5/js/bootstrap.bundle.min');
    import Header from './sections/Header'
    import Footer from './sections/Footer'

    export default {
        name: "Master",
        components: {
            Header,
            Footer
        },
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
        font-family: vazir;
        font-style: normal;
        font-weight: normal;
        src: url('assets/fonts/vazir/Vazir-Regular.woff') format('woff');
    }

    body {
        font-family: vazir !important;
        direction: rtl;
        text-align: right;
    }

    a {
        text-decoration: none !important;
    }
</style>

<style lang="scss">
    @import "../starter-theme/assets/plugins/bootstrap5/css/bootstrap.rtl.min.css";
    @import "../starter-theme/assets/plugins/bootstrap-icons/bootstrap-icons.css";

    @import "../starter-theme/assets/css/styles";
</style>

<style scoped>
    #page-container {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    footer {
        margin-top: auto;
    }
</style>