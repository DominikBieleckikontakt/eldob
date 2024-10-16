import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/js/app.js',  'public/sass/app.scss',],
            refresh: true,
        }),
    ],
    base: '/build/',
});
