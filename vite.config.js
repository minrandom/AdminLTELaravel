import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/css/iss.css'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // Alias for AdminLTE to be easily accessible in the project
            'admin-lte': 'node_modules/admin-lte',
        },
    },
    build: {
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    if (/\.(ttf|woff|woff2|eot|svg)$/.test(assetInfo.name)) {
                        return 'fonts/[name][extname]';
                    }
                    return 'assets/[name][extname]';
                },
            },
        },
    },
});
