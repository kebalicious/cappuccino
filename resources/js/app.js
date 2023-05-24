import { createApp } from "vue-esm";
import "../css/app.css";

import Header from "./components/includes/Header.vue";
import Footer from "./components/includes/Footer.vue";
import Index from "./components/public/Index.vue";

const app = createApp({
    components: {
        Header,
        Footer,
        Index,
    },
});

app.mount("#app");
