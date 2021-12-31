import Vue from "vue";
import Vuex from "vuex";
import axios from "axios";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        tumbuhan: [],
        lokasi: [],
        totalBagian: [],
        detailTumbuhan: [],
        loading: false
    },
    mutations: {
        setTumbuhan: (state, tumbuhan) => {
            state.tumbuhan = tumbuhan.data;
        },
        setDetailTumbuhan: (state, detailTumbuhan) => {
            state.detailTumbuhan = detailTumbuhan;
            state.loading = true;
        },
        setLokasi: (state, lokasi) => {
            state.lokasi = lokasi;
            state.loading = true;
        },
        setTotalBagian: (state, totalBagian) => {
            state.totalBagian = totalBagian;
        }
    },
    actions: {
        async setTumbuhan({ commit }) {
            const res = await axios.get(`/api/tumbuhan`);
            commit("setTumbuhan", res.data);
        },
        async setLokasi({ commit }) {
            const res = await axios.get(`/api/lokasi`);
            commit("setLokasi", res.data);
        },
        async setTotalBagian({ commit }) {
            const res = await axios.get(`/api/totalBagian`);
            commit("setTotalBagian", res.data);
        },
        async setDetailTumbuhan({ commit }, id) {
            const res = await axios.get(`/api/detailTumbuhan/${id}`);
            commit("setDetailTumbuhan", res.data);
        }
    },
    getters: {
        getTumbuhan: state => state.tumbuhan,
        getLokasi: state => state.lokasi,
        getTotalBagian: state => state.totalBagian,
        getDetailTumbuhan: state => state.detailTumbuhan
    },
    modules: {}
});
