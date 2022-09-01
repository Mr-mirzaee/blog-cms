<template>
    <div class="content">
        <section class="container">
            <div class="row">
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

                <aside class="col-md-4 my-3">
                    <div class="bg-light rounded box-shadow p-4 pb-3 mb-3">
                        <div class="text-center">
                            <h4 class="font-italic"> دسته‌بندی </h4>
                        </div>
                        <ol class="list-unstyled mb-0 pr-0">
                            <li class="my-2" v-for="category in categories" v-bind:key="category.id">
                                <a :href="'/search/' + category.name"> <span class="fs-5"> {{ category.name }} </span> </a>
                            </li>
                        </ol>
                    </div>
                </aside>
            </div>
        </section>
    </div>
</template>

<script>
    import IndexPostComponent from "../components/IndexPostComponent";

    export default {
        name: "Index",
        components: {
            IndexPostComponent
        },
        data() {
            return {
                postsCount: null,
                posts: {},
                categories: {}
            }
        },
        mounted() {
            this.getPosts();
            this.getCategories();
        },
        methods : {
            getPosts(page = 1) {
                this.$http.get(process.env.VUE_APP_SERVER_URL + '/api/posts?page=' + page)
                    .then(response => {
                        this.postsCount = response.data.meta.total;
                        this.posts = response.data;
                    });
            },
            async getCategories() {
                let glob = this;
                await this.$http.get(process.env.VUE_APP_SERVER_URL + '/api/categories')
                    .then(function (response) {
                        glob.categories = response.data.data;
                    })
                    .catch(function (error) {
                        console.error(error);
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
        display: block;
        font-size: 32px;
        font-weight: 700;
        color: #666;
    }

    .sr-only {
        display: none;
    }
</style>
