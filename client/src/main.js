import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false;

import axios from "axios";
Vue.prototype.$http = axios;

import store from './store/store'
let themeName = store.getters["theme/getName"];
let themeLoader = new Promise((resolve, reject) => {
    if(themeName === null) {
        axios.get(process.env.VUE_APP_SERVER_URL + '/api/base')
            .then(function (response) {
                store.commit('theme/setTheme', response.data.data.slug);
                resolve();
            })
            .catch(function () {
                reject('Fail To Load Site');
            });
    }
});

import router from './router'

import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/vue-loading.css';
const custom = Vue.extend({
    template: `<div class="spinner loading-spinner"></div>`
});
Vue.component('custom-loader', custom);
Vue.use(Loading, {
    color: '#000000',
    width: 64,
    height: 64,
    backgroundColor: '#ffffff',
    opacity: 0.5,
    zIndex: 999
}, {
    default: (new Vue()).$createElement('custom-loader')
});

Vue.component('pagination', require('laravel-vue-pagination'));

themeLoader.then(
    function() {
        new Vue({
            router,
            store,
            render: h => h(App),
        }).$mount('#app');
    },
    function(error) {
        console.log(error);
    }
);