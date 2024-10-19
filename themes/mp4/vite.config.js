import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

import vue from '@vitejs/plugin-vue';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                "themes/mp4/sass/app.scss",
                "themes/mp4/js/app.js"
            ],
            buildDirectory: "mp4",
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
            '@': '/themes/mp4/js',
            '~bootstrap': path.resolve('node_modules/bootstrap'),
        }
    },
    
});
