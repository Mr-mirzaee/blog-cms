const detail = JSON.parse(localStorage.getItem('user'));

export default {
    namespaced: true,
    state: detail ? { status: { loggedIn: true }, detail } : { status: { loggedIn: false }, detail: null },
    mutations: {
        login(state, response) {
            state.loggedIn = true;
            state.token = response.data.token;
            localStorage.setItem('user', JSON.stringify(response.data));
        }
    },
    getters: {
        getDetails(state) {
            return state;
        },
        getHeader() {
            let user = JSON.parse(localStorage.getItem('user'));
            if (user && user.token) {
                return { Authorization: 'Bearer ' + user.token };
            } else {
                return {};
            }
        }
    }
};