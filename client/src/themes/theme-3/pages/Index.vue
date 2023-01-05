<template>
    <div class="overflow-x-hidden">
        <Header></Header>

        <div class="text-center py-20 md:py-40 relative custom-bgc">
            <svg class="absolute custom-hero-svg center hidden w-screen max-w-3xl -mt-64 -ml-12 md:block"
                 viewBox="0 0 818 815" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="c">
                        <stop stop-color="#E614F2" offset="0%" />
                        <stop stop-color="#FC3832" offset="100%" />
                    </linearGradient>
                    <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="f">
                        <stop stop-color="#657DE9" offset="0%" />
                        <stop stop-color="#1C0FD7" offset="100%" />
                    </linearGradient>
                    <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                            id="a">
                        <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                        <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" in="shadowBlurOuter1" />
                    </filter>
                    <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                            id="d">
                        <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                        <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" in="shadowBlurOuter1" />
                    </filter>
                    <path
                            d="M160.52 108.243h497.445c17.83 0 24.296 1.856 30.814 5.342 6.519 3.486 11.635 8.602 15.12 15.12 3.487 6.52 5.344 12.985 5.344 30.815v497.445c0 17.83-1.857 24.296-5.343 30.814-3.486 6.519-8.602 11.635-15.12 15.12-6.52 3.487-12.985 5.344-30.815 5.344H160.52c-17.83 0-24.296-1.857-30.814-5.343-6.519-3.486-11.635-8.602-15.12-15.12-3.487-6.52-5.343-12.985-5.343-30.815V159.52c0-17.83 1.856-24.296 5.342-30.814 3.486-6.519 8.602-11.635 15.12-15.12 6.52-3.487 12.985-5.343 30.815-5.343z"
                            id="b" />
                    <path
                            d="M159.107 107.829H656.55c17.83 0 24.296 1.856 30.815 5.342 6.518 3.487 11.634 8.602 15.12 15.12 3.486 6.52 5.343 12.985 5.343 30.816V656.55c0 17.83-1.857 24.296-5.343 30.815-3.486 6.518-8.602 11.634-15.12 15.12-6.519 3.486-12.985 5.343-30.815 5.343H159.107c-17.83 0-24.297-1.857-30.815-5.343-6.519-3.486-11.634-8.602-15.12-15.12-3.487-6.519-5.343-12.985-5.343-30.815V159.107c0-17.83 1.856-24.297 5.342-30.815 3.487-6.519 8.602-11.634 15.12-15.12 6.52-3.487 12.985-5.343 30.816-5.343z"
                            id="e" />
                </defs>
                <g fill="none" fill-rule="evenodd" opacity=".9">
                    <g transform="rotate(65 416.452 409.167)">
                        <use fill="#000" filter="url(#a)" xlink:href="#b" />
                        <use fill="url(#c)" xlink:href="#b" />
                    </g>
                    <g transform="rotate(29 421.929 414.496)">
                        <use fill="#000" filter="url(#d)" xlink:href="#e" />
                        <use fill="url(#f)" xlink:href="#e" />
                    </g>
                </g>
            </svg>
            <h1 class="relative mb-4 text-3xl leading-tight text-gray-900 md:text-white sm:text-6xl xl:mb-8">
                قالب سفارشی
            </h1>
            <p class="relative pr-0 mb-8 text-base text-gray-600 md:text-white sm:text-lg xl:text-xl">
                قالب سفارشی پروژه دوره لاراول کوئرا کالج
            </p>
            <a href="/blog" class="relative self-start inline-block w-auto px-7 py-3 mx-auto mt-0 text-base font-bold text-white bg-purple-500 rounded-md shadow-xl sm:mt-1 fold-bold lg:mx-0">
                مشاهده بلاگ
            </a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#efefef" fill-opacity="1" d="M0,288L80,261.3C160,235,320,181,480,181.3C640,181,800,235,960,234.7C1120,235,1280,181,1360,154.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
        </svg>

        <div class="relative w-full py-10 md:py-16 lg:pt-10 xl:pt-10">
            <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
                <h2 class="my-5 text-4xl tracking-tight text-indigo-500"> امکانات پروژه </h2>
                <div class="flex flex-col w-full mt-0 lg:flex-row sm:mt-10 lg:mt-10">
                    <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                        <div class="relative flex flex-col items-center justify-center w-full h-full p-20 rounded-lg">
                            <svg class="absolute w-full h-full text-gray-100" fill="#efefef" viewBox="0 0 377 340"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path
                                                d="M342.8 3.7c24.7 14 18.1 75 22.1 124s18.6 85.8 8.7 114.2c-9.9 28.4-44.4 48.3-76.4 62.4-32 14.1-61.6 22.4-95.9 28.9-34.3 6.5-73.3 11.1-95.5-6.2-22.2-17.2-27.6-56.5-47.2-96C38.9 191.4 5 151.5.9 108.2-3.1 64.8 22.7 18 61.8 8.7c39.2-9.2 91.7 19 146 16.6 54.2-2.4 110.3-35.6 135-21.6z" />
                                    </g>
                                </g>
                            </svg>
                            <img src="../assets/images/theme.svg" width="70" class="z-30" alt="theme">
                            <h4 class="relative mt-6 text-lg font-bold"> ساخت قالب دلخواه </h4>
                            <p class="relative mt-2 text-base text-center text-gray-600">
                                امکان آپلود قالب‌های دلخواه همانند وردپرس
                            </p>
                        </div>
                    </div>

                    <div class="w-full max-w-md p-4 mx-auto mb-0 sm:mb-16 lg:mb-0 lg:w-1/3">
                        <div class="relative flex flex-col items-center justify-center w-full h-full p-20 rounded-lg">
                            <svg class="absolute w-full h-full text-gray-100" fill="#efefef" viewBox="0 0 358 372"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path
                                                d="M315.7 6.5c30.2 15.1 42.6 61.8 41.5 102.5-1.1 40.6-15.7 75.2-24.3 114.8-8.7 39.7-11.3 84.3-34.3 107.2-23 22.9-66.3 23.9-114.5 30.7-48.2 6.7-101.3 19.1-123.2-4.1-21.8-23.2-12.5-82.1-21.6-130.2C30.2 179.3 2.6 141.9.7 102c-2-39.9 21.7-82.2 57.4-95.6 35.7-13.5 83.3 2.1 131.2 1.7 47.9-.4 96.1-16.8 126.4-1.6z" />
                                    </g>
                                </g>
                            </svg>
                            <img src="../assets/images/admin.svg" width="70" class="z-30" alt="theme">
                            <h4 class="relative mt-6 text-lg font-bold"> پنل ادمین </h4>
                            <p class="relative mt-2 text-base text-center text-gray-600">
                                پنل ادمین با تمامی ویژگی‌ها از جمله مدیریت پست‌ها، دسته‌بندی‌ها و ...
                            </p>
                        </div>
                    </div>

                    <div class="w-full max-w-md p-4 mx-auto mb-16 lg:mb-0 lg:w-1/3">
                        <div class="relative flex flex-col items-center justify-center w-full h-full p-20 rounded-lg">
                            <svg class="absolute w-full h-full text-gray-100" fill="#efefef" viewBox="0 0 378 410"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path
                                                d="M305.9 14.4c23.8 24.6 16.3 84.9 26.6 135.1 10.4 50.2 38.6 90.3 43.7 137.8 5.1 47.5-12.8 102.4-50.7 117.4-37.9 15.1-95.7-9.8-151.7-12.2-56.1-2.5-110.3 17.6-130-3.4-19.7-20.9-4.7-82.9-11.5-131.2C25.5 209.5-3 174.7 1.2 147c4.2-27.7 41-48.3 75-69.6C110.1 56.1 141 34.1 184 17.5c43.1-16.6 98.1-27.7 121.9-3.1z" />
                                    </g>
                                </g>
                            </svg>
                            <img src="../assets/images/tech.svg" width="70" class="z-30" alt="theme">
                            <h4 class="relative mt-6 text-lg font-bold"> تکنولوژی </h4>
                            <p class="relative mt-2 text-base text-center text-gray-600">
                                پیاده‌سازی شده با لاراول و Vue.js
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative w-full custom-bgc py-10">
            <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
                <h2 class="my-5 text-4xl tracking-tight text-indigo-500"> قالب‌ها </h2>
                <div class="flex flex-col w-full mt-0 lg:flex-row">
                    <div class="w-full example-3d">
                        <swiper class="swiper" :options="swiperOption">
                            <swiper-slide>
                                <img src="../assets/images/screenshot.png" alt="theme">
                            </swiper-slide>
                            <swiper-slide>
                                <img src="../assets/images/screenshot-1.png" alt="theme">
                            </swiper-slide>
                            <swiper-slide>
                                <img src="../assets/images/screenshot-2.png" alt="theme">
                            </swiper-slide>
                            <div class="swiper-pagination" slot="pagination"></div>
                        </swiper>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center w-full py-10 border-t border-gray-200">
            <div class="max-w-6xl mx-auto">
                <div class="flex-col items-center ">
                    <div class="flex flex-col items-center justify-center w-full h-full max-w-2xl mx-auto text-center">
                        <p class="my-5 text-4xl tracking-tight text-indigo-500">
                            بلاگ
                        </p>
                    </div>
                    <div class="flex flex-col items-center justify-center max-w-2xl py-1 mx-auto xl:flex-row xl:max-w-full">
                        <div class="w-full">
                            <div class="bg-light rounded box-shadow" v-for="post in posts.data" v-bind:key="post.id">
                                <IndexPostComponent :post="post"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <Footer :categories="categories"></Footer>
    </div>
