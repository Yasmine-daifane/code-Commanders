import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
             'resources/css/app.css',
             'resources/css/form.css',
             'resources/js/app.js',
             'resources/js/form.js'
            ],
            refresh: true,
        }),
    ],
});
