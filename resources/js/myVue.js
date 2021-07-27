window.Vue = require("vue").default;
import App from "./App.vue";
import router from "./routers/index";

const app = new Vue({
    el: "#app",
    router,
    components: {
        App
    }
});
