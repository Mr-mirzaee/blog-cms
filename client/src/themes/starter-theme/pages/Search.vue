<template>
    <div class="content">
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="counter-box box-shadow my-4">
                        <p class="m-0"> {{ text }} </p>
                        <hr class="hr">
                        <p class="m-0"> <span class="counter"> {{ postsCount }} </span> پست یافت شد </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 my-3">
                    <div class="bg-light rounded box-shadow" v-for="post in posts.data" v-bind:key="post.id">
                        <IndexPostComponent :post="post"/>
                        <p class="my-3"></p>
                    </div>
                    <div class="mt-4">
                        <pagination :data="posts" :limit="0" @pagination-change-page="getPosts" align="center">
                            <span slot="prev-nav"> قبلی </span>
                            <span slot="next-nav"> بعدی </span>
                        </pagination>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import IndexPostComponent from "../components/IndexPostComponent";

    export default {
        name: "Search",
        components: {
            IndexPostComponent
        },
        data() {
            return {
                text: this.$route.params.text,
                postsCount: null,
                posts: {}
            }
        },
        mounted() {
            this.getPosts();
        },
        methods : {
            getPosts(page = 1) {
                this.$http.get(process.env.VUE_APP_SERVER_URL + '/api/search/' + this.text + '?page=' + page)
                    .then(response => {
                        this.postsCount = response.data.meta.total;
                        this.posts = response.data;
                    });
            }
        }
    }
</script>

<style>

</style>

<style lang="scss">
    .counter-box {
        display: block;
        background: #f6f6f6;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
    }

    .counter-box p {
        margin: 5px 0 0;
        padding: 0;
        color: #909090;
        font-size: 18px;
        font-weight: 500;

    }

    .counter {
        display: inline-block;
        font-weight: 700;
        color: #666;
    }

    .sr-only {
        display: none;
    }

    .hr {
        width: 50%;
        margin: 10px auto;
    }
</style>
