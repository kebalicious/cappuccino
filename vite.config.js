// vite.config.js
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    resolve: {
        alias: {
            "vue-esm": "vue/dist/vue.esm-bundler",
        },
    },
    plugins: [
        vue({
            refresh: true,
        }),
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        port: 5173,
        strictPort: true,
    },
});
