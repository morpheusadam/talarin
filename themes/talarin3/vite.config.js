import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

import vue from '@vitejs/plugin-vue';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                "themes/talarin3/sass/app.scss",
                "themes/talarin3/js/app.js"
            ],
            buildDirectory: "talarin3",
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
            '@': '/themes/talarin3/js',
            '~bootstrap': path.resolve('node_modules/bootstrap'),
        }
    },
    
});
