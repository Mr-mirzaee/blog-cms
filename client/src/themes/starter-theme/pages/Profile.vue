<template>
    <div class="content">
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 my-3">
                    <div class="bg-light rounded box-shadow p-3">
                        <div class="text-center">
                            <h4> پروفایل </h4>
                        </div>
                        <p class="m-3">
                            <b> نام: </b> <span> {{ user.detail.name }} </span>
                        </p>
                        <p class="m-3">
                            <b> نام‌خانوادگی: </b> <span> {{ user.detail.family }} </span>
                        </p>
                        <p class="m-3">
                            <b> موبایل: </b> <span> {{ user.detail.mobile }} </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "Profile",
        data() {
            return {
                user: this.$store.getters["user/getDetails"]
            }
        }
    }
</script>

<style>

</style>

<style lang="scss">

</style>
