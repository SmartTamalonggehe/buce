import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../pages/Home.vue";
import Tumbuhan from "../pages/Tumbuhan.vue";
import DetailTumbuhan from "../pages/DetailTumbuhan.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home
    },
    {
        path: "/tumbuhan",
        name: "Tumbuhan",
        component: Tumbuhan
    },
    {
        path: "/detailTumbuhan/:id",
        name: "DetailTumbuhan",
        component: DetailTumbuhan
    }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
