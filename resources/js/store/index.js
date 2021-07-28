import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        tumbuhan: []
    },
    mutations: {
        setTumbuhan: (state, tumbuhan) => {
            state.tumbuhan = tumbuhan.data;
        }
    },
    actions: {
        async setTumbuhan({ commit }) {
            const res = await axios.get(`/api/tumbuhan`);
            commit("setTumbuhan", res.data);
        }
    },
    getters: {
        getTumbuhan: state => state.tumbuhan
    },
    modules: {}
});
