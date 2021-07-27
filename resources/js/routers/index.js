import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../pages/Home.vue";
import Tumbuhan from "../pages/Tumbuhan.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home
    },
    {
        path: "/",
        name: "Tumbuhan",
        component: Tumbuhan
    }
];

const router = new VueRouter({
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;