</template>

<script>
    import Header from "../sections/Header"
    import Footer from "../sections/Footer"
    import IndexPostComponent from "../components/IndexPostComponent";
    import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
    import 'swiper/css/swiper.css'

    export default {
        name: "Index",
        components: {
            Header,
            Footer,
            IndexPostComponent,
            Swiper,
            SwiperSlide
        },
        data() {
            return {
                postsCount: null,
                posts: {},
                categories: {},
                swiperOption: {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    coverflowEffect: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows : true
                    },
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    }
                }
            }
        },
        mounted() {
            this.getPosts();
            this.getCategories();
        },
        computed: {
            swiper() {
                return this.$refs.mySwiper.$swiper
            }
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
    .custom-hero-svg {
        top: 8rem;
        left: 49%;
        transform: translateX(-42%);
    }

    .example-3d {
        width: 100%;
        height: 400px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper {
        height: 100%;
        width: 100%;

        .swiper-slide {
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            height: 300px;
            text-align: center;
            font-weight: bold;
            font-size: 30 * 2;
            background-color: #f3f4f6;
            background-position: center;
            background-size: cover;
            color: white;
        }

        .swiper-pagination {
            .swiper-pagination-bullet.swiper-pagination-bullet-active {
                background-color: white;
            }
        }
    }

    .custom-bgc {
        background-color: #efefef;
    }
</style>
