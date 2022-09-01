<template>
    <div class="content">
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 my-3">
                    <div class="bg-light rounded box-shadow p-3">
                        <form>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="name" class="form-label mb-1"> نام </label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="نام خود را وارد کنید">
                                    <div class="invalid-feedback d-block" id="name-error"></div>
                                </div>
                                <div class="col">
                                    <label for="family" class="form-label mb-1"> نام‌خانوادگی </label>
                                    <input type="text" class="form-control" name="family" id="family" placeholder="نام‌خانوادگی خود را وارد کنید">
                                    <div class="invalid-feedback d-block" id="family-error"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label"> موبایل </label>
                                <input type="text" class="form-control eninputs" name="mobile" id="mobile" placeholder="موبایل خود را وارد کنید">
                                <div id="mobileHelp" class="form-text"> شماره موبایل همان نام‌کاربری شما خواهد بود. </div>
                                <div class="invalid-feedback d-block" id="mobile-error"></div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"> رمز‌عبور </label>
                                <input type="password" class="form-control eninputs" name="password" id="password" placeholder="رمز‌عبور خود را وارد کنید">
                                <div class="invalid-feedback d-block" id="password-error"></div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm btn-primary" v-on:click.prevent="submit"> ثبت </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import $ from "jquery"

    export default {
        name: "Register",
        data() {
            return {
                loader: null
            }
        },
        methods : {
            submit: function () {
                let glob = this;
                glob.loader = this.$loading.show({
                    loader: "dots",
                });
                $("div[id$='-error']").text("");
                this.$http.post(process.env.VUE_APP_SERVER_URL + '/api/register', {
                        name: $("#name").val(),
                        family: $("#family").val(),
                        mobile: $("#mobile").val(),
                        password: $("#password").val()
                    })
                    .then(function (response) {
                        if(response.status === 200) {
                            window.location.href = "/login";
                        }
                        glob.loader.hide();
                    })
                    .catch(({response}) => {
                        let errors = response.data.errors;
                        for(let error in errors) {
                            $("#" + error + "-error").text(errors[error]);
                        }
                        glob.loader.hide();
                    });
            }
        }
    }
</script>

<style>

</style>

<style lang="scss">

</style>
