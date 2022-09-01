<template>
    <div>
        <Header></Header>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-12 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"> تم سفارشی </h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                        تم کاملا سفارشی برای پروژه
                    </p>
                </div>
                <div class="flex flex-wrap -m-4 text-center justify-center">
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-500 w-12 h-12 mb-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900"> {{ postsCount }} </h2>
                            <p class="leading-relaxed"> پست </p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-500 w-12 h-12 mb-3 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900"> {{ categories.length }} </h2>
                            <p class="leading-relaxed"> دسته‌بندی </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="flex flex-col justify-center sm:py-12">
            <div class="relative sm:max-w-xl sm:mx-auto">
                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <ul class="list-disc space-y-2">
                                    <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                                        <p class="mr-2">
                                            امکان ایجاد قالب‌های مختلف
                                        </p>
                                    </li>
                                    <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                                        <p class="mr-2">
                                            این قالب با tailwind ساخته شده است
                                        </p>
                                    </li>
                                    <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                                        <p class="mr-2">
                                            برای تغییر به پنل ادمین مراجعه نمایید
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                                <p>
                                    <a href="https://tailwindcss.com/docs" class="text-cyan-600 hover:text-cyan-700"> مستندات </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
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

        <Footer :categories="categories"></Footer>
    </div>
</template>

<script>
    import Header from "../sections/Header"
    import Footer from "../sections/Footer"
    import IndexPostComponent from "../components/IndexPostComponent";

    export default {
        name: "Index",
        components: {
            Header,
            Footer,
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

</style>
