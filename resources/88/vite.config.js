import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

import vue from '@vitejs/plugin-vue';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/88/sass/app.scss",
                "resources/88/js/app.js"
            ],
            buildDirectory: "88",
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
            '@': '/resources/88/js',
            '~bootstrap': path.resolve('node_modules/bootstrap'),
        }
    },
    
});
