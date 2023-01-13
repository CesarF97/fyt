import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/style-salvia.css",
                "resources/css/vendor.bundle.css",
                "resources/css/rtl.css",
                "resources/css/theme.css",
                "resources/js/app.js",
                "resources/js/jquery.bundle.js",
                "resources/js/scripts.js",
                "resources/js/charts.js",
            ],
            refresh: true,
        }),
        // vue()
    ],
});
