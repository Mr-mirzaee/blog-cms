export default {
    namespaced: true,
    state: {
        name: null
    },
    mutations: {
        setTheme(state, theme) {
            state.name = theme;
        }
    },
    getters: {
        getName(state) {
            return state.name;
        }
    }
};