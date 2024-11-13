import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

import vue from '@vitejs/plugin-vue';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                "themes/tehran/sass/app.scss",
                "themes/tehran/js/app.js"
            ],
            buildDirectory: "tehran",
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
    resolve: {
        alias: {
            '@': '/themes/tehran/js',
            '~bootstrap': path.resolve('node_modules/bootstrap'),
        }
    },
    
});
