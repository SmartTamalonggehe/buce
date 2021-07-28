window.Vue = require("vue").default;
import App from "./App.vue";
import router from "./router";
import store from "./store";

const app = new Vue({
    el: "#app",
    router,
    store,
    components: {
        App
    }
});
