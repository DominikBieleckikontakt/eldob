import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js',  'public/sass/app.scss',],
            refresh: true,
        }),
    ],
    base: '/build/',
});
