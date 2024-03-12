import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/katra.css', 'resources/js/katra.js'],
            refresh: true,
        }),
    ],
});