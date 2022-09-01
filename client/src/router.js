import Vue from 'vue'
import VueRouter from 'vue-router'
import store from './store/store'
import Main from './themes/Main'
Vue.use(VueRouter);

let themeName;
const router = new VueRouter({
    mode: 'history',
    base: process.env.VUE_APP_BASE_URL,
    routes: [
        {
            path: '',
            component: Main,
            children: [
                {
                    path: '/',
                    component: () => import(`./themes/${themeName}/pages/Index.vue`)
                },
                {
                    path: '/login',
                    component: () => import(`./themes/${themeName}/pages/Login.vue`)
                },
                {
                    path: '/register',
                    component: () => import(`./themes/${themeName}/pages/Register.vue`)
                },
                {
                    path: '/logout',
                    component: () => {
                        localStorage.removeItem('user');
                        window.location.href = "/";
                    }
                },
                {
                    path: '/profile',
                    component: () => import(`./themes/${themeName}/pages/Profile.vue`)
                },
                {
                    path: '/posts/:slug',
                    component: () => import(`./themes/${themeName}/pages/Post.vue`)
                },
                {
                    path: '/search/:text',
                    component: () => import(`./themes/${themeName}/pages/Search.vue`)
                },
            ]
        }
    ]
});

let loader;
router.beforeEach(function (to, from, next) {
    loader = Vue.$loading.show({
        loader: "dots",
    });
    themeName = store.getters["theme/getName"];
    next()
});
router.afterEach(() => {
    loader.hide();
});

export default router;