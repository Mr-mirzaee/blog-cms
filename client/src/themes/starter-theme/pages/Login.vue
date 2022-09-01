<template>
    <div class="content">
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 my-3">
                    <div class="bg-light rounded box-shadow p-3">
                        <form>
                            <div class="mb-3">
                                <label for="mobile" class="form-label"> موبایل </label>
                                <input type="text" class="form-control eninputs" name="mobile" id="mobile" placeholder="موبایل خود را وارد کنید">
                                <div id="mobileHelp" class="form-text"> شما می‌توانید با شماره موبایل خود وارد شوید. </div>
                                <div class="invalid-feedback d-block" id="mobile-error"></div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"> رمز عبور </label>
                                <input type="password" class="form-control eninputs" name="password" id="password" placeholder="رمز‌عبور خود را وارد کنید">
                                <div class="invalid-feedback d-block" id="password-error"></div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-sm btn-primary" v-on:click.prevent="submit"> ورود </button>
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
        name: "Login",
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
                this.$http.post(process.env.VUE_APP_SERVER_URL + '/api/login', {
                        mobile: $("#mobile").val(),
                        password: $("#password").val()
                    })
                    .then(function (response) {
                        if(response.status === 200) {
                            glob.$store.commit('user/login', response);
                            window.location.href = "/";
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
