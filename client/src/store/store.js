import Vue from 'vue'
import Vuex from 'vuex'

import theme from './theme'
import user from './user'

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {
        'theme': theme,
        'user': user
    },
});

export default store;
